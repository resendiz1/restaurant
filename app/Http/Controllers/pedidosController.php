<?php

namespace App\Http\Controllers;

use LengthException;
use App\Models\Pedido;
use App\Models\Ingrediente;
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
    

        request()->validate([
            'cliente' => 'required',
            'direccion' => 'required',
            'telefono' => 'required'
        ]);

        return 'validados';


        
       

        if (request('extras')){
            
            $ingredientes_extra = count(request('extras'));
  
             for($j=0; $j < $ingredientes_extra ; $j++ ){
  
              Pedido::create([
                  'nombre' => request('extras')[$j], 
                  'pedido_id' => request('id'),
                  'extra' => 'si',
                  'normal' => 'no'      
              ]);
             }





             //Lo pongo asi por pura mamada
             $ingredientes_normal = count(request()->input()) -6 ;
             for($i=0; $i< $ingredientes_normal ; $i++){
            
                Pedido::create([
                    'nombre' => request("ingrediente$i"), 
                    'pedido_id' => request('id'),
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
  


        return 'success';

    }


}
