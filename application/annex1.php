<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SUMMARY ANNEX I</title>
</head>

<body>
<center><img src="../clip_image005.png" alt="" width="102" height="92" border="0" /><strong><u> </u></strong></p></center>
<p align="center"><strong><u>Annex I</u></strong><strong><u> </u></strong><br />
  <strong><u>SUMMARY OF BENEFITS OF CLIENTSHIP</u></strong><strong><u> </u></strong></p>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contratos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM personal_info ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo'
<p align="right"><strong>          MEMBERSHIP  # <u>'. $row["membership_number"] . '</u></strong></p>
<p>____/____ The consideration  for the membership type '. $row["membership_type"] . ' is '. $row["membership_price"] . ' USD.<br />
  ____/____ THE CLIENT  is guaranteed a Preferential Price of 25% savings on the public rate published  at www.iberostar.com in force at the time of booking to book at any of the  Iberostar Club Hotels within a term of '. $row["term_of_year_number"] . ' years.<br />
  ____/____ THE  MEMBER is guaranteed a Premier Nights package, with exclusive amenities, access  to VIP lounges, and other benefits representing considerable additional value  for  '. $row["term_of_year_number"] . ' years at participating Iberostar Hotels Club Resorts to which he/she has  the right to membership for the valid term specified in his/her contract.<br />
  ____/____ The IBEROSTAR THE CLUB Program shall  additionally grant a 25% discount off at Iberostar Club Hotels on some of the  services not included as part of the all-inclusive package.<br />
  ____/____THE CLIENT  is guaranteed a discount of 25% on the public rate published in  www.Iberostar.com, at the time of booking to book at any of the Iberostar  Hotels within the term of  '. $row["term_of_year_number"] . ' years according to the type of membership  contracted.<br />
  ____/____THE CLIENT  is guaranteed the ability to extend a discount of 10% on the public rate  published in www.Iberostar.com at the time of booking to book third parties  traveling together and accompanying THE CLIENT at any of the Iberostar Hotels, within  the term of  '. $row["term_of_year_number"] . ' years.<br />
  ____/____ THE TRAVEL AGENCY shall cover for THE CLIENT  the cost of membership in the interval exchange company '. $row["interval_exchange_company"] . ' for the following '. $row["years_of_rci_covered"] . ' years. The subsequent interval  exchange membership costs are optional and are the responsibility of THE CLIENT.<br />
  ____/____ Each  year within the term of the membership, THE CLIENT shall have the right to book  a maximum number of 14 nights in order to make a maximum number of 2 exchange intervals  of 7 nights. For the exchange it is necessary to cover the transaction rate of  '. $row["rci_transaction_rate"] . ' US dollars. <br />
  ____/____ THE TRAVEL AGENCY shall provide THE CLIENT  with complimentary access to an online travel agency in order to make all of  his/her reservations for the purchase of airline tickets, car rentals, cruises  and other travel options at competitive prices. <br />
  ____/____ The IBEROSTAR THE TRAVEL AGENCY Program  shall provide THE CLIENT complimentary access to a Vessel service membership in  order to enable the CLIENT to contract such services at preferential prices. <br />
  ____/____ The membership shall have a term of '. $row["term_of_year_number"] . ' years  and the benefits shall be transferable in accordance with the provisions of the  Agreement.</p>
<p>&nbsp;</p>
<p>Signed on '.date("j, n of Y").'</p>
<table width="80%" align="center">
<tr>
<td width="50%" valign="middle">Membership  No. '. $row["membership_number"] . '</td><td width="50%">&nbsp;</td>
</tr>
<tr>
<th width="50%" valign="middle">THE CLIENT</th><th width="50%">IBEROCLUB N.V</th></tr>
<tr>
<td width="50%" valign="middle">Signature______________________</td><td>&nbsp;</td>  </tr>
<tr>
<td width="50%" valign="middle">Mr./Ms. '. $row["client1"] . '</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td width="50%" valign="middle">Signature______________________</td><td valign="middle"> Signature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="../clip_image004_0000.png" alt="" width="211" height="125" /></td></tr>  
<tr>
<td width="50%" valign="middle">Mr./Ms. '. $row["client2"] . '</td><td><center>Mr. Raul Ojeda</center></td></tr>                                         
</table><br />
</body>
</html>
';
	}
} else {
    echo "0 results";
}
$conn->close();
?>