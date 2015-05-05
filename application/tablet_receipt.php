<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TABLET RECEIPT</title>
</head>

<body>

 <p align="center"><img width="208" height="167" src="../clip_image002_0000.png" /></p>
<h1 align="center">TABLET RECEIPT<br /></h1>
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
        echo "
<div align='right'><strong>Membership # <u>". $row['membership_number']." </u></strong><br /><br /><br />
   <strong>Date <u>".date('d M, Y')."</u></strong></p></div><br /><br /><br />
 <h1>With the present  receipt,  our new Client(s) ".$row['client1']."confirm that have received a Tablet <u>#HM07ACK007".$row['tablet_receipt']."</u> as part of our membership <u> </u> #<u>". $row['membership_number'] ."</u> on <strong>". date('d M, Y'). "</strong></h1>
 <p><br /><br /><br />
 </p>
 <table width='100%'>
   <tr>
     <td width='50%'>&nbsp;</td>
     <td width='50%'>&nbsp;</td>
   </tr>
   <tr>
     <th width='50%'>THE CLIENT</th>
     <th width='50%'>&nbsp; </th>
   </tr>
   <tr>
     <td width='50%'><h1>Signature______________________</h1></td>
     <td><h1>Signature______________________</h1></td>
   </tr>
   <tr>
     <td width='50%'><h3>Mr./Ms.". $row['client1'] ."</h3></td>
     <td><h3>Mr./Ms.". $row['client2']. "</h3></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td width='50%'>&nbsp;</td>
     <td valign='middle' >&nbsp;</td>
   </tr>
   
   <tr>
     <td width='50%'> </td>
     <td><center>
     </center></td>
   </tr>
   
 </table>
</body>
</html>";
	}
} else {
    echo "0 results";
}
$conn->close();
?>