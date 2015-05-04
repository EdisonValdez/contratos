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