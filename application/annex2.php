<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Annex II</title>
</head>

<body>
<center><img src="../clip_image006.png" alt="" width="102" height="92" /></center> 
<p align="center">&nbsp;</p>
<p align="center"><strong><u>ANNEX II</u></strong><strong><u> </u></strong><br />
  <strong><u>PROMISSORY NOTE</u></strong> <br />
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
  <strong style='align:right;'> MEMBERSHIP # <u>" . $row['membership_number'] ."</u></strong></p>
<p>U.S. $  <u> " . print($row['pending_payment2']). "</u>                                                          (Date)<u>" . date('j n, Y')."</u></p>
<p>FOR VALUE  RECEIVED, <u>".$row['client1']."  &nbsp:&nbsp;&nbsp:&nbsp;&nbsp:&nbsp;" .$row['client2']."</u> (&ldquo;<u>Customer</u>&rdquo;)  hereby promises to pay to the order of IBEROCLUB, N.V., a company organized  under the laws of Curazao (&ldquo;<u>Mediator</u>&rdquo;),   the principal  amount of <u>$".$row['pending_payment2'] ."</u>U.S.the &ldquo;<u>Principal Amount</u>&rdquo;) in <u>".$row['monthly_payments'] ."</u>  consecutive and equal scheduled payments of  U.S. $ <u>".$row['monthly_payments_amount'] ."</u> each (each, a &ldquo;<u>Scheduled Payment</u>&rdquo;).  The first Scheduled Payment will be of U.S. $<u><".$row['monthly_payments_amount'] ."</u>and  will be due and payable on <u>".$row['date_of_payment2'] ." 
</u> (the &ldquo;<u>Initial Payment</u>&rdquo;).  Each subsequent Scheduled Payment will be for  the same amount as the Initial Payment and will be due and payable on the same  day of the calendar month following the Initial Payment or the preceding  Scheduled Payment, as applicable, until the Principal Amount is paid in full  (each, a &ldquo;<u>Payment Date</u>&rdquo;); provided that, if any Payment Date falls on a  date which is not a Business Day (as defined below), then the Payment Date for  that Scheduled Payment will be the Business Day immediately following such  date.<br />
  For  purposes of this Note, &ldquo;Business Day&rdquo; shall mean any day other than a Saturday  or a Sunday or a day on which banking institutions are authorized or required  to close in New York, New York.<br />
  Customer  promises to pay on each Payment Date interest on the unpaid Principal Amount of  this Note from the date of execution of this Note until such Principal Amount  shall be paid in full, at a rate per annum equal to <u>".$row['interest_rate'] ."</u> (the  &ldquo;<u>Ordinary Interest Rate</u>&rdquo;).<br />
  Upon  default in the payment of principal or interest on the Note when due, the  entire unpaid principal balance and interest accrued thereon shall immediately  become due and payable upon demand of Mediator.   In addition, Customer will pay to Mediator overdue interest on the  outstanding balance of this Note at a rate per annum equal to the Ordinary  Interest Rate plus three (3) basis points.<br />
  Customer  hereby waives, for itself and its legal representatives, successors and  assigns, presentment, demand and protest and notice of presentment, dishonor,  notice of intent to accelerate, notice of acceleration, protest, default,  nonpayment, maturity, release, compromise, settlement, extension, waiver or  renewal of any or all of this Note.<br />
No  provision of this Note shall be modified except by a written instrument executed  by Customer and by Mediator expressly referring to this Note and to the  provision modified.  All payments made  hereunder shall be net of withholdings or setoffs for taxes.  </p>
<p>This Note  shall be governed by, and construed and enforced in accordance with, the laws  of the State of New York, excluding its choice of laws principles.</p>
<p>Customer  hereby agrees to pay on demand all costs of collection and enforcement of this  Note (including, without limitation, attorneys&rsquo; fees and expenses and fees and  expenses on appeal or in any bankruptcy proceeding) incurred by Mediator with  respect to this Note. </p>
<p>This Note  shall be binding upon Customer and his/her successors and assigns, and shall  inure to the benefit of Mediator and its successors and assigns.<br />
  TO THE  FULLEST EXTENT PERMITTED BY APPLICABLE LAW, CUSTOMER AND MEDIATOR EACH HEREBY  KNOWINGLY, VOLUNTARILY, INTENTIONALLY AND IRREVOCABLY WAIVE ANY AND ALL RIGHT  TO A TRIAL BY JURY IN ANY ACTION OR PROCEEDING TO ENFORCE OR DEFEND ANY RIGHT,  POWER, REMEDY OR DEFENSE ARISING OUT OF OR RELATED TO THIS NOTE, AND EACH  AGREES THAT ANY SUCH ACTION OR PROCEEDING SHALL BE TRIED BEFORE A JUDGE AND NOT  BEFORE A JURY.  </p>
<p>CUSTOMER                                                                             <br />
  <br />
  <br />
<table width='100%'>
<tr>
<td width='50%'>Membership  No.".$row['membership_number'] ." </td><td width='50%'>&nbsp;</td>
</tr>
<tr>
<th width='50%'>THE CLIENT</th>
<th width='50%'>&nbsp; </th></tr>
<tr>
<td width='50%'>Signature______________________</td><td>Signature______________________</td>
  </tr>
<tr>
<td width='50%'>Mr./Ms.".$row['client1'] ."</td><td>Mr./Ms. ".$row['client2'] ."</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr>
  <td width='50%'>&nbsp;</td><td valign='middle' >&nbsp;</td></tr>  
<tr>
<td width='50%'> </td><td><center></center></td></tr>                                         
</table>
</body>
</html>";
	}
} else {
    echo "0 results";
}
$conn->close();
?>