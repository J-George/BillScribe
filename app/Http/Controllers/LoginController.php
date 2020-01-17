<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $http = new Client();

        try
        {
            $response = $http->post('http://127.0.0.1:8000/oauth/token',[
                'form_params' => [
                    'grant_type'    => 'password',
                    'client_id'     => 2,
                    'client_secret' => 'TNGxKgpAmxiATMiVQTcBJ2ulXK69CP3awhZq2kIG',
                    'username'      => $request->username,
                    'password'      => $request->password,
                ]
            ]);
            //return json_decode((string) $response->getBody(), true)
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
}
