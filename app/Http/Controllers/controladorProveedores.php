<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloProveedores;
use App\sel_proveedores;
use App\modeloBitacora;

class controladorProveedores extends Controller
{
      public function index()
    {
      $sel_proveedores = sel_proveedores::all();

        $input1=array(
            array("codProvee","Código del Proveedor:","Introduzca el código de proveedor","10","col-md-pull-4"),
            array("descProvee","Descripción de Proveedor:","Descripción del proveedor","100","col-md-push-0"),
          );

        $input2=array(
            array("otraDesc","Otra Descripción:","¡Deje el campo en blanco si lo desconoce!","200",""),
          );

        $input3= array(
          array("rifProvee","RIF:","Introducir número RIF","20",""),
          );

        $selectt1=array(
               array("tipProvee","Tipo de Proveedor:","select","1","col-md-push-4"),
          );

        return view('tablasForm.visProveedores', compact('input1','input2','input3','sel_proveedores','selectt1'));

    } 
          
    public function store(Request $request)
    {
        $form_t1= new modeloProveedores();
        $form_t1->codProvee = $request->codProvee;
        $form_t1->descProvee = $request->descProvee;
        $form_t1->tipProvee = $request->tipProvee;
        $form_t1->rifProvee = $request->rifProvee;
        $form_t1->revisadot1 = 1;
        $form_t1->anulart1 = 0;

        if ($form_t1->otraDesc = $request->otraDesc == '') {
        $form_t1->otraDesc = '0';
      
             }else{
             $form_t1->otraDesc = $request->otraDesc;
             }
         if($form_t1->save()){

          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 1;
          $bit->referencia = 'Proveedores';
          $bit->save();

     
            return back()->with('msj', 'Datos Registrados Exitosamente');
        } else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }



    }

    public function edit($id)
    {
        $form_t1 = modeloProveedores::find($id);
        $sel_proveedores = sel_proveedores::all();
        
        return view('layouts.modificarProveedores', compact('form_t1','sel_proveedores'));
    }

    public function update(Request $request, $id)
      {
        $form_t1 = modeloProveedores::find($id);
        $form_t1->codProvee = $request->codProvee;
        $form_t1->descProvee = $request->descProvee;
        $form_t1->tipProvee = $request->tipProvee;
        $form_t1->rifProvee = $request->rifProvee;
        $form_t1->otraDesc = $request->otraDesc;
        $form_t1->save();

        if($form_t1->save()){
          $bit = new modeloBitacora();
          $bit->user = $_SESSION['id'];
          $bit->accion  = 2;
          $bit->referencia = 'Proveedores';
          $bit->save();
    
        
            return back()->with('msj', 'Datos modificados exitosamente');
        } else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }

      }
   
}
