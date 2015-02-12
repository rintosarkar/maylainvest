<?php
require "../common/config.php";
session_start();
	 foreach ($_POST as $key => $value) {
	 $_SESSION['post'][$key] = $value;
   } 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loan Application</title>
	<!-- <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'> -->
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="js/jquery.js"></script>
	<script src="js/professionalinfovalidation.js"></script>
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
					Div for professional information
					===================================================================
					 -->

					 <div class="mainFormHeader">
					 		<div class="formTitle">
					 			<p class="bank-info-header-text">Application Form</p>
					 		</div>
						 	<div class="subFormHeader">
						 		<p class="professional-info-header-text">Profession Details</p>
						 	</div>
						 	<div class="">
						 		<marquee> <p class="marquee-text">Fill in the application form</p></marquee>
						 	</div>
							 	<form class="profession-details-form" action="confirmationForm.php" name="professionDetailsform" id="professionDetailsform" method="post">
							 		<table class="professional-info-table alignTable">
							 			<tr>
							 				<td>
							 					<label>Employer Name</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="employerName" id="employerName" type="text" placeholder="Employer Name" required>	
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label> Employer's Address</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="employersAddress" id="employersAddress" type="text" placeholder="Employer's Address" required>
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Postal Code</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="postalCode3" id="postalCode3" type="text" placeholder="Postal Code" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Occupation</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="occupation" id="occupation" type="text" placeholder="Occupation" >
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Department</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="department" id="department" type="text" placeholder="Department" required>
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Monthly Income</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="monthlyIncome" id="monthlyIncome" type="text" placeholder="Monthly Income" required>
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
							 					 					<input class="" name="propertyType" id="propertyType" type="text" placeholder="Type of Property" required>	
							 					 				</td>
							 					 			</tr> 
							 					 			<tr>
							 					 				<td>
							 					 					<label> Situated of Property</label>
							 					 				</td>
							 					 				<td>:</td>
							 					 				<td>
							 					 					<input class="" name="situatedProperty" id="situatedProperty" type="text" placeholder="Situated of Property" required>
							 					 				</td>
							 					 			</tr> 
							 					 			<tr>
							 					 				<td>
							 					 					<label>Value of Property</label>
							 					 				</td>
							 					 				<td>:</td>
							 					 				<td>
							 					 					<input class="" name="valueOfProperty" id="valueOfProperty" type="text" placeholder="Value of Property" required>
							 					 				</td>
							 					 			</tr>
							 					 		</table>
							 					 		
													 	
													 	<!-- Table for Marital Status 
													 	<table name="marital_status">
													 		<tr>
												 				<td colspan="3" style="padding-left:100px;">
													 				<input id="marriedIn" type="radio" name="mstatus" value="MarriedIn">  
														 		    <span>Married In</span>
														 		    <input id="traditional" type="radio" name="mstatus" value="Traditional">  
														 		    <span>Traditional</span>
														 		    <input id="marriedOut" type="radio" name="mstatus" value="MarriedOut">  
														 		    <span>Married Out</span>
														 		    <input id="single" type="radio" name="mstatus" value="Single">  
														 		    <span>Single</span>
												 				</td>
												 			</tr>
												 			<tr>
												 				<td colspan="3">
												 					<span style="font-size:15px;">If married in community of property, I hereby confirm that, by signing this application form, I have my spouses consent to enter into a credit agreement.</span>
												 				</td>
												 			</tr>	
													 	</table>
								 	<!-- Table for Marital Status End-->


								 <!--	<div class="spouseDetails">	
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
							 					<select name="title2" id="title2">
                                                                    <option value="">Select</option>
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
							 					<input class="" name="firstName2" id="firstName2" type="text" placeholder="First Name">
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Middle Name</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="middleName2" id="middleName2" type="text" placeholder="Middle Name">
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Last Name</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="lastName2" id="lastName2" type="text" placeholder="Last Name">
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Physical Address</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="physicalAddress1" id="physicalAddress1" type="text" placeholder="Physical Address">
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Postal Code</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="postalCode4" id="postalCode4" type="text" placeholder="Postal Code">
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Phone (Home)</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="phoneHome" id="phoneHome" type="text" placeholder="Phone (Home)">
							 				</td>
							 			</tr> 
							 			<tr>
							 				<td>
							 					<label>Phone (Work)</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="phoneWork" id="phoneWork" type="text" placeholder="Phone (Work)">
							 				</td>
							 			</tr>
							 			<tr>
							 				<td>
							 					<label>Cell Number</label>
							 				</td>
							 				<td>:</td>
							 				<td>
							 					<input class="" name="cellNumber2" id="cellNumber2" type="text" placeholder="Cell Number">
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
							 					 				<input class="" name="firstName3" id="firstName3" type="text" placeholder="First Name">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Middle Name</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="middleName3" id="middleName3" type="text" placeholder="Middle Name">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Last Name</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="lastName3" id="lastName3" type="text" placeholder="Last Name">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Relationship</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="relationship" id="relationship" type="text" placeholder="Relationship">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Physical Address</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="physicalAddress2" id="physicalAddress2" type="text" placeholder="Physical Address">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Postal Code</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="postalCode5" id="postalCode5" type="text" placeholder="Postal Code">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Phone (Home)</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="phoneHome2" id="phoneHome2" type="text" placeholder="Phone (Home)">
							 					 			</td>
							 					 		</tr> 
							 					 		<tr>
							 					 			<td>
							 					 				<label>Phone (Work)</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="phoneWork2" id="phoneWork2" type="text" placeholder="Phone (Work)">
							 					 			</td>
							 					 		</tr>
							 					 		<tr>
							 					 			<td>
							 					 				<label>Cell Number</label>
							 					 			</td>
							 					 			<td>:</td>
							 					 			<td>
							 					 				<input class="" name="cellNumber3" id="cellNumber3" type="text" placeholder="Cell Number">
							 					 			</td>
							 					 		</tr>		
							 					 	</table>
									 	<div class="submit-btn">
									 		<!-- <div class="previous-btn clear"><input type="button" class="submit" value="previous" id="previous"/></div> -->
									 		<div class="next-btn clear"><input type="submit" class="submit" id="next4" name="next4" value="Next" onclick="return formValidator()"/></div>
									 	</div>										
								 	</form><!-- </form> -->
					 </div> <!-- professional Information div end -->
					 
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
	
	
