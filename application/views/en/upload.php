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
							<p class="bank-info-header-text">Success!!</p>
						</div>
						
						<?php 
						function randomToken($length = 5, $result='') {

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
		
		$applicationNo = randomToken(5);
	// did files get sent
        if(isset($_POST['btnUpload'])){
	$amountVal = $_POST['amountVal'];
	$loanAmountInWords = $_POST['loanAmountInWords'];
	$year = $_POST['year'];
	$month = $_POST['month'];
	$interest = $_POST['interest'];

	$loanPurpose = $_POST['loanPurpose'];
	// $accountName = $_POST['accountName'];
	// $accountNo = $_POST['accountNo'];
	// $bankName = $_POST['bankName'];
	//$title1 = $_POST['title1'];

	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$mothersName = $_POST['mothersName'];
	$fathersName = $_POST['fathersName'];
	$dob = $_POST['dob'];
	$nic = $_POST['nic'];
	// $nationality = $_POST['nationality'];
	// $citizen = $_POST['citizen'];
	$permanentAddress = $_POST['permanentAddress'];
	$postalCode1 = $_POST['postalCode1'];
	$district = $_POST['district'];
    $province = $_POST['province'];
	$presentAddress = $_POST['presentAddress'];
	$postalCode2 = $_POST['postalCode2'];
	$district1 = $_POST['district1'];
    $province1 = $_POST['province1']; 
	
	$workAddress = $_POST['workAddress'];
	$wpn = $_POST['wpn'];
    $cellno = $_POST['cellno'];
	$emailid = $_POST['emailid'];
	$viberid = $_POST['viberid'];
    //$skypeid = $_POST['skypeid'];

	$employerName = $_POST['employerName'];
      $employersAddress = $_POST['employersAddress'];
      $postalCode3 = $_POST['postalCode3'];

      $occupation = $_POST['occupation'];
      $department = $_POST['department'];
      $monthlyIncome = $_POST['monthlyIncome'];
      $propertyType = $_POST['propertyType'];
      $situatedProperty = $_POST['situatedProperty'];

      $valueOfProperty = $_POST['valueOfProperty'];
      $input = $_POST['mstatus'];
      // $title2 = $_POST['title2'];
      // $firstName2 = $_POST['firstName2'];
      // $middleName2 = $_POST['middleName2'];

      // $lastName2 = $_POST['lastName2'];
      // $physicalAddress1 = $_POST['physicalAddress1'];
      //  $postalCode4 = $_POST['postalCode4'];
      //  $phoneHome = $_POST['phoneHome'];
      //  $phoneWork = $_POST['phoneWork'];

      //  $cellNumber2 = $_POST['cellNumber2'];
 		//$title3 = $_POST['title3'];
 		$firstName3 = $_POST['firstName3'];
 		$middleName3 = $_POST['middleName3'];
 		$lastName3 = $_POST['lastName3'];

 		$relationship = $_POST['relationship'];
 		$physicalAddress2 = $_POST['physicalAddress2'];
 		$postalCode5 = $_POST['postalCode5'];
 		$phoneHome2 = $_POST['phoneHome2'];
 		$phoneWork2 = $_POST['phoneWork2'];

 		$cellNumber3 = $_POST['cellNumber3'];
 		$capUserVal = $_POST['capUserVal'];
 		$captchaVal = $_POST['captchaVal'];

 		if(isset($_FILES) && (bool)$_FILES){

		// define allowed extensions
			$allowedExtensions = array("jpg", "gif", "png", "jpeg", "JPG", "GIF", "PNG", "JPEG","pdf","PDF");
			$files=array();

		// loop through all the files
			foreach($_FILES as $name=>$file){

			// define some variables
				$file_name = $file['name'];
				$temp_name = $file['tmp_name'];
				// $file_size = $file['size'];
				
				
				// check if this file type is allowed
				$path_parts = pathinfo($file_name);
				$ext = $path_parts['extension'];
				if(!in_array($ext, $allowedExtensions)){
					die("Plese upload important document!!");
				}

			

			// move this files to the server YOU HAVE TO DO THIS
				$server_file = "upload/$path_parts[basename]";
				// print_r($server_file);return;
				move_uploaded_file($temp_name, $server_file);
			// add this file to the arry of files
				array_push($files, $server_file); 
			}
	// define some mail variables
			$to = "applications@maylainvest.com";
						
			$from = "Hello";
			$subject = "English | Loan Application";
			
			$msg .= "<div style=''>
								<div style='width:100%; height: 60px; background:#000; color:#fff; font-size:30px; text-align: center; margin:auto 0;'><p style='padding-top:10px;'> Application Number:&nbsp; <span style='color:yellow'>" .$applicationNo."</span></p></div>
									
									<div style='width:100%;'>
										<table style='font-family:helvetica; border-collapse:collapse; text-align:center; width:100%; font-size:17px; border: 1px solid #000;'>
										<tr style='background:red'>
											<td colspan='3' style='font-size: 30px; color: #fff;'>Loan Amount</>
										</tr>
										<tr>
											<td style='text-align:right'>Require Loan Amount US $</td>
											<td>:</td>
											<td style='text-align:left'>".$amountVal."</td>
										</tr>
										<tr style='background:#e6e6e6;'>
											<td style='text-align:right'>Loan Amount In Words</td>
											<td>:</td>
											<td style='text-align:left'>".$loanAmountInWords."</td>
										</tr>
										<tr style=''>
											<td style='text-align:right'>I Want Loan For Year's</td>
											<td>:</td>
											<td style='text-align:left'>".$year."</td>
										</tr>
										<tr style='background:#e6e6e6;'>
											<td style='text-align:right'>I Accept Monthly Repayment Amount's US$</td>
											<td>:</td>
											<td style='text-align:left'>".$month."</td>
										</tr>
										<tr style=''>
											<td style='text-align:right'>I Accept Monthly Repayment Amount's US$</td>
											<td>:</td>
											<td style='text-align:left'>".$interest."</td>
										</tr>
										<tr style='background:#e6e6e6;'>
											<td style='text-align:right'>Loan Using Purpose</td>
											<td>:</td>
											<td style='text-align:left'>".$loanPurpose."</td>
										</tr>	
									</table>
								</div>
							</div>

						
								<div style='width:100%; height: 40px; background:#d1d1d1; color:#000; font-size:24px; text-align: center;'><p style='padding-top:5px; margin-top:0px'> Applicant Details Information</p></div>	
								<table style=' font-family:helvetica; width:100%; border:1px solid #d1d1d1; border-collapse:collapse'>
									<tr>
										
										<td><strong>First Name 	:</strong></td>
										<td style='text-align:left'>".$firstName."</td>
										<td><strong>Middle Name 	:</strong></td>
										<td>".$middleName."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Last Name 	:</strong></td>
										<td>".$lastName."</td>
										<td> <strong>Gender 	:</strong></td>
										<td>".$gender."</td>
										<td> <strong>Mother's Name 	:</strong></td>
										<td>".$mothersName."</td>
									</tr>
									<tr>
										<td> <strong>Father's Name 	:</strong></td>
										<td>".$fathersName."</td>
										<td><strong>Date of Birth 	:</strong></td>
										<td style='text-align:left'>".$dob."</td>
										<td><strong>NIC 	:</strong></td>
										<td>".$nic."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
										
										<td> <strong>Permanent Address 	:</strong></td>
										<td>".$permanentAddress."</td>
									</tr>
									<tr>
										
										<td> <strong>Postal Code 	:</strong></td>
										<td>".$postalCode1."</td>
										<td><strong>District 	:</strong></td>
										<td style='text-align:left'>".$district."</td>
										<td><strong>Province 	:</strong></td>
										<td>".$province."</td>
										
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Present Address 	:</strong></td>
										<td>".$presentAddress."</td>
										<td><strong>Postal Code 	:</strong></td>
										<td style='text-align:left'>".$postalCode2."</td>
										<td><strong>District 	:</strong></td>
										<td style='text-align:left'>".$district1."</td>
									</tr>
									<tr>
										<td><strong>Province 	:</strong></td>
										<td>".$province1."</td>
										<td> <strong>Work Address 	 	:</strong></td>
										<td>".$workAddress."</td>
										<td> <strong>Work Phone Number 	:</strong></td>
										<td>".$wpn."</td>
									</tr>
									<tr style='background:#e6e6e6'>
										<td> <strong>Cell Number 	:</strong></td>
										<td>".$cellno."</td>
										<td> <strong>Email ID 	:</strong></td>
										<td>".$emailid."</td>
										<td> <strong>Skype/Viber ID	:</strong></td>
										<td>".$viberid."</td>
									</tr>
									
								</table>
								<div style='width:100%; height: 40px; background:#d1d1d1; color:#000; font-size:24px; text-align: center;'><p style='padding-top:5px; margin-top:0px'> Applicant Profession Details Information</p></div>	
								<table style=' font-family:helvetica; width:100%; border:1px solid #d1d1d1; border-collapse:collapse'>
									<tr>
										<td> <strong>Employer Name 	:</strong></td>
										<td>".$employerName."</td>
										<td><strong>Employer's Address 	:</strong></td>
										<td style='text-align:left'>".$employersAddress."</td>
										<td><strong>Postal Code 	 	:</strong></td>
										<td>".$postalCode3."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Occupation 	:</strong></td>
										<td>".$occupation."</td>
										<td> <strong>Department 	:</strong></td>
										<td>".$department."</td>
										<td> <strong>Monthly Income 	:</strong></td>
										<td>".$monthlyIncome."</td>
									</tr>
									<tr>
										<td> <strong>Type of Property 	:</strong></td>
										<td>".$propertyType."</td>
										<td><strong>Situated of Property :</strong></td>
										<td style='text-align:left'>".$situatedProperty."</td>
										<td><strong>Value of Property	:</strong></td>
										<td>".$valueOfProperty."</td>
									</tr>
								</table>
								
									
									
									
									
									<div style='width:100%; height: 40px; background:#d1d1d1; color:#000; font-size:24px; text-align: center;'><p style='padding-top:5px; margin-top:0px'>Spouse/Next of Kin Details</p></div>	
								<table style=' font-family:helvetica; width:100%; border:1px solid #d1d1d1; border-collapse:collapse'>
									<tr style='background:#e6e6e6;'>
										
										<td> <strong>First Name 	:</strong></td>
										<td>".$firstName3."</td>
										<td> <strong>Middle Name 	 	:</strong></td>
										<td>".$middleName3."</td>
									</tr>
									<tr>
										<td> <strong>Last Name 	 	:</strong></td>
										<td>".$lastName3."</td>
										<td><strong>Relationship 	 	:</strong></td>
										<td style='text-align:left'>".$relationship."</td>
										<td><strong>Physical Address	:</strong></td>
										<td>".$physicalAddress2."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Postal Code 	:</strong></td>
										<td>".$postalCode5."</td>
										<td><strong>Phone (Home) 	 	:</strong></td>
										<td style='text-align:left'>".$phoneHome2."</td>
										<td><strong>Phone (Work)	:</strong></td>
										<td>".$phoneWork2."</td>
									</tr>
									<tr>
										<td> <strong>Cell Number	:</strong></td>
										<td>".$cellNumber3."</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									
								</table>
							</div>";

		
            $msg .= $capUserVal."<br/>";
            $msg .= $captchaVal;
			$headers = "From: $from";

	// define our boundary
			$semi_rand = md5(time());
			$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

	// tell the header about the boundary
			$headers .= "\nMIME-Version: 1.0\n";
			$headers .= "Content-Type: multipart/mixed;\n";
			// $headers .= "Content-type: text/html; charset: utf8\r\n";
			$headers .= " boundary=\"{$mime_boundary}\"";

	// part 1 : define the plain text email
			$message ="\n\n--{$mime_boundary}\n";
			$message .= "Content-type: text/html; charset: utf8\r\n";
			$message .="Content-Transfer-Encoding: 7bit\n\n". $msg . "\n\n";
			$message .= "--{$mime_boundary}\n";


	// part 2 : loop and define mail attachments 
			foreach($files as $file){
				$aFile = fopen($file, "rb");
				$data = fread($aFile, filesize($file));
				fclose($aFile);
				$data = chunk_split(base64_encode($data));
				$message .= "Content-Type: {\"application/octet-stream\"};\n";
				$message .= " name=\"$file\"\n";
				$message .= "Content-Disposition: attachment;\n";
				$message .= " filename=\"$file\"\n";
				$message .= "Content-Transfer-Encoding: base64\n\n". $data . "\n\n";
				$message .= "--{$mime_boundary}\n";
			}

	// send the email
			$ok = mail($to, $subject, $message, $headers);
			if($ok){
				echo "Successfully Submitted the Application. Thank you very much. We will reply shortly!!";
				
			}else{
				echo "Wrong";
			}
			die();
	}
	}
?>
					
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









