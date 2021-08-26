<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
	function index() {
		$name = "homemie";

		$list = [
			"/images/cover3.jpg",
			"/images/cover2.jpg",
			"/images/image-5.jpg", 
		];
    $user= User::all();

		$error = '404 Not Found';
		// return view('usesr.index', ['list'=> $list]);
		return view('index', compact('list', 'name','user'));
		// return view('welcome') //1-2 ตัวแปร
		// ->with('name', $name)
		// ->with('list', $list)
		// ->with('user', $user)
		// ->with('error', $error);

	}
}
