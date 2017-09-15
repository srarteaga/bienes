<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloT21;
use App\mod_selectT21;

class controladorT21 extends Controller
{
    
    public function index()
    {
        //id->name/ placeholder / maxlength / posicion de input
        $infoSelect=mod_selectT21::all();

        $arrayT21=array(
            array("codOt2_1","CÓDIGO DE ORIGEN","Introduzca el código de origen","12","col-md-pull-4"),
            #array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
            array("codPro","CÓDIGO DE PROVEEDOR:","Introduzca código del proveedor","10","col-md-push-0"),
            array("numCom","N° ORDEN DE LA ORDEN DE COMPRA:","Introduzca orden de compra","10",""),
            array("numNota","N° DE LA NOTA DE ENTREGA:","Introduzca el N° de la nota de entrega","10",""),
            array("numFac","N° DE LA NOTA FACTURA:","Introduzca el N° de la factura","10",""),
            );

        $selectT21=array(
            array("codAdq","CÓDIGO DE LA FORMA DE ADQUISICIÓN:","col-md-push-4"),
            );

        $dateT21=array(
            array("feCom","FECHA DE LA ORDEN DE COMPRA:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );

        $dateT211=array(
            array("feNota","FECHA DE LA NOTA DE ENTREGA:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );
        $dateT212=array(
            array("feFac","FECHA DE LA FACTURA:","¡Si se desconoce, deje el campo en blanco!","input-group","input-group-addon","inputGroupprimary3Status"),
            );
        return view('tablasForm.t2-1dobmioe', compact('arrayT21','selectT21','infoSelect','dateT21','dateT211','dateT212'));
    }

  
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $form_t21=new modeloT21();
        $form_t21->codAdq = $request->codAdq;
        $form_t21->revisadot21 = 1;
        $form_t21->anulart21 = 0;

        if($form_t21->codOt2_1 = $request->codOt2_1 == ''){
         $form_t21->codOt2_1 = '0'; 

           }else{
            $form_t21->codOt2_1 = $request->codOt2_1;
           }  

        if($form_t21->codPro = $request->codPro == ''){
         $form_t21->codPro = '0';
        
           }else{
            $form_t21->codPro = $request->codPro;
           }

        if($form_t21->numCom = $request->numCom == ''){
            $form_t21->numCom = '0';

            }else{
            $form_t21->numCom = $request->numCom;    
            }

        if($form_t21->numNota = $request->numNota == ''){
            $form_t21->numNota = '0';

            }else{
            $form_t21->numNota = $request->numNota;    
            }

        if($form_t21->numFac = $request->numFac == ''){
            $form_t21->numFac = '0';

            }else{
            $form_t21->numFac = $request->numFac;    
            }

        if($form_t21->feCom = $request->feCom == ''){
            $form_t21->feCom = '11111111';

            }else{
            $form_t21->feCom = $request->feCom;    
            }

        if($form_t21->feNota = $request->feNota == ''){
            $form_t21->feNota = '11111111';

            }else{
            $form_t21->feNota = $request->feNota;    
            }

        if($form_t21->feFac = $request->feFac == ''){
            $form_t21->feFac = '11111111';

            }else{
            $form_t21->feFac = $request->feFac;    
            }

        if($form_t21->save()){
            return back()->with('msj', 'Datos Registrados Exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $form_t21 = modeloT21::find($id);
        $migselectT21 = mod_selectT21::all();
       
        return view('layouts.modificarT2-1', compact('form_t21','migselectT21'));
             
    }

    public function update(Request $request, $id)
    {
        
        $form_t21=modeloT21::find($id);
        $form_t21->codAdq = $request->codAdq;

        if($form_t21->codOt2_1 = $request->codOt2_1 == ''){
         $form_t21->codOt2_1 = '0'; 

           }else{
            $form_t21->codOt2_1 = $request->codOt2_1;
           }  

        if($form_t21->codPro = $request->codPro == ''){
         $form_t21->codPro = '0';
        
           }else{
            $form_t21->codPro = $request->codPro;
           }

        if($form_t21->numCom = $request->numCom == ''){
            $form_t21->numCom = '0';

            }else{
            $form_t21->numCom = $request->numCom;    
            }

        if($form_t21->numNota = $request->numNota == ''){
            $form_t21->numNota = '0';

            }else{
            $form_t21->numNota = $request->numNota;    
            }

        if($form_t21->numFac = $request->numFac == ''){
            $form_t21->numFac = '0';

            }else{
            $form_t21->numFac = $request->numFac;    
            }

        if($form_t21->feCom = $request->feCom == ''){
            $form_t21->feCom = '11111111';

            }else{
            $form_t21->feCom = $request->feCom;    
            }

        if($form_t21->feNota = $request->feNota == ''){
            $form_t21->feNota = '11111111';

            }else{
            $form_t21->feNota = $request->feNota;    
            }

        if($form_t21->feFac = $request->feFac == ''){
            $form_t21->feFac = '11111111';

            }else{
            $form_t21->feFac = $request->feFac;    
            }

        if($form_t21->save()){
            return back()->with('msj', 'Datos modificados exitosamente');
             }else {
            return back()->with('errormsj', 'Los datos no se guardaron');
        }
    }
    
    public function destroy($id)
    {
      //
    }
}
