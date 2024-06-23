<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $name = "Donald Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        $domain = $_SERVER['SERVER_NAME'];
        $cookie = Cookie::make(
            'access_token',
            '123-XYZ',
            1,
            '/',
            $domain,
            false,
            true
        );

        $response = response()->json($data, 200);
        $response->withCookie($cookie);
        return $response;
    }
}
