<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class DonacionesController extends Controller
{
	public function index(Request $request){
		return view('dashboard.donaciones.history');
	}


	public function getDonacionesByUser(Request $request){
		$columns = array(
			0 =>'concept_id',
			1 =>'detail',
			2 =>'amount_cop',
			3=> 'status',
			4 => 'created_at',

		);

        //$username=$request->username;
		$user_id=Auth::user()->id;
		$query=DB::table('dbpcn_donaciones as tn')
		->select('tn.id', 'co.name', 'tn.concept_id', 'tn.amount_cop', 'tn.detail', 'tn.status', 'tn.created_at')
		->join('general_concepts as co', 'co.id', '=', 'tn.concept_id')
		->where('tn.user_id', $user_id)
		->where('tn.type', 'ingreso');
		$totalData = $query->count();
		$totalFiltered = $totalData;
		$limit = $request->input('length');
		$start = $request->input('start');
		$order = $columns[$request->input('order.0.column')];
		$dir = $request->input('order.0.dir');


		$informations = $query->offset($start)
		->limit($limit)
		->orderBy('tn.id','desc')
		->get();

		$data = array();
		if(!empty($informations))
		{
			foreach ($informations as $info)
			{

				$nestedData['concept_id'] = $info->name;
				$nestedData['detail'] = $info->detail;
				$nestedData['amount_cop'] = '<p style="color:green; text-align:right;">'.number_format( $info->amount_cop, 2, '.', ',' ).'</p>';
				$nestedData['status'] = $info->status;
				$nestedData['created_at'] = $info->created_at;


				$nestedData['transactions'] = "<button type='button' data-idtrans='{$info->id}' class='btn btn-success round btn-sm' id='transactions'>Ver Más</button>";

				$data[] = $nestedData;
			}
		}
		$json_data = array(
			"draw"            => intval($request->input('draw')),
			"recordsTotal"    => intval($totalData),
			"recordsFiltered" => intval($totalFiltered),
			"data"            => $data
		);
		echo json_encode($json_data);
	}
}
