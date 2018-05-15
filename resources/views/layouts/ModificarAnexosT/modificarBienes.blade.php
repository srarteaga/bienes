<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modificar Bienes</title>
		 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	     <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/tablas.css') }}" rel="stylesheet">  
	     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	     <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
	     <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css">
	     <link href="{{ asset('img/bandera.png') }}" rel="icon">
	</head>
<body>

<div class="container" id="sha">
	<div class="col-md-12">
		<div class="row">
			<div class="panel">
               <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
                   <div class="panel-heading text-center"><h5><b>MODIFICAR BIENES <i class="fa fa-pencil-square-o" aria-hidden="true"></i></b></h5></div>
			    </div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
				    <h4>Modificar Registro <b id="colorInstruccion">N°# {{$form_t8->id}}</b></h4>
				</div>
			</div>

		<hr>

			<div class="row">
	        	<div class="col-md-12 desvanecer">
	          @if(session()->has('msj'))
	              <center><div  class="col-md-12  alert alert-success" role="alert">{{session('msj')}}</div></center>
	                 @endif

	                 @if(session()->has('errormsj'))
	              <center><div  class="col-md-12  alert alert-danger" role="alert">{{session('errormsj')}}</div></center>
	          @endif
	        	</div>
	     	</div>
			
		<form role="form" method="POST" action="{{route('bienes.update', $form_t8->id)}}">
       	  <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

		
			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<label for="codOt2_1">Código de Origen del Bien</label>
						 <input type="text" class="form-control" name="codOt2_1" id="codOt2_1" value="{{$form_t8->codOt2_1}}" maxlength="12">
					</div>
					
					<div class="col-md-4">
						<label for="codCata">Código según el catalogo</label>
							@if($form_t8->codCata == '1')
							 <input type="text" class="form-control" name="codCata" id="codCata" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codCata" id="codCata" value="{{$form_t8->codCata}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4 form-group">
				        <li>Dependencia Administrativa:</li>
					        <select name="codUnidad" id="codUnidad3" class="form-control">
					            <option value="{{$form_t8->selectUnidadbienes->id}}" >{{$form_t8->selectUnidadbienes->unidad}}</option>
					              @foreach($unidad as $traeDir)
					              	@if($traeDir->id != $form_t8->selectUnidadbienes->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->unidad}}</option>
					                @endif
					              @endforeach
					        </select>
				      </div>
				 </div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<li for="sedeOrgano">Sede del Órgano o Ente Donde se Encuentra el Bien</li>
							@if($form_t8->sedeOrgano == '1')
							 <input type="text" class="form-control" name="sedeOrgano" id="sedeOrgano" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="sedeOrgano" id="sedeOrgano" value="{{$form_t8->sedeOrgano}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4">
						<li for="codRespAdm">Código del Responsable Administrativo</li>
							@if($form_t8->codRespAdm == '1')
							 <input type="text" class="form-control" name="codRespAdm" id="codRespAdm" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codRespAdm" id="codRespAdm" value="{{$form_t8->codRespAdm}}" maxlength="10">
							@endif
					</div>

					<div class="col-md-4">
						<li for="codRespAdm">Código del Responsable del Uso directo del Bien</li>
							@if($form_t8->codResBien == '1')
							 <input type="text" class="form-control" name="codResBien" id="codResBien" value="xxx" maxlength="10">
							@else
							 <input type="text" class="form-control" name="codResBien" id="codResBien" value="{{$form_t8->codResBien}}" maxlength="10">
							@endif
					</div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<li for="codRespAdm">Código interno del Bien</li>
							@if($form_t8->codInterno == '1')
							 <input type="text" class="form-control" name="codInterno" id="codInterno" value="xxx" maxlength="20">
							@else
							 <input type="text" class="form-control" name="codInterno" id="codInterno" value="{{$form_t8->codInterno}}" maxlength="20">
							@endif
					</div>

					<div class="col-md-4 form-group">
					    <li>Estatus del uso del Bien</li>
					        <select name="estatuBien" id="estatuBien" class="form-control">
					            <option value="{{$form_t8->selectEstatus->id}}">{{$form_t8->selectEstatus->opcion}}</option>
					              @foreach($estatusBien as $traeDir)
					              	@if($traeDir->id != $form_t8->selectEstatus->id)
					                <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
					                @endif
					              @endforeach
					        </select>
    				</div>
					
					<div class="col-md-4 form-group">
	    				<li for="espOtroUso">Especifique el otro uso</li>
	                      @if($form_t8->espOtroUso == '1')
	                        <input type="text" class="form-control" name="espOtroUso" id="espOtroUso" value="noaplica" maxlength="100" disabled>
	                      @else
	                        <input type="text" class="form-control" name="espOtroUso" id="espOtroUso" value="{{$form_t8->espOtroUso}}" maxlength="100">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4">
						<li for="valorAdq">Valor de Adquisición</li>
							@if($form_t8->valorAdq == '0')
							 <input type="text" class="form-control money" name="valorAdq" id="valorAdq" value="99.99" maxlength="26">
							@else
							<input type="text" class="form-control money" name="valorAdq" id="valorAdq" value="{{$form_t8->valorAdq}}" maxlength="26">
							@endif
							
					</div>

					<div class="col-md-4 form-group">
		                <li><b>Moneda</b></li>
		                  <select name="moneda" id="moneda" class="form-control">
		                    <option value="{{$form_t8->selectSeguros->id}}">{{$form_t8->selectSeguros->opcion}}</option>
		                      @foreach($moneda as $traeDir)
		                      	@if($traeDir->id != $form_t8->selectSeguros->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>
					
					<div class="col-md-4">
						<li for="codRespAdm">Especifique la Otra Moneda</li>
						   @if($form_t8->espeMoneda == '1')
							 <input type="text" class="form-control" name="espeMoneda" id="espeMoneda" value="noaplica" maxlength="30" disabled>
						   @else
							 <input type="text" class="form-control" name="espeMoneda" id="espeMoneda" value="{{$form_t8->espeMoneda}}" maxlength="30" >
						   @endif
					</div>
			 	</div>
			</div>
<hr>
<hr>
			
			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4 form-group">
		                <li><b>Estado del Bien</b></li>
		                  <select name="edoBien" id="edoBien" class="form-control">
		                    <option value="{{$form_t8->selectCondicion->id}}">{{$form_t8->selectCondicion->opcion}}</option>
		                      @foreach($condicion as $traeDir)
		                      	@if($traeDir->id != $form_t8->selectCondicion->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4">
	                    <li>Especifique el Otro Estado del Bien</li>
	                      @if($form_t8->espOtroEdo == '1')
	                           <input type="text" class="form-control" name="espOtroEdo" id="espOtroEdo" value="noaplica" maxlength="30" disabled>
	                       
	                      @else
	                           <input type="text" class="form-control" name="espOtroEdo" id="espOtroEdo" value="{{$form_t8->espOtroEdo}}" maxlength="30">
	                      @endif
                    </div>

                    <div class="col-md-4">
	                    <li>Serial del Bien</li>
	                      @if($form_t8->serialBien == '1')
	                           <input type="text" class="form-control" name="serialBien" id="serialBien" value="xxx" maxlength="50">
	                       
	                      @else
	                           <input type="text" class="form-control" name="serialBien" id="serialBien" value="{{$form_t8->serialBien}}" maxlength="50">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row col-md-offset-1 separar">
				<div class="col-md-12">
					<div class="col-md-5">
	                    <li>Fecha de Adquisición del Bien</li>
	                      @if($form_t8->feAdqBien == '1111-11-11')
	                           <input type="text" class="form-control calendario" name="feAdqBien" id="feAdqBien" value="11111111" maxlength="10">
	                       
	                      @else
	                           <input type="text" class="form-control calendario" name="feAdqBien" id="feAdqBien" value="{{$form_t8->feAdqBien}}" maxlength="10">
	                      @endif
                    </div>

                    <div class="col-md-5">
	                    <li>Fecha de Ingreso del Bien en el Ente</li>
	                      @if($form_t8->feIngBien == '1111-11-11')
	                           <input type="text" class="form-control calendario" name="feIngBien" id="feIngBien" value="11111111" maxlength="10">
	                       
	                      @else
	                           <input type="text" class="form-control calendario" name="feIngBien" id="feIngBien" value="{{$form_t8->feIngBien}}" maxlength="10">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row col-md-offset-1">
				<div class="col-md-12">
                    <div class="col-md-10 form-estilo">
						<li>Descripción del Estado del Bien:</li>
	                      @if($form_t8->descEdoBien == '1')
	                       
		                 	<textarea name="descEdoBien" id="descEdoBien" value="xxx" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
	                       
	                      @else
	                
		                   <textarea name="descEdoBien" id="descEdoBien" class="form-control" maxlength="255" rows="4">{{$form_t8->descEdoBien}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes">0/255</div> </div>
	                           
	                      @endif
                    </div>
				</div>
			</div>
<hr>
<hr>
			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-4 form-group">
                		<li><b>Código de la Marca del Bien:</b></li>
		                  <select name="codMarca" id="codMarca2" class="form-control">
		                    <option value="{{$form_t8->selectMarcabien->id}}">{{$form_t8->selectMarcabien->codMarca}}</option>
		                      @foreach($marcas as $traeDir)
		                      	@if($traeDir->id != $form_t8->selectMarcabien->id)
		                    <option value="{{$traeDir->id}}">{{$traeDir->codMarca}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
            		</div>

            		<div class="col-md-4 form-group">
             	 		<li><b>Código Modelo del Bien:</b></li>
               		 		<select name="codModel" id="codModel2" class="form-control">
			                    <option value="{{$form_t8->selectModelbien->id}}" >{{$form_t8->selectModelbien->codModel}}</option>
			                      @foreach($modelos as $traeDir)
			                      	@if($traeDir->id != $form_t8->selectModelbien->id)
			                    <option value="{{$traeDir->id}}">{{$traeDir->codModel}}</option> 
			                    	@endif
			                      @endforeach
               				</select>
            		</div>

	            	<div class="col-md-4">
	                    <li>Año de Fabricación del Bien</li>
	                      @if($form_t8->anoFabriBien == '0')
	                           <input type="text" class="form-control" name="anoFabriBien" id="anoFabriBien" value="xxx" maxlength="4">
	                       
	                      @else
	                           <input type="text" class="form-control" name="anoFabriBien" id="anoFabriBien" value="{{$form_t8->anoFabriBien}}" maxlength="4">
	                      @endif
	                </div>
				</div>
			</div>

			<div class="row col-md-offset-1 separar">
				<div class="col-md-12">
					<div class="col-md-5 form-group">
		                <li><b>Código del Color del Bien</b></li>
		                  <select name="codColorBien" id="codColorBien" class="form-control">
		                    <option value="{{$form_t8->selectColorbien->id}}">{{$form_t8->selectColorbien->opcion}}</option>
		                      @foreach($colorBien as $traeDir)
		                      	@if($traeDir->id != $form_t8->selectColorbien->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-5">
	                    <li>Especificación de Color</li>
	                      @if($form_t8->espeColor == '1')
	                           <input type="text" class="form-control" name="espeColor" id="espeColor" value="noaplica" maxlength="50" disabled>
	                       
	                      @else
	                           <input type="text" class="form-control" name="espeColor" id="espeColor" value="{{$form_t8->espeColor}}" maxlength="50">
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row separar col-md-offset-1">
				<div class="col-md-12">
					<div class="col-md-10 form-estilo">
						<li>Otras Especificación de Color:</li>
	                      @if($form_t8->otraEspeColor == '1')
	                        
		                  	 <textarea name="otraEspeColor" id="otraEspeColor" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes1">0/255</div> </div>
	                       
	                      @else
	                        
		                  	 <textarea name="otraEspeColor" id="otraEspeColor" class="form-control" maxlength="255" rows="4">{{$form_t8->otraEspeColor}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes1">0/255</div> </div>
	                      @endif
                    </div>
                </div>
			</div>
<hr>
<hr>
			<div class="row separar">
				<div class="col-md-12">
					<div class="col-md-6 form-estilo">
	                    <li>Especificaciones Técnicas del Bien</li>
	                      @if($form_t8->espeTecBien == '1')

	                      <textarea name="espeTecBien" id="espeTecBien" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes2">0/255</div> </div>

	                      @else
	                      <textarea name="espeTecBien" id="espeTecBien" class="form-control" maxlength="255" rows="4">{{$form_t8->espeTecBien}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes1">0/255</div> </div>
	                      @endif
                    </div>

                    <div class="col-md-6 form-estilo">
	                    <li>Otras Especificaciones de Descripción del Bien</li>
	                      @if($form_t8->otraDescBien == '1')
	                      <textarea name="otraDescBien" id="otraDescBien" class="form-control" maxlength="255" rows="4">xxx</textarea>
		                  <div id="negro" for="contador">Caracteres: <div id="conbienes3">0/255</div> </div>
	                       
	                      @else
	                      <textarea name="otraDescBien" id="otraDescBien" class="form-control" maxlength="255" rows="4">{{$form_t8->otraDescBien}}</textarea>
		                  <div id="negro" for="contador">Caracteres: <div class="rojo" id="conbienes3">0/255</div> </div>
	                           
	                      @endif
                    </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
	                    <li>Garantía</li>
	                      @if($form_t8->garantia == '1')
	                           <input type="text" class="form-control" name="garantia" id="garantia" value="99" maxlength="5">
	                       
	                      @else
	                           <input type="text" class="form-control" name="garantia" id="garantia" value="{{$form_t8->garantia}}" maxlength="5">
	                      @endif
                    </div>

                    <div class="col-md-4 form-group">
		                <li><b>Unidad de Medida de la Garantía</b></li>
		                  <select name="unidadMedi" id="unidadMedi" class="form-control">
		                    <option value="{{$form_t8->selectUnidad->id}}">{{$form_t8->selectUnidad->opcion}}</option>
		                      @foreach($unidadGarantia as $traeDir)
		                      	@if($traeDir->id != $form_t8->selectUnidad->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4">
		                    <li>Fecha Inicio de la garantía</li>
		                      @if($form_t8->feIniGarantia == '1111-11-11')
		                           <input type="text" class="form-control calendario" name="feIniGarantia" id="feIniGarantia" value="11111111" maxlength="10">
		                       
		                      @else
		                           <input type="text" class="form-control calendario" name="feIniGarantia" id="feIniGarantia" value="{{$form_t8->feIniGarantia}}" maxlength="10">
		                      @endif
	                </div>
				</div>
			</div>
<hr>
<hr>
			<div class="row">
				<div class="col-md-12">
	                <div class="col-md-4">
		                    <li>Fecha Fin de la garantía</li>
		                      @if($form_t8->feFinGarantia == '1111-11-11')
		                           <input type="text" class="form-control calendario" name="feFinGarantia" id="feFinGarantia" value="11111111" maxlength="10">
		                       
		                      @else
		                           <input type="text" class="form-control calendario" name="feFinGarantia" id="feFinGarantia" value="{{$form_t8->feFinGarantia}}" maxlength="10">
		                      @endif
	                </div>

	                <div class="col-md-4 form-group">
		                <li><b>Posee Componentes</b></li>
		                  <select name="poseeCompo" id="poseeCompo" class="form-control">
		                    <option value="{{$form_t8->selectComponente->id}}">{{$form_t8->selectComponente->opcion}}</option>
		                      @foreach($poseeComponente as $traeDir)
		                      	@if($traeDir->id != $form_t8->selectComponente->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                        @endif
		                      @endforeach
		                  </select>
	            	</div>

	            	<div class="col-md-4 form-group">
		                <li><b>Se encuentra asegurado el Bien</b></li>
		                  <select name="seguroBien" id="seguroBien" class="form-control">
		                    <option value="{{$form_t8->selectComponente->id}}">{{$form_t8->selectComponente->opcion}}</option>
		                      @foreach($poseeComponente as $traeDir)
		                      	@if($traeDir->id != $form_t8->selectComponente->id)
		                        <option value="{{$traeDir->id}}">{{$traeDir->opcion}}</option> 
		                      	@endif
		                      @endforeach
		                  </select>
	            	</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
	            	<div class="col-md-4">
		                <li>Código del Registro de Seguro</li>
		                   @if($form_t8->codRegSeguro == '1')
		                    <input type="text" class="form-control" name="codRegSeguro" id="codRegSeguro" value="99" maxlength="10">
		                       
		                   @else
		                    <input type="text" class="form-control" name="codRegSeguro" id="codRegSeguro" value="{{$form_t8->codRegSeguro}}" maxlength="10">
		                   @endif
	                </div>
				</div>
			</div>


			<div class="row">
	              <div class="col-md-12 form-group"><br>
	                <center><button type="submit" class="btn btn-sm btn-info" name="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <b>Modificar</b></button>
	                
	                 <a href="{{ url('/regBienes') }}"  class="btn btn-sm btn-danger" ><i class="fa fa-reply " aria-hidden="true" title="Regresar"></i> <b>Regresar</b></a></center>  
	              </div>
	        </div>
		</div>
    </div>
</div>   
</form>
</body>
</html>

 	<script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/inputDinamicoanexosT.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
 	<script src="{{ asset('js/funcion.mask.decimal.js') }}"></script>
 	<script src="{{ asset('js/contadorTextarea.js') }}"></script>
 	<script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/selectBuscador.js') }}"></script>

 
