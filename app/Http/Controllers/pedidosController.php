<?php

namespace App\Http\Controllers;

use LengthException;
use App\Models\Pedido;
use App\Models\Platillo;
use App\Models\Ingrediente;
use App\Models\PedidoPreparado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pedidosController extends Controller
{

    public function show($id){

        $extra = DB::Select("SELECT*FROM extras WHERE platillo_id LIKE $id");
        $normal = DB::select("SELECT*FROM ingredientes WHERE platillo_id LIKE $id");

        return view('prepara-pedido', compact('extra', 'normal'));
}



    public function create($id){
        return view('prepara-pedido', compact('id'));
    }



    public function store(){
    

    

//Vlidando los datos del formulario
        request()->validate([
            'cliente' => 'required',
            'direccion' => 'required',
            'telefono' => 'required'
        ]);
//Datos del formulario ya terminados




//Encontrando los datos del platillo correspondiente
        $imaNombre = Platillo::find(request('id'));
        $nombre = $imaNombre->nombre;
        $imagen = $imaNombre->imagen1;
//Encontrando los datos del platillo correspondiente


//Guardando los datos del pedido
       PedidoPreparado::create([
            'cliente' => request('cliente'),
            'direccion' => request('direccion'),
            'telefono' => request('telefono'),
            'imagen' => $imagen,
            'nombre_platillo' => $nombre
        ]);
//Guardando los datos del pedido


//obtengo el ultimo id de esta tabla para agregarlo a las demas
    $last_id =   PedidoPreparado::latest('id')->first();






        if (request('extras')){
         
            $ingredientes_extra = count(request('extras'));
  
             for($j=0; $j < $ingredientes_extra ; $j++ ){
  
              Pedido::create([
                  'nombre' => request('extras')[$j], 
                  'pedido_id' => $last_id->id,
                  'extra' => 'si',
                  'normal' => 'no'      
              ]);
             }





             //Lo pongo asi por pura mamada
             $ingredientes_normal = count(request()->input()) -6 ;
             for($i=0; $i< $ingredientes_normal ; $i++){
            
                Pedido::create([
                    'nombre' => request("ingrediente$i"), 
                    'pedido_id' => $last_id->id,
                    'extra' => 'no',
                    'normal' => 'si'      
                ]);
    
            }
          }
          else{

            $ingredientes_normal = count(request()->input()) -5 ;
            for($i=0; $i< $ingredientes_normal ; $i++){
            
                Pedido::create([
                    'nombre' => request("ingrediente$i"), 
                    'pedido_id' => request('id'),
                    'extra' => 'no',
                    'normal' => 'si'      
                ]);
    
            }
          }
  


        return 'Pedido lanzado, esperalo con ansias xd xd xd xd';

    }


}
