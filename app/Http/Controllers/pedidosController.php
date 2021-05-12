<?php

namespace App\Http\Controllers;

use LengthException;
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
        //Cuento los inputs para poder hacer el ciclo que insertara los datos
        $inputs = count(request()->input()) ;


        for($i=0; $i< $inputs ; $i++){
            
            Pedido::store([
                'nombre' => request("ingrediente'.'$i'.")
                ''
            ]);

        }


        return 'success';

    }


}
