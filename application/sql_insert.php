  <?php
 				
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contratos";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	
}

 
					@$pending_payment_via = htmlentities($_POST["pending_payment_via"],ENT_QUOTES,"UTF-8"); 
					@$pending_payment2_via = htmlentities($_POST["pending_payment2_via"],ENT_QUOTES,"UTF-8"); 
					@$membership_price = htmlentities($_POST["membership_price"],ENT_QUOTES,"UTF-8");
					@$pending_payment1 = htmlentities($_POST["pending_payment1"],ENT_QUOTES,"UTF-8");
					@$pending_payment2 = htmlentities($_POST["pending_payment2"],ENT_QUOTES,"UTF-8"); 
					@$initial_downpayment = htmlentities($_POST["initial_downpayment"],ENT_QUOTES,"UTF-8" );
					@$date_of_payment1=htmlentities($_POST["date_of_payment1"],ENT_QUOTES,"UTF-8" ); 
					@$today = date("j n, Y");
					 
					@$interest_rate =  htmlentities($_POST["interest_rate"],ENT_QUOTES,"UTF-8") ;
					@$monthly_payments = htmlentities($_POST["monthly_payments"],ENT_QUOTES,"UTF-8" );	
					@$month_year =  12;
					@$days_of_week =  7;
					
					@$datetime2 = strtotime($today);
					@$datetime1 = strtotime($date_of_payment1);
			
					@$secs = $datetime2 - $datetime1;// == <seconds between the two times>
					@$days = $secs / 86400;
					@$annual_weeks_exchange= htmlentities($_POST["annual_weeks_exchange"],ENT_QUOTES,"UTF-8" );	
			
					@$pending_balance = $membership_price - $initial_downpayment;
					@$annual_weeks_exchange = htmlentities($_POST["annual_weeks_exchange"],ENT_QUOTES,"UTF-8" );
					
					@$included_brands = htmlentities($_POST["included_brands"],ENT_QUOTES,"UTF-8" );
					@$rci_transaction_rate = htmlentities($_POST["rci_transaction_rate"],ENT_QUOTES,"UTF-8" );
					
					@$membership_number = htmlentities($_POST["membership_number"],ENT_QUOTES,"UTF-8") ;
					@$term_of_year_letter = htmlentities($_POST["term_of_year_letter"],ENT_QUOTES,"UTF-8" );
					@$term_of_year_number= htmlentities($_POST["term_of_year_number"],ENT_QUOTES,"UTF-8" ); 
					@$membership_type = htmlentities($_POST["membership_type"],ENT_QUOTES,"UTF-8") ;
					@$date_of_payment2 = htmlentities($_POST["date_of_payment2"],ENT_QUOTES,"UTF-8") ;
					//@ = $client1; 
					@$client1 = htmlentities($_POST["client1"],ENT_QUOTES,"UTF-8" );	
					@$client2 = htmlentities($_POST["client2"],ENT_QUOTES,"UTF-8" );	
					@$passport_id1= htmlentities($_POST["passport_id1"],ENT_QUOTES,"UTF-8" ); 
					@$passport_id2 = htmlentities($_POST["passport_id2"],ENT_QUOTES,"UTF-8") ;	
					@$address1 =  htmlentities($_POST["address1"],ENT_QUOTES,"UTF-8") ;	
					@$address2= htmlentities($_POST["address2"],ENT_QUOTES,"UTF-8") ;
					 
					@$state1 =  htmlentities($_POST["state1"],ENT_QUOTES,"UTF-8") ;	
					@$state2= htmlentities($_POST["state2"],ENT_QUOTES,"UTF-8" );
				 
					@$cell_phone1 = htmlentities($_POST["cell_phone1"],ENT_QUOTES,"UTF-8");	
					@$cell_phone2= htmlentities($_POST["cell_phone2"],ENT_QUOTES,"UTF-8"); 
					 
					@$fax1 = htmlentities($_POST["fax1"],ENT_QUOTES,"UTF-8");	
					@$fax2= htmlentities($_POST["fax2"],ENT_QUOTES,"UTF-8"); 
					@$nationality1 =  htmlentities($_POST["nationality1"],ENT_QUOTES,"UTF-8"); 
					@$nationality2= htmlentities($_POST["nationality2"],ENT_QUOTES,"UTF-8");
					 
					@$civil_status1 = htmlentities($_POST["civil_status1"],ENT_QUOTES,"UTF-8"); 
					@$civil_status2 = htmlentities($_POST["civil_status2"],ENT_QUOTES,"UTF-8"); 
						
					@$city1 = htmlentities($_POST["city1"],ENT_QUOTES,"UTF-8");
					@$city2 = htmlentities($_POST["city2"],ENT_QUOTES,"UTF-8"); 
					 
					@$country1 = htmlentities($_POST["country1"],ENT_QUOTES,"UTF-8"); 
					@$country2 = htmlentities($_POST["country2"],ENT_QUOTES,"UTF-8");
					 
					@$work_phone1 = htmlentities($_POST["work_phone1"],ENT_QUOTES,"UTF-8");	
					@$work_phone2 = htmlentities($_POST["work_phone2"],ENT_QUOTES,"UTF-8");	
					@$email1 = htmlentities($_POST["email1"],ENT_QUOTES,"UTF-8");	
					@$email2 = htmlentities($_POST["email2"],ENT_QUOTES,"UTF-8");	
					@$season = htmlentities($_POST["season"],ENT_QUOTES,"UTF-8");
					 
					@$included_brands2 = htmlentities($_POST["included_brands2"],ENT_QUOTES,"UTF-8");
					@$credit_card_number = htmlentities($_POST["credit_card_number"],ENT_QUOTES,"UTF-8");
					@$expiration_month = htmlentities($_POST["expiration_month"],ENT_QUOTES,"UTF-8");
					@$expiration_year =htmlentities($_POST["expiration_year"],ENT_QUOTES,"UTF-8");
					@$confirmation_number= htmlentities($_POST["confirmation_number"],ENT_QUOTES,"UTF-8");
					@$monthly_payments_amount = htmlentities($_POST["monthly_payments_amount"],ENT_QUOTES,"UTF-8");
					
					@$tablet_receipt = htmlentities($_POST["tablet_receipt"],ENT_QUOTES,"UTF-8");
					@$user_name = htmlentities($_POST["user_name"],ENT_QUOTES,"UTF-8");
					@$vlo = htmlentities($_POST["vlo"],ENT_QUOTES,"UTF-8");
					@$selected_resorts_weeks = htmlentities($_POST["selected_resorts_weeks"],ENT_QUOTES,"UTF-8");
					@$all_inclusive_weeks = htmlentities($_POST["all_inclusive_weeks"],ENT_QUOTES,"UTF-8");
					@$years_of_rci_covered = htmlentities($_POST["years_of_rci_covered"],ENT_QUOTES,"UTF-8");
					
					@$interval_exchange_company = htmlentities($_POST["interval_exchange_company"],ENT_QUOTES,"UTF-8");
					@$rci_transaction_rate = htmlentities($_POST["rci_transaction_rate"],ENT_QUOTES,"UTF-8");
					@$tablet_number = htmlentities($_POST["tablet_number"],ENT_QUOTES,"UTF-8");
					@$shall_be_paid_within= htmlentities($_POST["shall_be_paid_within"],ENT_QUOTES,"UTF-8");
					@$gift_credits = htmlentities($_POST["gift_credits"],ENT_QUOTES,"UTF-8");
					@$submit = $_POST["submit"];
					

		$sql = "INSERT INTO personal_info (
						 client1,client2,email1,email2,nationality1,nationality2,passport_id1,passport_id2,cell_phone1,cell_phone2,
						address1, address2, city1, city2, work_phone1, work_phone2, fax1, fax2,
						 country1,  country2,  civil_status1,  civil_status2,  state1,  state2,  membership_type,
						 membership_price, membership_number, term_of_year_letter, term_of_year_number, season, shall_be_paid_within,
						 tablet_number,rci_transaction_rate, interval_exchange_company, years_of_rci_covered,
						 all_inclusive_weeks, selected_resorts_weeks, vlo, user_name, tablet_receipt, monthly_payments_amount,
						 confirmation_number, expiration_year, expiration_month, credit_card_number,
						 included_brands, included_brands2, gift_credits, pending_payment_via, pending_payment2_via, pending_payment1, pending_payment2, initial_downpayment,submit )
						 
						VALUES ('$client1','$client2','$email1','$email2','$nationality1','$nationality2','$passport_id1','$passport_id2','$cell_phone1','$cell_phone2',
						'$address1', '$address2', '$city1', '$city2', '$work_phone1', '$work_phone2', '$fax1', '$fax2',
						'$country1', '$country2', '$civil_status1', '$civil_status2', '$state1', '$state2', '$membership_type',
						'$membership_price','$membership_number', '$term_of_year_letter', '$term_of_year_number','$season', '$shall_be_paid_within',
						'$tablet_number','$rci_transaction_rate','$interval_exchange_company','$years_of_rci_covered', '$all_inclusive_weeks',
						'$selected_resorts_weeks', '$vlo', '$user_name', '$tablet_receipt', '$monthly_payments_amount',
						'$confirmation_number', '$expiration_year', '$expiration_month', '$credit_card_number', '$included_brands', '$included_brands2', '$gift_credits'
						,'$pending_payment_via', '$pending_payment2_via','$pending_payment1','$pending_payment2','$initial_downpayment','$submit')";
						
 
if (mysqli_query($conn, $sql)) {
	
	$sql = "SELECT * FROM personal_info ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // header( "" ); ;url=show_contracts.html   
		'Contract # <a href="contract2.php">'. $row["membership_number"] . '</a>' ;
	}}
else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
} }
else {
    echo '0 results';
}
$conn->close();
?>

