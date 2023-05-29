<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistrationFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class FormValidationController extends Controller
{
    public function register(RegistrationFormRequest $request)
    {
        // Validation passed, continue with registration logic
        // Access validated data using $request->validated()

        // Example: Create a new user
         $user = User::create([
            'name' => $request->validated()['name'],
            'email' => $request->validated()['email'],
            'password' => bcrypt($request->validated()['password']),
        ]);

        // Additional registration logic...

        return response()->json(['message' => 'Registration successful']);
    }
}


