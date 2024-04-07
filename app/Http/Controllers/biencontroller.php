<?php

namespace App\Http\Controllers;

use App\Http\Requests\ajout_bien_request;
use App\Models\Bien;
use App\Models\option;

class biencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.bien.bien', ['biens' => Bien::orderBy('created_at','desc')->paginate(25)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $bien = new Bien();
        $bien->fill(
            [
        
       'titre_b' => 'mon titre',
        'desc' => 'ma description ',
        'nb_piece' => 2,
        'nb_chambre' => 3,
        'adresse' => 'mon adresse',
        'ville' => 'ma ville',
        'nb_etage' => 10,
        'surface' => 400,
        'prix' => 20000,
        'code_postal' => 225,
        'sold' => false
            ]
            );

      return view('admin.bien.forms', [ 'biens' => $bien , 'options' => option::pluck('nom','id')]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ajout_bien_request $request)
    {
        
        $bien = bien::create($request ->validated());
        $bien ->option()->sync($request -> validated('options'));
       

        return to_route('admin.bien.index')->with('success' , 'le bien a bien été enregistrer');
    }

    /**
     * Display the specified resource.
     */
    
    
    public function edit(bien $bien)
    {
        return view('admin.bien.forms',[ 'biens' => $bien , 'options' => option::pluck('nom','id')]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ajout_bien_request $request, bien $bien)
    {

       
        $bien ->update($request -> validated());
        $bien ->option()->sync($request -> validated('options'));

        return to_route('admin.bien.index')->with('success' , 'le  bien a bien été modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bien $bien)
    {
        $bien -> delete();

        return to_route('admin.bien.index')->with('success' , 'le bien  a bien été supprimer');
        
    }
}
