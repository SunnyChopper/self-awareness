<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
    	// Page data
    	$page_header = "Home";
    	$page_title = config('app.name') .  " - " . $page_header;

    	// Return view
    	return view('public.index')->with('page_title', $page_title);
    }

    public function login() {
    	// Page data
    	$page_header = "Login";
    	$page_title = config('app.name') .  " - " . $page_header;

    	// Return view
    	return view('public.login')->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function register($redirect_id = 0) {
    	// Page data
    	$page_header = "Register";
    	$page_title = config('app.name') .  " - " . $page_header;

    	// Return view
    	return view('public.register')->with('redirect_id', $redirect_id)->with('page_header', $page_header)->with('page_title', $page_title);

    }
}
