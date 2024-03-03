<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return response()->json(LoginModel::all()->toArray());
        

    }
    public function store(Request $request)
    {
        LoginModel::create($request->all());
        return response()->json('Data added successfully', 201);


    }
    public function destroy(LoginModel $loginModel)
    {
        $loginModel->delete();
    }
}
