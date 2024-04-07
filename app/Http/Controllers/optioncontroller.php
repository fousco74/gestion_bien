<?php

namespace App\Http\Controllers;


use App\Http\Requests\ajout_option_request;
use App\Models\option;

class optioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.option.option', ['options' => option::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $option = new option();
        

      return view('admin.option.forms', [ 'options' => $option ]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ajout_option_request $request)
    {
        $option = option::create($request ->validated());


        return to_route('admin.option.index')->with('success' , 'le bien a bien été enregistrer');
    }

    /**
     * Display the specified resource.
     */
    
    
    public function edit (option $option)
    {
        return view('admin.option.forms',[ 'options' => $option]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ajout_option_request $request, option $option)
    {
        $option ->update($request -> validated());

        return to_route('admin.option.index')->with('success' , 'le  bien a bien été modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(option $option)
    {
        $option -> delete();

        return to_route('admin.option.index')->with('success' , 'le bien  a bien été supprimer');
       
    }
}
