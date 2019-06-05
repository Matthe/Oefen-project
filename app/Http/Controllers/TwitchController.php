<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TwitchController extends Controller
{
    public function index()
    {
    	$client = new Client();
		$api_response = $client->get('https://api.twitch.tv/mrjacobshc/clips');
		$response = json_decode($api_response);

		return view('/', compact('response'));
    }
}
