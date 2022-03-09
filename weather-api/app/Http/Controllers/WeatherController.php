<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    function index() {

        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [

            "q" => "HaNoi",

            "appid" => "78f0d50d08b569cc37da578c379c83b6"

        ] );

        $data = json_decode($response->body());

        $currentTime = time();

        return view('welcome', compact('data', 'currentTime'));

    }
}
