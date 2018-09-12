<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrutasController extends Controller
{
    //Acción que devuelva una vista
    public function getIndex(){
    	return view('frutas.index')
    			->with('frutas', array('naranja','pera','sandia','fresa','melon','piña'));
    }

    public function getNaranjas(){
    	return 'Acción de NARANJAS';
    }

    public function anyPeras(){
    	return 'Acción de PERAS';
    }

    public function recibirFormulario(Request $request){
    	$data = $request;

    	return 'El nombre de la fruta es: '.$request->input('nombre');
    }
}
