<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class platilloController extends Controller
{
    public function store(){

        request()-> validate([
            'imagen1' => 'required|image',
            'imagen2' => 'required|image',
            'imagen3' => 'required|image',
            'nombre'  => 'required',
            'precio' =>  'required|numeric',
            'descripcion' => 'required'
        ]);


        $imagen1 = request('imagen1')->store('public');
        $imagen2 = request('imagen2')->store('public');
        $imagen2 = request('imagen3')->store('public');

        return $imagen1;




        return request();
    }
}
