<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
	public function profile()
	{
		
		$member_info = [
			'id_pre' => 1,
			'username' => 'Juan',
			'sponsor' => 'Maria',
			'type_people' => 'Natural',
			'firstname' => 'Manuel',
			'lastname' => 'Pedrozo Navarro',
			'email' => 'prueba'."*********@".'gmail.com',
			'phone' => "***********".'652',
			'allotments' => '0',
			'company_name' => 'Juan',
			'nit' => '51515616',
			'company_phone' => "***********".'perritos',
			'created_at' => '4/07/2019',
		];


		return view('dashboard.settings.profile', [
			'infoMember'=>json_decode(json_encode($member_info)),
		])->render();

	}
}
