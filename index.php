
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MEMBERSHIP CONTRACT</title>
<style>
body{
	margin: 200px;
	text-align: left;
	}
.margin-1 {
	margin: 50px 150px;}
	
.body{
	text-justify:auto;
	}
.underlining{
	text-decoration:underline;
	}	
.bloque{
		inline-box-align;
				}
.raya{
	border-bottom: 1px solid black;
}
.title{
	text-align:center;}
p{text-align:justify;}
input[type="text"] { font-weight:bold; border: 1px; background:#f5f5f5; }
input[type="text"]:hover{background:#c9c9c9; autocomplete:on; autofocus:autofocus; text-align:center;}
input[type="number"] { border: 1px; }
input[type="number"]:hover{background:#f5f5f5;}
	
	table{
		border-collapse:collapse;
		}
		td {
    text-align: left;
}
table {
    width: 100%;
}
</style>
</head>

<body >
<?php 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	    $pending_payment_via =""; $price = "";$pending_payment1 ="";
		$pending_payment2=""; $shall_be_paid=""; $initial_downpayment ="";
		$shall_be_paid=""; 	
		$month_year = 12;
		$days_of_week = 7;
		$rci_nights = "";
		$rci_weeks = ""; 
		
		$promissory_note ="";
		$interest_rate = "";
		$pending_via = "";
		$pending_balance = $price - $initial_downpayment;
		$interval_exchange ="";
		$annual_weeks_exchange = $interval_exchange/7;
		$included_brands = "";
		$rci_transaction_rate ="";
		$membership_number = "";
		$term_of_year_letter =""; $term_of_year_number=""; $membership_type ="";
		$interval_exchange = "";	$client1= ""; $client2 = "";	
		$passport1=""; $passport2 = "";	$address1 = "";	
		$address2=""; $state1 = "";	$state2="";
		$home_phone1 = "";	$home_phone2=""; $fax1 = "";	
		$fax2=""; $nationality1 = ""; $nationality2="";
		$civil_status1 = ""; $civil_status2 = ""; $city1 = "";
		$city2 = ""; $country1 = ""; $country2 = "";
		$work_phone1 = "";	$work_phone2 = "";	$email1 = "";	
		$email2 = "";	
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST['pending_payment_via'])){
				$pending_payment_via = '';					
				}else{
					$pending_payment_via = test_input($_POST["pending_payment_via"]);
				}
				
				if(empty($_POST['interest_rate'])){
				$interest_rate = 0;					
				}else{
					$interest_rate = test_input($_POST["interest_rate"]);
				}
				
				if(empty($_POST['pending_balance'])){
				$pending_balance = '';					
				}else{
					$pending_balance = test_input($_POST["pending_balance"]);
				}
				
			if(empty($_POST['price'])){
				$price = '';					
				}else{
					$price = test_input($_POST["price"]);
				}
				
				if(empty($_POST['initial_downpayment'])){
				$initial_downpayment = '';					
				}else{
					$initial_downpayment = test_input($_POST["initial_downpayment"]);
				}
				
			if(empty($_POST['pending_payment1'])){
				$pending_payment1 = 0.00;					
				}else{
					$pending_payment1 = test_input($_POST["pending_payment1"]);
				}
				
				if(empty($_POST['pending_via'])){
				$pending_via = 'N/A';					
				}else{
					$pending_via = test_input($_POST["pending_via"]);
				}
				
				if(empty($_POST['rci_transaction_rate'])){
				$rci_transaction_rate = '';					
				}else{
					$rci_transaction_rate = test_input($_POST["rci_transaction_rate"]);
				}
				
			if(empty($_POST['pending_payment2'])){
				$pending_payment2 = 0.00;					
				}else{
					$pending_payment2 = test_input($_POST["pending_payment2"]);
				}
				
			if(empty($_POST['shall_be_paid'])){
				$shall_be_paid = '';					
				}else{
					$shall_be_paid = test_input($_POST["shall_be_paid"]);
				}
			if(empty($_POST['first_monthly_payment'])){
				$first_monthly_payment = '';					
				}else{
					$first_monthly_payment = test_input($_POST["first_monthly_payment"]);
				}
				
			if(empty($_POST['promissory_note'])){
				$promissory_note = '';					
				}else{
					$promissory_note = test_input($_POST["promissory_note"]);
				}
				
			if(empty($_POST['term_of_year_letter'])){
				$term_of_year_letter = '';					
				}else{
					$term_of_year_letter = test_input($_POST["term_of_year_letter"]);
				}
				
			if(empty($_POST['term_of_year_number'])){
				$term_of_year_number = '';					
				}else{
					$term_of_year_number = test_input($_POST["term_of_year_number"]);
				}
				
		    if(empty($_POST['included_brands'])){
				$included_brands = '';					
				}else{
					$included_brands = test_input($_POST["included_brands"]);
				}		
				
			if(empty($_POST['membership_type'])){
				$membership_type = '';					
				}else{
					$membership_type = test_input($_POST["membership_type"]);
				}
				
			if(empty($_POST['interval_exchange'])){
				$interval_exchange = '';					
				}else{
					$interval_exchange = test_input($_POST["interval_exchange"]);
				}
				
				if(empty($_POST['rci_nights'])){
				$rci_nights = '';					
				}else{
					$rci_nights = test_input($_POST["rci_nights"]);
				}
				
			if(empty($_POST['client1'])){
				$client1 = '';					
				}else{
					$client1 = test_input($_POST["client1"]);
				}
				
			if(empty($_POST['client2'])){
				$client2 = '';					
				}else{
					$client2 = test_input($_POST["client2"]);
				}
				
			if(empty($_POST['$membership_number'])){
				$$membership_number = '';					
				}else{
					$$membership_number = test_input($_POST["$membership_number"]);
				}
				
			
			if(empty($_POST['passport1'])){
				$passport1 = '';					
				}else{
					$passport1 = test_input($_POST["passport1"]);
				}
				
				if(empty($_POST['passport2'])){
				$passport2 = '';					
				}else{
					$passport2 = test_input($_POST["passport2"]);
				}
				
				if(empty($_POST['term_of_year_letter'])){
				$term_of_year_letter = '';					
				}else{
					$term_of_year_letter = test_input($_POST["term_of_year_letter"]);
				}
				
				if(empty($_POST['term_of_year_number'])){
				$term_of_year_number = '';					
				}else{
					$term_of_year_number = test_input($_POST["term_of_year_number"]);
				}
				
				
				if(empty($_POST['membership_type'])){
				$membership_type = '';					
				}else{
					$membership_type = test_input($_POST["membership_type"]);
				}
				
				if(empty($_POST['interval_exchange'])){
				$interval_exchange = '';					
				}else{
					$interval_exchange = test_input($_POST["interval_exchange"]);
				}
				
				if(empty($_POST['monthly_payments'])){
				$monthly_payments = '';					
				}else{
					$monthly_payments = test_input($_POST["monthly_payments"]);
				}
				
				if(empty($_POST['client1'])){
				$client1 = '';					
				}else{
					$client1 = test_input($_POST["client1"]);
				}
				
				if(empty($_POST['client2'])){
				$client2 = '';					
				}else{
					$client2 = test_input($_POST["client2"]);
				}
				
				if(empty($_POST['passport1'])){
				$passport1 = '';					
				}else{
					$passport1 = test_input($_POST["passport1"]);
				}
				
				if(empty($_POST['passport2'])){
				$passport2 = '';					
				}else{
					$passport2 = test_input($_POST["passport2"]);
				}
				
				if(empty($_POST['address1'])){
				$address1 = '';					
				}else{
					$address1 = test_input($_POST["address1"]);
				}
				
				if(empty($_POST['address2'])){
				$address2 = '';					
				}else{
					$address2 = test_input($_POST["address2"]);
				}
				
				if(empty($_POST['state1'])){
				$state1 = '';					
				}else{
					$state1 = test_input($_POST["state1"]);
				}
				
				if(empty($_POST['state2'])){
				$state2 = '';					
				}else{
					$state2 = test_input($_POST["state2"]);
				}
				
				if(empty($_POST['home_phone1'])){
				$home_phone1 = '';					
				}else{
					$home_phone1 = test_input($_POST["home_phone1"]);
				}
				
				if(empty($_POST['home_phone2'])){
				$home_phone2 = '';					
				}else{
					$home_phone2 = test_input($_POST["home_phone2"]);
				}
				
				if(empty($_POST['fax1'])){
				$fax1 = '';					
				}else{
					$fax1 = test_input($_POST["fax1"]);
				}
				
				if(empty($_POST['fax2'])){
				$fax2 = '';					
				}else{
					$fax2 = test_input($_POST["fax2"]);
				}
				
				if(empty($_POST['nationality1'])){
				$nationality1 = '';					
				}else{
					$nationality1 = test_input($_POST["nationality1"]);
				}
				
				if(empty($_POST['nationality2'])){
				$nationality2 = '';					
				}else{
					$nationality2 = test_input($_POST["nationality2"]);
				}
				
				if(empty($_POST['civil_status1'])){
				$civil_status1 = '';					
				}else{
					$civil_status1 = test_input($_POST["civil_status1"]);
				}
				
				if(empty($_POST['civil_status2'])){
				$civil_status2 = '';					
				}else{
					$civil_status2 = test_input($_POST["civil_status2"]);
				}
				
				if(empty($_POST['city1'])){
				$city1 = '';					
				}else{
					$city1 = test_input($_POST["city1"]);
				}
				
				if(empty($_POST['city2'])){
				$city2 = '';					
				}else{
					$city2 = test_input($_POST["city2"]);
				}
		
		
				if(empty($_POST['country1'])){
				$country1 = '';					
				}else{
					$country1 = test_input($_POST["country1"]);
				}
				
				if(empty($_POST['country2'])){
				$country2 = '';					
				}else{
					$country2 = test_input($_POST["country2"]);
				}
				
				if(empty($_POST['rci_weeks'])){
				$rci_weeks = '';					
				}else{
					$rci_weeks = test_input($_POST["rci_weeks"]);
				}
				
		
				
				if(empty($_POST['work_phone1'])){
				$work_phone1 = '';					
				}else{
					$work_phone1 = test_input($_POST["work_phone1"]);
				}
				
				if(empty($_POST['work_phone2'])){
				$work_phone2 = '';					
				}else{
					$work_phone2 = test_input($_POST["work_phone2"]);
				}
		
				
				if(empty($_POST['email1'])){
				$email1 = '';					
				}else{
					$email1 = test_input($_POST["email1"]);
				}
				
				if(empty($_POST['email2'])){
				$email2 = '';					
				}else{
					$email2 = test_input($_POST["email2"]);
				}
				if(empty($_POST['membership_number'])){
				$membership_number = '';					
				}else{
					$membership_number = test_input($_POST["membership_number"]);
				}
	
		}

?><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <table>
  <tr><td width="33%">&nbsp;</td><td width="33%">&nbsp;</td><td width="33%">
MEMBERSHIP#: <input type="text" name="membership_number" value="<?php echo $membership_number; ?>"/></td></tr>
    <tr>
 <td width="10%">PRICE OF MEMBERSHIP:&nbsp;</td>
 	<td width="10%"><input type="text" name="price" value="<?php echo $price?>" /></td>
    <td width="10%">INITIAL DOWNPAYMENT&nbsp;</td>
    <td width="10%"><input type="text" name="initial_downpayment" value="<?php echo $initial_downpayment; ?>"  /></td>
    <td width="10%"> PENDING PAYMENT 1:&nbsp;</td>
    <td width="10%"><input type="text" name="pending_payment1" value="<?php echo $pending_payment1; ?>" /></td>
    </tr>
    
    <tr>
 <td width="20%">PAYMENT 1 SHALL BE PAID IN:&nbsp;</td>
 	<td width="10%"><input type="text" name="shall_be_paid" value="<?php echo $shall_be_paid?>" /></td>
    <td width="10%">RCI NIGHTS&nbsp;</td>
    <td width="10%"><input type="text" name="rci_nights" value="<?php  echo $rci_nights; ?>"  /></td>
    <td width="10%"> PENDING PAYMENT 2:&nbsp;</td>
    <td width="10%"><input type="text" name="pending_payment1" value="<?php echo $pending_payment1; ?>" /></td>
    </tr>
    
    <tr>
    <td width="10%">PENDING VIA;</td>
    <td width="10%"><input type="text" name="pending_via" value="<?php echo $pending_via; ?>" /></td>
    <td width="10%">INCLUDED BRANDS:</td>
    <td width="10%"><input type="text" name="included_brands" value="<?php echo $included_brands; ?>" /></td>
    <td width="10%">RCI TRANSACTION RATE;</td>
    <td width="10%"><input type="text" name="rci_transaction_rate" value="<?php echo $rci_transaction_rate; ?>" /></td>
   
 </tr>
 
  <tr>
    <td width="10%">MONTHLY PAYMENTS;</td>
    <td width="10%"><input type="text" name="monthly_payments" value="<?php echo $monthly_payments ?>" /></td>
    <td width="10%">INTEREST RATE;</td>
    <td width="10%"><input type="text" name="interest_rate" value="<?php echo $interest_rate; ?>" /></td>
    <td width="10%">YEARS OF MEMBERSHIP</td>
    <td width="10%"><input type="text" name="term_of_year_number" value="<?php echo $term_of_year_number; ?>" /></td>
   
 </tr>
   
 </table><br />
<h3>CLIENTE 1</h3>
 <div class="bloque">

    <table width="100%" style="border:none; margin:-5px; ">
     
  	<tr><td width="16%">THE CLIENT:&nbsp;</td><td width="36%"><input type="text" name="client1" value="<?php echo $client1; ?>" size="55px" /></td><td width="8%">&nbsp;</td><td width="16%">NATIONALITY:&nbsp;</td><td width="36%"><input type="text" name="nationality1" value="<?php echo $nationality1; ?>" size="55px" /></td>
    </tr>
   	<tr><td width="16%">PASSPORT NO:&nbsp;</td><td width="36%"><input type="text" name="passport1" value="<?php echo $passport1; ?>"  size="55px" /></td><td width="8%">&nbsp;</td><td width="16%">CIVIL STATUS:&nbsp;</td><td width="36%"><input type="text" name="civil_status1" value="<?php echo $civil_status1; ?>" size="55px" /></td>
    </tr>
   	<tr><td width="16%">ADDRESS:&nbsp;</td><td width="36%"><input type="text" name="address1" value="<?php echo $address1; ?>" size="55px" /></td><td width="8%">&nbsp;</td><td width="16%">CITY:&nbsp;</td><td width="36%"><input type="text" name="city1" value="<?php echo $city1; ?>" size="55px" /></td>
    </tr>
  	<tr><td width="16%">STATE/PROVINCE:&nbsp;</td><td width="36%"><input type="text" name="state1" value="<?php echo $state1; ?>"  size="55px" /></td><td width="8%">&nbsp;</td><td width="16%">COUNTRY:&nbsp;</td><td width="36%"><input type="text" name="country1" value="<?php echo $country1; ?>" size="55px" /></td>
    </tr>
  <tr><td width="16%">HOME PHONE:&nbsp;</td><td width="36%"><input type="text" name="home_phone1"  value="<?php echo $home_phone1; ?>" size="55px" /></td><td width="8%">&nbsp;</td><td width="16%">WORK PHONE:&nbsp;</td><td width="36%"><input type="text" name="work_phone1" value="<?php echo $work_phone1; ?>" size="55px" /></td>
    </tr>
    <tr><td width="16%">FAX NUMBER:&nbsp;</td><td width="36%"><input type="text" name="fax1"  value="<?php echo $fax1; ?>" size="55px" /></td><td width="8%">&nbsp;<td width="16%">E-MAIL:&nbsp;</td><td width="36%"><input type="text" name="email1" value="<?php echo $email1; ?>" size="55px" /></td>
    </tr>
  </table>
  
  <h3> CLIENTE 2 </h3>
  <table width="100%" style="border:none; margin:-5px; ">
     
  	<tr><td width="16%">THE CLIENT:&nbsp;</td><td width="36%"><input type="text" name="client2" value="<?php echo $client2; ?>" size="55px" /></td><td width="8%">&nbsp;</td><td width="16%">NATIONALITY:&nbsp;</td><td width="36%"><input type="text" name="nationality2" value="<?php echo $nationality2; ?>" size="55px" /></td>
    </tr>
   	<tr><td width="16%">PASSPORT NO:&nbsp;</td><td width="36%"><input type="text" name="passport2" value="<?php echo $passport2; ?>"  size="55px" /></td><td width="8%">&nbsp;</td><td width="16%">CIVIL STATUS:&nbsp;</td><td width="36%"><input type="text" name="civil_status2" value="<?php echo $civil_status2; ?>" size="55px" /></td>
    </tr>
   	<tr><td width="16%">ADDRESS:&nbsp;</td><td width="36%"><input type="text" name="address2" value="<?php echo $address2; ?>" size="55px" /></td><td width="8%">&nbsp;</td><td width="16%">CITY:&nbsp;</td><td width="36%"><input type="text" name="city2" value="<?php echo $city2; ?>" size="55px" /></td>
    </tr>
  	<tr><td width="16%">STATE/PROVINCE:&nbsp;</td><td width="36%"><input type="text" name="state2" value="<?php echo $state2; ?>"  size="55px" /></td><td width="8%">&nbsp;</td><td width="16%">COUNTRY:&nbsp;</td><td width="36%"><input type="text" name="country2" value="<?php echo $country2; ?>" size="55px" /></td>
    </tr>
  <tr><td width="16%">HOME PHONE:&nbsp;</td><td width="36%"><input type="text" name="home_phone2"  value="<?php echo $home_phone2; ?>" size="55px" /></td><td width="8%">&nbsp;</td><td width="16%">WORK PHONE:&nbsp;</td><td width="36%"><input type="text" name="work_phone2" value="<?php echo $work_phone2; ?>" size="55px" /></td>
    </tr>
    <tr><td width="16%">FAX NUMBER:&nbsp;</td><td width="36%"><input type="text" name="fax2"  value="<?php echo $fax2; ?>" size="55px" /></td><td width="8%">&nbsp;<td width="16%">E-MAIL:&nbsp;</td><td width="36%"><input type="text" name="email2" value="<?php echo $email2; ?>" size="55px" /></td>
    </tr>
  </table>
 <input type="submit" name="submit" value="ENVIAR LA INFO AL CONTRATO" />
</form><br />
<br />


<center><p class="title"><strong>MEMBERSHIP CONTRACT </strong><br />
  <strong>IBEROSTAR THE CLUB</strong></p></center>
<p>The current contract is entered into by and between <strong>IBEROCLUB, N.V.</strong>,  a Netherlands Antilles corporation with its legal representation in Curazao, hereinafter  referred to as <strong>&ldquo;THE TRAVEL AGENCY</strong>,&rdquo;<strong> </strong>with address located at  Pietermaai 15, Willemstad, Curaçao, and the person mentioned below, hereinafter  referred to as <strong>&ldquo;THE CLIENT.&rdquo;</strong></p>
<p>THE CLIENT   </p>
<table width="100%" >
<tr>                                                 
<td width="35%"><?php echo $client1; ?>&nbsp;</td>
<td width="33%">NATIONALITY:&nbsp;<?php echo $nationality1; ?></td>
<td width="27%">PASSPORT NO:&nbsp;<?php echo $passport1; ?></td>
   
</tr>
</table>
<table width="100%" >
<tr>
  <td width="20%" >CIVIL STATUS:&nbsp;<?php echo $civil_status1; ?>&nbsp;  </td> 
  
  <td width="80%">ADDRESS:&nbsp;<?php echo $address1; ?>&nbsp;  </td><tr>
 <tr><td width="33%">CITY:&nbsp;<?php echo $city1; ?>&nbsp; </td>
  
 <td width="33%">STATE/PROVINCE:&nbsp;<?php echo $state1; ?>&nbsp;</td>
 <td width="33%">COUNTRY:&nbsp;<?php echo $country1; ?>&nbsp;</td></tr>
 <tr>
<td width="33%">HOME PHONE:&nbsp;<?php echo $home_phone1; ?>&nbsp;</td> 
<td width="33%">WORK PHONE:&nbsp;<?php echo $work_phone1; ?>&nbsp; </td>
  <td width="33%">FAX:&nbsp;<?php echo $fax1; ?>&nbsp;</td></tr><tr>
  <td width="33%">E-MAIL:&nbsp;<?php echo $email1; ?>&nbsp;</td></tr></table>
<p>&nbsp;</p>
<table width="100%" >
<tr>                                                 
<td width="35%"><?php echo $client2; ?>&nbsp;</td>
<td width="33%">NATIONALITY:&nbsp;<?php echo $nationality2; ?></td>
<td width="27%">PASSPORT NO:&nbsp;<?php echo $passport2; ?></td>
   
</tr>
</table>
<table width="100%" >
<tr>
  <td width="20%" >CIVIL STATUS:&nbsp;<?php echo $civil_status2; ?>&nbsp;  </td> 
  
  <td width="80%">ADDRESS:&nbsp;<?php echo $address2; ?>&nbsp;  </td><tr>
 <tr><td width="33%">CITY:&nbsp;<?php echo $city2; ?>&nbsp; </td>
  
 <td width="33%">STATE/PROVINCE:&nbsp;<?php echo $state2; ?>&nbsp;</td>
 <td width="33%">COUNTRY:&nbsp;<?php echo $country2; ?>&nbsp;</td></tr>
 <tr>
<td width="33%">HOME PHONE:&nbsp;<?php echo $home_phone2; ?>&nbsp;</td> 
<td width="33%">WORK PHONE:&nbsp;<?php echo $work_phone2; ?>&nbsp; </td>
  <td width="33%">FAX:&nbsp;<?php echo $fax2; ?>&nbsp;</td></tr><tr>
  <td width="33%">E-MAIL:&nbsp;<?php echo $email2; ?>&nbsp;</td></tr></table>
<p class="title"><strong>CLAUSES</strong><strong> </strong></p>
<p><strong>ONE.- PURPOSE</strong><strong> </strong><br />
  THE TRAVEL AGENCY shall facilitate to THE CLIENT the ability to make effective Benefits and Discounts  of Goods and Services of the IBEROSTAR THE CLUB Program under the terms of the  current Contract. THE CLIENT, through the payment of the  amount stipulated below, will be granted Membership to IBEROSTAR THE CLUB (the  &ldquo;<u>Membership</u>&rdquo;) of the type indicated to follow, which grants the right to  book unlimited package of night-stays each year within the term hereof subject  to availability at any of the hotels in the Iberostar Chain under the IBEROSTAR  THE CLUB Program in accordance with the terms and conditions contained herein.</p>
<p>*Membership   <?php echo $membership_type; ?>&nbsp;Duration   <?php echo $term_of_year_number; ?>&nbsp;Annual Weeks Exchange    <?php echo $annual_weeks_exchange; ?>&nbsp;Included Brands   <?php echo $included_brands; ?>&nbsp;Seasons<br />
  [To be completed at the time of  execution of the Contract with the details of the contracted membership]                                                                                                  </p>
<p><strong>TWO.- CONSIDERATION</strong><strong> </strong><br />
  THE CLIENT shall pay THE TRAVEL AGENCY the following amounts in  consideration for the mediation services as travel agency in accordance with  the Membership:</p>
<ol>
  <li>PRICE OF MEMBERSHIP: <?php echo $price; ?>&nbsp;  USD              </li>
</ol>
<p>The amount above shall be paid according to the  following method:</p>
<ol>
  <li>INICIAL DOWNPAYMENT:&nbsp;<?php echo $initial_downpayment; ?>&nbsp;USD</li>
  <li>PENDING PAYMENT 1:&nbsp;<?php echo $pending_payment1; ?>&nbsp;USD &nbsp; <?php echo $pending_payment_via; ?>.</li>
  <li>PENDING PAYMENT 2:&nbsp;<?php echo $pending_payment2; ?>&nbsp;USD via  installments in accordance with the promissory note attached.</li>
</ol>
<p>&nbsp;</p>
<p>The amount paid by THE CLIENT in this act is <?php echo $initial_downpayment; ?>&nbsp;USD/Dollars, the  Legal Currency of the United States of America. Said amount has been paid by  THE CLIENT and received by THE TRAVEL AGENCY on <?php  echo date("j/n/ Y"); ?>   </p>
<p>PAYMENT PENDING 1 for the sum of <?php echo $pending_payment1; ?>&nbsp;USD shall be paid within <?php echo $shall_be_paid; ?>&nbsp;  days of the execution of the current Contract through <?php  echo $pending_payment_via; ?>.,  and PAYMENT PENDING 2 shall be documented through a promissory note in the name  of <strong>IBEROCLUB N.V.</strong> for the sum of <?php echo $promissory_note;?> USD. </p>
<p>Payments to THE TRAVEL AGENCY of PAYMENT PENDING 2  must be carried out under the terms provisioned in said promissory note, which  guarantees the payment, and shall be identified with the same number as this  Contract and shall form an integral part thereof; therefore, it is subject to  the terms and conditions of this Contract. In the event that the promissory  note signed by THE CLIENT is issued to a specialized collection company, the  fees generated by said company shall be covered by THE CLIENT (including the fee  of five United States dollars  (USD 5.00) for each payment in installments). </p>
<p>The amount of the first monthly installment payment shall be  <?php echo $first_monthly_payment; ?>&nbsp;USD.</p>
<p><strong>THREE:</strong> <strong>BENEFITS AND DISCOUNTS</strong><br />
  THE TRAVEL AGENCY guarantees THE CLIENT a Preferential Rate consisting  of 25% in savings over the published rate (at the time of booking) on the website <a href="http://www.Iberostar.com">www.Iberostar.com</a> at all  Iberostar Hotels during the term hereof and may be booked via Call Center or  through the webpage of THE TRAVEL AGENCY. </p>
<p>Additionally, at Iberostar Hotels located in Mexico, the Dominican  Republic and Jamaica (hereinafter collectively referred to as &ldquo;Iberostar Club Hotels&rdquo;),  THE CLIENT shall have the right to receive services in Upgraded Amenities in  the hotel room, superior services, access to exclusive areas for clients, as  well as other benefits representing an important additional value to THE CLIENT  (all subject to availability).</p>
<p>Also, during stays at the Iberostar Club Hotels, THE CLIENT shall have a  25% discount off on some of the services that are not included in the ALL-INCLUSIVE  package that the corresponding Iberostar Club Hotel provides and that are not  granted.</p>
<p>Likewise, when THE CLIENT stays at Iberostar Hotels not included in the  category of Iberostar Club Hotels, CLIENT shall have access to the Salon and  exclusive &ldquo;Star Prestige&rdquo; areas when available.</p>
<p>All Benefits and Discounts for THE CLIENT must be booked and enjoyed  during the term of validity of the current Contract.</p>
<p>The IBEROSTAR THE CLUB Program guarantees THE CLIENT access to book  accommodations at any of the Iberostar Club Hotels based on the Benefits and  Discounts according to the type of Membership purchased provided that bookings  may be made for a minimum of 2 nights and subject to availability.</p>
<p><strong>FOUR:</strong> <strong>USE OF BENEFITS AND DISCOUNTS ON GOODS AND  SERVICES</strong><strong></strong><br />
  THE CLIENT has the right to participate in the IBEROSTAR THE CLUB  Program provided that CLIENT fulfills all of the payment obligations deriving  from the current contract. To make use of the Benefits and Discounts offered by  the IBEROSTAR THE CLUB Program, THE CLIENT may access them via the &ldquo;Call  Center&rdquo; or through the webpage <a href="http://www.iberostartheclub.com">www.iberostartheclub.com</a> (registering with their Access Code). Once THE CLIENT enters the  private area on said webpage, exclusively authorized for clients, CLIENT may  access all of the goods and services that THE TRAVEL AGENCY offers. </p>
<p>Published on the webpage <a href="http://www.iberostartheclub.com">www.iberostartheclub.com</a> are the Operation Rules, which detail the procedure that THE CLIENT  must follow in order to proceed to book and contract the Benefits and Discounts  offered by the IBEROSTAR THE CLUB Program.</p>
<p><strong>FIVE:</strong> <strong>AUTHORIZED BENEFICIARIES AND ACCOMPANYING PARTIES</strong><strong></strong><br />
  THE CLIENT has the right to share the use of CLIENT Membership with: (i)  his/her legal partner; (ii) the children of both (of THE CLIENT and his/her legal  partner); and (iii) the legal partner of the children of both (of THE CLIENT  and his/her legal partner), when accompanied by THE CLIENT. All of these  parties shall be considered &ldquo;Beneficiaries&rdquo; of the Membership and, in all  cases, must obey the rules and regulations of the IBEROSTAR THE CLUB Program.</p>
<p>Additionally, THE CLIENT shall have the right to ask THE TRAVEL AGENCY to  apply for a 10% (ten percent) discount to the accommodation rates of such  persons who, without being considered Beneficiaries, accompany THE CLIENT  during CLIENT&rsquo;s stay in any of the Iberostar Hotels (hereafter &ldquo;<u>Authorized  Accompanying Parties</u>&rdquo;). The Authorized Accompanying Parties shall only be  entitled to the application of said discount, being excluded from the  remaining Benefits and Discounts on Goods and  Services that the IBEROSTAR THE CLUB Program makes available exclusively to its  clients.</p>
<p><strong>SIX:</strong> <strong>TRANSFER OF MEMBERSHIP</strong><br />
  THE CLIENT has the right to transfer or bequeath the rights and  obligations referred to herein upon written notice to THE TRAVEL AGENCY. The  new client remaining obligated to make any and all payments required, as well  as the payment to THE TRAVEL AGENCY of an amount equivalent to 1% of the consideration  of the transferred Membership for transfer costs.</p>
<p><strong>SEVEN:</strong> <strong>DURATION</strong><br />
  Unless the current Contract is terminated as specifically indicated in  its own terms, it shall be terminated following a term of <?php echo $term_of_year_letter; ?> (<?php echo $term_of_year_number; ?>) years from the date of execution hereof;  therefore, upon termination of this Agreement the CLIENT expressly recognizes  that  Membership&rsquo;s rights and benefits  shall be terminated..</p>
<p><strong>EIGHT</strong>: <strong>PRIVILEGES AND BENEFITS</strong><br />
In addition to those Benefits and  Discounts associated to Iberostar Club Hotels in the terms hereof, IBEROSTAR  THE CLUB Program shall offer privileges and benefits such as interval exchange  services, flight services, car rentals, cruises, guided excursions, land  transportation, boat and aircraft rentals, and golf course services  (hereinafter referred to as &ldquo;<u>Other Suppliers of Benefits and Discounts</u>&rdquo;),  with those whom THE TRAVEL AGENCY maintains agreements or strategic alliances  for the benefit of its clients, at competitive prices with the goal of offering a complete &lsquo;One Stop Shopping&rsquo; experience.</p>
<p>      All Other  Suppliers of Benefits and Discounts that are included or will be included in  the future in the IBEROSTAR THE CLUB Program may be substituted or replaced by  others of a similar type at any time without prior notice, in order to maintain  the level of quality of the providers at all times, to which THE CLIENT  expresses his/her consent.</p>
<p>      THE TRAVEL  AGENCY is not liable for the services of Other Suppliers of Benefits and  Discounts reserving the right to remove, change or supplement in accordance  with the changing needs and trends of the industry and the needs of the clients.  However, at all times THE TRAVEL AGENCY shall search for the best providers to  ensure the continued satisfaction of THE CLIENT. </p>
<p>In no event shall either party be liable for any punitive, indirect,  consequential, special, exemplary, or incidental damages, including, without  limitation, liability for loss of use, loss of profits, cost of procurement or  installation of substitute goods, capital investment, product development  costs, unabsorbed overhead, or interest expenses, of whatever kind or however  caused.  Notwithstanding any other  provision in this Agreement, TRAVEL AGENCY&rsquo;s liability to CLIENT, including any  indemnification obligations, whether under contract, tort, strict liability or  otherwise, shall in no event exceed, in the aggregate, the fees paid by CLIENT  to TRAVEL AGENCY under this Agreement as of the date of the claim or dispute  from which such liability arose.</p>
<h3><strong>NINE</strong><strong>:</strong> <strong>CANCELLATION</strong><strong></strong></h3>
<h3>The current  contract may not be cancelled by any of the parties unless THE CLIENT fails to  comply with any of his/her obligations deriving from this Agreement. In such an  event, THE TRAVEL AGENCY has the right to terminate this contract, and THE CLIENT  accepts that the total of the payments made to THE TRAVEL AGENCY shall be  withheld for the indemnification of damages and harm, administrative and  cancellation expenses borne by THE TRAVEL AGENCY, and expenses resulting from  THE CLIENT&rsquo;s previous use and enjoyment of the CLIENTship and the IBEROSTAR THE  TRAVEL AGENCY Program.</h3>
<p>&nbsp;</p>
<p>THE CLIENT may cancel this Contract only in the event of proven breach  by THE TRAVEL AGENCY of any of its obligations set forth herein, provided THE CLIENT  notifies THE TRAVEL AGENCY of the contractual breach and it remains unresolved  for a period of 15 days. </p>
<p><strong>&nbsp;</strong></p>
<p><strong>TEN:</strong> <strong>LEGAL NOTICE</strong><strong></strong><br />
  THE TRAVEL  AGENCY is the legal entity liable in the terms of the applicable law for protection  of personal information for the information that is requested from and entered  directly by THE CLIENT through the internet domain www.iberostartheclub.com, the  same information that is collected for the following purposes:<strong></strong></p>
<p>•To administer  the operation of transactions of natural or legal persons that have  relationships of any kind with THE TRAVEL AGENCY in the capacity as clients of  the IBEROSTAR THE CLUB Program, according to the descriptions in the current  Contract. </p>
<p>•To use said  information to formulate studies, statistics, promotions, publicity, notices  and communications of any kind related to the current Contract. </p>
<p>•To use said  information for marketing or publicity purposes. </p>
<p>•To use said  information to research the credit history of THE CLIENT. </p>
<p>The information that THE CLIENT provides THE TRAVEL  AGENCY, at this time or in the future, shall likewise be received by IBEROSTAR  HOTELES Y APARTAMENTOS S.L., the head company of the Iberostar Hotels &amp;  Resorts Group with registered offices at C/ General Riera 154, 07010, Palma de  Mallorca – Spain, for incorporation into the &ldquo;Brand Users&rdquo; data file with  purposes of customer loyalty and retention, personalization of services, or to  notify THE CLIENT about the Group&rsquo;s tourist products and services, either by  electronic means, telephone, or personalized sales communications. THE CLIENT  agrees that the entities of the Iberostar Group, in addition to those that the  Group contacts for hiring or providing services, may access his/her information  as a brand user for the personalization of the same, consenting to the  international transfer of his/her information when said entities are located  outside the European Economic Area. Regarding the treatment of the liability of  IBEROSTAR HOTELES Y APARTAMENTOS S.L., THE CLIENT may exercise his/her right of  access, correction, cancellation and opposition that Spanish Organic Law  15/1999 regarding the protection of information of a personal nature  acknowledges by writing to the Organic Law for Data Protection Department of  IBEROSTAR and including a copy of his/her National Identification Document or  passport, at the address indicated above. <br />
  In the event that THE CLIENT resides on the American  continent, excluding Cuba, his/her information shall also be reported to Visit  Us, Inc., an American company dedicated to the commercialization of tourist  products, with registered offices on Le Jeune Road, Suite 704, Coral Gables, FL  33134 USA, in order to send THE CLIENT business information related to said  products (even by electronic means), and THE CLIENT hereby consents to the  corresponding international transfer of his/her information. Regarding the data  processing performed by Visit US, Inc., THE CLIENT may exercise his/her right  of access, correction, cancellation and opposition by writing to the Visit US,  Inc. office.<br />
  THE CLIENT may oppose these transfers and the  treatment of his/her information for business purposes by IBEROSTAR HOTELES Y  APARTAMENTOS S.L. and Visit Us, Inc., by checking the corresponding options:<br />
  _ I do not want my information to be sent to IBEROSTAR  HOTELES Y APARTAMENTOS S.L., nor to Visit Us.<br />
  _ I do not want to receive business communications  through text message.<br />
  _ I do not want my information to be used for business  purposes.</p>
<p>THE TRAVEL  AGENCY shall execute no other transfers of the information gathered, except to  the Collection Agent and the Providers of Goods and Services included in the  IBEROSTAR THE CLUB Program for the purposes provisioned in the current  Contract. </p>
<p>The data  requested are relevant because through it THE TRAVEL AGENCY seeks to find  information that, in accordance with the criteria of THE TRAVEL AGENCY, enables  it to make corresponding decisions regarding the specific relationship with  each of its clients. </p>
<p>The method  established for THE CLIENT, as the owner of the information gathered, who  requests limiting the use or disclosure of his/her information or exercises his/her  rights of access, correction, cancellation or opposition shall be through a  free-format request containing the requirements of law, addressed to the  following email address: atencioncliente@iberostartheclub.com (or other email  address that is enabled and expressly indicated on the webpage  www.iberostartheclub.com). </p>
<p>Any change to  this Privacy Notice shall be duly communicated through publication on the  website www.iberostartheclub.com. </p>
<p>THE TRAVEL  AGENCY has implemented and permanently updated the administrative, technical  and physical security measures necessary to protect the personal data of the  owners against damage, loss, alteration, destruction or unauthorized use,  access or treatment.</p>
<p><strong>ELEVEN:</strong> <strong>ENTIRE CONTRACT</strong><br />
  The Summary Document of the Benefits of Membership (Annex I), and the  Promissory Note (Annex II) form an integral part of the current Contract, as  attachments or annexes to the same, and THE CLIENT executes them in this act  and acknowledges that they are the only valid agreements between the parties, and  THE TRAVEL AGENCY shall not recognize as binding any other verbal or written  agreement differing in content from the aforementioned documents. </p>
<p><strong>TWELVE:</strong> <strong>APPLICABLE LAW AND JURISDICTION</strong><br />
  This Agreement shall be governed by and construed in  accordance with the laws of Curazao, without giving effect to any choice of law  or conflict of laws rules or provisions that would cause the application of the  laws of any other jurisdiction to apply.   The Parties expressly submit to the exclusive jurisdiction of the courts  of Curazao for the purposes of any action, dispute or controversy arising out  of this Agreement. Each Party waives any right it may have to a different law  or jurisdiction by reason of its present or future domicile, location of its  assets or for any other reason.  </p>
<p>This choice of law and forum provision will not apply  to any Promissory Note issued by the CLIENT as part of any financing by TRAVEL  AGENCY. Such Promissory Note will be governed by and construed in accordance  with its terms</p>
<p>&nbsp;</p>
<p>THE CLIENT AGREES TO THE PROVISIONS OF THE CURRENT CONTRACT.</p>
<p>Signed on <?php echo date("j/n/ Y");?></p>
<table width="100%">
<tr>
<td width="50%">Membership  No. <?php echo  $membership_number; ?></td><td width="50%">&nbsp;</td>
</tr>
<tr>
<th width="50%">THE CLIENT</th><th width="50%">IBEROCLUB N.V</th></tr>
<tr>
<td width="50%">Signature______________________</td><td>&nbsp;</td>  </tr>
<tr>
<td width="50%">Mr./Ms. <?php echo  $client1; ?></td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td width="50%">Signature______________________</td><td> Signature____________________</td></tr>  
<tr>
<td width="50%">Mr./Ms. <?php echo  $client2; ?>  </td><td>Mr. Raul Ojeda</td></tr>                                         
</table>
<br clear="all" /><br clear="all" /><br clear="all" /><br clear="all" /><br clear="all" /><br clear="all" />
<p class="title"><strong><u>Annex I</u></strong><strong><u> </u></strong><br />
  <strong><u>SUMMARY OF BENEFITS OF CLIENTSHIP</u></strong><strong><u> </u></strong></p>
<p align="center"><strong>&nbsp;</strong></p><?php echo $days_of_week; ?>
<p>____/____ The consideration  for the membership type <?php echo $membership_type; ?> is <?php echo $price;?>&nbsp;USD.<br />
  ____/____ THE CLIENT  is guaranteed a Preferential Price of 25% savings on the public rate published  at www.iberostar.com in force at the time of booking to book at any of the  Iberostar Club Hotels within a term of <?php echo $term_of_year_number;?>&nbsp; years.<br />
  ____/____ THE  MEMBER is guaranteed a Premier Nights package, with exclusive amenities, access  to VIP lounges, and other benefits representing considerable additional value  for <?php echo $term_of_year_number;?>&nbsp; years at participating Iberostar Hotels Club Resorts to which  he/she has the right to membership for the valid term specified in his/her  contract.<br />
  ____/____ The IBEROSTAR THE CLUB Program shall  additionally grant a 25% discount off at Iberostar Club Hotels on some of the  services not included as part of the all-inclusive package.<br />
  ____/____THE CLIENT  is guaranteed a discount of 25% on the public rate published in  www.Iberostar.com, at the time of booking  to book at any of the Iberostar Hotels within  the term of <?php echo $term_of_year_number;?>&nbsp; years according to the type of membership contracted.<br />
  ____/____THE CLIENT  is guaranteed the ability to extend a discount of 10% on the public rate  published in www.Iberostar.com at the time of booking to book third parties  traveling together and accompanying THE CLIENT at any of the Iberostar Hotels, within  the term of <?php echo $term_of_year_number;?>&nbsp;years.<br />
  ____/____ THE TRAVEL AGENCY shall cover for THE CLIENT  the cost of membership in the interval exchange company <?php echo $interval_exchange;?>&nbsp; for the  following  <?php echo $term_of_year_number;?>&nbsp;years. The subsequent interval exchange membership  costs are optional and are the responsibility of THE CLIENT.<br />
  ____/____ Each  year within the term of the membership, THE CLIENT shall have the right to book  a maximum number of <?php  echo $rci_nights; ?> nights in order to make a maximum number of  <?php echo $rci_nights * $days_of_week;?>&nbsp;exchange intervals of 7 nights. For the exchange it is necessary to  cover the transaction rate of <?php echo $rci_transaction_rate;?> US dollars. <br />
  ____/____ THE TRAVEL AGENCY shall provide THE CLIENT  with complimentary access to an online travel agency in order to make all of  his/her reservations for the purchase of airline tickets, car rentals, cruises  and other travel options at competitive prices. <br />
  ____/____ The IBEROSTAR THE TRAVEL AGENCY Program  shall provide THE CLIENT complimentary access to a Vessel service membership in  order to enable the CLIENT to contract such services at preferential prices. <br />
  ____/____ The membership shall have a term of  <?php echo $term_of_year_number;?>&nbsp; years and the benefits shall be transferable in accordance with the  provisions of the Agreement.</p>
<p>&nbsp;</p>
<table width="100%">
<tr>
<td width="50%">Membership  No. <?php echo  $membership_number; ?></td><td width="50%">&nbsp;</td>
</tr>
<tr>
<th width="50%">THE CLIENT</th><th width="50%">IBEROCLUB N.V</th></tr>
<tr>
<td width="50%">Signature______________________</td><td>&nbsp;</td>  </tr>
<tr>
<td width="50%">Mr./Ms. <?php echo  $client1; ?></td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td width="50%">Signature______________________</td><td> Signature____________________</td></tr>  
<tr>
<td width="50%">Mr./Ms. <?php echo  $client2; ?>   </td><td>Mr. Raul Ojeda</td></tr>                                         
</table>
<strong><u><br clear="all" />
</u></strong>
</body>
</html>