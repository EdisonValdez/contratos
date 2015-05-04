<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHOW CONTRACTS</title>

    <script src="plugins/jquery-2.1.1.min.js"></script>

    <!-- bootstrap for better look example, but not necessary -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" type="text/css" media="screen, projection">

    <!-- Step Form Wizard plugin -->
    <link rel="stylesheet" href="step-form-wizard/css/step-form-wizard.css" type="text/css" media="screen, projection">
    <script src="step-form-wizard/js/step-form-wizard.js"></script>

    <!-- nicer scroll in steps -->
    <link rel="stylesheet" href="plugins/mcustom-scrollbar/jquery.mCustomScrollbar.css">
    <script src="plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <script>
        var sfw;
        $(document).ready(function() {
            sfw = $("#wizard_example").stepFormWizard({
                showNav: 'left',
                height: '300px',
                theme: 'circle'
            });
        })
        $(window).load(function(){
            /* only if you want use mcustom scrollbar */
            $(".sf-wizard fieldset").mCustomScrollbar({
                theme:"dark-3",
                scrollButtons:{
                    enable:true
                }
            });
            /* ***************************************/

            /* this function call can help with broken layout after loaded images or fonts */
            sfw.refresh();
        });
    </script>

    <style>
        pre {margin: 45px 0 60px;}
        h2 {margin: 60px 0 30px 0;}
        p {margin-bottom: 10px;}
    </style>
</head>
<body>

<div class="container">
<div class="site-index">
<div class="body-content">

<div class="row">
    <div class="col-md-12">
        <h2>Print Your Contract</h2>
        <form id="wizard_example" action="">
            <fieldset>
                <legend>Main</legend>
                <div class="row">

                    <div class="col-lg-12">
                   <a href="contract2.php" target="_blank">MAIN CONTRACT</a> </div>
                   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MEMBERSHIP CONTRACT </title>
</head>

<body>
<p align="center"><img src="../clip_image002.png" alt="" width="102" height="92" /><strong> </strong></p>
<p align="center"><strong>MEMBERSHIP CONTRACT </strong><br />
  <strong>IBEROSTAR THE CLUB</strong></p>
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
<p align="right">                                                                             <strong>MEMBERSHIP #' . $row["membership_number"] . '</strong></p>
<p>The current contract is entered into by and between <strong>IBEROCLUB, N.V.</strong>,  a Netherlands Antilles corporation with its legal representation in Curazao, hereinafter  referred to as <strong>&ldquo;THE TRAVEL AGENCY</strong>,&rdquo;<strong> </strong>with address located at  Pietermaai 15, Willemstad, Curaçao, and the person mentioned below, hereinafter  referred to as <strong>&ldquo;THE CLIENT.&rdquo;</strong></p>
 THE CLIENT   
<table width="90%" >
<tr>                                                 
<td width="50%">' . $row["client1"] . '&nbsp;</td>
<td width="50%">NATIONALITY:&nbsp;' . $row["nationality1"] . '</td></tr>
<tr>
<td width="50%">PASSPORT NO:&nbsp;' . $row["passport_id1"] . '</td>
<td width="50%" >CIVIL STATUS:&nbsp;' . $row["civil_status1"] . '</td> 
<tr>
   <td width="50%">ADDRESS:</td>
   <td>&nbsp;</td>
   
 </tr>  
 <tr>
   <td width="50%">' . $row["address1"] . ' </td>
   <td>&nbsp;</td>
   
 </tr> 
<tr>
	<td width="50%">CITY:&nbsp;' . $row["city1"] . '</td>
    <td width="50%">STATE/PROVINCE:&nbsp;' . $row["state1"] . '</td>
 </tr>
  <tr>
 	<td width="50%">COUNTRY:&nbsp;' . $row["country1"] . '</td>
    <td width="50%">CELL PHONE:&nbsp;' . $row["cell_phone1"] . '</td> 
 </tr>
 <tr>
<td width="50%">WORK PHONE:&nbsp;' . $row["work_phone1"] . ' </td>
  <td width="50%">FAX:&nbsp;' . $row["fax1"] . '</td>
</tr>
<tr>
  <td width="50%">E-MAIL:&nbsp;' . $row["email1"] . '</td>
  <td width="50%">CELL PHONE:&nbsp;' . $row["work_phone1"] . '</td>
 </tr>
 
</table>
<p>&nbsp;</p>

 THE CLIENT   
<table width="90%" >
<tr>                                                 
<td width="50%">' . $row["client2"] . '&nbsp;</td>
<td width="50%">NATIONALITY:&nbsp;' . $row["nationality2"] . '</td></tr>
<tr>
<td width="50%">PASSPORT NO:&nbsp;' . $row["passport_id2"] . '</td>
<td width="50%" >CIVIL STATUS:&nbsp;' . $row["civil_status2"] . '</td> 
<tr>
   <td width="50%">ADDRESS:</td>
   <td>&nbsp;</td>
   
 </tr>  
 <tr>
   <td width="50%">' . $row["address2"] . ' </td>
   <td>&nbsp;</td>
   
 </tr> 
<tr>
	<td width="50%">CITY:&nbsp;' . $row["city2"] . '</td>
    <td width="50%">STATE/PROVINCE:&nbsp;' . $row["state2"] . '</td>
 </tr>
  <tr>
 	<td width="50%">COUNTRY:&nbsp;' . $row["country2"] . '</td>
    <td width="50%">CELL PHONE:&nbsp;' . $row["cell_phone2"] . '</td> 
 </tr>
 <tr>
<td width="50%">WORK PHONE:&nbsp;' . $row["work_phone2"] . ' </td>
  <td width="50%">FAX:&nbsp;' . $row["fax2"] . '</td>
</tr>
<tr>
  <td width="50%">E-MAIL:&nbsp;' . $row["email2"] . '</td>
  <td width="50%">CELL PHONE:&nbsp;' . $row["work_phone2"] . '</td>
 </tr>
 
</table>
<p align="center"><strong>CLAUSES</strong><strong> </strong></p>
<p><strong>ONE.- PURPOSE</strong><strong> </strong><br />
  THE TRAVEL AGENCY shall facilitate to THE CLIENT the ability to make effective Benefits and Discounts  of Goods and Services of the IBEROSTAR THE CLUB Program under the terms of the  current Contract. THE CLIENT, through the payment of the  amount stipulated below, will be granted Membership to IBEROSTAR THE CLUB (the  &ldquo;<u>Membership</u>&rdquo;) of the type indicated to follow, which grants the right to  book unlimited package of night-stays each year within the term hereof subject  to availability at any of the hotels in the Iberostar Chain under the IBEROSTAR  THE CLUB Program in accordance with the terms and conditions contained herein.</p>
<p>*Membership: ' . $row["membership_type"] . '  * Duration:' . $row["term_of_year_number"] . ' *Annual Weeks Exchange: ' . $row["annual_weeks_exchange"] . '    *Included Brands: ' . $row["included_brands"] . '     *  Seasons:' . $row["season"] . ' <br />
</p>
<p><strong>TWO.- CONSIDERATION</strong><strong> </strong><br />
  THE CLIENT shall pay THE TRAVEL AGENCY the following amounts in  consideration for the mediation services as travel agency in accordance with  the Membership:</p>
<ol>
  <li>PRICE OF MEMBERSHIP: <u>' . $row["membership_price"] . ' </u> USD                    </li>
</ol>
<p>&nbsp;</p>
<p>The amount above shall be paid according to the  following method:</p>
<ol>
  <li>INICIAL DOWNPAYMENT: <u> ' . $row["initial_downpayment"] . '</u> USD</li>
  <li>PENDING PAYMENT 1: <u> ' . $row["pending_payment1"] . '</u> USD via' . $row["pending_payment_via"] . '</li>
  <li>PENDING PAYMENT 2: <u> ' . $row["pending_payment2"] . '</u> USD via installments in accordance with the  promissory note attached.</li>
</ol>
<p>&nbsp;</p>
<p>The amount paid by THE CLIENT in this act is <u>' . $row["initial_downpayment"] . '</u> USD/Dollars,  the Legal Currency of the United States of America. Said amount has been paid  by THE CLIENT and received by THE TRAVEL AGENCY on <u>' .date("j n, Y"). '</u></p>
<p>PAYMENT PENDING 1 for the sum of <u>' . $row["pending_payment1"] . '</u> USD shall be paid within <u>' . $row["shall_be_paid_within"] . '</u> days of the execution of the current Contract  through <u>' . $row["pending_payment_via"] . '</u>, and PAYMENT PENDING 2  shall be documented through a promissory note in the name of <strong>IBEROCLUB N.V.</strong> for the sum of <u>' . $row["pending_payment2"] . '</u> USD. </p>
<p>Payments to THE TRAVEL AGENCY of PAYMENT PENDING 2  must be carried out under the terms provisioned in said promissory note, which  guarantees the payment, and shall be identified with the same number as this  Contract and shall form an integral part thereof; therefore, it is subject to  the terms and conditions of this Contract. In the event that the promissory  note signed by THE CLIENT is issued to a specialized collection company, the  fees generated by said company shall be covered by THE CLIENT (including the fee  of five United States dollars  (USD 5.00) for each payment in installments). </p>
<p>The amount of the first monthly installment payment shall be <u>' . $row["monthly_payments"] . '</u> USD.</p>
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
<p>Additionally, THE CLIENT shall have the right to ask THE TRAVEL AGENCY to  apply for a 10% (ten percent) discount to the accommodation rates of such  persons who, without being considered Beneficiaries, accompany THE CLIENT  during CLIENT&rsquo;s stay in any of the Iberostar Hotels (hereafter &ldquo;<u>Authorized  Accompanying Parties</u>&rdquo;). The Authorized Accompanying Parties shall only be  entitled to the application of said discount, being excluded from the remaining  Benefits and Discounts on Goods and Services that the IBEROSTAR THE CLUB  Program makes available exclusively to its clients.</p>
<p><strong>SIX:</strong> <strong>TRANSFER OF MEMBERSHIP</strong><br />
  THE CLIENT has the right to transfer or bequeath the rights and  obligations referred to herein upon written notice to THE TRAVEL AGENCY. The  new client remaining obligated to make any and all payments required, as well  as the payment to THE TRAVEL AGENCY of an amount equivalent to 1% of the consideration  of the transferred Membership for transfer costs.</p>
<p><strong>SEVEN:</strong> <strong>DURATION</strong><br />
  Unless the current Contract is terminated as specifically indicated in  its own terms, it shall be terminated following a term of <u>' . $row["term_of_year_letter"] . '</u> (<u>' . $row["term_of_year_number"] . '</u>)  years from the date of execution hereof; therefore, upon termination of this  Agreement the CLIENT expressly recognizes that Membership&rsquo;s rights and benefits  shall be terminated.</p>
<p>      <strong>EIGHT</strong>: <strong>PRIVILEGES AND BENEFITS</strong><br />
  In addition to those Benefits and  Discounts associated to Iberostar Club Hotels in the terms hereof, IBEROSTAR  THE CLUB Program shall offer privileges and benefits such as interval exchange  services, flight services, car rentals, cruises, guided excursions, land  transportation, boat and aircraft rentals, and golf course services  (hereinafter referred to as &ldquo;<u>Other Suppliers of Benefits and Discounts</u>&rdquo;),  with those whom THE TRAVEL AGENCY maintains agreements or strategic alliances  for the benefit of its clients, at competitive prices with the goal of offering a complete &lsquo;One Stop Shopping&rsquo; experience.</p>
<p>      All Other  Suppliers of Benefits and Discounts that are included or will be included in  the future in the IBEROSTAR THE CLUB Program may be substituted or replaced by  others of a similar type at any time without prior notice, in order to maintain  the level of quality of the providers at all times, to which THE CLIENT  expresses his/her consent.</p>
<p>      THE TRAVEL  AGENCY is not liable for the services of Other Suppliers of Benefits and  Discounts reserving the right to remove, change or supplement in accordance  with the changing needs and trends of the industry and the needs of the clients.  However, at all times THE TRAVEL AGENCY shall search for the best providers to  ensure the continued satisfaction of THE CLIENT. </p>
<p>In no event shall either party be liable for any punitive, indirect,  consequential, special, exemplary, or incidental damages, including, without  limitation, liability for loss of use, loss of profits, cost of procurement or  installation of substitute goods, capital investment, product development  costs, unabsorbed overhead, or interest expenses, of whatever kind or however  caused.  Notwithstanding any other provision  in this Agreement, TRAVEL AGENCY&rsquo;s liability to CLIENT, including any  indemnification obligations, whether under contract, tort, strict liability or  otherwise, shall in no event exceed, in the aggregate, the fees paid by CLIENT  to TRAVEL AGENCY under this Agreement as of the date of the claim or dispute  from which such liability arose.</p>
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
  THE CLIENT may oppose these transfers and the treatment  of his/her information for business purposes by IBEROSTAR HOTELES Y  APARTAMENTOS S.L. and Visit Us, Inc., by checking the corresponding options:<br />
  _ I do not want my information to be sent to IBEROSTAR  HOTELES Y APARTAMENTOS S.L., nor to Visit Us.<br />
  _ I do not want to receive business communications  through text message.<br />
  _ I do not want my information to be used for business  purposes.</p>
<p>THE TRAVEL  AGENCY shall execute no other transfers of the information gathered, except to  the Collection Agent and the Providers of Goods and Services included in the  IBEROSTAR THE CLUB Program for the purposes provisioned in the current  Contract. </p>
<p>The data  requested are relevant because through it THE TRAVEL AGENCY seeks to find  information that, in accordance with the criteria of THE TRAVEL AGENCY, enables  it to make corresponding decisions regarding the specific relationship with  each of its clients. </p>
<p>The method  established for THE CLIENT, as the owner of the information gathered, who  requests limiting the use or disclosure of his/her information or exercises his/her  rights of access, correction, cancellation or opposition shall be through a  free-format request containing the requirements of law, addressed to the  following email address: atencioncliente@iberostartheclub.com (or other email  address that is enabled and expressly indicated on the webpage  www.iberostartheclub.com). </p>
<p>Any change to  this Privacy Notice shall be duly communicated through publication on the  website www.iberostartheclub.com. </p>
<p>THE TRAVEL  AGENCY has implemented and permanently updated the administrative, technical  and physical security measures necessary to protect the personal data of the  owners against damage, loss, alteration, destruction or unauthorized use,  access or treatment.</p>
<p><strong>ELEVEN:</strong> <strong>ENTIRE CONTRACT</strong><br />
  The Summary Document of the Benefits of Membership (Annex I), and the  Promissory Note (Annex II) form an integral part of the current Contract, as  attachments or annexes to the same, and THE CLIENT executes them in this act  and acknowledges that they are the only valid agreements between the parties,  and THE TRAVEL AGENCY shall not recognize as binding any other verbal or  written agreement differing in content from the aforementioned documents. </p>
<p><strong>TWELVE:</strong> <strong>APPLICABLE LAW AND JURISDICTION</strong><br />
  This Agreement shall be governed by and construed in  accordance with the laws of Curazao, without giving effect to any choice of law  or conflict of laws rules or provisions that would cause the application of the  laws of any other jurisdiction to apply.   The Parties expressly submit to the exclusive jurisdiction of the courts  of Curazao for the purposes of any action, dispute or controversy arising out  of this Agreement. Each Party waives any right it may have to a different law  or jurisdiction by reason of its present or future domicile, location of its  assets or for any other reason.  </p>
<p>This choice of law and forum provision will not apply  to any Promissory Note issued by the CLIENT as part of any financing by TRAVEL  AGENCY. Such Promissory Note will be governed by and construed in accordance  with its terms</p>
<p>&nbsp;</p>

<p>THE CLIENT AGREES TO THE PROVISIONS OF THE CURRENT CONTRACT.</p>


<p>Signed on <?php echo date("j, n of Y");?></p>
<table width="100%">
<tr>
<td width="50%">Membership  No. ' . $row["membership_number"] . '</td><td width="50%">&nbsp;</td>
</tr>
<tr>
<th width="50%">THE CLIENT</th><th width="50%">IBEROCLUB N.V</th></tr>
<tr>
<td width="50%">Signature______________________</td><td>&nbsp;</td>  </tr>
<tr>
<td width="50%">Mr./Ms. ' . $row["client1"] . '</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td width="50%">Signature______________________</td><td valign="middle" > Signature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="../clip_image004_0000.png" alt="" width="211" height="125" /></td></tr>  
<tr>
<td width="50%">Mr./Ms. ' . $row["client2"] . ' </td><td>Mr. Raul Ojeda</td></tr>                                         
</table>
</body>
</html>
 ';
	}
} else {
    echo "0 results";
}
$conn->close();
?>
                </div>
            </fieldset>
            
             <fieldset>
                <legend>Annex I</legend>
                <div class="row">

                    <div class="col-lg-12">
                   <a href="annex1.php" target="_blank">Annex I</a> </div>
                    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SUMMARY ANNEX i</title>
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
                </div>
             
            </fieldset>
            
             <fieldset>
                <legend>Annex II</legend>
                <div class="row">
				<div class="col-lg-12">
                <a href="annex2.php" target="_blank">Annex II</a> </div>
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
<p>U.S. $  <u> " . $row['pending_payment2']. "</u>                                                          (Date)<u>" . date('j n, Y')."</u></p>
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
                </div>
                
            </fieldset>
            
             <fieldset>
                <legend>Tablet Receipt</legend>
                <div class="row">
				<div class="col-lg-12">
                   <a href="tablet_receipt.php" target="_blank">Tablet Receipt</a> </div>
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
<div align='right'><strong>Membership # <u>". $row['membership_number']." </u></strong><br />
   <strong>Date <u>".date('d M, Y')."</u></strong></p></div>
 <h1>With the present  receipt,  our new Client(s) ".$row['client1']."confirm that have received a Tablet <u>#HM07ACK007".$row['tablet_receipt']."</u> as part of our membership <u> </u> #<u>". $row['membership_number'] ."</u> on <strong>". date('d M, Y'). "</strong></h1>
 <p><br />
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
                </div>
                 
            </fieldset>
            
             <fieldset>
                <legend>Lloydshare</legend>
                <div class="row">
				<div class="col-lg-12">
                   <a href="#" target="_blank">Lloydshare</a> </div>
                </div>
              
            </fieldset>
            
             <fieldset>
                <legend>Credits</legend>
                <div class="col-lg-12">
                   <a href="contract2.php" target="_blank">Credits</a> </div>
                </div>
               
            </fieldset>
                            
        </form>
    </div>
</div>
    <div class="row">
       
    </div>







<footer class="footer">

</footer>
</div>
</div>
</div>
</body>
</html>