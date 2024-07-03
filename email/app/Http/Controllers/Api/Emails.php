<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\Message;

class Emails extends Controller
{
    
    public function index(Request $request){

        // Validation inputs register
        $validation = Validator::make( $request->all(), [
            'name' => ['required'],
            'lastName' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'message' => ['required'],
        ]);

        if($validation->fails()){

            // Collection errors all

            $errores = collect($validation->errors())->map(function ($item){
                return $item[0];
            });
            return response()->json([
                'error' => [
                    'code' => 422,
                    'message' => "Validation error",
                    'error' => $errores

                ]

            ])->setStatusCode(422);
        }
        
        // Request email
        $name = $request->name;
        $lastName = $request->lastName;
        $phone = $request->phone;
        $email = $request->email;
        $message = $request->message;

        Mail::to('psalazar@laica.co.cr')->send(new Message($name, $lastName, $phone, $email, $message));

        return response()->json([
            'data' => [
                'msg' => 'email successful',
                'code' => 201
            ]
        ])->setStatusCode(201);
        
    }
}
