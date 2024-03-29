<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
	public function create()
	{
		return view("sessions.login");
	}

    public function store()
    {
    	if(auth()->attempt(request(['email', 'password'])) == false){
    		return back()->withErrors([
    			'messages' => 'The email or password is incorrect, please try again'
    		]);
    	}

    	return redirect()->to('/');
    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect()->to('/');
    }
}
