<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index (){
        $kats = response()-> json(Kategoria::all());
        return $kats;
    }

    public function show ($id){
        $kat = response()-> json(Kategoria::find($id));
        return $kat;
    }
}
