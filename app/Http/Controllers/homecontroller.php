<?php

namespace App\Http\Controllers;
use App\Models\Bien;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        $bien = bien::orderBy('create_at','desc')->limit(4)->get();

        return view('index', ['biens' => $bien]);
    }
}
