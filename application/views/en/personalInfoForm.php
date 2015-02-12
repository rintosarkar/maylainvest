<?php
session_start();
require'../common/config.php';
		foreach ($_POST as $key => $value) {
 		$_SESSION['post'][$key] = $value;
 }	
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Loan Application</title>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="js/jquery.js"></script>
	<script src="js/personalinfoValidation.js"></script>
	<script src="js/beaverslider.js"></script> 
	<script src="js/jquery-ui.js"></script>         
	<script src="js/beaverslider-effects.js"></script>
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="js/jquery.dd.js"></script>

    <link rel="stylesheet" type="text/css" media="screen" href="css/sprite.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/dd.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/flags.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/loan.css">
	<style type="text/css">
	</style>
	<!-- script for slider start -->
	<script>
	$(function(){
		// code for datepicker
		$( "#dob" ).datepicker({
			changeMonth: true,
			changeYear: true,
			// defaultDate: date,
			yearRange: '1930:2014'
		});


		//date picker end
	  var slider = new BeaverSlider({
        structure: {
          container: {
            id: "my-slider",
            width:  1059,
            height: 177,
          }
        },
        content: {
          images: [
            "../imag/1.jpg",
            "../imag/2.jpg",
          ]
        },
        animation: {
          effects: effectSets["slider: big set 2"],
          interval: 1200
        }
      });   
	      // code end for slider

		$('#previous').click(function(){
				        parent.history.back();
				        return false;
				    });

	});
	</script>
	<script type="text/javascript">
		function blinker() {
		    $('.blink_me').fadeOut(100);
		    $('.blink_me').fadeIn(2000);
		}
		
		setInterval(blinker, 1000);
	</script>
	
</head>
<body>
<!-- header start -->
	<div class="header">
		<div class="row">
			<div class="language">
				<select name="countries" id="countries" style="width:250px;" onChange="if(this.selectedIndex!=0)self.location=this.options[this.selectedIndex].value">
                    <option value="">Select A Language</option>
                    <option value='../index.php' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gb" data-title="English">English</option>
                    <option value='../franch/index.php' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fr" data-title="Français">Français</option>
                    <option value='../espain/index.php' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag es" data-title="Español">Español</option>
                    <option value='../deutsch/index.php' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag de" data-title="Deutsch">Deutsch</option>
                    <option value='../portuguese/index.php' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pt" data-title="Português">Português</option>
                </select>
			</div>
			<div class="header_text">
				<h1 class="blink_me" style="color:#CC0; background-color:#000078">Offering Loan Totally Free Of Charge And Fees</h1>
			</div>
			<div class="mayla-logo" style="width: 263px; left: 543px; top: -80px;">
				<img class="logo-img" src="images/logo.png" alt="logo"> 
			</div>
		</div> <!-- Header row -->
	</div> <!-- header div -->
<!-- header end -->
<!--horiozntal menu start-->
	<div class="hr-menu">
		<div class="menus">
			<a href="../index.php">Home | </a>
			<a href="../career.php">Careers | </a>
			<a href="../contact.php">Contacts | </a>
			<a href="../faq.php">Faq's</a>
		</div>
	</div>
<!--horiozntal menu end-->

<!--Vertical menu start-->
	<div class="vr-menu">
		<ul>
			<li class="li"><a href="../profile.php" class="vr_link" >Profile</a></li>
			<li class="li"><a class="vr_link" href="../structure.php">Company Structure</a></li>
			<li class="li"><a class="vr_link" href="../service.php">Our Service</a></li>
			<li class="li"><a class="vr_link" href="../job_descriptions.php">Job Descriptions</a></li>
			<li class="li"><a class="vr_link" href="../payment_system.php">Loan Amount & Repayment</a></li>
			<li class="li"><a class="vr_link" href="#">Loan Application</a></li>
		</ul>
	</div>
<!--Vertical menu End-->
<!-- slider div start -->
	 <div id="my-slider" class="mayla-slide clear">
	 		 <!-- <img src="images/m1.jpg">	 -->
	 </div>
<!-- slider div end -->	
	<div class="header-bottom clear">
		<p class="hb-text">WELCOME TO MAYLA INVESTMENTS CC OFFICIAL WEBSITE.</p>
	</div>
<!-- header bottom -->

<div class="container clear">
	<div class="left-sidebar">
		<div class="loans-igm">
			<img src="images/loans.gif">
		</div>
	</div> <!-- left div end -->
	<div class="right-side">
		<div class="loanCalulator">
			<!-- This div place for Forms Only -->
					<div class="firstFormDiv">

					<!-- 
					===================================================================
					Div for personal information
					===================================================================
					 -->

					 <div class="mainFormHeader">
					 		<div class="formTitle">
					 			<p class="bank-info-header-text">Application Form</p>
					 		</div>
						 	<div class="subFormHeader">
						 		<p class="personal-info-header-text">Personal Information</p>
						 	</div>
						 	<div class="bank-info-sub-header">
						 		<marquee> <p class="marquee-text">Fill in the application form</p></marquee>
						 	</div>
							 	<form class="personal-form" action="professionDetailsForm.php" name="personal-form" id="personal-form" method="post">
							 		<table class="personal-info-table alignTable">
							 			
							 			<tr>
							 				<td>
							 					<label> First Name</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="firstName" id="firstName" type="text" placeholder="First Name" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Middle Name</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="middleName" id="middleName" type="text" placeholder="Middle Name" required>
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Last Name</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="lastName" id="lastName" type="text" placeholder="Last Name" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Gender</label>
							 				</td>
							 				<td>:</td>
							 				<td>
                                                    <select name="gender" id="gender">
                                                    <option value="">Select</option>
							 						<option value="Male">Male</option>
							 						<option value="Female">Female</option>
							 						<option value="Other">Other</option>
							 					</select>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Mother's Name</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="mothersName" id="mothersName" type="text" placeholder="Mother's Name" required>
							 				</td>
							 			</tr> 
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Father's Name</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="fathersName" id="fathersName" type="text" placeholder="Father's Name" >
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Date of Birth</label>
							 				</td>
							 				<td>:</td>
							 				<td>
                                                <input class="" name="dob" id="dob" type="text" placeholder="mm-dd-year" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>NIC</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="nic" id="nic" type="text" placeholder="National ID Card Number" required>
							 				</td>
							 			</tr>
							 			<!-- =========================================================
							 				Space for Nationality
							 			========================================================= -->	

							 			<!--<tr>
							 				<td>
							 					<label>Nationality</label>
							 				</td>
							 				<td>:</td>
							 				<td>
								 				<select name="nationality" id="nationality">
									 				<option value="">Select</option>
                                                                                                        <option value="Afghanistan">Afghanistan</option>
									 				<option value="Albania">Albania</option>
									 				<option value="Algeria">Algeria</option>
									 				<option value="Andorra">Andorra</option>
									 				<option value="Angola">Angola</option>
									 				<option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
									 				<option value="Bhutan">Bhutan</option>
									 				<option value="Bolivia">Bolivia</option>
									 				<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									 				<option value="Botswana">Botswana</option>
									 				<option value="Brazil">Brazil</option>
									 				<option value="Brunei">Brunei</option>
									 				<option value="Bulgaria">Bulgaria</option>
									 				<option value="Burkina Faso">Burkina Faso</option>
									 				<option value="Burma">Burma</option>
									 				<option value="Burundi">Burundi</option>
									 				<option value="Cambodia">Cambodia</option>
									 				<option value="Cameroon">Cameroon</option>
									 				<option value="Canada">Canada</option>
									 				<option value="Cape Verde">Cape Verde</option>
									 				<option value="Central African Republic">Central African Republic</option>
									 				<option value="Chad">Chad</option>
									 				<option value="Chile">Chile</option>
									 				<option value="China">China</option>
									 				<option value="Colombia">Colombia</option>
									 				<option value="Comoros">Comoros</option>
									 				<option value="Congo, Democratic">Congo, Democratic</option>
									 				<option value="Congo, Republic">Congo, Republic</option>
									 				<option value="Costa Rica">Costa Rica</option>
									 				<option value="Cote d'Ivoire">Cote d'Ivoire</option>
									 				<option value="Croatia">Croatia</option>
									 				<option value="Cuba">Cuba</option>
									 				<option value="Curacao">Curacao</option>
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
									 				<option value="Fiji">Fiji</option>
									 				<option value="Finland">Finland</option>
									 				<option value="France">France</option>
									 				<option value="Gabon">Gabon</option>
									 				<option value="Gambia, The">Gambia, The</option>
									 				<option value="Georgia">Georgia</option>
									 				<option value="Germany">Germany</option>
									 				<option value="Ghana">Ghana</option>
									 				<option value="Greece">Greece</option>
									 				<option value="Grenada">Grenada</option>
									 				<option value="Guatemala">Guatemala</option>
									 				<option value="Guinea">Guinea</option>
									 				<option value="Guinea-Bissau">Guinea-Bissau</option>
									 				<option value="Guyana">Guyana</option>
									 				<option value="Haiti">Haiti</option>
									 				<option value="Holy See">Holy See</option>
									 				<option value="Honduras">Honduras</option>
									 				<option value="Hong Kong">Hong Kong</option>
									 				<option value="Hungary">Hungary</option>
									 				<option value="Iceland">Iceland</option>
									 				<option value="India">India</option>
									 				<option value="Indonesia">Indonesia</option>
									 				<option value="Iran">Iran</option>
									 				<option value="Iraq">Iraq</option>
									 				<option value="Ireland">Ireland</option>
									 				<option value="Israel">Israel</option>
									 				<option value="Italy">Italy</option>
									 				<option value="Jamaica">Jamaica</option>
									 				<option value="Japan">Japan</option>
									 				<option value="Jordan">Jordan</option>
									 				<option value="Kazakhstan">Kazakhstan</option>
									 				<option value="Kenya">Kenya</option>
									 				<option value="Kiribati">Kiribati</option>
									 				<option value="Korea, North">Korea, North</option>
									 				<option value="Korea, South">Korea, South</option>
									 				<option value="Kosovo">Kosovo</option>
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
									 				<option value="Malawi">Malawi</option>
									 				<option value="Malaysia">Malaysia</option>
									 				<option value="Maldives">Maldives</option>
									 				<option value="Mali">Mali</option>
									 				<option value="Malta">Malta</option>
									 				<option value="Marshall Islands">Marshall Islands</option>
									 				<option value="Mauritania">Mauritania</option>
									 				<option value="Mauritius">Mauritius</option>
									 				<option value="Mexico">Mexico</option>
									 				<option value="Micronesia">Micronesia</option>
									 				<option value="Moldova">Moldova</option>
									 				<option value="Monaco">Monaco</option>
									 				<option value="Mongolia">Mongolia</option>
									 				<option value="Montenegro">Montenegro</option>
									 				<option value="Morocco">Morocco</option>
									 				<option value="Mozambique">Mozambique</option>
									 				<option value="Namibia">Namibia</option>
									 				<option value="Nauru">Nauru</option>
									 				<option value="Nepal">Nepal</option>
									 				<option value="Netherlands">Netherlands</option>
									 				<option value="Netherlands Antilles">Netherlands Antilles</option>
									 				<option value="New Zealand">New Zealand</option>
									 				<option value="Nicaragua">Nicaragua</option>
									 				<option value="Niger">Niger</option>
									 				<option value="Nigeria">Nigeria</option>
									 				<option value="North Korea">North Korea</option>
									 				<option value="Norway">Norway</option>
									 				<option value="Oman">Oman</option>
									 				<option value="Pakistan">Pakistan</option>
									 				<option value="Palau">Palau</option>
									 				<option value="Palestinian Territories">Palestinian Territories</option>
									 				<option value="Panama">Panama</option>
									 				<option value="Papua New Guinea">Papua New Guinea</option>
									 				<option value="Paraguay">Paraguay</option>
									 				<option value="Peru">Peru</option>
									 				<option value="Philippines">Philippines</option>
									 				<option value="Poland">Poland</option>
									 				<option value="Portugal">Portugal</option>
									 				<option value="Qatar">Qatar</option>
									 				<option value="Romania">Romania</option>
									 				<option value="Russia">Russia</option>
									 				<option value="Rwanda">Rwanda</option>
									 				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									 				<option value="Saint Lucia">Saint Lucia</option>
									 				<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
									 				<option value="Samoa">Samoa</option>
									 				<option value="San Marino">San Marino</option>
									 				<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									 				<option value="Saudi Arabia">Saudi Arabia</option>
									 				<option value="Senegal">Senegal</option>
									 				<option value="Serbia">Serbia</option>
									 				<option value="Seychelles">Seychelles</option>
									 				<option value="Sierra Leone">Sierra Leone</option>
									 				<option value="Singapore">Singapore</option>
									 				<option value="Sint Maarten">Sint Maarten</option>
									 				<option value="Slovakia">Slovakia</option>
									 				<option value="Slovenia">Slovenia</option>
									 				<option value="Solomon Islands">Solomon Islands</option>
									 				<option value="Somalia">Somalia</option>
									 				<option value="South Africa">South Africa</option>
									 				<option value="South Korea">South Korea</option>
									 				<option value="South Sudan">South Sudan</option>
									 				<option value="Spain">Spain</option>
									 				<option value="Sri Lanka">Sri Lanka</option>
									 				<option value="Sudan">Sudan</option>
									 				<option value="Suriname">Suriname</option>
									 				<option value="Swaziland">Swaziland</option>
									 				<option value="Sweden">Sweden</option>
									 				<option value="Switzerland">Switzerland</option>
									 				<option value="Syria">Syria</option>
									 				<option value="Taiwan">Taiwan</option>
									 				<option value="Tajikistan">Tajikistan</option>
									 				<option value="Tanzania">Tanzania</option>
									 				<option value="Thailand">Thailand</option>
									 				<option value="Timor-Leste">Timor-Leste</option>
									 				<option value="Togo">Togo</option>
									 				<option value="Tonga">Tonga</option>
									 				<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									 				<option value="Tunisia">Tunisia</option>
									 				<option value="Turkey">Turkey</option>
									 				<option value="Turkmenistan">Turkmenistan</option>
									 				<option value="Tuvalu">Tuvalu</option>
									 				<option value="Uganda">Uganda</option>
									 				<option value="Ukraine">Ukraine</option>
									 				<option value="United Arab Emirates">United Arab Emirates</option>
									 				<option value="United Kingdom">United Kingdom</option>
									 				<option value="Uruguay">Uruguay</option>
									 				<option value="Uzbekistan">Uzbekistan</option>
									 				<option value="Vanuatu">Vanuatu</option>
									 				<option value="Venezuela">Venezuela</option>
									 				<option value="Vietnam">Vietnam</option>
									 				<option value="Yemen">Yemen</option>
									 				<option value="Zambia">Zambia</option>
									 				<option value="Zimbabwe">Zimbabwe</option>
								 				</select>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Nationality By</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<select name="citizen" type="text" id="citizen" required>
			 										<option value="">Select</option>
													<option value="By Birth">Born</option>
													<option value="By Naturalization">Naturalization</option>
			 									</select>
							 				</td>
							 			</tr>-->

							 			<!-- =========================================================
							 				Space for Nationality end
							 			========================================================= -->
							 			<tr>
							 				<td>
							 					<label>Permanent Address</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="permanentAddress" id="permanentAddress" type="text" placeholder="Permanent Address" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Postal Code</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="postalCode1" id="postalCode1" type="text" placeholder="Postal Code" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>District</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="district" id="district" type="text" placeholder="District" maxlength="60" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Province</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="province" id="province" type="text" placeholder="Province" maxlength="60" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Present Address</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="presentAddress" id="presentAddress" type="text" placeholder="Present Address" required>
							 				</td>
							 			</tr>
							 			
							 			<tr>
							 				<td>
							 					<label>Postal Code</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="postalCode2" id="postalCode2" type="text" placeholder="Postal Code" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>District</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="district1" id="district1" type="text" placeholder="District" maxlength="60" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Province</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="province1" id="province1" type="text" placeholder="Province" maxlength="60" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Work Address</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="workAddress" id="workAddress" type="text" placeholder="Work Address" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Work Phone Number</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="wpn" id="wpn" type="text" placeholder="Work Phone Number" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Cell Number</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="cellno" id="cellno" type="text" placeholder="Cell Number" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Email ID</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="emailid" id="emailid" type="email" placeholder="E-mail address" required>
							 				</td>
							 			</tr>
							 										 			<tr>
							 				<td>
							 					<label>Skype/Viber ID</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="viberid" id="viberid" type="text" placeholder="Viber address"/>
							 				</td>
							 			</tr>
							 			<!--<tr>
							 				<td>
							 					<label>Skype ID</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="skypeid" id="skypeid" type="text" placeholder="Skype address"/>
							 				</td>
							 			</tr>-->
							 		</table>
									 	<div class="submit-btn">
									 		<!-- <div class="previous-btn clear"><input type="button" class="submit" value="previous" id="previous"/></div> -->
					 						<div class="next-btn clear"><input type="submit" class="submit" id="next1" value="Next" onclick="return formValidator()"/></div>
									 	</div>										
								 	</form><!-- </form> -->
					 </div> <!-- Personal Information div end -->
					 
					</div>



				<!-- ==============================================================
				Div for Bank information
				==============================================================
				 --> 
			<!-- This div place for Forms Only End-->
		</div>
	</div>	
	</div> <!-- this is container div -->

		

	
	<div class="mayla-footer clear">
		<div class="footer-text">
			Copyright © 2009 Mayla Investments C C All rights reserved.<br/>
				Powered By : Mayla Investments CC
		</div>
	</div>
	<!-- script for dropdown menu of language -->

	<script>
	function createByJson() {
	      var jsonData = [                          
	                              {description:'Choos your payment gateway', value:'', text:'Payment Gateway'},                         
	                              {image:'images/msdropdown/icons/Amex-56.png', description:'My life. My card...', value:'amex', text:'Amex'},
	                              {image:'images/msdropdown/icons/Discover-56.png', description:'It pays to Discover...', value:'Discover', text:'Discover'},
	                              {image:'images/msdropdown/icons/Mastercard-56.png', title:'For everything else...', description:'For everything else...', value:'Mastercard', text:'Mastercard'},
	                              {image:'images/msdropdown/icons/Cash-56.png', description:'Sorry not available...', value:'cash', text:'Cash on devlivery', disabled:true},
	                              {image:'images/msdropdown/icons/Visa-56.png', description:'All you need...', value:'Visa', text:'Visa'},
	                              {image:'images/msdropdown/icons/Paypal-56.png', description:'Pay and get paid...', value:'Paypal', text:'Paypal'}
	                              ];
	      $("#byjson").msDropDown({byJson:{data:jsonData, name:'payments2'}}).data("dd");
	}
	$(document).ready(function(e) {           
	      //no use
	      try {
	            var pages = $("#pages").msDropdown({on:{change:function(data, ui) {
	                                                                        var val = data.value;
	                                                                        if(val!="")
	                                                                              window.location = val;
	                                                                  }}}).data("dd");

	            var pagename = document.location.pathname.toString();
	            pagename = pagename.split("/");
	            pages.setIndexByValue(pagename[pagename.length-1]);
	            $("#ver").html(msBeautify.version.msDropdown);
	      } catch(e) {
	            //console.log(e); 
	      }
	      
	      $("#ver").html(msBeautify.version.msDropdown);
	            
	      //convert
	      $("#countries").msDropdown({roundedBorder:false});
	      createByJson();
	      $("#tech").data("dd");
	});
	function showValue(h) {
	      console.log(h.name, h.value);
	}
	$("#tech").change(function() {
	      console.log("by jquery: ", this.value);
	})
	//
	</script>
</body>
</html>	




