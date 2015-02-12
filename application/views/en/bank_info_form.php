<?php
require'../common/config.php';
//session_start();
?>
<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loan Application:Form</title><?php 
	// session_start();
?>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="js/jquery.js"></script>
    <script src="js/bankinfovalidation.js"></script>
	<script src="js/beaverslider.js"></script>         
	<script src="js/beaverslider-effects.js"></script>
	<script src="js/jquery.dd.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="css/loan.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/sprite.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/dd.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/flags.css">
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
		

	});
	</script>
	<script type="text/javascript">
function blinker() {
    $('.blink_me').fadeOut(100);
    $('.blink_me').fadeIn(2000);
}

setInterval(blinker, 1000);
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

<script>
// function newDoc() {
//     window.location.assign("http://localhost/office/06122014/loan_application_R_final/personalInfoForm.php");
// }
// </script>

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
			<a href="../bonds.php"><img class="left_barimg"  src="images/loans.gif"></a>
		</div>
	</div> <!-- left div end -->
	<div class="right-side">
		<div class="">
			<!-- This div place for Forms Only -->

			<div class="mainFormHeader">
						<div class="formTitle">
							<p class="bank-info-header-text">Application Form</p>
						</div>
						<div class="subFormHeader">
							<p class="bank-info-header-text">Calculate About Your Loan</p>
						</div>
						<!-- <div class="bank-info-sub-header">
							<marquee> <p class="marquee-text">Fill in the application form</p></marquee>
						</div> -->
					<form class="bank-form" action="personalInfoForm.php" name="secondForm" id="secondForm" method="post">
						<table class="bank-info-table middleAlign">
							<tr>
								<td>
									<label>Require Loan Amount US $</label>
								</td>
								<td>:</td>
								<td>
									<select name="amountVal" id="amountVal" style="width: 300px">
										<option value="">Select the amount of loan</option>
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
									<select style="" name="loanAmountInWords" id="loanAmountInWords"></select>
								</td>
							</tr> 
							<tr>
								<td>
									<label>I Want Loan For Year's</label>
								</td>
								<td>:</td>
								<td>
									<select name="year" id="year" >
										  	<option value="">Select the year of term</option>
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
									<input class="" name="month" id="month" type="text" placeholder="Number of Month's for  Repayment" required>
								</td>
							</tr>
							<tr>
								<td>
									<label>I Accept Monthly Repayment Amount's US$</label>
								</td>
								<td>:</td>
								<td>
									<input class="" name="interest" id="interest" type="text" placeholder="Monthly Repayment Amount's" required>
								</td>
							</tr>
							<tr>
								<td>
									<label>Loan Using Purpose</label>
								</td>
								<td>:</td>
								<td>
									<input class="" name="loanPurpose" id="loanPurpose" type="text" maxlength="110" placeholder="Compose maximum 110 characters" required>
								</td>
							</tr> 
						</table>

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
									<input class="" name="accountName" id="accountName" type="text" placeholder="Account Name" required>
								</td>
							</tr> 
							<tr>
								<td>
									<label>Account No</label>
								</td>
								<td>:</td>
								<td>
									<input class="" name="accountNo" id="accountNo" type="text" placeholder="Account Number" required>
								</td>
							</tr> 
							<tr>
								<td>
									<label>Bank Name</label>
								</td>
								<td>:</td>
								<td>
								<input class="" name="bankName" id="bankName" type="text" placeholder="Bank Name" required>
								</td>
							</tr> 
						</table>-->
							 <div class="submit-btn">
							 	<!-- <div class="previous-btn clear"><input type="button" class="submit" value="Reset" id="previous" /></div> -->
							 	<div class="next-btn clear"><input style="margin-left: 10px;" type="submit" class="submit" id="next" value="Next" onclick="return formValidator()"/></div>
							 </div>										
						 	
					</form>
				</div> <!-- Bank Information div end -->
				<div class="personalInformation"><!-- Personal Information div start -->


				</div><!-- Personal Information div end -->
				
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









