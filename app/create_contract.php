<?php //require("includes/session.php");?>
<?php //verificar_sesion(); ?>
<?php require_once("includes/connection_db.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	$errores = validar_campos_obligatorios(array("client1","membership_type","membership_number"));	
	
	if(!empty($errores))
	{
		header("Location: new_course.php");
		exit;
	}
?>
<?php

		$pending_payment_via =preparar_consulta(htmlentities($_POST["pending_payment_via"],ENT_QUOTES,"UTF-8")); 
		$membership_price = preparar_consulta(htmlentities($_POST["membership_price"],ENT_QUOTES,"UTF-8"));
		$pending_payment1 =preparar_consulta(htmlentities($_POST["pending_payment1"],ENT_QUOTES,"UTF-8"));
		$pending_payment2=preparar_consulta(htmlentities($_POST["pending_payment2"],ENT_QUOTES,"UTF-8")); 
		$initial_downpayment =preparar_consulta(htmlentities($_POST["initial_downpayment"],ENT_QUOTES,"UTF-8"));
		$shall_be_paid=preparar_consulta(htmlentities($_POST["shall_be_paid"],ENT_QUOTES,"UTF-8")); 
		$interest_rate = preparar_consulta(htmlentities($_POST["interest_rate"],ENT_QUOTES,"UTF-8"));
		$monthly_payment =preparar_consulta(htmlentities($_POST["monthly_payment"],ENT_QUOTES,"UTF-8"));	
		$month_year = preparar_consulta(htmlentities($_POST["month_year"],ENT_QUOTES,"UTF-8"));
		$days_of_week = preparar_consulta(htmlentities($_POST["days_of_week"],ENT_QUOTES,"UTF-8"));
		$rci_nights = preparar_consulta(htmlentities($_POST["rci_nights"],ENT_QUOTES,"UTF-8"));
		$rci_weeks = preparar_consulta(htmlentities($_POST["rci_weeks"],ENT_QUOTES,"UTF-8")); 
		
		$promissory_note =preparar_consulta(htmlentities($_POST["promissory_note"],ENT_QUOTES,"UTF-8"));
		
		$pending_balance = $price - $initial_downpayment;
		$interval_exchange =preparar_consulta(htmlentities($_POST["interval_exchange"],ENT_QUOTES,"UTF-8"));
		$annual_weeks_exchange = $interval_exchange/7;
		$included_brands = preparar_consulta(htmlentities($_POST["included_brands"],ENT_QUOTES,"UTF-8"));
		$rci_transaction_rate =preparar_consulta(htmlentities($_POST["rci_transaction_rate"],ENT_QUOTES,"UTF-8"));
		
		$membership_number = preparar_consulta(htmlentities($_POST["membership_number"],ENT_QUOTES,"UTF-8"));
		$term_of_year_letter =preparar_consulta(htmlentities($_POST["term_of_year_letter"],ENT_QUOTES,"UTF-8")); 
		$term_of_year_number=preparar_consulta(htmlentities($_POST["term_of_year_number"],ENT_QUOTES,"UTF-8")); 
		$membership_type =preparar_consulta(htmlentities($_POST["membership_type"],ENT_QUOTES,"UTF-8"));
		 	
		$client1= preparar_consulta(htmlentities($_POST["client1"],ENT_QUOTES,"UTF-8")); 
		$client2 = preparar_consulta(htmlentities($_POST["client2"],ENT_QUOTES,"UTF-8"));	
		$passport1=preparar_consulta(htmlentities($_POST["passport1"],ENT_QUOTES,"UTF-8")); 
		$passport2 = preparar_consulta(htmlentities($_POST["passport2"],ENT_QUOTES,"UTF-8"));	
		$address1 = preparar_consulta(htmlentities($_POST["address1"],ENT_QUOTES,"UTF-8"));	
		$address2=preparar_consulta(htmlentities($_POST["address2"],ENT_QUOTES,"UTF-8"));
		$state1 = preparar_consulta(htmlentities($_POST["state1"],ENT_QUOTES,"UTF-8"));	
		$state2=preparar_consulta(htmlentities($_POST["state2"],ENT_QUOTES,"UTF-8"));
		$home_phone1 = preparar_consulta(htmlentities($_POST["home_phone1"],ENT_QUOTES,"UTF-8"));	
		$home_phone2=preparar_consulta(htmlentities($_POST["home_phone2"],ENT_QUOTES,"UTF-8")); 
		$fax1 = preparar_consulta(htmlentities($_POST["fax1"],ENT_QUOTES,"UTF-8"));	
		$fax2=preparar_consulta(htmlentities($_POST["fax2"],ENT_QUOTES,"UTF-8")); 
		$nationality1 = preparar_consulta(htmlentities($_POST["nationality1"],ENT_QUOTES,"UTF-8")); 
		$nationality2=preparar_consulta(htmlentities($_POST["nationality2"],ENT_QUOTES,"UTF-8"));
		$civil_status1 = preparar_consulta(htmlentities($_POST["civil_status1"],ENT_QUOTES,"UTF-8")); 
		$civil_status2 = preparar_consulta(htmlentities($_POST["civil_status2"],ENT_QUOTES,"UTF-8")); 
		$city1 = preparar_consulta(htmlentities($_POST["city1"],ENT_QUOTES,"UTF-8"));
		$city2 = preparar_consulta(htmlentities($_POST["city2"],ENT_QUOTES,"UTF-8")); 
		$country1 = preparar_consulta(htmlentities($_POST["country1"],ENT_QUOTES,"UTF-8")); 
		$country2 = preparar_consulta(htmlentities($_POST["country2"],ENT_QUOTES,"UTF-8"));
		$work_phone1 = preparar_consulta(htmlentities($_POST["work_phone1"],ENT_QUOTES,"UTF-8"));	
		$work_phone2 = preparar_consulta(htmlentities($_POST["work_phone2"],ENT_QUOTES,"UTF-8"));	
		$email1 = preparar_consulta(htmlentities($_POST["email1"],ENT_QUOTES,"UTF-8"));	
		$email2 = preparar_consulta(htmlentities($_POST["email2"],ENT_QUOTES,"UTF-8"));	

	
	$consulta1 = "INSERT INTO personal_info (
				client1,client2,
				passport1,passport2,
				address1,address2,
				state1,state2,
				home_phone1,home_phone2,
				fax1,fax2,
				nationality1,nationality1,
				civil_status1,civil_status2,
				city1,city2,
				country1,country2,
				work_phone1,work_phone2,
				email1,email2				
				) VALUES (
				'{$client1}','{$client2}','{$passport1}','{$passport2}','{$address1}',
				'{$address2}','{$state1}','{$state2}','{$home_phone1}', '{$home_phone2}',
				'{$fax1}','{$fax2}','{$nationality1}','{$nationality2}','{$civil_status1}',
				'{$civil_status2}','{$city1}','{$city2}','{$country1}','{$country2}',
				'{$work_phone1}','{$work_phone2}','{$email1}','{$email2}'
				)";
				
	$consulta2 = "INSERT INTO financial_info (
				nombre,posicion,visibilidad
				) VALUES (
				'{$nombre}',{$posicion},{$visibilidad}
				)";
	if(mysqli_query($consulta,$conexion))
	{
		header("Location: contract.php");
		exit;
	}
	else
	{
		echo "No se ha podido crear el curso: " . mysql_error();	
	}
?>

<?php
	mysql_close($conexion);
?>