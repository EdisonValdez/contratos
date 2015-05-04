<?php 
	require_once("constants.php");
/*	$conexion = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
	if(!$conexion)
	{
		die("No hemos podido conectarnos a la base de datos: " . mysql_error());
	}
	
	$bd_seleccionada = mysql_select_db(DB_NAME,$conexion);
	if(!$bd_seleccionada)
	{
		die("No hemos podido seleccionar la base de datos: " . mysql_error());
	}*/
	
	function conectar(){
      if(!($data = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD))){
         return -1;
      }else{
         if(!(mysqli_select_db(DB_NAME, $data))){
            return -2;
         }else{
            return $data;
         }
      }
   }
?>