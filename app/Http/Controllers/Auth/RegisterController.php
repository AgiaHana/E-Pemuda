<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email        = $request->input('email');
        $password     = $request->input('password');

        $user = ModelsUser::create([
            'name'      => $name,
            'email'     => $email,
            'password'  => Hash::make($password)
        ]);

        if($user) {
            return response()->json([
                'success' => true,
                'message' => 'Register Berhasil!'
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Register Gagal!'
            ], 400);
        }

    }

}