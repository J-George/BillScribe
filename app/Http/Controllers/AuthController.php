<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $http = new Client([
            'base_uri'  =>  'http://127.0.0.1:8001',
            'defaults'  =>  [
                'exceptions'    => false
            ]
        ]);

        try
        {
             $response = $http->post('/oauth/token',[
                'timeout' => 3000,
                'form_params' => [
                    'grant_type'    => 'password',
                    'client_id'     => 2,
                    'client_secret' => env('GUZZLE_KEY'),
                    'username'      => $request->username,
                    'password'      => $request->password,
                ]
            ]);
            //return json_decode((string) $response->getBody(), true);
            return $response->getBody();
        }
        catch(\GuzzleHttp\Exception\BadResponseException $e)
        {
            if ($e->getCode() == 400)
            {
                return response()->json('Invalid Request. Please enter a username and password.', $e->getCode());
            }
            else if ($e->getCode() == 401)
            {
                return response()->json('Your credentials are invalid. Please try again.', $e->getCode());
            }
            else
            {
                return response()->json('Something went wrong on the server.', $e->getCode());
            }
        }
           
        
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens->each(function ($token, $key){
            $token->delete();
        });

        return response()->json('Logged out successfully',200);
    }
}
