<?php

     namespace App\Http\Controllers;

     use Illuminate\Http\Request;
     use Tymon\JWTAuth\Facades\JWTAuth;
     use Tymon\JWTAuth\Exceptions\JWTException;

    class AuthController extends Controller
     {
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['email','password']]);
    }
      public function login(Request $request)
    {
        // Retrieve the form data
        $email = $request->input('email');
        $password = $request->input('password');

        // Process the form data, e.g., validate credentials and authenticate the user
        // You can use Laravel's authentication mechanisms or custom logic here

        // Example: Authenticate user
        if ($email === 'example' && $password === 'password') {
            // Successful authentication
            return redirect('/dashboard');
        } else {
            // Failed authentication
            return redirect('/login')->with('error', 'Invalid credentials');
        }
    }
}