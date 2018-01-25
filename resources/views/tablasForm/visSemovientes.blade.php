@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
  	  <div class="row">
  	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b> <i class="fa fa-file-o" aria-hidden="true"></i> SEMOVIENTES / DATOS DE LOS BIENES MUEBLES DEL ÓRGANO O ENTE</b></h5></div>
      </div>

      <div class="row">
          <div class="col-md-12 separar">
            <h6> <i id="colorInstruccion" class="fa fa-info-circle" aria-hidden="true" title="" ></i>  
               <b id="colorInstruccion"> INSTRUCCIONES: EL CAMPO QUE DESCONOZCA, POR FAVOR DEJARLO EN BLANCO. SEGÚN EL MANUAL DE ESPECIFICACIONES TÉCNICAS.</b></h6>
          </div>
      </div>


      <div class="row">
          <div class="col-md-12 desvanecer">
            @if(session()->has('msj'))
              <center><div  class="col-md-12  alert alert-success" >{{session('msj')}}</div></center>
                @endif

                @if(session()->has('errormsj'))
              <center><div  class="col-md-12  alert alert-danger" >{{session('errormsj')}}</div></center>
            @endif
          </div>
      </div>
      
      <div class="row separar">
            <div class="col-md-12">
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar2">Ultimo Registro</b>
              <li style="border-style: ridge; background-color: white; width: 160px;"  class="listas"><b id="espaciar4"> Código de Origen</b> <b id="espaciar">  
            
              @if($lastCod)
                  <b id="espaciar3"> {{$lastCod->codBien}}</b>
              @else
                  <b id="espaciar3">S2012000</b>
              @endif
              
                </b>
            </div>
        </div> 

      <div class="row"> 
          <div class="col-md-12 li moverIzq">
              <ul class="js-errors li"></ul>
          </div>
      </div>
<hr>
   
   	<form role="form" id="formValidaT10" name="formValidaT10" method="POST" action="{{url('semovientes')}}">
    	{{ csrf_field() }}

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
              <li><b>Código del Origen del Bien:</b></li>
                <input type="text" class="form-control" name="codBien" id="codBien" placeholder="Introduzca el código de origen del bien" maxlength="12">
            </div>

            <div class="col-md-4 form-group">
              <li>Código según el catalogo:</li>
                <input type="text" class="form-control" name="codCata" id="codCata" placeholder="Introduzca el código según el catalogo" maxlength="10">
            </div>

            <div class="col-md-4 form-group">
              <li>Dependencia Administrativa:</li>
                <select name="depAdmRes" id="depAdmRes" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($dependecia as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
               <li>Sede del Órgano o Ente Donde se Encuentra el Bien:</li>
                  <input type="text" id="sedeOrgano" name="sedeOrgano" class="form-control" placeholder="Introduzca la sede del organo del bien" maxlength="10">
            </div>

            <div class="col-md-4 form-group">
               <li>Código del Responsable Administrativo:</li>
                  <input type="text" id="codRespAdm" name="codRespAdm" class="form-control" placeholder="Introduzca el código del responsable del bien" maxlength="10">
            </div>

            <div class="col-md-4 form-group">
               <li>Código del Responsable del uso directo del Bien:</li>
                  <input type="text" id="codResBien" name="codResBien" class="form-control" placeholder="Introduzca el código del responsable administrativo" maxlength="10">
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                <li>Código interno del Bien:</li>
                  <input type="text" id="codInterno" name="codInterno" class="form-control" placeholder="Introduzca el código interno del bien" maxlength="20">
            </div>

            <div class="col-md-4 form-group">
                <li>Estatus del uso del Bien</li>
                  <select name="estatuBien" id="estatuBien" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                        @foreach($estatusBien as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                        @endforeach
                  </select>
            </div>

            <div class="col-md-4 form-group">
                <li>Especifique el otro uso:</li>
                  <input type="text" id="espOtroUso" name="espOtroUso" class="form-control" placeholder="Especifique otro uso del bien" maxlength="100" disabled>
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                <li>Valor de Adquisición del Bien:</li>
                  <input type="text" id="valorAdq" name="valorAdq" class="form-control money" placeholder="Introduzca el valor del bien" maxlength="26">
            </div>

            <div class="col-md-4 form-group">
                <li><b>Moneda:</b></li>
                  <select name="moneda" id="moneda" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($moneda as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                  </select>
            </div>
              
            <div class="col-md-4 form-group">
                <li>Especifique la Otra Moneda:</li>
                  <input type="text" id="espeMoneda" name="espeMoneda" class="form-control" placeholder="Especifique la otra moneda" maxlength="30">
            </div>
        </div>
    </div>
<hr>
<hr>
    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
              <li>Fecha de Adquisición del Bien:</li>
                <div class="input-group">
                <span class="input-group-addon"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="¡Si se desconoce, deje el campo en blanco!" ></i></span>
                <input type="text" id="feAdqBien" name="feAdqBien" class="form-control calendario fechaplaceholder" placeholder="¡Si se desconoce, deje el campo en blanco!" aria-describedby="inputGroupprimary3Status">
                </div>
            </div>

            <div class="col-md-5 form-group">
              <li>Fecha de Ingreso del Bien:</li>
              <div class="input-group">
              <span class="input-group-addon"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="¡Si se desconoce, deje el campo en blanco!" ></i></span>
              <input type="text" id="feIngBien" name="feIngBien" class="form-control calendario fechaplaceholder" placeholder="¡Si se desconoce, deje el campo en blanco!" aria-describedby="inputGroupprimary3Status">
              </div>
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
                <li><b>Estado del Bien:</b></li>
                  <select name="edoBien" id="edoBien" class="form-control">
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($condicion as $traeDir)
                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                  </select>
            </div>

            <div class="col-md-5 form-group">
              <li>Especifique el Otro Estado del Bien:</li>
                  <input type="text" id="espOtroEdo" name="espOtroEdo" class="form-control" placeholder="Especifique el otro estado del bien" maxlength="30">
            </div>
        </div>
    </div>

    <div class="row col-md-offset-1">
        <div class="col-md-12">
             <div class="col-md-10 form-estilo">
                <li>Descripción del Estado del Bien:</li>
                 <textarea name="descEdoBien" id="descEdoBien" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
            </div>
        </div>
    </div>

<hr>
<hr>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
              <li>Raza:</li>
                  <input type="text" id="raza" name="raza" class="form-control" placeholder="Introduzca la raza animal" maxlength="50">
            </div>

            <div class="col-md-5 form-group">
              <li>Genero:</li>
                  <select name="tipoAnimal" id="tipoAnimal" class="form-control " >
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($genero as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                  </select>
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
              <li>Tipo de Animal:</li>
                  <select name="tipoAnimal" id="tipoAnimal" class="form-control " >
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($tiposAnimal as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                  </select>
            </div>

            <div class="col-md-5 form-group">
              <li>Especifique el Otro Tipo:</li>
                  <input type="text" id="espeOtroTipo" name="espeOtroTipo" class="form-control" placeholder="Especifique el otro tipo" maxlength="100">
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
              <li>Propósito:</li>
                  <select name="proposito" id="proposito" class="form-control " >
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($proposito as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-5 form-group">
              <li>Especifique el Otro Propósito:</li>
                  <input type="text" id="espeOtroPro" name="espeOtroPro" class="form-control" placeholder="Especifique el otro tipo" maxlength="100">
            </div>
        </div>
    </div>

    <div class="row separar col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-5 form-group">
              <li>Código del Color del Bien:</li>
                  <select name="codColorBien" id="codColorBien" class="form-control " >
                    <option value="0" disabled selected>Seleccione</option>
                      @foreach($colorBien as $traeDir)
                    <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                      @endforeach
                </select>
            </div>

            <div class="col-md-5 form-group">
              <li>Especificación del Otro Color:</li>
                  <input type="text" id="espeColor" name="espeColor" class="form-control" placeholder="Especifique el color" maxlength="50">
            </div>
        </div>
    </div>

    <div class="row col-md-offset-1">
        <div class="col-md-12">
            <div class="col-md-10 form-estilo">
                <li>Otras Especificaciones del Color:</li>
                 <textarea name="otraEspeColor" id="otraEspeColor" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes1">0/255</div> </div>
            </div>
        </div>
    </div>

<hr>
<hr>
    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4">
               <li>Peso:</li>
                  <input type="text" id="peso" name="peso" class="form-control money" placeholder="Introduzca el peso del animal" maxlength="26">
            </div>

            <div class="col-md-4 form-group">
              <li>Unidad de Medida del Peso:</li>
                <select name="unidadPeso" id="unidadPeso" class="form-control">
                  <option value="0" disabled selected>Seleccione</option>
                 @foreach($peso as $traeDir)
                  <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                 @endforeach
             </select>
            </div>
          
            <div class="col-md-4 form-group">
              <li>Fecha de Nacimiento:</li>
                <div class="input-group">
                <span class="input-group-addon"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="¡Si se desconoce, deje el campo en blanco!" ></i></span>
                <input type="text" id="feNacimiento" name="feNacimiento" class="form-control calendario fechaplaceholder" placeholder="¡Si se desconoce, deje el campo en blanco!" aria-describedby="inputGroupprimary3Status">
                </div>
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-6 form-estilo">
                <li>Señas Particular:</li>
                 <textarea name="seParticulares" id="seParticulares" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conSemo">0/255</div> </div>
            </div>

            <div class="col-md-6 form-estilo">
                <li>Otras Especificaciones:</li>
                 <textarea name="otrasEspecifi" id="otrasEspecifi" class="form-control" maxlength="255" rows="4"></textarea>
                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conSemo1">0/255</div> </div>
            </div>
        </div>
    </div>

    <div class="row separar">
        <div class="col-md-12">
            <div class="col-md-4">
               <li>Número de Hierro:</li>
                  <input type="text" id="numHierro" name="numHierro" class="form-control money" placeholder="Número de hierro de identificación del animal" maxlength="15">
           </div>

            <div class="col-md-4">
              <li>Se encuentra asegurado el bien:</li>
                <select name="seguroBien" id="seguroBien" class="form-control">
                  <option value="0" disabled selected>Seleccione</option>
                 @foreach($seguroBien as $traeDir)
                  <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
                 @endforeach
                </select>
            </div>

            <div class="col-md-4 form-group">
              <li>Código del Registro de Seguro:</li>
                  <input type="text" id="codRegSeguro" name="codRegSeguro" class="form-control" placeholder="Introduzca el código del registro del seguro" maxlength="10">
            </div>
        </div>
    </div>

	      <div class="row">
            <div class="col-md-12 form-group"><br>
                <center>
                    <button type="submit" class="btn btn-md btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i><b> Enviar</b></button>
                             
                    <a href="home"  class="btn btn-md btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> <b>Salir</b></a>  
                </center> 
            </div>
        </div>
     </form> 
   </div>  
</div>
@endsection