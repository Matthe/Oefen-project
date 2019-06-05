<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Requests;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;

class PagesController extends Controller
{
    public function getHome(){

        $client = new Client();
        $api_response = $client->get('https://api.twitch.tv/mrjacobshc/clips');
        $response = json_decode($api_response);

        return view('home', compact('response'));
    }

    public function getAbout(){
    	return view('about');
    }

    public function getContact(){
    	return view('contact');
    }

    public function getRegister(){
    	return view('registration.create');
    }
}
