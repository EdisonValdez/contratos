<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CREDITS CERTIFICATE</title>
</head>

<body>
<p align="center"><img src="clip_image002_0001.png" alt="" width="102" height="92" /><strong><em><u> </u></em></strong></p>
<p align="center"><strong><u>CREDITS CERTIFICATE</u></strong></p>

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
		<table style="vertical-align: bottom; text-align:center;">
		<tr>
		<td width="100%">
<p>This Certificate entitles <u>'.  $row["client1"] . ' & ' .  $row["client1"] . '</u>to <u>'.  $row["gift_credits"] . '</u></td></tr>
<tr>
<td width="100%"> CREDITS to be used for  reservations in any of The Iberostar <u>' . $row["included_brands"]. '</u> Brand Resorts.<br /></td></tr>
</table>
<br>
<br>
<table width="100%">
<tr>
<td width="33%"><br>
	<p align="center">DATE: <u>' . $row["today"] . '</u> 
</td>

<td width="33%">
 <img src="clip_image004_0001.png" alt="" width="211" height="125" /><br>SIGNATURE         
</td>

<td width="33%"><br>
 MEMBERSHIP #: <u>' . $row["membership_number"] . '</u>
</td>

</tr>
</table>
</p>
  ';
  
	}

} else {

    echo "0 results";

}

$conn->close();
?>
  <strong>RELEASE  POLICY FOR GIFT WEEKS:</strong><br /></p>
 The use of Gift Credis that form part of the  Membership shall be governed by the following rules:<br />
  a)            For  its use THE MEMBER must be current on all of his/her financial obligations  (including, but not limited to, monthly payments).<br />
  b)            The  use of Credits may only be released when THE MEMBER has paid at least 40% of  the value of the Membership (including applicable taxes). <br />
  c)            For those Memberships  with more than 3000 Credits included, the additional Credits may only be  released one per year. However, the above shall not apply when THE MEMBER has  paid the total price of Membership. <br />
  d)            Incentive  Credits expire 18 months after their release. <br />
  e)            In  the event where THE MEMBER paid in full, the incentive 3000 Credits will be  released yearly notwithstanding the ability to anticipate usage<br />
f)             In the event where  the THE MEMBER has paid 50% as down payment the Credits might be released in  the same percentage (50%), and additionally will be released yearly  up to 3000 Credits as of the first year. 
</body>
</html>