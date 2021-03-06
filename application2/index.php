<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Step From Wizard</title>

    <script src="plugins/jquery-2.1.1.min.js"></script>

    <!-- bootstrap for better look example, but not necessary -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" type="text/css" media="screen, projection">

    <!-- Step Form Wizard plugin -->
    <link rel="stylesheet" href="step-form-wizard/css/step-form-wizard.css" type="text/css" media="screen, projection">
    <script src="step-form-wizard/js/step-form-wizard.js"></script>

    <!-- nicer scroll in steps -->
    <link rel="stylesheet" href="plugins/mcustom-scrollbar/jquery.mCustomScrollbar.css">
    <script src="plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- validation library http://parsleyjs.org/ -->
    <link rel="stylesheet" href="plugins/parsley/parsley.css" type="text/css" media="screen, projection">
    <script src="plugins/parsley/parsley.min.js"></script>

    <script>
        var sfw;
        $(document).ready(function() {
            sfw = $("#wizard_example").stepFormWizard({
                onNext: function(i, wizard) {
                    return $('form', wizard).parsley().validate('block' + i);
                },
                onFinish: function(i) {
                    return $('form', wizard).parsley().validate();
                }
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
                <div class="col-md-12"><br>
                   <center>  <a href="index.php"><img src="assets/images/logo_iberostar.png"></a> </center>
<br>
<?php

  include('sql_insert.php'); ?>
  <a href="show_contracts.php" target="_blank">Show Contract</a>

                    <form id="wizard_example" action="<?php $_SERVER['REQUEST_URI']?>" method="POST" >
                  
                        <fieldset>
                            <legend><img src="assets/images/Office-Client-Male-Light-icon.png"></legend>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="client1">CLIENT NAME</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="client1"
                                               name="client1" placeholder="CLIENT 1" value=""  autocapitalize="on" required data-parsley-group="block0">
                                    </div>
                                      <div class="form-group">
                                        <label for="passport1">PASSPORT/ID</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="passport_id1"
                                               name="passport_id1" value="" placeholder="PASSPORT / ID" required data-parsley-group="block0">
                                    </div>
                                      <div class="form-group">
                                        <label for="nationality1">NATIONALITY</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="nationality1"
                                               name="nationality1" placeholder="NATIONALITY" required data-parsley-group="block0">
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="home_phone1">CELL PHONE</label>
                                        <input type="text" class="form-control" id="cell_phone1"
                                               name="cell_phone1" placeholder="CELL PHONE" data-parsley-group="block0">
                                    </div>
                                    
                                   <div class="form-group">
                                        <label for="address1">ADDRESS</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id=""
                                               name="address1" placeholder="ADDRESS INCLUDING ZIP CODE..." required data-parsley-group="block0">
                                  </div>
                                      <div class="form-group">
                                        <label for="city1">CITY</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="city1"
                                               name="city1" placeholder="CITY" required data-parsley-group="block0">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                        <label for="work_phone1">WORK PHONE</label>
                                        <input type="text" class="form-control" id="work_phone1"
                                               name="work_phone1" placeholder="WORK PHONE" data-parsley-group="block0">
                                    </div>
                                <div class="form-group">
                                        <label for="fax1">FAX</label>
                                        <input type="TEXT" class="form-control" id="fax1"
                                               name="fax1" placeholder="FAX" data-parsley-group="block0">
                                  </div>
                                      <div class="form-group">
                                        <label for="state1">STATE</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="state1"
                                               name="state1" placeholder="STATE" data-parsley-group="block0">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email1">EMAIL</label>
                                        <input type="email" class="form-control" id="email1"
                                               name="state1" placeholder="EMAIL..." required data-parsley-group="block0">
                                    </div>
                                    
                                  <div class="form-group">
                                        <label for="country1">COUNTRY </label>
                                       <select style="text-transform:uppercase;" name="country1" class="form-control" required="required" data-parsley-group="block0">
                                       <option value="">Country...</option>
                                        <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                           
                                  </div>
                                    <div class="form-group">
                                        <label>CIVIL STATUS</label>

                                        <div class="checkbox">
                                            <label>
                                                <input style="text-transform:uppercase;" type="checkbox" name="civil_status1" value="MARRIED" data-parsley-group="block0"> MARRIED
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input style="text-transform:uppercase;" type="checkbox" name="civil_status1" value="SINGLE" data-parsley-group="block0"> SINGLE
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input style="text-transform:uppercase;" type="checkbox" name="civil_status1" value="COHABITING" data-parsley-group="block0"> COHABITING
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    Here is the personal information of the CLIENT 1.
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend><img src="assets/images/Office-Client-Female-Light-icon.png"></legend>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="client2">CLIENT NAME</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="client2"
                                               name="client2" placeholder="CLIENT 2" data-parsley-group="block1">
                                    </div>
                                      <div class="form-group">
                                        <label for="passport_id2">PASSPORT/ID</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="passport_id2"
                                               name="passport_id2" placeholder="PASSPORT / ID" data-parsley-group="block1">
                                    </div>
                                      <div class="form-group">
                                        <label for="nationality2">NATIONALITY</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="nationality2"
                                               name="nationality2" placeholder="NATIONALITY" data-parsley-group="block1">
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="cell_phone2">CELL PHONE</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="cell_phone2"
                                               name="cell_phone2" placeholder="CELL PHONE" data-parsley-group="block1">
                                    </div>
                                    
                                   <div class="form-group">
                                        <label for="address2">ADDRESS</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="address2"
                                               name="address2" placeholder="ADDRESS INCLUDING ZIP CODE..." data-parsley-group="block1">
                                  </div>
                                      <div class="form-group">
                                        <label for="city2">CITY</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="city2"
                                               name="city2" placeholder="CITY" data-parsley-group="block1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                 <div class="form-group">
                                        <label for="work_phone2">WORK PHONE</label>
                                        <input type="text" class="form-control" id="work_phone2"
                                               name="work_phone2" placeholder="WORK PHONE 2" data-parsley-group="block1">
                                    </div>
                                <div class="form-group">
                                        <label for="fax2">FAX</label>
                                        <input style="text-transform:uppercase;" type="TEXT" class="form-control" id="fax2"
                                               name="fax2" placeholder="FAX"  data-parsley-group="block1">
                                  </div>
                                      <div class="form-group">
                                        <label for="state2">STATE</label>
                                        <input style="text-transform:uppercase;" type="text" class="form-control" id="state2"
                                               name="state2" placeholder="STATE" data-parsley-group="block1">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email2">EMAIL</label>
                                        <input type="email" class="form-control" id="email2"
                                               name="state2" placeholder="EMAIL..." data-parsley-group="block1">
                                    </div>
                                  <div class="form-group">
                                        <label for="country2">COUNTRY </label>
                                       <select style="text-transform:uppercase;" name="country2" id="country2" class="form-control"  data-parsley-group="block1" >
                                       <option value="">Country...</option>
                                        <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                           
                                  </div>
                                    <div class="form-group">
                                        <label>CIVIL STATUS</label>

                                        <div class="checkbox">
                                            <label>
                                                <input style="text-transform:uppercase;" type="checkbox" name="civil_status1" value="MARRIED"  data-parsley-group="block1"> MARRIED
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input style="text-transform:uppercase;" type="checkbox" name="civil_status1" value="SINGLE" data-parsley-group="block1"> SINGLE
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input style="text-transform:uppercase;" type="checkbox" name="civil_status1" value="COHABITING" data-parsley-group="block1"> COHABITING
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    Here is the personal information of the CLIENT 2, In case there's no CLIENT 2 in the Membership, simply let it BLANK!!.
                                </div>
                            </div>
                        </fieldset>
                        
                        <fieldset>
                        	<legend><img src="assets/images/logo_iberostar32.png"></legend>
                            <div class="row">
                              <div class="col-lg-6">
                              	<div class="form-group">
                                
                                <label for="membership_type">MEMBERSHIP TYPE</label>
                                 <select style="text-transform:uppercase;" name="membership_type" required="required" class="form-control" data-parsley-group="block2">
                                      <option value=" ">Membership Type</option>
                                      <option value="BLACK">BLACK</option>
                                      <option value="GOLD" >GOLD</option>
                                      <option value="SILVER" >SILVER</option>
                                       <option value="BLUE" >BLUE</option>
                                  </select> 
                                </div>   
                                
                               
                                
                                <div class="form-group">
                                
                                <label for="membership_price">MEMBERSHIP PRICE</label>
                                <input type="text" name="membership_price" id="membership_price"  class="form-control" placeholder="MEMBERSHIP PRICE USD" data-parsley-group="block2">
                                
                                </div>   
                                
                                <div class="form-group">
                                <label for="membership_number">MEMBERSHIP NUMBER</label>
                                  <input type="text" name="membership_number" id="membership_number" placeholder="Membership Number"  class="form-control" required data-parsley-group="block2"/>
                                 
                                </div> 
                               
                          </div>
                                 <div class="col-lg-6">    
                                    <div class="form-group">
                                        <label for="term_of_year_number">YEARS OF MEMBERSHIP</label>
                                           <select name="term_of_year_number" required="required" class="form-control" data-parsley-group="block2">
                                              <option value=" ">YEARS OF MEMBERSHIP</option>
                                              <option value="25">25 YEARS</option>
                                              <option value="20">20 YEARS</option>
                                              <option value="15">15 YEARS</option>
                                              <option value="10">10 YEARS</option>
                                              
                                      </select> 
                                       
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="term_of_year_letter">YEARS OF MEMBERSHIP (LETTERS)</label>
                                         <select style="text-transform:uppercase;" name="term_of_year_letter" required="required" class="form-control" data-parsley-group="block2">
                                          <option value=" ">YEARS OF MEMBERSHIP (LETTERS)</option>
                                          <option value="TWENTY FIVE" >TWENTY FIVE</option>
                                          <option value="TWENTY" >TWENTY</option>
                                          <option value="FITHTEEN" >FITHTEEN</option>
                                          <option value="TEN" >TEN</option>
                                        </select> 
                                       
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="included_brands">BRANDS INCLUDED</label>
                                       <select  name="included_brands" required="required" class="form-control" data-parsley-group="block2">
                                          <option value=" ">INCLUDED BRANDS</option>
                                          <option value="GRAND, GOLD PREMIUM, PREMIUM, IBEROSTAR" >GRAND, GOLD PREMIUM, PREMIUM, IBEROSTAR</option>
                                          <option value="GOLD PREMIUM, PREMIUM, IBEROSTAR" >GOLD PREMIUM, PREMIUM, IBEROSTAR</option>
                                          <option value="PREMIUM, IBEROSTAR" >PREMIUM, IBEROSTAR</option>
                                          <option value="IBEROSTAR" >IBEROSTAR</option>
                                      </select>  
                                       
                                    </div>
                                 
                               
                            </div>
                            
                        
                        </fieldset>
                        
                        
                        
                        <fieldset>
                        	<legend><img src='assets/images/Invoice-icon.png'></legend>
                            <div class="row">
                              <div class="col-lg-6">
                                                             
                                <div class="form-group">
                                
                                <label for="initial_downpayment">INITIAL DOWNPAYMENT</label>
                                <input type="text" name="initial_downpayment" id="initial_downpayment"  class="form-control" placeholder="INITIAL DOWNPAYMENT" data-parsley-group="block3">
                                
                                </div>   
                               
                                <div class="form-group">
                                <label for="pending_payment1">PENDING PAYMENT 1</label>
                                  <input type="text" name="pending_payment1" id="pending_payment1" placeholder="If exist place Pending Payment 1"  class="form-control"data-parsley-group="block3" />
                                </label>
                                </div>    
                                
                                <div class="form-group">
                                <label for="shall_be_paid_within">NUMBER OF DAYS TO PENDING PAYMENT 1</label>
                                  <input type="text" name="shall_be_paid_within" id="shall_be_paid_within" placeholder="If exist Pending Payment 1 place the number of days"  class="form-control"data-parsley-group="block3" />
                                </label>
                                </div>  
                                <div class="form-group">
                                <label for="pending_payment2">PENDING PAYMENT 2</label>
                                  <input type="text" name="pending_payment2" id="pending_payment2" placeholder="If exist place Pending Payment 2"  class="form-control"data-parsley-group="block3" />
                                </label>
                                </div>  
                                
                                <div class="form-group">
                                        <label for="date_of_payment1">DATE OF PAYMENT 1</label>
                                        <input type="date" class="form-control" id="date_of_payment1"
                                               name="date_of_payment1" placeholder="DATE OF PAYMENT 1" data-parsley-group="block3">
                                </div>
                                                        
                              </div>
                               <div class="col-lg-6">
                                
                                      <div class="form-group">
                                        <label for="date_of_payment2">DATE OF PAYMENT 2</label>
                                        <input type="date" class="form-control" id="date_of_payment2"
                                               name="date_of_payment2" placeholder="DATE OF PAYMENT 2" data-parsley-group="block3">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="pending_payment_via">PENDING VIA</label>
                                         <select style="text-transform:uppercase;" name="pending_payment_via" class="form-control">
                                          <option value=""></option>
                                          <option value="Credit Card" >Credit Card</option>
                                          <option value="Bank Transfer" >Bank Transfer</option>
                                          <option value="Cheque" >Cheque</option>
                                        </select>
                                       
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="pending_payment2_via">PENDING PAYMENT 2 VIA</label>
                                         <select style="text-transform:uppercase;" name="pending_payment2_via" class="form-control" data-parsley-group="block3">
                                          <option value=""></option>
                                          <option value="Credit Card" >Credit Card</option>
                                          <option value="Bank Transfer" >Bank Transfer</option>
                                          <option value="Cheque" >Cheque</option>
                                        </select>
                                       
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="monthly_payments">QTY OF MONTHLY PAYMENTS</label>
                                         <select name="monthly_payments" class="form-control" data-parsley-group="block3">
                                          <option value=" ">MONTHLY PAYMENTS</option>
                                          <option value="0" >0</option>
                                          <option value="12" >12</option>
                                          <option value="24">24</option>
                                          <option value="36" >36</option>
                                          <option value="40">40</option>
                                          <option value="48" >48</option>
                                          <option value="60" >60</option>
                                          
                                        </select>
                                       
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="monthly_payments_amount">MONTHLY PAYMENTS IN USD</label>
                                        <input type="text" class="form-control" id="monthly_payments_amount"
                                               name="monthly_payments_amount" placeholder="Amount to Be paid Every Monthly Payment" data-parsley-group="block3">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="interest_rate">INTEREST RATE</label>
                                      <select name="interest_rate" class="form-control" data-parsley-group="block3">
                                          <option value=" ">INTEREST RATE</option>
                                          <option value="0" >0%</option>
                                          <option value="5" >5%</option>
                                          <option value="7">7%</option>
                                          <option value="8" >8%</option>
                                          <option value="8.5" >8.5%</option>
                                          <option value="9"  >9%</option>
                                          <option value="13" >3%</option>
                                      </select>   
                                       
                                    </div>
                               
                            </div>
                            
                        
                        </fieldset>
                    
                         <fieldset>
                        	<legend><img src="assets/images/rci_32.png"></legend>
                            <div class="row">
                              <div class="col-lg-6"> 
                                <div class="form-group">
                                 <label for="annual_weeks_exchange">ANNUAL WEEKS RCI</label>
                      <input type="text" name="annual_weeks_exchange" id="annual_weeks_exchange" 
                      class="form-control" placeholder="ANNUAL WEEKS RCI" required data-parsley-group="block4" /> 

                                </div>
                                
                                    <div class="form-group">
                                        <label for="rci_transaction_rate">RCI RATE</label>
                                          <input type="text" name="rci_transaction_rate" id="rci_transaction_rate" 
											class="form-control" placeholder="CHeck if Has Registry Collection too!" required data-parsley-group="block4"/> 
                                      </div>
                                                     
                              </div>
                               <div class="col-lg-6">
                                
                                 <div class="form-group">
                                   <label for="interval_exchange_company">INTERVAL COMPANIES</label>
                                      <select name="interval_exchange_company" class="form-control" data-parsley-group="block4" >
                                          <option value=" ">CHOOSE INTERVAL COMPANY</option>
                                          <option value="SELECTED RESORTS" >SELECTED RESORTS</option>
                                          <option value="REGISTRY COLLECTION & SELECTED RESORTS" >REGISTRY COLLECTION & SELECTED RESORTS</option>
                                         
                                      </select> 
                                 </div>  
                                 
                                   <div class="form-group">
                                   <label for="years_of_rci_covered">YEARS OF RCI COVERED</label>
                                      <select name="years_of_rci_covered" class="form-control" data-parsley-group="block4">
                                          <option value=" ">YEARS OF RCI COVERED</option>
                                          <option value="5" >5 Years Covered</option>
                                          <option value="7" >7 Years Covered</option>
                                          <option value="10" >10 Years Covered</option>
                                         
                                      </select> 
                                 </div>  
                                  
                            </div>
                            
                        
                        </fieldset>
                        
                      <!--   <fieldset>
                        	<legend><img src="assets/images/lloydshare-32.png"></legend>
                            <div class="row">
                           <div class="col-lg-1">
                       <input type="checkbox" class="form-control" name="has_lloyd_share" 
                         placeholder="If this Membership Has a Lloyd Share Contract."> 
                       </div>
                       
                        <div class="col-lg-11">
                      <h4>CLICK IF THIS MEMBERSHIP HAS A LLOYD SHARE ANNUITY, LEAVE IT BLANK IN CASE NOT</h4>
                       </div>
                   		 </div>
            			 </fieldset>-->
                        <fieldset>
                        	<legend><img src="assets/images/gift-icon.png"></legend>
                            <div class="row">
                           <div class="col-lg-4">
                           <label for="all_inclusive_weeks">ALL INCLUSIVE WEEKS</label>
                             <input type="number" name="all_inclusive_weeks" id="all_inclusive_weeks" 
							class="form-control" placeholder="ALL INCLUSIVE WEEKS" data-parsley-group="block5"/>   
                        </div>
                        
                         <div class="col-lg-4">
                           <label for="tablet_receipt">TABLET RECEIPT</label>
                             <input type="number" name="tablet_receipt" id="tablet_receipt" 
							class="form-control" placeholder="Last two numbers" data-parsley-group="block5"/>   
                        </div>
                       
                        <div class="col-lg-4">
                           <label for="selected_resorts_weeks">SELECTED RESORTS WEEKS</label>
                             <input type="number" name="selected_resorts_weeks" id="selected_resorts_weeks" 
							class="form-control" placeholder="WEEKS @ SELECTED RESORTS" data-parsley-group="block5"/>   
                        </div>
                   		 </div>
                           
                            
                        
                        </fieldset>
                        
                      


                      <fieldset>
                            <legend>Final step</legend>
                          
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="user_name">CONTRACT LOCATION</label>
                                                <input type="text" class="form-control" id="contract_location"
                                                       name="contract_location" placeholder="CONTRACT LOCATION" data-parsley-group="block6">
                                            </div>
                                      </div>
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                       <label class="sr-only" for="vlo">VLO NAME</label>
                                       
                                      <select name="vlo" class="form-control" required="required" data-parsley-group="block6">
                                          <option value="">VLO</option>
                                          <option value="Edison Valdez" >Edison Valdez</option>
                                          <option value="Jackeline Rodriguez" >Jackeline Rodriguez</option>
                                          <option value="Inna FIgurina">Inna FIgurina</option>
                                      </select>   
                                       
                                            </div>
                                        </div>
                                        
                                 <div class="col-lg-12">
                    </div>
                                 </div>
                                       
                        <noscript>
                                    <input type="submit" name="submit" class="nocsript-finish-btn sf-right nocsript-sf-btn" 
                                            value="finish"/>
                              </noscript>
                        </fieldset>
                    </form>
 
          </div>
      </div>
            <div class="row">
                <div class="col-md-12 up-20">
                <pre> 
                </pre>
                </div>
            </div>


            <footer class="footer">
                <div class="container">
                    <p class="pull-left">� EdisonValdez</p>
                </div>
            </footer>
  </div>
    </div>
</body>
</html>
