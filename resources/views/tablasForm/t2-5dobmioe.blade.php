@extends('layouts.app')

@section('content')

	<div class="row">
	     <div id="panelTitu" class="panel-heading text-center separar"><h5 id="h5Titu"><b>ANEXO T-2-5 / DATOS DE LOS ORIGENES (FORMAS DE ADQUISICIÓN) DE LOS BIENES MUEBLES E INMUEBLES DEL ORGANO O ENTE</b></h5></div>
	</div>

	<div class="row separar">
		<div class="col-md-12">
			<h7><b>F) Aplicable solo para la forma de adquisición de Expropiación.</b></h7>
		</div>
	</div>
	
	<div class="row">
      <div class="col-md-12 separar">
        <h6> <i id="colorInstruccion" class="fa fa-info-circle" aria-hidden="true" title="" ></i>  
         <b id="colorInstruccion"> INSTRUCCIONES: EL CAMPO QUE DESCONOZCA, POR FAVOR DEJARLO EN BLANCO.</b></h6>
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

    <div class="row"> 
      <div class="col-md-12 li separar moverIzq">
          <ul class="js-errors li"></ul>
      </div>
    </div>
   
<div class="row">
   <div class="col-md-12">
   	  <form role="form" id="formValidaT25" name="formValidaT25" method="POST" action="{{url('t25')}}">
    	{{ csrf_field() }}
      
    <!--ARRAY SELECT selectT25 PERTENECIENTE AL CONTROLADORT25, TABLA RELACIONADA EN LA BD => mig_selectT25 Y T25-->
    <!--ARRAY SELECT selectT25 BELONGING TO CONTROLADORT25, TABLE RELATED IN THE BD => mig_selectT25 AND T25-->

      @foreach($selectT25 as $posicion => $valor)
      <div class="col-md-4 {{$selectT25[$posicion][2]}} form-group separar">
          <label for="{{$selectT25[$posicion][0]}}">{{$selectT25[$posicion][1]}}</label>
              <select name="{{$selectT25[$posicion][0]}}" id="{{$selectT25[$posicion][0]}}" class="form-control">
                <option value="0" disabled selected>Seleccione</option>
              @foreach($infoSelect as $traeSelect)
               <option value="{{$traeSelect->id}}">{{$traeSelect->opcion}}</option> 
              @endforeach
            </select>
          </div>
      @endforeach

    <!--ARRAY DE INPUT-TEXT arrayT25 PERTENECIENTE AL CONTROLADORT25, TABLA RELACIONADA EN LA BD => T25-->
    <!--ARRAY OF INPUT-TEXT arrayT25 BELONGING TO CONTROLADORT25, TABLE RELATED IN THE BD => T25-->

      @foreach($arrayT25 as $posicion => $valor)
       
       <div class="col-md-4 {{$arrayT25[$posicion][4]}} form-group separar">
         <label for="">{{$arrayT25[$posicion][1]}}</label>
         <input type="text" class="form-control" id="{{$arrayT25[$posicion][0]}}" name="{{$arrayT25[$posicion][0]}}" placeholder="{{$arrayT25[$posicion][2]}}" maxlength="{{$arrayT25[$posicion][3]}}">
       </div> 
        
      @endforeach
    
    <!--ARRAY DE FECHA dateT25 PERTENECIENTE AL CONTROLADORT25, TABLA RELACIONADA EN LA BD => T25--> 
    <!--ARRAY OF DATE dateT25 BELONGING TO CONTROLADORT25, TABLE RELATED IN THE BD => T25-->
    
      @foreach($dateT25 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$dateT25[$posicion][0]}}">{{$dateT25[$posicion][1]}}</label>  
                <div class="{{$dateT25[$posicion][3]}}">

                <span class="{{$dateT25[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$dateT25[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$dateT25[$posicion][0]}}" id="{{$dateT25[$posicion][0]}}" placeholder="{{$dateT25[$posicion][2]}}" aria-describedby="{{$dateT25[$posicion][5]}}">
                          
                </div>
          </div>
      @endforeach

    <!--ARRAY DE FECHA date2T25 PERTENECIENTE AL CONTROLADORT25, TABLA RELACIONADA EN LA BD => T25--> 
    <!--ARRAY OF DATE date2T25 BELONGING TO CONTROLADORT25, TABLE RELATED IN THE BD => T25-->

      @foreach($date2T25 as $posicion => $valor)
       
          <div class="col-md-4 form-group">
            <label for="{{$date2T25[$posicion][0]}}">{{$date2T25[$posicion][1]}}</label>  
                <div class="{{$date2T25[$posicion][3]}}">

                <span class="{{$date2T25[$posicion][4]}}"><i style="color:#8E2121;" class="fa fa-info-circle" aria-hidden="true" title="{{$date2T25[$posicion][2]}}" ></i></span>
                          
                <input type="text" class="form-control fechaplaceholder calendario" onkeypress="return disable(event)" name="{{$date2T25[$posicion][0]}}" id="{{$date2T25[$posicion][0]}}" placeholder="{{$date2T25[$posicion][2]}}" aria-describedby="{{$date2T25[$posicion][5]}}">
                          
                </div>
          </div>
      @endforeach

	      <div class="row">
            <div class="col-md-12 form-group"><br>
                <center>
                    <button type="submit" class="btn btn-lg btn-success" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Guardar Registro</button>
                             
                    <a href="home"  class="btn btn-lg btn-danger" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir</a>  
                </center> 
            </div>
        </div>
     </form> 
   </div>  
</div>
@endsection