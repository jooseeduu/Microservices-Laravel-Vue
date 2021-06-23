<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    
	public function index(){
		return User::all();
	}

	public function show( $id_par){

		$usuario_id = User::find($id_par);

		return response($usuario_id , 202);
	}

	public function store( Request $request){

		$user = User::create([
			'first_name' => $request->input('first_name'),
			'last_name' => $request->input('last_name'),
			'email' => $request->input('email'),
			'password' => Hash::make($request->input('password')),		]);

		return response($user, Response::HTTP_CREATED);
	}

}
