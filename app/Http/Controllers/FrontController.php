<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    	return view('frontview.home.homeContent');
    }
    public function films()
    {
        $films = Film::all();
    	return view('frontview.home.film', compact('films'));
    }
    public function contact()
    {
    	return view('frontview.home.contact');
    }
}
