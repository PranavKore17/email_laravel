<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class CookieController extends Controller
{
    public function setcookie()
    {
        $response = response('Hello Pranav');
        $response->withCookie('name', 'The Pranav Boss', 60);
        return $response;
    }

    public function getcookie()
    {
        return request()->cookie('name');
    }

    public function deletecookie()
    {
        return response('deleted')->cookie('name',null,-1);
        // return 'this is delete cookie';
    }
}
