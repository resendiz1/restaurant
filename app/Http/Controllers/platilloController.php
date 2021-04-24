<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;

class platilloController extends Controller
{
    public function store(){



        //Tirando  de la logica de programación que me enseñaron en la UTT XD
            if(request('especialidad')== 'on'){  
                $especialidad = 'si';
            }
            else{
                $especialidad = 'no';
            }
        //Tirando de la logica de programación que me enseñaron en la UTT XD




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
            $imagen3 = request('imagen3')->store('public');
        
        
            Platillo::create([
                'nombre' => request('nombre'),
                'descripcion' => request('descripcion'),
                'precio' => request('precio'),
                'imagen1' =>  $imagen1,
                'imagen2' =>  $imagen2,
                'imagen3' =>  $imagen3,
                'especialidad' => $especialidad 
            ]);



        return redirect()->route('platillos.create')->with('success', 'Platillo Agregado');
    }


    public function show(){
        
        $platillos = Platillo::get();
        return view('admin.agregar-platillos', compact('platillos'));
    }


}
