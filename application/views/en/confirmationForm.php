<?php
	session_start();
	error_reporting(0);
	require'../common/config.php';
		if ($db->errno) {
			printf("Unable to connect to the database : %s", $db->errno);
			exit();
		}
	foreach ($_POST as $key => $value) {
	 	$_SESSION['post'][$key] = $value;
		 } 
	extract($_SESSION['post']);
?>

<!DOCTYPE html>
	  <html>
	  <head>
	  	<title>Loan Application</title>
	  	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	  	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	  	<script src="js/jquery.js"></script>
	  	
	  	<script src="js/beaverslider.js"></script>         
	  	<script src="js/beaverslider-effects.js"></script>
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

	  			// code for loan in words Start
	  				 $("#amountVal").change(function(){
	  							var amountVal = $("#amountVal").val();
	  							// alert(amountVal);
	  							// exit();
	  							$.post("classes/parseAmountVal.php",
	  							{
	  							amountVal:amountVal
	  							},
	  						function(result){
	  						// alert(result); //subcategorySel
	  							$("#loanAmountInWords").html(result);		
	  							});	
	  			});

	  			// code for loan in words End

	  				  			//spouse details start
	  			        		$('#marriedIn,#traditional').click(function () {                    
	  			                       $('div .spouseDetails').show(10);
	  			                });
	  			                $('#marriedOut,#single').click(function () {
	  			                      $('div .spouseDetails').hide(10);
	  			                     
	  			                 });
	  			        		//spouse details end
	  		});
	  		</script>

	  		<script type="text/javascript">
	  			//Calculate values
	  			function calculateValue() {
	  				var amount = document.getElementById('amountVal');
	  				var year = document.getElementById('year');
	  				var interest = document.getElementById('interest');
	  				var month = document.getElementById('month');
	  				//alert (amount.value);
	  				month.value = parseInt(year.value)*12;
	  				interest.value = parseFloat((parseInt(amount.value)+((parseInt(amount.value)*9)/100)*parseInt(year.value))/(parseInt(year.value)*12));
	  			}
	  			//Calculate values end
	  		</script>
	  		<script type="text/javascript">
				function blinker() {
				    $('.blink_me').fadeOut(100);
				    $('.blink_me').fadeIn(2000);
				}

				setInterval(blinker, 1000);
			</script>
	  		<script type="text/javascript">
	  				$('document').ready(function(){
	  				var $marital_status = "<?php echo $_POST['mstatus']; ?>";
	  				//alert($marital_status);
	  				$("input[name=mstatus][value="+$marital_status+"]").attr('checked', true);

					//checked of mstatus married or single
						var isChecked = $('#marriedOut:checked, #single:checked').val()?true:false;
						//alert(isChecked);
						if(isChecked== true){
							$('div .spouseDetails').hide(10);
						};
	  			});

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
	  			<div class="mayla-logo logosImg" style="width: 263px; left: 543px; top: -80px;">
	  				<img class="logo-img" src="images/logo.png" alt="logo"> 
	  			</div>
	  		</div> <!-- Header row -->
	  	</div> <!-- header div -->
	  <!-- header end -->
	  <!--horiozntal menu start-->
	  	<div class="hr-menu">
	  		<div class="menus">
	  			<a href="../index.php">Home | </a>
	  			<a href="../career.php">Careears | </a>
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
	  			<!-- This div place for all Forms-->
	  				
	  					<div class="mainFormHeader">
	  								<div class="formTitle">
	  									<p class="bank-info-header-text">Application Form</p>
	  								</div>
	  								<div class="subFormHeader">
	  									<p class="bank-info-header-text">Calculate About Your Loan</p>
	  								</div>
	  								<div class="bank-info-sub-header" style="border-bottom:1px solid black">
	  									<marquee> <p class="marquee-text">Please Confirm Your Given Information and Edit if there is any wrong information</p></marquee>
	  								</div>


	  							<form class="form" method="post" enctype="multipart/form-data" role="form" action="upload.php">
									
<!-- =======================================Calculator Table Start====================== -->
	  								<table class="bank-info-table middleAlign">
	  									<tr>
	  										<td>
	  											<label>Require Loan Amount US $</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<select name="amountVal" id="amountVal" style="width: 300px;">
	  												<option value="<?php echo $amountVal;?>"><?php echo $amountVal;?></option>
	  												<?php
	  													
	  													$q = "SELECT id,usDollar FROM dollar ORDER BY id";

	  													$results =$db->query($q);
	  													while (list($id, $usDollar)=$results->fetch_row()){
	  														echo "<option vlaue='$usDollar'>".$usDollar."</option>";
	  													}
	  												?>
	  											</select>
	  										</td>
	  									</tr> 
	  									<tr>
								<td>
									<label>Loan Amount In Words</label>
								</td>
								<td>:</td>
								<td>
									<select name="loanAmountInWords" id="loanAmountInWords">
                                    <option value="<?php echo $loanAmountInWords;?>"><?php echo $loanAmountInWords;?></option>

									</select>
								</td>
							   </tr> 
	  									<tr>
	  										<td>
	  											<label>I Want Loan For Year's</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<select name="year" id="year" >
	  												  	<option value="<?php echo $year;?>"><?php echo $year;?></option>
	  											        <option value="1">1 Year</option>
	  											        <option value="2">2 Years</option>
	  											        <option value="3">3 Years</option>
	  											        <option value="4">4 Years</option>
	  											        <option value="5">5 Years</option>
	  											        <option value="6">6 Years</option>
	  											        <option value="7">7 Years</option>
	  											        <option value="8">8 Years</option>
	  											        <option value="9">9 Years</option>
	  											        <option value="10">10 Years</option>
	  											        <option value="11">11 Years</option>
	  											        <option value="12">12 Years</option>
	  											        <option value="13">13 Years</option>
	  											        <option value="14">14 Years</option>
	  											        <option value="15">15 Years</option>
	  											        <option value="16">16 Years</option>
	  											        <option value="17">17 Years</option>
	  											        <option value="18">18 Years</option>
	  											        <option value="19">19 Years</option>
	  											        <option value="20">20 Years</option>
	  											      </select>
	  										</td>
	  									</tr>
	  									<tr>
	  										<td>
	  											<label>Calculate</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input type="button" class="submit" onclick="calculateValue()" value="Calculate"/>
	  										</td>
	  									</tr>
	  									<tr>
	  										<td>
	  											<label>I Accept Number of Repayment Month's</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="month" id="month" type="text" value="<?php echo $month; ?>">
	  										</td>
	  									</tr>
	  									<tr>
	  										<td>
	  											<label>I Accept Monthly Repayment Amount's US$</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="interest" id="interest" type="text" value="<?php echo $interest; ?>">
	  										</td>
	  									</tr>
	  									<tr>
	  										<td>
	  											<label>Loan Using Purpose</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="loanPurpose" id="loanPurpose" type="text" maxlength="110" value="<?php echo $loanPurpose; ?>">
	  										</td>
	  									</tr> 
	  								</table>  <!-- Calculator Table End -->
	  							<!--	<div class="subFormHeader">
	  									<p class="bank-info-header-text">Bank Information Details</p>
	  								</div>	

									<table class="bank-info-table alignTable">
	  									<tr>
	  										<td>
	  											<label>Account Name</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="accountName" id="accountName" type="text" placeholder="Account Name" value="<?php echo $accountName; ?>">
	  										</td>
	  									</tr> 
	  									<tr>
	  										<td>
	  											<label>Account No</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="accountNo" id="accountNo" type="text" placeholder="account Number" value="<?php echo $accountNo; ?>">
	  										</td>
	  									</tr> 
	  									<tr>
	  										<td>
	  											<label>Bank Name</label>
	  										</td>
	  										<td>:</td>
	  										<td>
	  											<input class="" name="bankName" id="bankName" type="text" placeholder="Bank Name" value="<?php echo $bankName; ?>">
	  										</td>
	  									</tr> 
	  								</table>-->

	  								 <!-- Calculate and Bankinfo table pull code end -->
	  							<!-- </form> -->
<!-- =========================================================================== Personal Table Start -->

							
														 	<div class="subFormHeader">
														 		<p class="personal-info-header-text">Personal Information</p>
														 	</div>
														 	
														 	<table class="personal-info-table alignTable">
															 			
															 			<tr>
															 				<td>
															 					<label> First Name</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="firstName" id="firstName" type="text" value="<?php echo $firstName;?>">
															 				</td>
															 			</tr> 
															 			<tr>
															 				<td>
															 					<label>Middle Name</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="middleName" id="middleName" type="text" value="<?php echo $middleName;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Last Name</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="lastName" id="lastName" type="text" value="<?php echo $lastName;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Gender</label>
															 				</td>
															 				<td>:</td>
															 				<td>
								                                                    <select name="gender" id="gender">
								                                                    <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
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
															 					<input class="" name="mothersName" id="mothersName" type="text" value="<?php echo $mothersName;?>">
															 				</td>
															 			</tr> 
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Father's Name</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="fathersName" id="fathersName" type="text" value="<?php echo $fathersName;?>">
															 				</td>
															 			</tr> 
															 			<tr>
															 				<td>
															 					<label>Date of Birth</label>
															 				</td>
															 				<td>:</td>
															 				<td>
								                                                <input class="" name="dob" id="dob" type="text" value="<?php echo $dob;?>" >
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>NIC</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="nic" id="nic" type="text" value="<?php echo $nic;?>">
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
																	 				<option value="<?php echo $nationality;?>"><?php echo $nationality;?></option>
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
																	 				<option value="North Korea">North Korea        </option>
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
															 					<select name="citizen" id="citizen">
															 						<option value="<?php echo $citizen;?>"><?php echo $citizen;?></option>
								                                                    <option value="Born">Born</option>
															 						<option value="Naturalization">Naturalization</option>
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
															 					<input class="" name="permanentAddress" id="permanentAddress" type="text" value="<?php echo $permanentAddress;?>">
															 				</td>
															 			</tr>
															 			
															 			<tr>
															 				<td>
															 					<label>Postal Code</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="postalCode1" id="postalCode1" type="text" value="<?php echo $postalCode1;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>District</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="district" id="district" type="text" placeholder="District" maxlength="60" value="<?php echo $district;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Province</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="province" id="province" type="text" placeholder="Province" maxlength="60" value="<?php echo $province;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Present Address</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="presentAddress" id="presentAddress" type="text" value="<?php echo $presentAddress;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Postal Code</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="postalCode2" id="postalCode2" type="text" value="<?php echo $postalCode2;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>District</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="district1" id="district1" type="text" placeholder="District" maxlength="60" value="<?php echo $district1;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Province</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="province1" id="province1" type="text" placeholder="Province" maxlength="60" value="<?php echo $province1;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Work Address</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="workAddress" id="workAddress" type="text" value="<?php echo $workAddress;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Work Phone Number</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="wpn" id="wpn" type="text" value="<?php echo $wpn;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Cell Number</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="cellno" id="cellno" type="text" value="<?php echo $cellno;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Email ID</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="emailid" id="emailid" type="email" value="<?php echo $emailid;?>">
															 				</td>
															 			</tr>
															 			<tr>
															 				<td>
															 					<label>Skype/Viber ID</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="viberid" id="viberid" type="text" value="<?php echo $viberid;?>">
															 				</td>
															 			</tr>
															 			<!--<tr>
															 				<td>
															 					<label>Skype ID</label>
															 				</td>
															 				<td>:</td>
															 				<td>
															 					<input class="" name="skypeid" id="skypeid" type="text" placeholder="Skype address" value="<?php echo $skypeid;?>"/>
															 				</td>
															 			</tr>-->
															 		</table>
<!-- ================================================================================== Personal table End-->
<!-- ================================================================================== professin table Start-->
														<div class="subFormHeader">
														 		<p class="personal-info-header-text">Professional-Info-Table</p>
														 	</div>

														<table class="professional-info-table alignTable">
							 			<tr>
							 				<td>
							 					<label>Employer Name</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="employerName" id="employerName" type="text" placeholder="Employer Name" value="<?php echo $employerName;?>" required>	
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label> Employer's Address</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="employersAddress" id="employersAddress" type="text" placeholder="Employer's Address" value="<?php echo $employersAddress;?>" required>
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Postal Code</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="postalCode3" id="postalCode3" type="text" placeholder="Postal Code" value="<?php echo $postalCode3;?>" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Occupation</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="occupation" id="occupation" type="text" placeholder="Occupation" value="<?php echo $occupation;?>" required>
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Department</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="department" id="department" type="text" placeholder="Department" value="<?php echo $department;?>" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Monthly Income</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="monthlyIncome" id="monthlyIncome" type="text" placeholder="Monthly Income" value="<?php echo $monthlyIncome;?>" required>
							 				</td>
							 			</tr>
							 		</table>
							 		<div class="subFormHeader">
							 				 		<p class="property-details-header-text">Applicant Property Details</p>
							 				 	</div>
							 				 			<table class="property-details-table alignTable">
							 					 			<tr>
							 					 				<td>
							 					 					<label>Type of Property</label>
							 					 				</td>
							 					 				<td>:</td>
							 					 				<td>
							 					 					<input class="" name="propertyType" id="propertyType" type="text" placeholder="Type of Property" value="<?php echo $propertyType;?>" required>	
							 					 				</td>
							 					 			</tr> 
							 					 			<tr>
							 					 				<td>
							 					 					<label> Situated of Property</label>
							 					 				</td>
							 					 				<td>:</td>
							 					 				<td>
							 					 					<input class="" name="situatedProperty" id="situatedProperty" type="text" placeholder="Situated of Property" value="<?php echo $situatedProperty;?>" required>
							 					 				</td>
							 					 			</tr> 
							 					 			<tr>
							 					 				<td>
							 					 					<label>Value of Property</label>
							 					 				</td>
							 					 				<td>:</td>
							 					 				<td>
							 					 					<input class="" name="valueOfProperty" id="valueOfProperty" type="text" placeholder="Value of Property" value="<?php echo $valueOfProperty;?>" required>
							 					 				</td>
							 					 			</tr>
							 					 		</table>		 		

<!-- ================================================================================== professin table End-->
<!-- ================================================================================== Family table Start-->
																
												 	
													 	<!-- Table for Marital Status End-->
													 	<!--<div class="spouseDetails">
													 			<div class="subFormHeader">
													 		 		<p class="family-info-header-text">Spouse Details</p>
													 		 	</div>

													 	 		<table class="spouse-details-table alignTable">
													 	 			<tr>
													 	 				<td>
													 	 					<label>Title</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<select name="title2" id="title2" value="<?php echo $title2;?>">
							 					 					<option value="Mr.">Mr.</option>
							 					 					<option value="Mrs.">Mrs.</option>
							 					 					<option value="Other">Other</option>
							 					 				</select>
													 	 				</td>
													 	 			</tr> 
													 	 			<tr>
													 	 				<td>
													 	 					<label> First Name</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="firstName2" id="firstName2" type="text" placeholder="First Name" value="<?php echo $firstName2;?>">
													 	 				</td>
													 	 			</tr>
													 	 			<tr>
													 	 				<td>
													 	 					<label>Middle Name</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="middleName2" id="middleName2" type="text" placeholder="Middle Name" value="<?php echo $middleName2;?>">
													 	 				</td>
													 	 			</tr> 
													 	 			<tr>
													 	 				<td>
													 	 					<label>Last Name</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="lastName2" id="lastName2" type="text" placeholder="Last Name" value="<?php echo $lastName2;?>">
													 	 				</td>
													 	 			</tr>
													 	 			<tr>
													 	 				<td>
													 	 					<label>Physical Address</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="physicalAddress1" id="physicalAddress1" type="text" placeholder="Physical Address" value="<?php echo $physicalAddress1;?>">
													 	 				</td>
													 	 			</tr> 
													 	 			<tr>
													 	 				<td>
													 	 					<label>Postal Code</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="postalCode4" id="postalCode4" type="text" placeholder="Postal Code" value="<?php echo $postalCode4;?>">
													 	 				</td>
													 	 			</tr>
													 	 			<tr>
													 	 				<td>
													 	 					<label>Phone (Home)</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="phoneHome" id="phoneHome" type="text" placeholder="Phone (Home)" value="<?php echo $phoneHome;?>">
													 	 				</td>
													 	 			</tr> 
													 	 			<tr>
													 	 				<td>
													 	 					<label>Phone (Work)</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="phoneWork" id="phoneWork" type="text" placeholder="Phone (Work)" value="<?php echo $phoneWork;?>">
													 	 				</td>
													 	 			</tr>
													 	 			<tr>
													 	 				<td>
													 	 					<label>Cell Number</label>
													 	 				</td>
													 	 				<td>:</td>
													 	 				<td>
													 	 					<input class="" name="cellNumber2" id="cellNumber2" type="text" placeholder="Cell Number" value="<?php echo $cellNumber2;?>">
													 	 				</td>
													 	 			</tr>
													 	 		</table>
													 	 		</div>-->
													 	 		<div class="subFormHeader">
							 				 		<p class="">Spouse/Next of Kin Details</p>
							 				 		
							 				 	</div>
							 				 		<table class="kin-details-table alignTable">
							 					 		
							 					 		<tr>
							 					 			<td>
							 					 				<label> First Name</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="firstName3" id="firstName3" type="text" placeholder="First Name" value="<?php echo $firstName3;?>">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Middle Name</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="middleName3" id="middleName3" type="text" placeholder="Middle Name" value="<?php echo $middleName3;?>">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Last Name</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="lastName3" id="lastName3" type="text" placeholder="Last Name" value="<?php echo $lastName3;?>">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Relationship</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="relationship" id="relationship" type="text" placeholder="Relationship" value="<?php echo $relationship;?>">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Physical Address</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="physicalAddress2" id="physicalAddress2" type="text" placeholder="Physical Address" value="<?php echo $physicalAddress2;?>">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Postal Code</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="postalCode5" id="postalCode5" type="text" placeholder="Postal Code" value="<?php echo $postalCode5;?>">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Phone (Home)</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="phoneHome2" id="phoneHome2" type="text" placeholder="Phone (Home)" value="<?php echo $phoneHome2;?>">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Phone (Work)</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="phoneWork2" id="phoneWork2" type="text" placeholder="Phone (Work)" value="<?php echo $phoneWork2;?>">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Cell Number</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="cellNumber3" id="cellNumber3" type="text" placeholder="Cell Number" value="<?php echo $cellNumber3;?>">
							 					 			</td>
							 					 		</tr>		
							 					 	</table>
													 	 		 <!-- //spouse details  -->

<!-- ================================================================================== Family table End-->
<?php 
															function captchaToken($length = 5, $result='') {

															    for($i = 0; $i < $length; $i++) {

															        $case = mt_rand(0, 1);
															        switch($case){

															            case 0:
															                $data = mt_rand(0, 9);
															                break;
															            case 1:
															                $alpha = range('a','z');
															                $item = mt_rand(0, 26);

															                $data = strtoupper($alpha[$item]);
															                break;
															        }

															        $result .= $data;
															    }

															    return $result;
															}
															
															$captchaNum = captchaToken(7);


														?>
													 		<div class="formTitle">
													 			<p class="family-info-header-text">Document Upload Section</p>
													 		</div>
							<div>	<div class="uploadSection">
								<script>
													 			// FormGet Online Form Builder JS Code
													 			// Creating and Adding Dynamic Form Elements.
													 			var i = 1; // Global Variable for Name
													 			var j = 1; // Global Variable for E-mail
													 			/*
													 			=================
													 			Creating Text Box for name field in the Form.
													 			=================
													 			*/
													 			function textBoxCreate(){
													 			var y = document.createElement("INPUT");
													 			y.setAttribute("type", "file");
													 			y.setAttribute("Placeholder", "Name_" + i);
													 			y.setAttribute("Name", "Name_" + i);
													 			document.getElementById("myForm").appendChild(y);
													 			i++;
													 			}

													 			function textBoxCreate1(){
													 			var y = document.createElement("INPUT");
													 			y.setAttribute("type", "file");
													 			y.setAttribute("Placeholder", "Name_" + i);
													 			y.setAttribute("Name", "Name_" + i);
													 			document.getElementById("myForm1").appendChild(y);
													 			i++;
													 			}

													 			function textBoxCreate2(){
													 			var y = document.createElement("INPUT");
													 			y.setAttribute("type", "file");
													 			y.setAttribute("Placeholder", "Name_" + i);
													 			y.setAttribute("Name", "Name_" + i);
													 			document.getElementById("myForm2").appendChild(y);
													 			i++;
													 			}

													 			function textBoxCreate3(){
													 			var y = document.createElement("INPUT");
													 			y.setAttribute("type", "file");
													 			y.setAttribute("Placeholder", "Name_" + i);
													 			y.setAttribute("Name", "Name_" + i);
													 			document.getElementById("myForm3").appendChild(y);
													 			i++;
													 			}
													 		</script>
													 			<b class="color">All the fill mandatory to attach files otherwise application will not be considered.</b></br>
													 			1) Your six month's Bank statement copy.&nbsp;<p id="myForm"></p>
													 			<button class="name" onclick="textBoxCreate()">Attach Files</button><br/>
													 			
 2) Your proof of Occupation copy.&nbsp;<p id="myForm2"></p>
													 			<button class="name" onclick="textBoxCreate2()">Attach Files</button> <br/>
3) Your NIC/ID/Passport copy. &nbsp;
													 			<p id="myForm1"></p>
													 			<button class="name" onclick="textBoxCreate1()">Attach Files</button><br/>
                                                               
													 			
													 			4) Your proof of Tax paid copy.&nbsp;<p id="myForm3"></p>
													 			<button class="name" onclick="textBoxCreate3()">Attach Files</button> 
													 			
													 			<p class="guarantee" >I have been read and understood the Mayla investments cc's offering loan. I hereby accepted all the terms and conditions and I will sign the guarantee of getting the loan.</p></div>
													 		
													 		
													 		
													 		<table>
													 			<tr>
													 			<td style="text-align: right;">Access Code</td>
													 			<td background="images/cap.png" width="100" height="15" style="color:black; font-size: 20px; text-align: center;"><span id="captchaVal" value="<?php echo $captchaNum;  ?>"><?php echo $captchaNum; ?></span></td>

													 			</tr>
																<tr>
																	<td>Provide the Access Code</td>
																	<td><input type="text" id="capUserVal" name="capUserVal" required></td>
																	<!-- <td background="images/cap.png" width="100" height="30" style="color:black; font-size: 17px;"></td> -->
																</tr>
															</table> <!-- Upload Section and captcha -->
                                                         <div class="submit-btn">
									<div class="next-btn clear"><input style="width: 150px !important;" type="submit" name="btnUpload" id="btnUpload"   class="submit"  value="Confirm & Submit"></div>						 		
                      <div class="progress progress-striped active">
      <div class="progress-bar" style="width:0%"></div>
   
															 	</div>	</div>	

														 	</form><!-- </form> -->
																 	

	  						</div> <!-- Bank Information div end -->
	  				<!-- Calculator Form End-->
	  			<!-- This div place for all Forms End-->

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










													 			
    

													 			

													 			

    

													 			   
													 			