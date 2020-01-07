<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class PageController extends Controller
{
    public function getHome(){
        //Waarschijnlijk is deze pagina van een andere tutorial. Kijk maar of je het hier in kan maken
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.home')->withPosts($posts);
    }

    public function getAbout(){
    	return view('pages.about');
    }

    public function getContact(){
    	return view('pages.contact');
    }

    public function getRegister(){
    	return view('registration.create');
    }

    public function getProfile(){
        return view('pages.profile');
    }
}
