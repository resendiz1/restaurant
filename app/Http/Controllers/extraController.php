<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;

class extraController extends Controller
{

    public function create($id){
        return view('admin.ingredientes-extra', compact('id'));
    }

    public function store(){
        request()->validate([
            'nombre' => 'required',
            'precio' => 'required'
        ]);

        
        Extra::create([
            'nombre' => request('nombre'),
            'precio' => request('precio'),
            'platillo_id' => request('id_platillo')
        ]);

            $id = request('id_platillo');

            return redirect()->route('extra.create', compact('id'))->with('agregado', ' <div class="alert alert-success border font-weight-bold"> El ingrediente fue agregado </div>');
    }
}
