
<!DOCTYPE html>
<html lang="en">
<head>
<title>Membership Information</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/inner.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/portfolio.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/elements.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,400italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="sisyphus.js" ></script>
<script>
     $( function() {
$( "#contact-form" ).sisyphus();
} );
    </script>
<!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <![endif]-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});


</script>

</head>
<body>
<!--==============================header=================================-->
  
              <div class="container">
                <!--=========== menu ===============-->
              
              
  <!-- breadcrumb -->

<!--==============================content=================================-->
<section id="content">
  <div class="container">
    <!-- welcome text -->
    <div class="row">
      <div class="span12">
        <div class="effect-left"></div>
        <div class="effect-right"></div>
   
        <center><img src="images/logo_iberostar.png"></center>
         
      </div>
    </div>
    <!-- portfolio 2 -->
    <div class="row">
      <div class="span12 portfolio">
        <!-- sorting menu -->
        <ul id="filterOptions" class="port-filters clearfix">
          <li><a href="#" class="all" id="flip">All</a></li>
          <li><a href="#" class="personal_info"><img src="images/Office-Client-Male-Light-icon.png"></a></li>
          <li><a href="#" class="personal_info2"><img src="images/Office-Client-Female-Light-icon.png"></a></li>
          <li><a href="#" class="membership_info"><img src="images/logo_iberostar32.png" ></a></li>
          <li><a href="#" class="financial_info"><img src="images/Invoice-icon.png"></a></li>
          <li><a href="#" class="rci"><img src="images/rci_32.png"></a></li>
          <li><a href="#" class="registry"><img src="images/registry-32.png"></a></li>
          <li><a href="#" class="lloyd"><img src="images/lloydshare-32.png"></a></li>
          <li><a href="#" class="gift"><img src="images/gift-icon.png"></a></li>
      </ul>

 <br />
 <div class="container">
 <?php
 
		$pending_payment_via = htmlentities($_POST["pending_payment_via"],ENT_QUOTES,"UTF-8"); 
		if($_POST["pending_payment_via"] = ''){	$pending_payment_via = $pending_payment_via;}
		$membership_price = htmlentities($_POST["membership_price"],ENT_QUOTES,"UTF-8");
		if($_POST["membership_price"] = ''){	$membership_price = $membership_price;}
		$pending_payment1 = htmlentities($_POST["pending_payment1"],ENT_QUOTES,"UTF-8");
		if($pending_payment1 = ''){	$pending_payment1 = $pending_payment1;}
		$pending_payment2= htmlentities($_POST["pending_payment2"],ENT_QUOTES,"UTF-8"); 
		if($pending_payment2 = ''){	$pending_payment2 = $pending_payment2;}
		$initial_downpayment = htmlentities($_POST["initial_downpayment"],ENT_QUOTES,"UTF-8" );
		if($initial_downpayment = ''){	$initial_downpayment = $initial_downpayment;}
		$date_of_payment1=htmlentities($_POST["date_of_payment1"],ENT_QUOTES,"UTF-8" ); 
		if($initial_downpayment = ''){	$date_of_payment1 = $date_of_payment1;}
		$today = date("j/n/ Y");
		 
		$interest_rate =  htmlentities($_POST["interest_rate"],ENT_QUOTES,"UTF-8") ;
		$monthly_payments = htmlentities($_POST["monthly_payments"],ENT_QUOTES,"UTF-8" );	
		$month_year =  12;
		$days_of_week =  7;
		
		$datetime2 = strtotime($today);
		$datetime1 = strtotime($date_of_payment1);

		$secs = $datetime2 - $datetime1;// == <seconds between the two times>
		$days = $secs / 86400;

		//$rci_nights =  preparar_consulta(htmlentities($_POST["rci_nights"],ENT_QUOTES,"UTF-8")); 
		//$rci_weeks = preparar_consulta(htmlentities($_POST["rci_weeks"],ENT_QUOTES,"UTF-8")); 
		$annual_weeks_exchange= htmlentities($_POST["annual_weeks_exchange"],ENT_QUOTES,"UTF-8" );	
		
		
		//promissory_note$ =preparar_consulta(htmlentities($_POST["promissory_note"],ENT_QUOTES,"UTF-8"));
		
		$pending_balance = $membership_price - $initial_downpayment;
		//$interval_exchange =preparar_consulta(htmlentities($_POST["interval_exchange"],ENT_QUOTES,"UTF-8"));
		$annual_weeks_exchange = htmlentities($_POST["annual_weeks_exchange"],ENT_QUOTES,"UTF-8" );
		
		$included_brands = htmlentities($_POST["included_brands"],ENT_QUOTES,"UTF-8" );
		$rci_transaction_rate = htmlentities($_POST["rci_transaction_rate"],ENT_QUOTES,"UTF-8" );
		
		$membership_number = htmlentities($_POST["membership_number"],ENT_QUOTES,"UTF-8") ;
		$term_of_year_letter = htmlentities($_POST["term_of_year_letter"],ENT_QUOTES,"UTF-8" ); 
		$term_of_year_number= htmlentities($_POST["term_of_year_number"],ENT_QUOTES,"UTF-8" ); 
		$membership_type = htmlentities($_POST["membership_type"],ENT_QUOTES,"UTF-8") ;
		 	
		$client1= htmlentities($_POST["client1"],ENT_QUOTES,"UTF-8" ); 
		$client2 = htmlentities($_POST["client2"],ENT_QUOTES,"UTF-8" );	
		$passport1= htmlentities($_POST["passport1"],ENT_QUOTES,"UTF-8" ); 
		$passport2 = htmlentities($_POST["passport2"],ENT_QUOTES,"UTF-8") ;	
		$address1 =  htmlentities($_POST["address1"],ENT_QUOTES,"UTF-8") ;	
		$address2= htmlentities($_POST["address2"],ENT_QUOTES,"UTF-8") ;
		if($_POST["address2"] = ''){ $address2 = $address1;}
		$state1 =  htmlentities($_POST["state1"],ENT_QUOTES,"UTF-8") ;	
		$state2= htmlentities($_POST["state2"],ENT_QUOTES,"UTF-8" );
		if($state2 = ''){$state2 = $state1;	}
		$home_phone1 = htmlentities($_POST["home_phone1"],ENT_QUOTES,"UTF-8");	
		$home_phone2= htmlentities($_POST["home_phone2"],ENT_QUOTES,"UTF-8"); 
		if($home_phone2 = ''){$home_phone2 = $home_phone1;}
		$fax1 = htmlentities($_POST["fax1"],ENT_QUOTES,"UTF-8");	
		$fax2= htmlentities($_POST["fax2"],ENT_QUOTES,"UTF-8"); 
		$nationality1 =  htmlentities($_POST["nationality1"],ENT_QUOTES,"UTF-8"); 
		$nationality2= htmlentities($_POST["nationality2"],ENT_QUOTES,"UTF-8");
		if($nationality2 = ''){	$nationality2 = $nationality1;}
		$civil_status1 = htmlentities($_POST["civil_status1"],ENT_QUOTES,"UTF-8"); 
		$civil_status2 = htmlentities($_POST["civil_status2"],ENT_QUOTES,"UTF-8"); 
		if($civil_status2 = ''){	$civil_status2 = $civil_status1;}		
		$city1 = htmlentities($_POST["city1"],ENT_QUOTES,"UTF-8");
		$city2 = htmlentities($_POST["city2"],ENT_QUOTES,"UTF-8"); 
		if($city2 = ''){	$city2 = $city1;}
		$country1 = htmlentities($_POST["country1"],ENT_QUOTES,"UTF-8"); 
		$country2 = htmlentities($_POST["country2"],ENT_QUOTES,"UTF-8");
		if($country2 = ''){	$country2 = $country1;}
		$work_phone1 = htmlentities($_POST["work_phone1"],ENT_QUOTES,"UTF-8");	
		$work_phone2 = htmlentities($_POST["work_phone2"],ENT_QUOTES,"UTF-8");	
		$email1 = htmlentities($_POST["email1"],ENT_QUOTES,"UTF-8");	
		$email2 = htmlentities($_POST["email2"],ENT_QUOTES,"UTF-8");	
		$seasons = "NO BLACKOUT DATES";
		 
 ?>

		<section id="content">
		 <form  id="contact-form" class="contact-form" action="contract.php" method="POST">
          <div class="container">
          <br>
        <div class="row clearfix">
			<br><br> 
            <span class="2col"><input type="text" name="client1" id="client1" value="<?php echo $client1; ?>" placeholder="Client 1" required class="form-control" /></span>
           <span class="2col"> <input type="text" name="nationality1"id="nationality1" value="<?php echo $nationality1; ?>" placeholder="Nationality 1" required class="form-control"  /></span>  
            <span class="2col"><input type="text" name="passport1" id="passport1" value="<?php echo $passport1; ?>" placeholder="Passport or ID 1" required class="form-control" /></span>  
            <span class="2col"><input type="text" name="civil_status1" id="civil_status1" value="<?php echo $civil_status1; ?>" placeholder="Civil Status" class="form-control"  /> </span> 
            <span class="2col"><<input type="text" name="address1" id="address1" placeholder="Address" value="<?php echo $address1; ?>" required class="form-control" /></span>  
           <span class="2col"> <input type="text" name="city1" id="city1"  placeholder="City" value="<?php echo $city1; ?>" required class="form-control" /> </span>  
            <li class="span6 portfolio-item" data-id="id-7" data-type="personal_info"> <span class="4col"><input type="text" name="state1" id="state1" placeholder="State"  value="<?php echo $state1; ?>" required="required" class="form-control" /></span> </li>
            <li class="span6 portfolio-item" data-id="id-8" data-type="personal_info"> <span class="4col"><input type="text" name="country1" id="country1" placeholder="Country" value="<?php echo $country1; ?>" required class="form-control" /> </span> </li>
            <li class="span6 portfolio-item" data-id="id-9" data-type="personal_info"> <span class="4col"><input type="text" name="home_phone1"  id="home_phone1" placeholder="Home Phone" value="<?php echo $home_phone1; ?>" class="form-control"  /></span> </li>
            <li class="span6 portfolio-item" data-id="id-10" data-type="personal_info"> <span class="4col"><input type="text" name="work_phone1" id="work_phone1" placeholder="Work Phone" value="<?php echo $work_phone1; ?>" class="form-control" /></span> </li>
            <li class="span6 portfolio-item" data-id="id-11" data-type="personal_info"><span class="4col"><input type="text" name="email1" id="email1" placeholder="Email 1" value="<?php echo $email1; ?>" required class="form-control"/></span> </li>
            <li class="span6 portfolio-item" data-id="id-12" data-type="personal_info"> <span class="4col"><input type="text" name="fax1"  id="fax1" placeholder="Fax" value="<?php echo $fax1; ?>" class="form-control" /></span> </li>
           
            <li class="span6 portfolio-item" data-id="id-13" data-type="personal_info2"> <span class="4col"><input type="text" name="client2" id="client2" value="<?php echo $client2; ?>" placeholder="Client 2" class="form-control" /></span> </li>
            <li class="span6 portfolio-item" data-id="id-14" data-type="personal_info2"> <span class="4col"><input type="text" name="nationality2"id="nationality2" value="<?php echo $nationality2; ?>" placeholder="Nationality 2"  class="form-control" /></span> </li>
            <li class="span6 portfolio-item" data-id="id-15" data-type="personal_info2"> <span class="4col"> <input type="text" name="passport2" id="passport2" value="<?php echo $passport2; ?>" placeholder="Passport or ID 2" class="form-control" /></span> </li>
            <li class="span6 portfolio-item" data-id="id-16" data-type="personal_info2"> <span class="4col"><input type="text" name="civil_status2" id="civil_status2" value="<?php echo $civil_status2; ?>" placeholder="Civil Status" class="form-control"  /> </span> </li>
            <li class="span6 portfolio-item" data-id="id-17" data-type="personal_info2"> <span class="4col"><input type="text" name="address2" id="address2" value="<?php echo $address2; ?>" placeholder="Address"  class="form-control" /></span> </li>
            <li class="span6 portfolio-item" data-id="id-18" data-type="personal_info2"> <span class="4col"><input type="text" name="city2" id="city2"  value="<?php echo $city2; ?>" placeholder="City" class="form-control" /> </span> </li>
            <li class="span6 portfolio-item" data-id="id-19" data-type="personal_info2"> <span class="4col"><input type="text" name="state2" id="state2" value="<?php echo $state2; ?>" placeholder="State"  class="form-control" /></span> </li>
            <li class="span6 portfolio-item" data-id="id-20" data-type="personal_info2"> <span class="4col"><input type="text" name="country2" id="country2"value="<?php echo $country2; ?>" placeholder="Country" class="form-control" /> </span> </li>
            <li class="span6 portfolio-item" data-id="id-21" data-type="personal_info2"> <span class="4col"><input type="text" name="home_phone2"  id="home_phone2" value="<?php echo $home_phone2; ?>" placeholder="Home Phone 2" class="form-control"  /></span> </li>
            <li class="span6 portfolio-item" data-id="id-22" data-type="personal_info2"> <span class="4col"><input type="text" name="work_phone2" id="work_phone2" placeholder="Work Phone 2" value="<?php echo $work_phone2; ?>" class="form-control" /></span> </li>
            <li class="span6 portfolio-item" data-id="id-23" data-type="personal_info2"><span class="4col"><input type="text" name="email2" id="email2" value="<?php echo $email2; ?>" placeholder="Email 2"  class="form-control"/></span> </li>
            <li class="span6 portfolio-item" data-id="id-24" data-type="personal_info2"> <span class="4col"><input type="text" name="fax2"  id="fax2" value="<?php echo $fax2; ?>" placeholder="Fax" class="form-control" /></span> </li>
           
       
       
        	<li class="span6 portfolio-item" data-id="id-25" data-type="membership_info"> <span class="4col"> <select name="membership_type" required="required" value="<?php echo $membership_type; ?>" class="form-control">
              <option value="<?php echo ""; ?>">Membership Type</option>
              <option value="<?php echo "BLACK"; ?>">BLACK</option>
              <option value="<?php echo "GOLD"; ?>">GOLD</option>
              <option value="<?php echo "SILVER"; ?>">SILVER</option>
              <option value="<?php echo "BLUE"; ?>">BLUE</option>
              </select></span> </li>
            <li class="span6 portfolio-item" data-id="id-26" data-type="membership_info"> <span class="4col"> <input type="text" name="membership_price" id="membership_price" placeholder="Membership Price" value="<?php echo $membership_price; ?>" class="form-control" required/></span> </li>
            <li class="span6 portfolio-item" data-id="id-27" data-type="membership_info"> <span class="4col"><input type="text" name="membership_number" id="membership_number" placeholder="Membership Number" value="<?php echo $membership_number; ?>" class="form-control" required/></span> </li>
            <li class="span6 portfolio-item" data-id="id-28" data-type="membership_info"> <span class="4col"><input type="text" name="initial_downpayment" id="initial_downpayment" placeholder="Initial Downpayment" value="<?php echo $initial_downpayment; ?>" required class="form-control" /> </span> </li>
            <li class="span6 portfolio-item" data-id="id-29" data-type="membership_info"> <span class="4col"><input type="text" name="pending_payment1" id="pending_payment1" placeholder="Pending Payment 1" value="<?php echo $pending_payment1; ?>" class="form-control"/> </span> </li>
            <li class="span6 portfolio-item" data-id="id-30" data-type="membership_info"> <span class="4col"><input type="text" name="pending_payment2" id="pending_payment2" placeholder="Pending Payment 2" value="<?php echo $pending_payment2; ?>" class="form-control"/></span> </li>
            <li class="span6 portfolio-item" data-id="id-31" data-type="membership_info"> <span class="4col">
            <select name="monthly_payments"  class="form-control">
              <option value="<?php echo ""; ?>">MONTHLY PAYMENTS</option>
              <option value="<?php echo "0"; ?>">0</option>
              <option value="<?php echo "12"; ?>" >12</option>
              <option value="<?php echo "24"; ?>">24</option>
              <option value="<?php echo "36"; ?>" >36</option>
              <option value="<?php echo "40"; ?>">40</option>
              <option value="<?php echo "48"; ?>" >48</option>
              <option value="<?php echo "60"; ?>" >60</option>
              
            </select></span> </li>
 
            <li class="span6 portfolio-item" data-id="id-32" data-type="membership_info"> <span class="4col"><input type="date" name="date_of_payment1" id="date_of_payment1" value="<?php echo $date_of_payment1; ?>" placeholder="Date of Payment 1" class="form-control"/></span> </li>
            <li class="span6 portfolio-item" data-id="id-33" data-type="membership_info"> <span class="4col"> <input type="date" name="date_of_payment2" id="date_of_payment2" value="<?php echo $date_of_payment2; ?>" placeholder="Date of Payment 2" class="form-control"/> </span> </li>
            <li class="span6 portfolio-item" data-id="id-34" data-type="membership_info"> <span class="4col">
            <select name="pending_payment_via" class="form-control" >
              <option value="<?php echo ""; ?>"></option>
              <option value="<?php echo "Credit Card"; ?>" >Credit Card</option>
              <option value="<?php echo "Bank Transfer"; ?>" >Bank Transfer</option>
              <option value="<?php echo "Cheque"; ?>" >Cheque</option>
            </select> 
             </span> 
             </li>
            <li class="span6 portfolio-item" data-id="id-35" data-type="membership_info"> <span class="4col">
            <select name="interest_rate" class="form-control" >
              <option value="<?php echo ""; ?>">INTEREST RATE</option>
              <option value="<?php echo "0"; ?>" >0%</option>
              <option value="<?php echo "5"; ?>" >5%</option>
              <option value="<?php echo "7"; ?>">7%</option>
              <option value="<?php echo "8"; ?>" >8%</option>
              <option value="<?php echo "8.5"; ?>" >8.5%</option>
              <option value="<?php echo "9"; ?>"  >9%</option>
              <option value="<?php echo "13"; ?>" >13%</option>
              
            </select> 
            </span> </li>
            
            
            <li class="span6 portfolio-item" data-id="id-36" data-type="membership_info"> <span class="4col">
            <select name="term_of_year_number" required="required" class="form-control">
              <option value="<?php echo ""; ?>">YEARS OF MEMBERSHIP</option>
              <option value="<?php echo "25"; ?>">25 YEARS</option>
              <option value="<?php echo "20"; ?>">20 YEARS</option>
              <option value="<?php echo "15"; ?>">15 YEARS</option>
              <option value="<?php echo "10"; ?>">10 YEARS</option>
  			</select></span> </li>
            <li class="span6 portfolio-item" data-id="id-37" data-type="membership_info"> <span class="4col"><input type="text" name="term_of_year_letter" id="term_of_year_letter" value="<?php echo $term_of_year_letter; ?>" class="form-control" placeholder="YEARS IN LETTER" /></span> </li>
            <li class="span6 portfolio-item" data-id="id-38" data-type="membership_info"> <span class="4col"> 
            <select name="included_brands" required="required" class="form-control" >
              <option value="<?php echo""; ?>">INCLUDED BRANDS</option>
              <option value="<?php echo"GRAND, GOLD PREMIUM, PREMIUM, IBEROSTAR"; ?>" >GRAND, GOLD PREMIUM, PREMIUM, IBEROSTAR</option>
              <option value="<?php echo"GOLD PREMIUM, PREMIUM, IBEROSTAR"; ?>" >GOLD PREMIUM, PREMIUM, IBEROSTAR</option>
              <option value="<?php echo"PREMIUM, IBEROSTAR"; ?>" >PREMIUM, IBEROSTAR</option>
              <option value="<?php echo"IBEROSTAR"; ?>" >IBEROSTAR</option>
			</select></span> </li>
           
            <li class="span6 portfolio-item" data-id="id-39" data-type="rci"> <span class="4col"><input type="text" name="annual_weeks_exchange" id="annual_weeks_exchange" value="<?php echo $annual_weeks_exchange; ?>" class="form-control" placeholder="ANNUAL WEEKS RCI" required /></span> </li>
            <li class="span6 portfolio-item" data-id="id-40" data-type="rci"> <span class="4col"><input type="text" name="rci_transaction_rate" id="rci_transaction_rate" value="<?php echo $rci_transaction_rate; ?>" class="form-control" placeholder="RCI RATE" required /></span> </li>
<!--            <li class="span6 portfolio-item" data-id="id-1" data-type="rci"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="rci"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="rci"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="rci"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="rci"> <span class="4col"> </span> </li>
            
            <li class="span6 portfolio-item" data-id="id-1" data-type="registry"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="registry"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="registry"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="registry"> <span class="4col"> </span> </li>
            
             <li class="span6 portfolio-item" data-id="id-1" data-type=""> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type=""> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type=""> <span class="4col"> </span> </li>
            
            
            
            <li class="span6 portfolio-item" data-id="id-1" data-type="lloyd"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="lloyd"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="lloyd"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="gift"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="gift"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="gift"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="gift"> <span class="4col"> </span> </li>
            <li class="span6 portfolio-item" data-id="id-1" data-type="gift"> <span class="4col"> </span> </li>-->
            
            <!-- 2 -->
   </ul>
   

 
  </div>
        </div>
      </div>
    </div>
  </div>
  <br/><br />
 <input type="submit" name="submit" value="ENVIAR LA INFO AL CONTRATO" class="btn-info" > 
 <input type="reset" name="reset" value="BORRAR DATOS" class="btn btn-warning" > 
 </form>
</section>

   
 
<!--==============================footer=================================-->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/camera.js"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>
<script type="text/javascript" src="js/application.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="js/accordion.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/sitemap.js"></script>
<script type="text/javascript" src="js/nav-small.js"></script>
<script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
<script>
      $(document).ready(function(){   
              jQuery('.camera_wrap').camera();
        });    
	</script>
</body>
</html>
