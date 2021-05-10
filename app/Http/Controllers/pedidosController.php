<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pedidosController extends Controller
{
    public function create($id){
        return view('prepara-pedido', compact('id'));
    }

    public function store(){
        return request();
    }
}
