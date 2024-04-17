<?php

namespace App\Http\Controllers;

use App\Models\Teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    public function index (){
        $tests = response()-> json(Teszt::with('kategoria')->get());
        return $tests;
    }

    public function show ($id){
        $test = response()-> json(Teszt::find($id));
        return $test;
    }
}
