<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    public function index()
    {
    	
    	$films = Film::all();
    	return view('admin.film.all', compact('films'));
    }

    public function create()
    {
    	return view('admin.film.create');
    }

    public function store(Request $request)
    {
    	//dd($request->all());

    	$this->validation($request);

    	$this->imageProcess($request);

    	try {

        	$data = $request->except('image');
            $data['image'] = $this->image;
            //dd($data['image']);
            Film::create($data);        	
    		
    		Session::Flash('success', 'Film Successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {

    	$film = DB::table('films')->where('id', $id)->first();

    	return view('admin.film.edit', compact('film'));
    }

    public function update(Request $request, $id)
    {
    	//dd($request->all());

    	$data=Film::where('id',$id)->first(); 
    	$this->validation($request);
	    
	    if ($request->hasFile('image'))
	    {
            if(file_exists($data->image)){
                unlink($data->image);
            }
            $data->update($request->all());
            $this->imageProcess($request);
            $data->image = $this->image;
            $data->update();
                              
	    }  
        else{
            $data->update($request->all());
            $data->update();
        } 
	    Session::Flash('success', 'Film Successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        Film::where('id',$id)->first()->delete();

        Session::Flash('error', 'Film Image Deleted Successfully !!!');
        return redirect()->back();
    }


    public function validation(Request $data)
    {
    	$this->validate($data,[
    		'name' => 'required',
    		'description' => 'required',
    		'realeseDate' => 'required|date',
    		'rating' => 'required|integer',
    		'ticketPrice' => 'required',
    		'country' => 'required',
    		'genre' => 'required',
    		'image' => 'required|image|mimes:jpg,jpeg,png,gif,pdf,svg|max:2048'
    		]);
    }

    public function imageProcess(Request $data, $name = null)
    {
        $this->image = null;
        if($imageFile = $data->file('image')){
            $imageOriginalName = $imageFile->getClientOriginalName();
            $explodeName = explode(',', $imageOriginalName);
            $extensionName = end($explodeName);
            $tnoName = ($name ? $name : $data->name);
            $uploadName = $tnoName.'-'.time().'.'.$extensionName;
            $uploadPath = 'uploads/film/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
