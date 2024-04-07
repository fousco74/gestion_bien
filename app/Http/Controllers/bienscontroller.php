<?php

namespace App\Http\Controllers;
use App\Http\Requests\searchbienRequest;
use App\Models\Bien;

use Illuminate\Http\Request;

class bienscontroller extends Controller
{
    public function index(searchbienRequest $request){
        $query = bien::query();

        if($request->validated('price')){
           $query = $query->where("prix","<=",$request->input('price'));
        }

        if($request->validated('surface')){
            $query = $query->where("surface","<=",$request->input('surface'));
         }

         if($request->validated('piece')){
            $query = $query->where("nb_piece","<=",$request->input('piece'));
         }

         if($request->validated('titre')){
            $query = $query->where("titre_b","like",'%'.($request->input('titre')).'%');
         }

         
         
        

        return view('bien',[
            'biens' => $query->paginate(16),
            'input' => $request->validated()
        ]);
        
    }

    public function show(bien $bien){
        return view('detail',['bien' => $bien]);
    }
}