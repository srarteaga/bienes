<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mod_selectT5;
use App\mod_selectT51;
use App\mod_selectT52;

class controladorMarcas extends Controller
{
    public function index(){

    	$array= array(
    		array("codMarca","CÓDIGO DE LA MARCAS:","Introduzca el código de la marca","200"),
    		array("denCoMar","DENOMINACIÓN DE LA MARCA:","Introduzca el código de la marca","200"),
    		array("nomFabri","NOMBRE DEL FABRICANTE:","Introduzca el nombre del fabricate","200"),
    		);

    	return view('añadir.añadirMarcas', compact('array'));
    }

     public function store(Request $request)
    {
       
        $form_tMarca=new mod_selectT5();
        $form_tMarca->opcion = $request->codMarca;
        $form_tMarca->save();

        $marc = mod_selectT5::all();
        $idMarc = $marc->last();

        $denCoMar = new mod_selectT51();
        $denCoMar->opcion = $request->denCoMar;
        $denCoMar->marca_id = $idMarc->id;
        $denCoMar->save();

        $coMar = mod_selectT51::all();
        $idcoMar = $coMar->last();

        $nomFabri = new mod_selectT52;
        $nomFabri->opcion =  $request->nomFabri;
        $nomFabri->codMarca_id = $idcoMar->id;

        $nomFabri->save();
        
        return back()->with('msj', 'Datos Registrados Exitosamente');
        

    }
}