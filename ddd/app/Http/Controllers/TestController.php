<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entity\Member;

class TestController extends Controller
{
    public function test(){
    	$users = Member::all();
        //$users = User::all();
    	//dd($users);
        return view('test',['users'=>$users]);
    }
}
