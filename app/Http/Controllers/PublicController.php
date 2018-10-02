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
}
