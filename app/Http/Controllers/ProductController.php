<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    //
    function getProduct(){
        $response = Http::get('https://dummyapi.online/api/products/1');
        $response= $response->body();
        return view('product',['data'=>json_decode($response)]);
    }
}
