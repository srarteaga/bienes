<?php

use Illuminate\Database\Seeder;

class migracionGeneral extends Seeder
{
      public function run()
    {
      
      $dato = array('Administrador', 'Básico');

      foreach ($dato as $v) {
        DB::table('roles')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Registró', 'Modificó','Eliminó');

      foreach ($dato as $v) {
        DB::table('acciones')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Nacional', 'Internacional');

      foreach ($dato as $v) {
        DB::table('sel_proveedores')->insert([
           'opcion' => $v,

          ]);   
      }
        
      $datot2= array('Compra por Concurso Abierto','Compra por Concurso Cerrado');

        foreach ($datot2 as $v) {
           DB::table('sel_concurso')->insert([
          'opcion' => $v,

          ]);
        }

      $dato = array('Compra Directa (por consulta de Precio)');

      foreach ($dato as $v) {
        DB::table('sel_directa')->insert([
           'opcion' => $v,

          ]);   
      }

      foreach ($dato as $v) {
        DB::table('sel_confiscacion')->insert([
           'opcion' => $v,

          ]);   
      }

      foreach ($dato as $v) {
        DB::table('sel_dacion')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Donación');

      foreach ($dato as $v) {
        DB::table('sel_donacion')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Expropiación');

      foreach ($dato as $v) {
        DB::table('sel_expropiacion')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Permuta');

      foreach ($dato as $v) {
        DB::table('sel_permuta')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Transferencia');

      foreach ($dato as $v) {
        DB::table('sel_transferencia')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array('Adjudicación');

      foreach ($dato as $v) {
        DB::table('sel_adjudicacion')->insert([
           'opcion' => $v,

          ]);   
      }
        

      $dato = array("C.A. de Seguros Avila","C.N.A. de Seguros La Previsora","Mapfre La Seguridad C.A. de Seguros","Seguros Caracas de Liberty Mutual, C.A","Estar Seguros, S.A. (Antes Royal & Sun Alliance Seguros (Venezuela) S.A.)","Seguros Venezuela C.A","Seguros Provincial C.A","Adriática de Seguros, C.A","Seguros Carabobo, C.A","La Venezolana de Seguros y de Vida, C.A","Seguros Los Andes, C.A,","Seguros Nuevo Mundo S.A","Seguros Horizonte, C.A","C.A. de Seguros La Occidental","C.A. Seguros Catatumbo","Seguros La Fe C.A","C.A. de Seguros American International","Seguros Virgen del Valle, C.A","Seguros Federal, C.A. (Antes Seguros Federación C.A.)","La Mundial C.A. Venezolana de Seguros de Crédito","Mercantil Seguros , C.A","C.A. Seguros Guayana","La Oriental de Seguros C.A","Seguros Pirámide C.A","Seguros Universitas, C.A. (Antes Universitas de Seguros C.A.)","Interbank Seguros S.A","La Regional C.A. de Seguros","Multinacional de Seguros C.A","Zuma Seguros, C.A. (Antes Seguros Bancentro S.A.)","Seguros Constitución C.A. (Antes Seguros Sofitasa)","Seguros Comerciales Bolívar S.A","C.A. de Seguros La Internacional","Seguros Premier, C.A (antes Chubb de Venezuela)","Seguros Comerciales Bolívar S.A","C.A. de Seguros La Internacional","Seguros Premier, C.A (antes Chubb de Venezuela)","Seguros Corporativos C.A","Seguros Banvalor C.A","Proseguros, S.A. (antes Rescarven)","Seguros Altamira C.A","Seguros Canarias de Venezuela C.A","Banesco Seguros C.A","Seguros Caroní C.A","Universal de Seguros C.A","Aseguradora Nacional Unida Uniseguros, S.A","Hispana de Seguros C.A","Primus Seguros, C.A","Oceánica de Seguros, C.A (Antes Grupo Asegurador Previsional (Grasp), C.A.)","Seguros Qualitas C.A","Seguros La Vitalicia, C.A","Iberoamericana de Seguros, C.A","ZURICH SEGUROS S.A","Estar Seguros, S.A. (Antes Royal & Sun Alliance Seguros (Venezuela) S.A.)","Otra Compañía de Seguro");

      foreach ($dato as $v) {
        DB::table('sel_seguros')->insert([
           'opcion' => $v,

          ]);   
      }
        

      $dato = array("Individual","Colectiva");

      foreach ($dato as $v) {
        DB::table('sel_seguros1')->insert([
           'opcion' => $v,

          ]);   
      }
    	
    	$dato = array("Bolívares","Dólares","Euros","Otra Moneda");

    	foreach ($dato as $v) {
    		DB::table('sel_seguros2')->insert([
       	   'opcion' => $v,

       		]); 	
    	}
       	
        $dato = array("Si","No");

      foreach ($dato as $v) {
        DB::table('sel_seguros3')->insert([
           'opcion' => $v,

          ]);   
      }

       $dato = array("Total","Parcial","Otro tipo de cobertura");

      foreach ($dato as $v) {
        DB::table('sel_seguros4')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Administrativo","Uso Directo","Cuido Directo");

      foreach ($dato as $v) {
        DB::table('sel_responsables')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Administración","Atención Ciudadana","Auditoría","Comunicación y Relaciones Institucionales","Consultoría","Despacho del Vicepresidente","Dir. General","Instrucciones y Delegaciones Presidenciales","Planificación Estratégica y Presupuesto","RRHH","Seguimiento y Control","Seguridad Integral","Tecnología de la Información");

      foreach ($dato as $v) {
        DB::table('sel_responsables1')->insert([
           'opcion' => $v,

          ]);   
      }

       $dato = array("En uso","En comodato","En arrendamiento","En mantenimiento","En reparación","En proceso de disposición","En desuso por obsolescencia","En desuso por inservibilidad","En desuso por obsolescencia e inservibilidad","En almacén o Depósito para su asignación","Otro uso");

      foreach ($dato as $v) {
        DB::table('sel_estatusbien')->insert([
           'opcion' => $v,

          ]);   
      }

       $dato = array("Óptimo","Regular","Deteriorado","Averiado","Chatarra","No operativo","Otra condición física");

      foreach ($dato as $v) {
        DB::table('sel_condicionbien')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Días","Meses","Años",'99');

      foreach ($dato as $v) {
        DB::table('sel_garantiabien')->insert([
           'opcion' => $v,

          ]);   
      }


      $dato = array("Negro","Azul","Palo Rosa","Naranja","Verde","Beige","Cromático","Vinotinto","Gris / Negro","Plateado","Beige Australia","Plateado Ferroso","Perla","Beige Olimpico","Arena Metalizado","Plata","Rojo","Amarillo","Beige Duna","Marrón / Negro","Azul / Beige","Marrón / Beige","Verde Esmeralda","Plata Claro","Plateado Brillante","Marrón Pardillo Bi Capa","Gris Palmera","Dorado","Madera Natural","Negro / Amarillo Mostaza","Marrón","Blanco","Gris","Azul / Gris","Azul / Negro","Acero","Otro Color");

      foreach ($dato as $v) {
        DB::table('sel_colorbien')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Vehículos de transporte terrestre","Vehículos de transporte marítimo","Vehículos de transporte aéreo","Otra clase");

      foreach ($dato as $v) {
        DB::table('sel_clasebien')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Vacunos","Equinos","Caprinos","Porcinos","Aves","Búfalos","Peces","Otro tipo");

      foreach ($dato as $v) {
        DB::table('sel_tipoanimal')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Engorde","Ordeño","Doble propósito","Cría","Científicos","Educativos","Otro propósito");

      foreach ($dato as $v) {
        DB::table('sel_proposito')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Hectárea","Kilómetro Cuadrado","Metro Cuadrado","Centímetro Cuadrado","Milímetro Cuadrado","Tonelada","Kilogramo","Gramo","Libra","Metro Cúbico","Centímetro Cúbico","Litro","Mililitro","Kilometro","Metro","Centímetro","Milímetro","Otra medida");

      foreach ($dato as $v) {
        DB::table('sel_medidapeso')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Hembra","Macho");

      foreach ($dato as $v) {
        DB::table('sel_genero')->insert([
           'opcion' => $v,

          ]);   
      }

      #ANEXO T

      $dato = array("Residencial","Agrícola","Turístico","Comercial","Educativo","Asistencial","De oficina","Industrial","Otro uso");

      foreach ($dato as $v) {
        DB::table('sel_usos')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("Hembra","Macho");

      foreach ($dato as $v) {
        DB::table('sel_genero')->insert([
           'opcion' => $v,

          ]);   
      }

      #ANEXOS S

      $dato = array("Sede Principal","Puerto","Aeropuerto","Campamento","Taller","Almacén","Galpón","Otra Tipo de Sede o Lugar");

      foreach ($dato as $v) {
        DB::table('sel_sedes')->insert([
           'opcion' => $v,

          ]);   
      }

      $dato = array("PB","1","2","3","4");

      foreach ($dato as $v) {
        DB::table('sel_piso')->insert([
           'opcion' => $v,

          ]);   
      }

      
      $dato = array(
        array("001","Afganistán"),
        array("002","American Samoa"),
        array("003","Alemania"),
        array("004","Albania"),
        array("005","Andorra"),
        array("006","Angola"),
        array("007","Anguila"),
        array("008","Antigua and Barbuda"),
        array("009","Antillas Holandesas"),
        array("010","Antártida"),
        array("011","Arabia Saudita"),
        array("012","Argelia"),
        array("013","Argentina"),
        array("014","Armenia"),
        array("015","Aruba"),
        array("016","Australia"),
        array("017","Austria"),
        array("018","Azerbaiyán"),
        array("019","Bahamas"),
        array("020","Bahréin"),
        array("021","Bangladesh"),
        array("022","Barbados"),
        array("023","Belice"),
        array("024","Benín"),
        array("025","Bermuda"),
        array("026","Bielorrusia"),
        array("027","Bolivia"),
        array("028","Bosnia y Herzegovina"),
        array("029","Botsuana"),
        array("030","Bouvet Island"),
        array("031","Brasil"),
        array("032","British India Ocean Territory"),
        array("033","Brunei Darussalam"),
        array("034","Bulgaria"),
        array("035","Burkina Faso"),
        array("036","Burundi"),
        array("037","Bután"),
        array("038","Bélgica"),
        array("039","Cabo Verda"),
        array("040","Camboya"),
        array("041","Camerún"),
        array("042","Canada"),
        array("043","Chad"),
        array("044","Chile"),
        array("045","China"),
        array("046","Chipre"),
        array("047","Colombia"),
        array("048","Comores"),
        array("049","Congo"),
        array("050","Corea del Norte"),
        array("051","Corea del Sur"),
        array("052","Costa Rica"),
        array("053","Cote D Ivoire"),
        array("054","Croacia"),
        array("055","Cuba"),
        array("056","Dinamarca"),
        array("057","Djibouti"),
        array("058","Dominica"),
        array("059","East Timor"),
        array("060","Ecuador"),
        array("061","Egipto"),
        array("062","El Salvador"),
        array("063","El Vaticano"),
        array("064","Emiratos Arabes Unidos"),
        array("065","Eritrea"),
        array("066","Eslovaquia"),
        array("067","Eslovenia"),
        array("068","España"),
        array("069","Estados Unidos"),
        array("070","Estonia"),
        array("071","Etiopia"),
        array("072","Fiji"),
        array("073","Filipinas"),
        array("074","Finlandia"),
        array("075","Francia"),
        array("076","French Guiana"),
        array("077","French Polynesia"),
        array("078","French Southern Territories"),
        array("079","Gabon"),
        array("080","Gambia"),
        array("081","Georgia"),
        array("082","Ghana"),
        array("083","Gibraltar"),
        array("084","Granada"),
        array("085","Grecia"),
        array("086","Groenlandia"),
        array("087","Guadalupe"),
        array("088","Guam"),
        array("089","Guatemala"),
        array("090","Guinea"),
        array("091","Guinea Ecuatorial"),
        array("092","Guinea-Bissau"),
        array("093","Guyana"),
        array("094","Haití"),
        array("095","Heard Island and McDonald Isla"),
        array("096","Holanda"),
        array("097","Honduras"),
        array("098","Hong Kong"),
        array("099","Hungría"),
        array("100","India"),
        array("101","Indonesia"),
        array("102","Iraq"),
        array("103","Irlanda"),
        array("104","Islas Cocos"),
        array("105","Isla Christmas"),
        array("106","Islandia"),
        array("107","Islas Caimána"),
        array("108","Islas Cook"),
        array("109","Islas Feroe"),
        array("110","Islas Malvinas"),
        array("111","Islas Marshall"),
        array("112","Islas Mauricio"),
        array("113","Islas Salomón"),
        array("114","Islas Sándwich"),
        array("115","Islas Turks y Caicos"),
        array("116","Islas Wallis y Futuna"),
        array("117","Israel"),
        array("118","Italia"),
        array("119","Jamaica"),
        array("120","Japón"),
        array("121","Jordania"),
        array("122","Kazakhstan"),
        array("123","Kenia"),
        array("124","Kiribati"),
        array("125","Kuwait"),
        array("126","Kyrgyzstan"),
        array("127","Laos"),
        array("128","Latvia"),
        array("129","Lesoto"),
        array("130","Liberia"),
        array("131","Libia"),
        array("132","Liechtenstein"),
        array("133","Lituania"),
        array("134","Luxemburgo"),
        array("135","Líbano"),
        array("136","Macao"),
        array("137","Macedonia"),
        array("138","Madagascar"),
        array("139","Malasia"),
        array("140","Malaui"),
        array("141","Maldivas"),
        array("142","Malta"),
        array("143","Mali"),
        array("144","Marruecos"),
        array("145","Martinique"),
        array("146","Mauritania"),
        array("147","Mayotte"),
        array("148","Micronesia"),
        array("149","Moldavia"),
        array("150","Mongolia"),
        array("151","Montserrat"),
        array("152","Mozambique"),
        array("153","Myanmar"),
        array("154","México"),
        array("155","Mónaco"),
        array("156","Namibia"),
        array("157","Nauru"),
        array("158","Nepal"),
        array("159","Nicaragua"),
        array("160","Nigeria"),
        array("161","Niue"),
        array("162","Norfolk Island"),
        array("163","Northern Mariana Islands"),
        array("164","Noruega"),
        array("165","Nueva Caledonia"),
        array("166","Nueva ZelandaNiger"),
        array("167","Omán"),
        array("168","Pakistán"),
        array("169","Palau"),
        array("170","Palestinian Territory"),
        array("171","Panamá"),
        array("172","Papua Nueva Guinea"),
        array("173","Paraguay"),
        array("174","Perú"),
        array("175","Pitcairn"),
        array("176","Polonia"),
        array("177","Portugal"),
        array("178","Puerto Rico"),
        array("179","Qatar"),
        array("180","Reino Unido"),
        array("181","Republica Centroafricana"),
        array("182","Republica Checa"),
        array("183","Republica Democrática del Cong"),
        array("184","Republica Dominicana"),
        array("185","Republica Islámica de Irán"),
        array("186","Ruanda"),
        array("187","Rumania"),
        array("188","Rusian"),
        array("189","Saint Kitts and Nevis"),
        array("190","Saint Pierre y Miquelon"),
        array("191","Samoa"),
        array("192","San Marino"),
        array("193","San Vicente y Las Granadinas"),
        array("194","Santa Elena"),
        array("195","Santa Lucia"),
        array("196","Sao Tome and Príncipe"),
        array("197","Senegal"),
        array("198","Serbia y Montenegro"),
        array("199","Seychelles"),
        array("200","Sierra Leona"),
        array("201","Singapur"),
        array("202","Siria"),
        array("203","Somalia"),
        array("204","Sri Lanka"),
        array("205","Suazilandia"),
        array("206","Sudáfrica"),
        array("207","Sudan"),
        array("208","Suecia"),
        array("209","Suiza"),
        array("210","Surinam"),
        array("211","Salvar and Jan Mayen"),
        array("212","Tailandia"),
        array("213","Taiwán"),
        array("214","Tajikistan"),
        array("215","Tanzania"),
        array("216","Togo"),
        array("217","Tonga"),
        array("218","Toquelau"),
        array("219","Trinidad y Tobago"),
        array("220","Turkmenistan"),
        array("221","Turquía"),
        array("222","Tuvalu"),
        array("223","Túnez"),
        array("224","Ucrania"),
        array("225","Uganda"),
        array("226","United States Minor Outlying I"),
        array("227","Uruguay"),
        array("228","Uzbekistan"),
        array("229","Vanuatu"),
        array("230","Venezuela"),
        array("231","Vietnam"),
        array("232","Virgin Islands British"),
        array("233","Virgin Islands U.S."),
        array("234","Western Sahara"),
        array("235","Yemen"),
        array("236","Zaire"),
        array("237","Zambia"),
        array("238","Zimbabue"),
        array("239","Otro País"),
          );

      foreach ($dato as $v) {
        DB::table('sel_paises')->insert([
           'codPais' => $v[0],
           'pais' => $v[1],
        

          ]); 
      }

      $dato = array(
        array("10101","Parroquia Altagracia"),
        array("10102","Parroquia Antímano"),
        array("10103","Parroquia Candelaria"),
        array("10104","Parroquia Caricuao"),
        array("10105","Parroquia Catedral"),
        array("10106","Parroquia Coche"),
        array("10107","Parroquia El Junquito"),
        array("10108","Parroquia EL Paraíso"),
        array("10109","Parroquia El Recreo"),
        array("10110","Parroquia El Valle"),
        array("10111","Parroquia La Pastora"),
        array("10112","Parroquia La Vega"),
        array("10113","Parroquia Macarao"),
        array("10114","Parroquia San Agustín"),
        array("10115","Parroquia San Bernardino"),
        array("10116","Parroquia San José"),
        array("10117","Parroquia San Juan"),
        array("10118","Parroquia San Pedro"),
        array("10119","Parroquia Santa Rosalía"),
        array("10120","Parroquia Santa Teresa"),
        array("10121","Parroquia Sucre"),
        array("10122","Parroquia 23 de Enero"),
        array("20101","Parroquia Huachamacare"),
        array("20102","Parroquia Marawaka"),
        array("20103","Parroquia Mavaca"),
        array("20104","Parroquia Sierra Parima"),
        array("20201","Parroquia Ucata"),
        array("20202","Parroquia Yapacana"),
        array("20203","Parroquia Caname"),
        array("20301","Parroquia Fernando Girón Tovar"),
        array("20302","Parroquia Luis Alberto Gómez"),
        array("20303","Parroquia Parhueña"),
        array("20304","Parroquia Platanilla"),
        array("20401","Parroquia Samariapo"),
        array("20402","Parroquia Sipapo"),
        array("20403","Parroquia Munduapo"),
        array("20404","Parroquia Guayapo"),
        array("20501","Parroquia Victorino"),
        array("20502","Parroquia Comunidad"),
        array("20601","Parroquia Alto Ventuari"),
        array("20602","Parroquia Medio Ventuari"),
        array("20603","Parroquia Bajo Ventuari"),
        array("20701","Parroquia Solano"),
        array("20702","Parroquia Casiquiare"),
        array("20703","Parroquia Cocuy"),
        array("30101","Parroquia Capital Anaco"),
        array("30102","Parroquia San Joaquín"),
        array("30201","Parroquia Capital Aragua"),
        array("30202","Parroquia Cachipo"),
        array("30301","Parroquia Capital Fernando de Peñalver"),
        array("30302","Parroquia San Miguel"),
        array("30303","Parroquia Sucre"),
        array("30401","Parroquia Capital Francisco del Carmen Carvajal"),
        array("30402","Parroquia Santa Bárbara"),
        array("30501","Parroquia Capital Francisco de Miranda"),
        array("30502","Parroquia Atapirire"),
        array("30503","Parroquia Boca del Pao"),
        array("30504","Parroquia El Pao"),
        array("30505","Parroquia Mácura"),
        array("30601","Parroquia Capital Guanta"),
        array("30602","Parroquia Chorrerón"),
        array("30701","Parroquia Capital Independencia"),
        array("30702","Parroquia Mamo"),
        array("30801","Parroquia Capital Puerto La Cruz"),
        array("30802","Parroquia Pozuelos"),
        array("30901","Parroquia Capital Juan Manuel Cajigal"),
        array("30902","Parroquia San Pablo"),
        array("31001","Parroquia Capital José Gregorio Monagas"),
        array("31002","Parroquia Piar"),
        array("31003","Parroquia San Diego de Cabrutica"),
        array("31004","Parroquia Santa Clara"),
        array("31005","Parroquia Uverito"),
        array("31006","Parroquia Zuata"),
        array("31101","Parroquia Capital Libertad"),
        array("31102","Parroquia El Carito"),
        array("31103","Parroquia Santa Inés"),
        array("31201","Parroquia Capital Manuel Ezequiel Bruzual"),
        array("31202","Parroquia Guanape"),
        array("31203","Parroquia Sabana de Uchire"),
        array("31301","Parroquia Capital Pedro María Freites"),
        array("31302","Parroquia Libertador"),
        array("31303","Parroquia Santa Rosa"),
        array("31304","Parroquia Urica"),
        array("31401","Parroquia Capital Píritu"),
        array("31402","Parroquia San Francisco"),
        array("31501","Parroquia CM San José de Guanipa"),
        array("31601","Parroquia Capital San Juan de Capistrano"),
        array("31602","Parroquia Boca de Chávez"),
        array("31701","Parroquia Capital Santa Ana"),
        array("31702","Parroquia Pueblo Nuevo"),
        array("31801","Parroquia El Carmen"),
        array("31802","Parroquia San Cristóbal"),
        array("31803","Parroquia Bergantín"),
        array("31804","Parroquia Caigua"),
        array("31805","Parroquia El Pilar"),
        array("31806","Parroquia Naricual"),
        array("31901","Parroquia Edmundo Barrios"),
        array("31902","Parroquia Miguel Otero Silva"),
        array("32001","Parroquia Capital Sir Arthur Mc Gregor"),
        array("32002","Parroquia Tomas Alfaro Calatrava"),
        array("32101","Parroquia Capital Diego Bautista Urbaneja"),
        array("32102","Parroquia El Morro"),
        array("40101","Parroquia Urbana Achaguas"),
        array("40102","Parroquia Apurito"),
        array("40103","Parroquia El Yagual"),
        array("40104","Parroquia Guachara"),
        array("40105","Parroquia Mucuritas"),
        array("40106","Parroquia Queseras del Medio"),
        array("40201","Parroquia Urbana Biruaca"),
        array("40301","Parroquia Urbana Bruzual"),
        array("40302","Parroquia Mantecal"),
        array("40303","Parroquia Quintero"),
        array("40304","Parroquia Rincón Hondo"),
        array("40305","Parroquia San Vicente"),
        array("40401","Parroquia Urbana Guasdualito"),
        array("40402","Parroquia Arismendi"),
        array("40403","Parroquia El Amparo"),
        array("40404","Parroquia San Camilo"),
        array("40405","Parroquia Urdaneta"),
        array("40501","Parroquia Urbana San Juan de Payara"),
        array("40502","Parroquia Codazzi"),
        array("40503","Parroquia Cunaviche"),
        array("40601","Parroquia Urbana Elorza"),
        array("40602","Parroquia La Trinidad"),
        array("40701","Parroquia Urbana San Fernando"),
        array("40702","Parroquia El Recreo"),
        array("40703","Parroquia Peñalver"),
        array("40704","Parroquia San Rafael de Atamaica"),
        array("50101","Parroquia CM San Mateo"),
        array("50201","Parroquia Camatagua"),
        array("50202","Parroquia Carmen de Cura"),
        array("50301","Parroquia Choroní"),
        array("50302","Parroquia Andrés Eloy Blanco"),
        array("50303","Parroquia Joaquín Crespo"),
        array("50304","Parroquia Parroquia José Casanova Godoy"),
        array("50305","Parroquia Las Delicias"),
        array("50306","Parroquia Los Tacariguas"),
        array("50307","Parroquia Madre María de San José"),
        array("50308","Parroquia José Pedro Ovalles"),
        array("50401","Parroquia CM Santa Cruz"),
        array("50501","Parroquia Castor Nienes Ríos"),
        array("50502","Parroquia La Guacamaya"),
        array("50503","Parroquia Pao de Zárate"),
        array("50504","Parroquia Urbana Zuata"),
        array("50505","Parroquia Juan Vicente Bolívar"),
        array("50601","Parroquia CM El Consejo"),
        array("50701","Parroquia Libertador"),
        array("50702","Parroquia San Martín de Porras"),
        array("50801","Parroquia Caña de Azúcar"),
        array("50802","Parroquia Mario Briceño Iragorry"),
        array("50901","Parroquia Güiripa"),
        array("50902","Parroquia Ollas de Caramacate"),
        array("50903","Parroquia Valle Morín"),
        array("50904","Parroquia San Casimiro"),
        array("51101","Parroquia CM San Sebastián"),
        array("51101","Parroquia Alfredo Pacheco Miranda"),
        array("51102","Parroquia Arévalo Aponte"),
        array("51103","Parroquia Chuao"),
        array("51104","Parroquia Samán de Guere"),
        array("51105","Parroquia Santigo Mariño"),
        array("51201","Parroquia Tiara"),
        array("51202","Parroquia Santos Michelena"),
        array("51301","Parroquia Bella Vista"),
        array("51302","Parroquia Sucre"),
        array("51401","Parroquia La Colonia Tovar"),
        array("51501","Parroquia Las Peñitas"),
        array("51502","Parroquia San Francisco de Cara"),
        array("51503","Parroquia Taguay"),
        array("51503","Parroquia Urdaneta"),
        array("51601","Parroquia Augusto Mijares"),
        array("51602","Parroquia San Francisco de Asís"),
        array("51603","Parroquia Valles de Tucunemo"),
        array("51604","Parroquia Magdaleno"),
        array("51605","Parroquia Zamora"),
        array("51701","Parroquia Monseñor Feliciano González"),
        array("51702","Parroquia Francisco Linares Alcántara"),
        array("51703","Parroquia Francisco de Miranda"),
        array("51801","Parroquia Ocumare de la Costa"),
        array("60101","Parroquia Sabaneta"),
        array("60102","Parroquia Rodríguez Domínguez"),
        array("60201","Parroquia Ticoporo"),
        array("60202","Parroquia Andrés Bello"),
        array("60203","Parroquia Nicolás Pulido"),
        array("60301","Parroquia Arismendi"),
        array("60302","Parroquia Guadarrama"),
        array("60303","Parroquia La Unión"),
        array("60304","Parroquia San Antonio"),
        array("60401","Parroquia Barinas"),
        array("60402","Parroquia Alfredo Arvelo Larriva"),
        array("60403","Parroquia San Silvestre"),
        array("60404","Parroquia Santa Inés"),
        array("60405","Parroquia Santa Lucía"),
        array("60406","Parroquia Torunos"),
        array("60407","Parroquia El Carmen"),
        array("60408","Parroquia Rómulo Betancourt"),
        array("60409","Parroquia Corazón de Jesús"),
        array("60410","Parroquia Ramón Ignacio Méndez"),
        array("60411","Parroquia Alto Barinas"),
        array("60412","Parroquia Manuel Palacio Fajardo"),
        array("60413","Parroquia Juan Antonio Rodríguez Domínguez"),
        array("60414","Parroquia Dominga Ortiz de Páez"),
        array("60501","Parroquia Barinitas"),
        array("60502","Parroquia Altamira"),
        array("60503","Parroquia Calderas"),
        array("60601","Parroquia Barrancas"),
        array("60602","Parroquia El Socorro"),
        array("60603","Parroquia Masparrito"),
        array("60701","Parroquia Santa Bárbara"),
        array("60702","Parroquia José Ignacio Del Pumar"),
        array("60703","Parroquia Pedro Briceño Méndez"),
        array("60704","Parroquia Ramón Ignacio Méndez"),
        array("60801","Parroquia Obispos"),
        array("60802","Parroquia El Real"),
        array("60803","Parroquia La Luz"),
        array("60804","Parroquia Los Guasimitos"),
        array("60901","Parroquia Ciudad Bolivia"),
        array("60902","Parroquia Ignacio Briceño"),
        array("60903","Parroquia José Félix Ribas"),
        array("60904","Parroquia Páez"),
        array("61001","Parroquia Libertad"),
        array("61002","Parroquia Dolores"),
        array("61003","Parroquia Palacios Fajardo"),
        array("61004","Parroquia Santa Rosa"),
        array("61005","Parroquia Simón Rodríguez"),
        array("61101","Parroquia Ciudad de Nutrias"),
        array("61102","Parroquia El Regalo"),
        array("61103","Parroquia Puerto de Nutrias"),
        array("61104","Parroquia Santa Catalina"),
        array("61105","Parroquia Simón Bolívar"),
        array("61201","Parroquia El Cantón"),
        array("61202","Parroquia Santa Cruz de Guacas"),
        array("61203","Parroquia Puerto Vivas"),
        array("70101","Parroquia Cachamay"),
        array("70102","Parroquia Chirica"),
        array("70103","Parroquia Dalla Costa"),
        array("70104","Parroquia Once de Abril"),
        array("70105","Parroquia Simón Bolívar"),
        array("70106","Parroquia Unare"),
        array("70107","Parroquia Universidad"),
        array("70108","Parroquia Vista al Sol"),
        array("70109","Parroquia Pozo Verde"),
        array("70110","Parroquia Yocoima"),
        array("70201","Sección Capital Cedeño"),
        array("70202","Parroquia Altagracia"),
        array("70203","Parroquia Ascensión Farreras"),
        array("70204","Parroquia Guaniamo"),
        array("70205","Parroquia La Urbana"),
        array("70206","Parroquia Pijiguaos"),
        array("70401","Sección Capital Gran Sabana"),
        array("70402","Parroquia Ikabarú"),
        array("70501","Parroquia Agua Salada"),
        array("70502","Parroquia Catedral"),
        array("70503","Parroquia José Antonio Páez"),
        array("70504","Parroquia La Sabanita"),
        array("70505","Parroquia Marhuanta"),
        array("70506","Parroquia Vista Hermosa"),
        array("70507","Parroquia Orinoco"),
        array("70508","Parroquia Panapana"),
        array("70509","Parroquia Zea"),
        array("70601","Sección Capital Piar"),
        array("70602","Parroquia Andrés Eloy Blanco"),
        array("70603","Parroquia Pedro Cova"),
        array("70701","Sección Capital Raúl Leoni"),
        array("70702","Parroquia Barceloneta"),
        array("70703","Parroquia San Francisco"),
        array("70704","Parroquia Santa Bárbara"),
        array("70801","Sección Capital Roscio"),
        array("70802","Parroquia Salom"),
        array("70901","Sección Capital Sifontes"),
        array("70902","Parroquia Dalla Costa"),
        array("70903","Parroquia San Isidro"),
        array("71001","Sección Capital Sucre"),
        array("71002","Parroquia Aripao"),
        array("71003","Parroquia Guarataro"),
        array("71004","Parroquia Las Majadas"),
        array("71005","Parroquia Moitaco"),
        array("80101","Parroquia Urbana Bejuma"),
        array("80102","Parroquia No Urbana Canoabo"),
        array("80103","Parroquia No Urbana Simón Bolívar"),
        array("80201","Parroquia Urbana Guigue"),
        array("80202","Parroquia No Urbana Belén"),
        array("80203","Parroquia No Urbana Tacarigua"),
        array("80301","Parroquia Urbana Aguas Calientes"),
        array("80302","Parroquia Urbana Mariara"),
        array("80401","Parroquia Urbana Ciudad Alianza"),
        array("80402","Parroquia Urbana Guacara"),
        array("80403","Parroquia No Urbana Yagua"),
        array("80501","Parroquia Urbana Morón"),
        array("80502","Parroquia No Urbana Urama"),
        array("80601","Parroquia Urbana Tocuyito"),
        array("80602","Parroquia Urbana Independencia"),
        array("80701","Parroquia Urbana Los Guayos"),
        array("80801","Parroquia Urbana Miranda"),
        array("80901","Parroquia Urbana Montalbán"),
        array("81001","Parroquia Urbana Naguanagua"),
        array("81101","Parroquia Urbana Bartolomé Salom"),
        array("81102","Parroquia Urbana Democracia"),
        array("81103","Parroquia Urbana Fraternidad"),
        array("81104","Parroquia Urbana Goaigoaza"),
        array("81105","Parroquia Urbana Juan José Flores"),
        array("81106","Parroquia Urbana Unión"),
        array("81107","Parroquia No Urbana Borburata"),
        array("81108","Parroquia No Urbana Patanemo"),
        array("81201","Parroquia Urbana San Diego"),
/*me que de en la pagina 10 de parroquias anexoE-3*/
          );

      foreach ($dato as $v) {
        DB::table('sel_parroquias')->insert([
           'codParroquia' => $v[0],
           'parroquia' => $v[1],
      

          ]); 
      }

      $dato = array(
        array("001","Caracas"),
        array("002","Otra Ciudad"),
          );

      foreach ($dato as $v) {
        DB::table('sel_ciudad')->insert([
           'codCiudad' => $v[0],
           'ciudad' => $v[1],
      

          ]); 
      }




    }
}