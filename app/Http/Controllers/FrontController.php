<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    	return view('frontview.home.homeContent');
    }
    public function films()
    {
    	return view('frontview.home.film');
    }
    public function contact()
    {
    	return view('frontview.home.contact');
    }
}
