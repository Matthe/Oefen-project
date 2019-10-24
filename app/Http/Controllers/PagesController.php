<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    public function getHome(){

        $data = "";/*file_get_contents('https://api.twitch.tv/mrjacobshc/clips'); */
        $response = json_decode($data, true);

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

    public function getProfile(){
        return view('profile');
    }
}
