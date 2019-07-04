<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
	public function unilevel(Request $request){
		return view('dashboard.team.unilevel',
			[
				"unilevel" =>'ok',
			]
		)->render();
	}
}
