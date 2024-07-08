<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#a04732"/>
<title>Get In Touch | Travels Vault | Your one-stop destination for all your travel needs</title>

<!-- FAVICON FILES -->
<link href="images/Travels-fav.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="css/bundle.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/modded.css">
<link rel="stylesheet" href="css/back-to-top.css">
<link rel="stylesheet" href="css/contact.css">

<link rel="stylesheet" href="build/css/intlTelInput.css" />

</head>
<body>



<?php
$statement = $pdo->prepare("SELECT * FROM tbl_contact WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $contact_heading1 = $row['contact_heading1'];
    $contact_heading2 = $row['contact_heading2'];
    $contact_heading3 = $row['contact_heading3'];
}
?>


<section id="get-in-touch" style="margin-bottom:-4em;background-image: url('images/dark-pattern-bg.jpg');background-size: auto 100%;background-repeat: no-repeat;">
<br><br><br><br>
<div class="section-titles" style="margin-bottom:0px;">
<div class="container"> 
  <h1 class="section-heading"><?php echo $contact_heading1 ?></h1>
</div>
</div>

<h5 class="text-center-1 service-head" style="font-size:12px;"><?php echo $contact_heading2 ?></h5>


<div class="form" style="margin-top:4em;">
  <h1><?php echo $contact_heading3 ?></h1>
      
      <ul class="tab-group">
        <li class="tab active"><a href="#yes">Yes</a></li>
        <li class="tab"><a href="#no">No</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="yes">   
          
          <form action="/" method="post">

            <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Company<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off"/>
            </div>
        
            <div class="field-wrap">
              
              <select name="cust_package" class="package-select" name="country" id="login-request-country">
                <option value="">Country <span class="req">*</span></option>
                <option>select country</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Aland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BV">Bouvet Island</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, Democratic Republic of the Congo</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CI">Cote D'Ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">Curacao</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HM">Heard Island and Mcdonald Islands</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran, Islamic Republic of</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KP">Korea, Democratic People's Republic of</option>
                  <option value="KR">Korea, Republic of</option>
                  <option value="XK">Kosovo</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao People's Democratic Republic</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libyan Arab Jamahiriya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao</option>
                  <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova, Republic of</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="AN">Netherlands Antilles</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PS">Palestinian Territory, Occupied</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RE">Reunion</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russian Federation</option>
                  <option value="RW">Rwanda</option>
                  <option value="BL">Saint Barthelemy</option>
                  <option value="SH">Saint Helena</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="MF">Saint Martin</option>
                  <option value="PM">Saint Pierre and Miquelon</option>
                  <option value="VC">Saint Vincent and the Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="CS">Serbia and Montenegro</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SX">Sint Maarten</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                  <option value="SS">South Sudan</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SJ">Svalbard and Jan Mayen</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan, Province of China</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-Leste</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UM">United States Minor Outlying Islands</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Viet Nam</option>
                  <option value="VG">Virgin Islands, British</option>
                  <option value="VI">Virgin Islands, U.s.</option>
                  <option value="WF">Wallis and Futuna</option>
                  <option value="EH">Western Sahara</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
              </select>
            </div>
          </div>

          <div class="field-wrap">
            <select name="cust_package" class="package-select">
                <option id="contact-us-org-00" selected="selected" value="0">Type of organization <span class="req">*</span></option>
                <option id="contact-us-org-01" value="0">Travel Agency/Tour Operator</option>
                <option id="contact-us-org-02" value="1">OTA/Wholesaler</option>
                <option id="contact-us-org-03" value="2">Hotel/Wholesaler Supplier</option>
                <option id="contact-us-org-04" value="3">Hotel/Apartment</option>
                <option id="contact-us-org-05" value="4">Car Rental Supplier</option>
                <option id="contact-us-org-06" value="5">Private Transfer Supplier</option>
            </select>
          </div>

          <div class="field-wrap">
            <select name="cust_package" class="package-select">
              <option id="contact-us-reason-00" selected="selected" value="0">Reason of contacting us <span class="req">*</span></option>
              <option id="contact-us-reason-01" value="0">Accounting Issue</option>
              <option id="contact-us-reason-02" value="1">Booking Issue</option>
              <option id="contact-us-reason-03" value="2">Technical Issue</option>
              <option id="contact-us-reason-04" value="3">Forgot Password</option>
              <option id="contact-us-reason-05" value="4">Become a Client (Login Request)</option>
              <option id="contact-us-reason-06" value="5">Become a Supplier</option>
              <option id="contact-us-reason-07" value="6">Travels Vault Whitelabel</option>
              <option id="contact-us-reason-08" value="7">Learn more about Travels Vault</option>
            </select>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off"/>
            </div>
        
            <div class="field-wrap">
              <input class="country-numbers" id="phone" name="phone" type="tel" type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <textarea name="message" id="message" autocomplete="off" placeholder="Comments" required></textarea>
          </div>
          
          <button type="submit" class="button button-block"/>SEND</button>
          
          </form>

        </div>
        
        <div id="no">   
          
          <form action="/" method="post">
          
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  First Name<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off"/>
              </div>
          
              <div class="field-wrap">
                <label>
                  Last Name<span class="req">*</span>
                </label>
                <input type="text"required autocomplete="off"/>
              </div>
            </div>
  
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  Company <span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off"/>
              </div>
          
              <div class="field-wrap">
                
                <select name="cust_package" class="package-select" name="country" id="login-request-country">
                  <option value="">Country <span class="req">*</span></option>
                  <option>select country</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Cote D'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curacao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and Mcdonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="XK">Kosovo</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyan Arab Jamahiriya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthelemy</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="CS">Serbia and Montenegro</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.s.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select>
              </div>
            </div>
  
            <div class="field-wrap">
              <select name="cust_package" class="package-select">
                  <option id="contact-us-org-00" selected="selected" value="0">Type of organization <span class="req">*</span></option>
                  <option id="contact-us-org-01" value="0">Travel Agency/Tour Operator</option>
                  <option id="contact-us-org-02" value="1">OTA/Wholesaler</option>
                  <option id="contact-us-org-03" value="2">Hotel/Wholesaler Supplier</option>
                  <option id="contact-us-org-04" value="3">Hotel/Apartment</option>
                  <option id="contact-us-org-05" value="4">Car Rental Supplier</option>
                  <option id="contact-us-org-06" value="5">Private Transfer Supplier</option>
              </select>
            </div>
            
            <div class="field-wrap">
              <select name="cust_package" class="package-select">
                <option id="contact-us-source-00" selected="selected" value="0">Where did you hear about us <span class="req">*</span></option>
                <option id="contact-us-source-01" value="3">Partner Referral</option>
                <option id="contact-us-source-02" value="4">Software Company Referral</option>
                <option id="contact-us-source-03" value="1">Facebook/Instagram</option>
                <option id="contact-us-source-04" value="0">LinkedIn</option>
                <option id="contact-us-source-05" value="2">TravelsVault Webinars</option>
                <option id="contact-us-source-06" value="5">Trade Fairs and Events</option>
                <option id="contact-us-source-07" value="6">Internet Research</option>
                <option id="contact-us-source-08" value="7">Other</option>
              </select>
            </div>
  
            <div class="field-wrap">
              <select name="cust_package" class="package-select">
                <option id="contact-us-reason-00" selected="selected" value="0">Reason of contacting us <span class="req">*</span></option>
                <option id="contact-us-reason-01" value="0">Accounting Issue</option>
                <option id="contact-us-reason-02" value="1">Booking Issue</option>
                <option id="contact-us-reason-03" value="2">Technical Issue</option>
                <option id="contact-us-reason-04" value="3">Forgot Password</option>
                <option id="contact-us-reason-05" value="4">Become a Client (Login Request)</option>
                <option id="contact-us-reason-06" value="5">Become a Supplier</option>
                <option id="contact-us-reason-07" value="6">Travels Vault Whitelabel</option>
                <option id="contact-us-reason-08" value="7">Learn more about Travels Vault</option>
              </select>
            </div>
  
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  Email Address<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off"/>
              </div>
          
              <div class="field-wrap">
                <!-- <label>
                  Phone<span class="req">*</span>
                </label> -->
                <input class="country-numbers" id="phone" name="phone" type="text"required autocomplete="off"/>
              </div>
            </div>
  
            <div class="field-wrap">
              <textarea name="message" id="message" autocomplete="off" placeholder="Comments" required></textarea>
            </div>
            
            <button type="submit" class="button button-block"/>SEND</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div>
</section>






<!-- JS FILES --> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src='js/bundle.js'></script> 
<script src='js/contact.form.min.js'></script> 
<script src='js/scripts.js'></script>
<script src="js/back-to-top.js"></script>
<script src="js/contact.js"></script>

<script src="build/js/intlTelInput.js"></script>
<script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    utilsScript: "build/js/utils.js"
  });
</script>

<script>
  var countries = [{"Name":"AFGANISTAN","ISOCode":"AF"},{"Name":"ALBANIA","ISOCode":"AL"},{"Name":"ALGERIA","ISOCode":"DZ"},{"Name":"AMERICAN SAMOA","ISOCode":"AS"},{"Name":"ANDORRA","ISOCode":"AD"},{"Name":"ANGOLA","ISOCode":"AO"},{"Name":"ANGUILLA","ISOCode":"AI"},{"Name":"ANTIGUA AND BARBUDA","ISOCode":"AG"},{"Name":"ARGENTINA","ISOCode":"AR"},{"Name":"ARMENIA","ISOCode":"AM"},{"Name":"ARUBA","ISOCode":"AW"},{"Name":"AUSTRALIA","ISOCode":"AU"},{"Name":"AUSTRIA","ISOCode":"AT"},{"Name":"AZERBAIJAN","ISOCode":"AZ"},{"Name":"BAHAMAS","ISOCode":"BS"},{"Name":"BAHRAIN","ISOCode":"BH"},{"Name":"BANGLADESH","ISOCode":"BD"},{"Name":"BARBADOS","ISOCode":"BB"},{"Name":"BELARUS","ISOCode":"BY"},{"Name":"BELGIUM","ISOCode":"BE"},{"Name":"BELIZE (EX BRITISH HONDURAS)","ISOCode":"BZ"},{"Name":"BENIN","ISOCode":"BJ"},{"Name":"BERMUDA","ISOCode":"BM"},{"Name":"BHUTAN","ISOCode":"BT"},{"Name":"BOLIVIA","ISOCode":"BO"},{"Name":"BONAIRE","ISOCode":"BQ"},{"Name":"BOSNIA HERZEGOVINA","ISOCode":"BA"},{"Name":"BOTSWANA","ISOCode":"BW"},{"Name":"BRAZIL","ISOCode":"BR"},{"Name":"BRITISH VIRGIN ISLAND","ISOCode":"VG"},{"Name":"BRUNEI DARUSSALAM","ISOCode":"BN"},{"Name":"BULGARIA","ISOCode":"BG"},{"Name":"BURKINA FASO","ISOCode":"BF"},{"Name":"BURUNDI","ISOCode":"BI"},{"Name":"CAMBODIA","ISOCode":"KH"},{"Name":"CAMEROON","ISOCode":"CM"},{"Name":"CANADA","ISOCode":"CA"},{"Name":"CAPE VERDE ISLANDS","ISOCode":"CV"},{"Name":"CAYMAN ISLANDS","ISOCode":"KY"},{"Name":"CHAD","ISOCode":"TD"},{"Name":"CHILE","ISOCode":"CL"},{"Name":"CHINA","ISOCode":"CN"},{"Name":"COLOMBIA","ISOCode":"CO"},{"Name":"COMOROS","ISOCode":"KM"},{"Name":"CONGO","ISOCode":"CG"},{"Name":"CONGO DR","ISOCode":"CD"},{"Name":"COOK ISLANDS","ISOCode":"CK"},{"Name":"COSTA RICA","ISOCode":"CR"},{"Name":"CROATIA","ISOCode":"HR"},{"Name":"CUBA","ISOCode":"CU"},{"Name":"CURACAO","ISOCode":"CW"},{"Name":"CYPRUS","ISOCode":"CY"},{"Name":"CYPRUS NORTH","ISOCode":"CY"},{"Name":"CZECH REPUBLIC","ISOCode":"CZ"},{"Name":"DENMARK","ISOCode":"DK"},{"Name":"DJIBOUTI","ISOCode":"DJ"},{"Name":"DOMINICA","ISOCode":"DM"},{"Name":"DOMINICAN REPUBLIC","ISOCode":"DO"},{"Name":"EAST TIMOR","ISOCode":"TL"},{"Name":"ECUADOR","ISOCode":"EC"},{"Name":"EGYPT","ISOCode":"EG"},{"Name":"EL SALVADOR","ISOCode":"SV"},{"Name":"EQUATORIAL GUINEA","ISOCode":"GQ"},{"Name":"ERITREA","ISOCode":"ER"},{"Name":"ESTONIA","ISOCode":"EE"},{"Name":"ETHIOPIA","ISOCode":"ET"},{"Name":"FAROE ISLANDS","ISOCode":"FO"},{"Name":"FIJI","ISOCode":"FJ"},{"Name":"FINLAND","ISOCode":"FI"},{"Name":"FRANCE","ISOCode":"FR"},{"Name":"FRENCH GUIANA","ISOCode":"GF"},{"Name":"FRENCH POLYNESIA (TAHITI)","ISOCode":"PF"},{"Name":"GABON","ISOCode":"GA"},{"Name":"GAMBIA","ISOCode":"GM"},{"Name":"GEORGIA","ISOCode":"GE"},{"Name":"GERMANY","ISOCode":"DE"},{"Name":"GHANA","ISOCode":"GH"},{"Name":"GIBRALTAR","ISOCode":"GI"},{"Name":"GREECE","ISOCode":"GR"},{"Name":"GREENLAND","ISOCode":"GL"},{"Name":"GRENADA","ISOCode":"GD"},{"Name":"GUADELOUPE","ISOCode":"GP"},{"Name":"GUAM","ISOCode":"GU"},{"Name":"GUATEMALA","ISOCode":"GT"},{"Name":"GUINEA","ISOCode":"GN"},{"Name":"GUINEA-BISSAU","ISOCode":"GW"},{"Name":"GUYANA","ISOCode":"GY"},{"Name":"HAITI","ISOCode":"HT"},{"Name":"HONDURAS","ISOCode":"HN"},{"Name":"HONG KONG","ISOCode":"HK"},{"Name":"HUNGARY","ISOCode":"HU"},{"Name":"ICELAND","ISOCode":"IS"},{"Name":"INDIA","ISOCode":"IN"},{"Name":"INDONESIA","ISOCode":"ID"},{"Name":"IRAN","ISOCode":"IR"},{"Name":"IRAQ","ISOCode":"IQ"},{"Name":"IRISH REPUBLIC","ISOCode":"IE"},{"Name":"ISRAEL","ISOCode":"IL"},{"Name":"ITALY","ISOCode":"IT"},{"Name":"IVORY COAST","ISOCode":"CI"},{"Name":"JAMAICA","ISOCode":"JM"},{"Name":"JAPAN","ISOCode":"JP"},{"Name":"JORDAN","ISOCode":"JO"},{"Name":"KAZAKHSTAN","ISOCode":"KZ"},{"Name":"KENYA","ISOCode":"KE"},{"Name":"KIRIBATI","ISOCode":"KI"},{"Name":"KOSOVO","ISOCode":"XK"},{"Name":"KUWAIT","ISOCode":"KW"},{"Name":"KYRGYZSTAN","ISOCode":"KG"},{"Name":"LAOS","ISOCode":"LA"},{"Name":"LATVIA","ISOCode":"LV"},{"Name":"LEBANON","ISOCode":"LB"},{"Name":"LESOTHO","ISOCode":"LS"},{"Name":"LIBERIA","ISOCode":"LR"},{"Name":"LIBYA","ISOCode":"LY"},{"Name":"LIECHTENSTEIN","ISOCode":"LI"},{"Name":"LITHUANIA","ISOCode":"LT"},{"Name":"LUXEMBOURG","ISOCode":"LU"},{"Name":"MACAU","ISOCode":"MO"},{"Name":"MADAGASCAR","ISOCode":"MG"},{"Name":"MALAWI","ISOCode":"MW"},{"Name":"MALAYSIA","ISOCode":"MY"},{"Name":"MALDIVES","ISOCode":"MV"},{"Name":"MALI","ISOCode":"ML"},{"Name":"MALTA","ISOCode":"MT"},{"Name":"MARSHALL ISLANDS","ISOCode":"MH"},{"Name":"MARTINIQUE","ISOCode":"MQ"},{"Name":"MAURITANIA","ISOCode":"MR"},{"Name":"MAURITIUS","ISOCode":"MU"},{"Name":"MEXICO","ISOCode":"MX"},{"Name":"MICRONESIA","ISOCode":"FM"},{"Name":"MOLDOVA","ISOCode":"MD"},{"Name":"MONACO","ISOCode":"MC"},{"Name":"MONGOLIA","ISOCode":"MN"},{"Name":"MONTENEGRO","ISOCode":"ME"},{"Name":"MOROCCO","ISOCode":"MA"},{"Name":"MOZAMBIQUE","ISOCode":"MZ"},{"Name":"MYANMAR (BURMA)","ISOCode":"MM"},{"Name":"NAMIBIA","ISOCode":"NA"},{"Name":"NAURU","ISOCode":"NR"},{"Name":"NEPAL","ISOCode":"NP"},{"Name":"NETHERLANDS","ISOCode":"NL"},{"Name":"NEW CALEDONIA","ISOCode":"NC"},{"Name":"NEW ZEALAND","ISOCode":"NZ"},{"Name":"NICARAGUA","ISOCode":"NI"},{"Name":"NIGER","ISOCode":"NE"},{"Name":"NIGERIA","ISOCode":"NG"},{"Name":"NIUE","ISOCode":"NU"},{"Name":"NORTH KOREA","ISOCode":"KP"},{"Name":"NORTH MACEDONIA","ISOCode":"MK"},{"Name":"NORTHERN MARIANA ISL","ISOCode":"MP"},{"Name":"NORWAY","ISOCode":"NO"},{"Name":"OMAN","ISOCode":"OM"},{"Name":"PAKISTAN","ISOCode":"PK"},{"Name":"PALAU","ISOCode":"PW"},{"Name":"PALESTINE AUTHORITY","ISOCode":"PS"},{"Name":"PANAMA","ISOCode":"PA"},{"Name":"PAPUA NEW GUINEA","ISOCode":"PG"},{"Name":"PARAGUAY","ISOCode":"PY"},{"Name":"PERU","ISOCode":"PE"},{"Name":"PHILIPPINES","ISOCode":"PH"},{"Name":"POLAND","ISOCode":"PL"},{"Name":"PORTUGAL","ISOCode":"PT"},{"Name":"PUERTO RICO","ISOCode":"PR"},{"Name":"QATAR","ISOCode":"QA"},{"Name":"REUNION (FRENCH)","ISOCode":"RE"},{"Name":"ROMANIA","ISOCode":"RO"},{"Name":"RUSSIA","ISOCode":"RU"},{"Name":"RWANDA","ISOCode":"RW"},{"Name":"SAINT BARTHELEMY","ISOCode":"BL"},{"Name":"SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA","ISOCode":"SH"},{"Name":"SAMOA","ISOCode":"WS"},{"Name":"SAN MARINO","ISOCode":"SM"},{"Name":"SAO TOME AND PRINCIPE","ISOCode":"ST"},{"Name":"SAUDI ARABIA","ISOCode":"SA"},{"Name":"SENEGAL","ISOCode":"SN"},{"Name":"SERBIA","ISOCode":"RS"},{"Name":"SEYCHELLES","ISOCode":"SC"},{"Name":"SIERRA LEONE","ISOCode":"SL"},{"Name":"SINGAPORE","ISOCode":"SG"},{"Name":"SINT EUSTATIUS","ISOCode":"BQ"},{"Name":"SLOVAKIA","ISOCode":"SK"},{"Name":"SLOVENIA","ISOCode":"SI"},{"Name":"SOLOMON ISLANDS","ISOCode":"SB"},{"Name":"SOMALIA","ISOCode":"SO"},{"Name":"SOUTH AFRICA","ISOCode":"ZA"},{"Name":"SOUTH KOREA","ISOCode":"KR"},{"Name":"SPAIN","ISOCode":"ES"},{"Name":"SRI LANKA","ISOCode":"LK"},{"Name":"ST KITTS AND NEVIS","ISOCode":"KN"},{"Name":"ST LUCIA","ISOCode":"LC"},{"Name":"ST MARTIN/SINT MAARTEN","ISOCode":"MF"},{"Name":"ST VINCENT AND GRENADINES","ISOCode":"VC"},{"Name":"SUDAN","ISOCode":"SD"},{"Name":"SURINAME","ISOCode":"SR"},{"Name":"SWAZILAND","ISOCode":"SZ"},{"Name":"SWEDEN","ISOCode":"SE"},{"Name":"SWITZERLAND","ISOCode":"CH"},{"Name":"SYRIA","ISOCode":"SY"},{"Name":"TAIWAN","ISOCode":"TW"},{"Name":"TAJIKISTAN","ISOCode":"TJ"},{"Name":"TANZANIA","ISOCode":"TZ"},{"Name":"THAILAND","ISOCode":"TH"},{"Name":"TOGO","ISOCode":"TG"},{"Name":"TONGA","ISOCode":"TO"},{"Name":"TRINIDAD & TOBAGO","ISOCode":"TT"},{"Name":"TUNISIA","ISOCode":"TN"},{"Name":"TURKEY","ISOCode":"TR"},{"Name":"TURKMENISTAN","ISOCode":"TM"},{"Name":"TURKS & CAICOS ISLANDS","ISOCode":"TC"},{"Name":"TUVALU","ISOCode":"TV"},{"Name":"UGANDA","ISOCode":"UG"},{"Name":"UKRAINE","ISOCode":"UA"},{"Name":"UNITED ARAB EMIRATES","ISOCode":"AE"},{"Name":"UNITED KINGDOM","ISOCode":"GB"},{"Name":"UNITED STATES","ISOCode":"US"},{"Name":"URUGUAY","ISOCode":"UY"},{"Name":"UZBEKISTAN","ISOCode":"UZ"},{"Name":"VANUATU","ISOCode":"VU"},{"Name":"VENEZUELA","ISOCode":"VE"},{"Name":"VIETNAM","ISOCode":"VN"},{"Name":"VIRGIN ISLANDS (US)","ISOCode":"VI"},{"Name":"YEMEN","ISOCode":"YE"},{"Name":"ZAMBIA","ISOCode":"ZM"},{"Name":"ZIMBABWE","ISOCode":"ZW"}];
  var Languages = [{"id":0,"code":"US","text":"English"},{"id":12,"code":"CZ","text":"Český"},{"id":14,"code":"DE","text":"Deutsch"},{"id":1,"code":"ES","text":"Español"},{"id":8,"code":"FR","text":"Français"},{"id":2,"code":"HR","text":"Hrvatski"},{"id":9,"code":"IT","text":"Italiano"},{"id":10,"code":"LV","text":"Latviešu"},{"id":20,"code":"MK","text":"Macedonian"},{"id":13,"code":"HU","text":"Magyar"},{"id":5,"code":"PL","text":"Polski"},{"id":19,"code":"PT","text":"Portuguese"},{"id":23,"code":"BR","text":"Portuguese (Brazil)"},{"id":11,"code":"RO","text":"Romana"},{"id":17,"code":"RS","text":"Serbian"},{"id":3,"code":"SK","text":"Slovenčina"},{"id":15,"code":"SI","text":"Slovenščina"},{"id":16,"code":"TR","text":"Türkçe"},{"id":24,"code":"GR","text":"Ελληνικά"},{"id":4,"code":"BG","text":"Български"},{"id":6,"code":"RU","text":"Русский"},{"id":7,"code":"UA","text":"Українська"},{"id":21,"code":"ZH","text":"简体中文"},{"id":22,"code":"KR","text":"한국어"}];
  var cleanBrowserMemory = "False";
</script>

</body>

</html>
