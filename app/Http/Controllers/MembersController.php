<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index() {
    	// Page data
    	$page_header = "Dashboard";
    	$page_title = config('app.name') . " - " . $page_header;

    	// Return
    	return view('members.index')->with('page_header', $page_header)->with('page_title', $page_title);
    }
}
