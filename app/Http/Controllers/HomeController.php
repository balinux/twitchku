<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $response = app('guzzle')->request('GET','https://api.twitch.tv/kraken/streams/ybicanoooobov');

        $response = json_decode((string) $response->getBody());
        $response = (array) $response;
        // dd($response);
        $name = $response['stream']->channel->name;
        return view ('welcome', compact('name'));
        // return view ('welcome');

    }
}
