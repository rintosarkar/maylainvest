<?php
	require "../../common/config.php";
	error_reporting(0);

	//require "classes/captcha.php";

	if ($db->errno) {
		# code...
		printf("Unable to connect to the database : %s", $db->errno);
		exit();
	}

	if(isset($_POST['maylain_finalConfirm'])){
		
		$amountVal = filter_var($_POST['amountVal'],FILTER_SANITIZE_STRING);
		$loanAmountInWords = filter_var($_POST['loanAmountInWords'],FILTER_SANITIZE_STRING);

		$year = filter_var($_POST['year'],FILTER_SANITIZE_STRING);
		$month = filter_var($_POST['month'],FILTER_SANITIZE_STRING);
		$interest = filter_var($_POST['interest'],FILTER_SANITIZE_STRING);
		
		$loanPurpose = filter_var($_POST['loanPurpose'],FILTER_SANITIZE_STRING);
		$accountName = filter_var($_POST['accountName'],FILTER_SANITIZE_STRING);
		$accountNo = filter_var($_POST['accountNo'],FILTER_SANITIZE_STRING);
		$bankName = filter_var($_POST['bankName'],FILTER_SANITIZE_STRING);
		$maylain_pTitle = filter_var($_POST['maylain_pTitle'],FILTER_SANITIZE_STRING);
		
		$maylain_pFirstName = filter_var($_POST['maylain_pFirstName'],FILTER_SANITIZE_STRING);
		$maylain_pMiddleName = filter_var($_POST['maylain_pMiddleName'],FILTER_SANITIZE_STRING);
		$maylain_pLastName = filter_var($_POST['maylain_pLastName'],FILTER_SANITIZE_STRING);
		$maylain_pGender = filter_var($_POST['maylain_pGender'],FILTER_SANITIZE_STRING);
		$maylain_pMotherName = filter_var($_POST['maylain_pMotherName'],FILTER_SANITIZE_STRING);
		
		$maylain_pFatherName = filter_var($_POST['maylain_pFatherName'],FILTER_SANITIZE_STRING);
		$maylain_pDateofBirth = filter_var($_POST['maylain_pDateofBirth'],FILTER_SANITIZE_STRING);
		$maylain_pNIC = filter_var($_POST['maylain_pNIC'],FILTER_SANITIZE_STRING);
		$maylain_pNationality = filter_var($_POST['maylain_pNationality'],FILTER_SANITIZE_STRING);
		$maylain_pNationalityBy = filter_var($_POST['maylain_pNationalityBy'],FILTER_SANITIZE_STRING);
		
		$maylain_pPermanentAddress = filter_var($_POST['maylain_pPermanentAddress'],FILTER_SANITIZE_STRING);
	    
		$maylain_pPermanentPostalCode = filter_var($_POST['maylain_pPermanentPostalCode'],FILTER_SANITIZE_STRING);
		$maylain_pDistrict = filter_var($_POST['maylain_pDistrict'],FILTER_SANITIZE_STRING);
		$maylain_pProvince = filter_var($_POST['maylain_pProvince'],FILTER_SANITIZE_STRING);
		$maylain_pPresentAddress = filter_var($_POST['maylain_pPresentAddress'],FILTER_SANITIZE_STRING);
		$maylain_pPresentPostalCode = filter_var($_POST['maylain_pPresentPostalCode'],FILTER_SANITIZE_STRING);
		$maylain_pDistrict1 = filter_var($_POST['maylain_pDistrict1'],FILTER_SANITIZE_STRING);
		$maylain_pProvince1 = filter_var($_POST['maylain_pProvince1'],FILTER_SANITIZE_STRING);
		$maylain_pWorkAddress = filter_var($_POST['maylain_pWorkAddress'],FILTER_SANITIZE_STRING);
		
		$maylain_pWorkPhoneNumber = filter_var($_POST['maylain_pWorkPhoneNumber'],FILTER_SANITIZE_STRING);
		$maylain_pCellNumber = filter_var($_POST['maylain_pCellNumber'],FILTER_SANITIZE_STRING);
		$maylain_pEmailID = filter_var($_POST['maylain_pEmailID'],FILTER_SANITIZE_STRING);
		$maylain_pViberID = filter_var($_POST['maylain_pViberID'],FILTER_SANITIZE_STRING);
		$maylain_pSkypeID = filter_var($_POST['maylain_pSkypeID'],FILTER_SANITIZE_STRING);
		$maylain_proEmployerName = filter_var($_POST['maylain_proEmployerName'],FILTER_SANITIZE_STRING);
		$maylain_proEmployerAddress = filter_var($_POST['maylain_proEmployerAddress'],FILTER_SANITIZE_STRING);
		
		$maylain_proPostalCode = filter_var($_POST['maylain_proPostalCode'],FILTER_SANITIZE_STRING);
		$maylain_proOccupation = filter_var($_POST['maylain_proOccupation'],FILTER_SANITIZE_STRING);
		$maylain_proDepartment = filter_var($_POST['maylain_proDepartment'],FILTER_SANITIZE_STRING);
		$maylain_proMonthlyIncome = filter_var($_POST['maylain_proMonthlyIncome'],FILTER_SANITIZE_STRING);
		$maylain_proTypeofProperty = filter_var($_POST['maylain_proTypeofProperty'],FILTER_SANITIZE_STRING);
		
		$maylain_proSituatedofProperty = filter_var($_POST['maylain_proSituatedofProperty'],FILTER_SANITIZE_STRING);
		$maylain_proValueofProperty = filter_var($_POST['maylain_proValueofProperty'],FILTER_SANITIZE_STRING);
		$maylain_marital_status = filter_var($_POST['maylain_marital_status'],FILTER_SANITIZE_STRING);
		$maylain_fSpouseTitle = filter_var($_POST['maylain_fSpouseTitle'],FILTER_SANITIZE_STRING);
		$maylain_fSpouseFirstName = filter_var($_POST['maylain_fSpouseFirstName'],FILTER_SANITIZE_STRING);
		
		$maylain_fSpouseMiddleName = filter_var($_POST['maylain_fSpouseMiddleName'],FILTER_SANITIZE_STRING);
		$maylain_fSpouseLastName = filter_var($_POST['maylain_fSpouseLastName'],FILTER_SANITIZE_STRING);
		$maylain_fSpousePhysicalAddress = filter_var($_POST['maylain_fSpousePhysicalAddress'],FILTER_SANITIZE_STRING);
		$maylain_fSpousePostalCode = filter_var($_POST['maylain_fSpousePostalCode'],FILTER_SANITIZE_STRING);

		$maylain_fSpousePhoneHome = filter_var($_POST['maylain_fSpousePhoneHome'],FILTER_SANITIZE_STRING);
		$maylain_fSpousePhoneWork = filter_var($_POST['maylain_fSpousePhoneWork'],FILTER_SANITIZE_STRING);
		$maylain_fSpouseCellNumber = filter_var($_POST['maylain_fSpouseCellNumber'],FILTER_SANITIZE_STRING);
		$maylain_fKinTitle = filter_var($_POST['maylain_fKinTitle'],FILTER_SANITIZE_STRING);
		$maylain_fKinFirstName = filter_var($_POST['maylain_fKinFirstName'],FILTER_SANITIZE_STRING);

		$maylain_fKinMiddleName = filter_var($_POST['maylain_fKinMiddleName'],FILTER_SANITIZE_STRING);
		$maylain_fKinLastName = filter_var($_POST['maylain_fKinLastName'],FILTER_SANITIZE_STRING);
		$maylain_fKinRelationship = filter_var($_POST['maylain_fKinRelationship'],FILTER_SANITIZE_STRING);
		$maylain_fKinPhysicalAddress = filter_var($_POST['maylain_fKinPhysicalAddress'],FILTER_SANITIZE_STRING);
		$maylain_fKinPostalCode = filter_var($_POST['maylain_fKinPostalCode'],FILTER_SANITIZE_STRING);
		
		$maylain_fKinPhoneHome = filter_var($_POST['maylain_fKinPhoneHome'],FILTER_SANITIZE_STRING);
		$maylain_fKinPhoneWork = filter_var($_POST['maylain_fKinPhoneWork'],FILTER_SANITIZE_STRING);
		$maylain_capUserVal = filter_var($_POST['maylain_capUserVal'],FILTER_SANITIZE_STRING); 
		$maylain_captchaVal = filter_var($_POST['maylain_captchaVal'],FILTER_SANITIZE_STRING);
		$maylain_fKinCellNumber = filter_var($_POST['maylain_fKinCellNumber'],FILTER_SANITIZE_STRING);
		
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


		if(empty($loanPurpose) || ctype_space($loanPurpose)){
			echo "Loan Purpose cannot be blank!!";
		}elseif (empty($accountName) || ctype_space($accountName)) {
			echo "Account Name cannot be blank!!";
		}elseif (empty($accountNo) || ctype_space($accountNo)) {
			echo "Account No cannot be blank!!";
		}elseif (empty($bankName) || ctype_space($bankName)) {
			echo "Bank Name cannot be blank!!";
		}elseif (empty($maylain_pFirstName) || ctype_space($maylain_pFirstName)) {
			echo "First Name cannot be blank!!";
		}elseif (empty($maylain_pMiddleName) || ctype_space($maylain_pMiddleName)) {
			echo "Middle Name cannot be blank!!";
		}elseif (empty($maylain_pLastName) || ctype_space($maylain_pLastName)) {
			echo "Last Name cannot be blank!!";
		}elseif (empty($maylain_pMotherName) || ctype_space($maylain_pMotherName)) {
			echo "Mother Name cannot be blank!!";
		//}elseif (empty($maylain_pFatherName) || ctype_space($maylain_pFatherName)) {
			//echo "Father Name cannot be blank!!";
		}elseif (empty($maylain_pNIC) || ctype_space($maylain_pNIC)) {
			echo "National ID Card cannot be blank!!";
		}elseif (empty($maylain_pPermanentAddress) || ctype_space($maylain_pPermanentAddress)) {
			echo "Permanent Address cannot be blank!!";
		}elseif (empty($maylain_pPermanentPostalCode) || ctype_space($maylain_pPermanentPostalCode)) {
			echo "Permanent Postal Code cannot be blank!!";
		
         }elseif (empty($maylain_pDistrict) || ctype_space($maylain_pDistrict)) {
			echo "District cannot be blank!!";
		}elseif (empty($maylain_pProvince) || ctype_space($maylain_pProvince)) {
			echo "Province cannot be blank!!";


		}elseif (empty($maylain_pPresentAddress) || ctype_space($maylain_pPresentAddress)) {
			echo "Present Address cannot be blank!!";
		}elseif (empty($maylain_pPresentPostalCode) || ctype_space($maylain_pPresentPostalCode)) {
			echo "Present Postal Code cannot be blank!!";
		
        }elseif (empty($maylain_pDistrict1) || ctype_space($maylain_pDistrict1)) {
			echo "District cannot be blank!!";
		}elseif (empty($maylain_pProvince1) || ctype_space($maylain_pProvince1)) {
			echo "Province cannot be blank!!";


		}elseif (empty($maylain_pWorkAddress) || ctype_space($maylain_pWorkAddress)) {
			echo "Work Address cannot be blank!!";
		}elseif (empty($maylain_pWorkPhoneNumber) || ctype_space($maylain_pWorkPhoneNumber)) {
			echo "Work Phone Number cannot be blank!!";
		}elseif (empty($maylain_pCellNumber) || ctype_space($maylain_pCellNumber)) {
			echo "Cell Number cannot be blank!!";
		}elseif (empty($maylain_pEmailID) || ctype_space($maylain_pEmailID)) {
			echo "Email cannot be blank!!";
		}elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/",$maylain_pEmailID)) {
			echo "Incorrect Your Email Address!!";
		}elseif (empty($maylain_pViberID) || ctype_space($maylain_pViberID)) {
			echo "Viber cannot be blank!!";
		}elseif (empty($maylain_proEmployerName) || ctype_space($maylain_proEmployerName)) {
			echo "Employer Name cannot be blank!!";
		}elseif (empty($maylain_proEmployerAddress) || ctype_space($maylain_proEmployerAddress)) {
			echo "Employer`s Address 	 cannot be blank!!";
		}elseif (empty($maylain_proPostalCode) || ctype_space($maylain_proPostalCode)) {
			echo "Postal Code cannot be blank!!";
		//}elseif (empty($maylain_proOccupation) || ctype_space($maylain_proOccupation)) {
			//echo "Occupation cannot be blank!!";
		}elseif (empty($maylain_proDepartment) || ctype_space($maylain_proDepartment)) {
			echo "Department cannot be blank!!";
		}elseif (empty($maylain_proMonthlyIncome) || ctype_space($maylain_proMonthlyIncome)) {
			echo "Monthly Income cannot be blank!!";
		}elseif (empty($maylain_proTypeofProperty) || ctype_space($maylain_proTypeofProperty)) {
			echo "Type of Property cannot be blank!!";
		}elseif (empty($maylain_proSituatedofProperty) || ctype_space($maylain_proSituatedofProperty)) {
			echo "Situated of Property cannot be blank!!";
		}elseif (empty($maylain_proValueofProperty) || ctype_space($maylain_proValueofProperty)) {
			echo "Value of Property cannot be blank!!";
		}elseif (empty($maylain_marital_status) || ctype_space($maylain_marital_status)) {
			echo "Marital Status cannot be blank!!";
		}elseif (ctype_space($maylain_fSpouseFirstName)) {
			echo "Spouse First Name cannot be blank!!";
		}elseif (ctype_space($maylain_fSpouseMiddleName)) {
			echo "Spouse Middle Name cannot be blank!!";
		}elseif (ctype_space($maylain_fSpouseLastName)) {
			echo "Spouse Last Name cannot be blank!!";
		}elseif (ctype_space($maylain_fSpousePhysicalAddress)) {
			echo "Spouse Physical Address cannot be blank!!";
		}elseif (ctype_space($maylain_fSpousePostalCode)) {
			echo "Spouse Postal Code cannot be blank!!";
		}elseif (ctype_space($maylain_fSpousePhoneHome)) {
			echo "Spouse Phone Home cannot be blank!!";
		}elseif (ctype_space($maylain_fSpousePhoneWork)) {
			echo "Spouse Phone Work cannot be blank!!";
		}elseif (ctype_space($maylain_fSpouseCellNumber)) {
			echo "Spouse Cell Number cannot be blank!!";
		}elseif (empty($maylain_fKinFirstName) || ctype_space($maylain_fKinFirstName)) {
			echo "Kin First Name cannot be blank!!";
		}elseif (empty($maylain_fKinMiddleName) || ctype_space($maylain_fKinMiddleName)) {
			echo "Kin Middle Name cannot be blank!!";
		}elseif (empty($maylain_fKinLastName) || ctype_space($maylain_fKinLastName)) {
			echo "Kin Last Name cannot be blank!!";
		}elseif (empty($maylain_fKinRelationship) || ctype_space($maylain_fKinRelationship)) {
			echo "Kin Relationship cannot be blank!!";
		}elseif (empty($maylain_fKinPhysicalAddress) || ctype_space($maylain_fKinPhysicalAddress)) {
			echo "Kin Physical Address cannot be blank!!";
		}elseif (empty($maylain_fKinPostalCode) || ctype_space($maylain_fKinPostalCode)) {
			echo "Kin Postal Code cannot be blank!!";
		}elseif (empty($maylain_fKinPhoneHome) || ctype_space($maylain_fKinPhoneHome)) {
			echo "Kin Phone Home cannot be blank!!";
		}elseif (empty($maylain_fKinPhoneWork) || ctype_space($maylain_fKinPhoneWork)) {
			echo "Kin Phone Work cannot be blank!!";
		}elseif (empty($maylain_fKinCellNumber) || ctype_space($maylain_fKinCellNumber)) {
			echo "Kin Cell Number cannot be blank!!";
		}elseif (empty($maylain_capUserVal) || ctype_space($maylain_capUserVal)) {
			echo "Access code cannot be blank and whitespace not accepted!!";
		}elseif ($maylain_capUserVal != $maylain_captchaVal){
			echo "Wrong Access Code!!";
		}

		else{
		
		$myQuery="INSERT INTO `maylainvest`.`loanapplication`  VALUES (' ','$applicationNo', '$amountVal','$loanAmountInWords','$year','$month','$interest',
			'$loanPurpose','$accountName','$accountNo','$bankName','$maylain_pTitle','$maylain_pFirstName','$maylain_pMiddleName',
			'$maylain_pLastName','$maylain_pGender','$maylain_pMotherName','$maylain_pFatherName','$maylain_pDateofBirth','$maylain_pNIC',
				'$maylain_pNationality','$maylain_pNationalityBy','$maylain_pPermanentAddress','$maylain_pPermanentPostalCode','$maylain_pDistrict','$maylain_pProvince',
				'$maylain_pPresentAddress','$maylain_pPresentPostalCode','$maylain_pDistrict1','$maylain_pProvince1','$maylain_pWorkAddress','$maylain_pWorkPhoneNumber','$maylain_pCellNumber',
				'$maylain_pEmailID','$maylain_pViberID','$maylain_pSkypeID','$maylain_proEmployerName','$maylain_proEmployerAddress','$maylain_proPostalCode','$maylain_proOccupation',
				'$maylain_proDepartment','$maylain_proMonthlyIncome','$maylain_proTypeofProperty','$maylain_proSituatedofProperty',
				'$maylain_proValueofProperty','$maylain_marital_status','$maylain_fSpouseTitle','$maylain_fSpouseFirstName',
				'$maylain_fSpouseMiddleName','$maylain_fSpouseLastName','$maylain_fSpousePhysicalAddress','$maylain_fSpousePostalCode',
				'$maylain_fSpousePhoneHome','$maylain_fSpousePhoneWork','$maylain_fSpouseCellNumber','$maylain_fKinTitle',
				'$maylain_fKinFirstName','$maylain_fKinMiddleName','$maylain_fKinLastName','$maylain_fKinRelationship',
				'$maylain_fKinPhysicalAddress','$maylain_fKinPostalCode','$maylain_fKinPhoneHome','$maylain_fKinPhoneWork',
				'$maylain_fKinCellNumber',CURRENT_TIMESTAMP);";

			$result=$db->query($myQuery);
			
						$to = "applications@maylainvest.com";
						$subject = "English | Loan Application";
						$mailText = "<div style=''>
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

							<div style=''>
								<div style='width:100%; height: 60px; background:#000; color:#fff; font-size:30px; text-align: center; margin:auto 0;'><p style='padding-top:10px;'> Loan Application Details</p></div>	
								<div style='width:100%; height: 40px; background:#d1d1d1; color:#000; font-size:24px; text-align: center;'><p style='padding-top:5px; margin-top:0px'> Bank Information Details</p></div>	
								<table style='font-family:helvetica; width:100%; border:1px solid #d1d1d1; border-collapse:collapse'>
									<tr>
									<td> <strong>Account Name 	:</strong></td>
									<td>".strtoupper($accountName)."</td>
									<td><strong>Account No 	:</strong></td>
									<td>".$accountNo."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
									<td> <strong>Bank Name 	:</strong></td>
									<td>".$bankName."</td>
									<td></td>
									<td></td>
									</tr>
								</table>
								<div style='width:100%; height: 40px; background:#d1d1d1; color:#000; font-size:24px; text-align: center;'><p style='padding-top:5px; margin-top:0px'> Applicant Details Information</p></div>	
								<table style=' font-family:helvetica; width:100%; border:1px solid #d1d1d1; border-collapse:collapse'>
									<tr>
										<td> <strong>Title 	:</strong></td>
										<td>".$maylain_pTitle."</td>
										<td><strong>First Name 	:</strong></td>
										<td style='text-align:left'>".$maylain_pFirstName."</td>
										<td><strong>Middle Name 	:</strong></td>
										<td>".$maylain_pMiddleName."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Last Name 	:</strong></td>
										<td>".$maylain_pLastName."</td>
										<td> <strong>Gender 	:</strong></td>
										<td>".$maylain_pGender."</td>
										<td> <strong>Mother's Name 	:</strong></td>
										<td>".$maylain_pMotherName."</td>
									</tr>
									<tr>
										<td> <strong>Father's Name 	:</strong></td>
										<td>".$maylain_pFatherName."</td>
										<td><strong>Date of Birth 	:</strong></td>
										<td style='text-align:left'>".$maylain_pDateofBirth."</td>
										<td><strong>NIC 	:</strong></td>
										<td>".$maylain_pNIC."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Nationality 	:</strong></td>
										<td>".$maylain_pNationality."</td>
										<td> <strong>Nationality By 	:</strong></td>
										<td>".$maylain_pNationalityBy."</td>
										<td> <strong>Permanent Address 	:</strong></td>
										<td>".$maylain_pPermanentAddress."</td>
									</tr>
									<tr>
										
										<td> <strong>Postal Code 	:</strong></td>
										<td>".$maylain_pPermanentPostalCode."</td>
										<td><strong>District 	:</strong></td>
										<td style='text-align:left'>".$maylain_pDistrict."</td>
										<td><strong>Province 	:</strong></td>
										<td>".$maylain_pProvince."</td>
										
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Present Address 	:</strong></td>
										<td>".$maylain_pPresentAddress."</td>
										<td><strong>Postal Code 	:</strong></td>
										<td style='text-align:left'>".$maylain_pPresentPostalCode."</td>
										<td><strong>District 	:</strong></td>
										<td style='text-align:left'>".$maylain_pDistrict1."</td>
									</tr>
									<tr>
										<td><strong>Province 	:</strong></td>
										<td>".$maylain_pProvince1."</td>
										<td> <strong>Work Address 	 	:</strong></td>
										<td>".$maylain_pWorkAddress."</td>
										<td> <strong>Work Phone Number 	:</strong></td>
										<td>".$maylain_pWorkPhoneNumber."</td>
									</tr>
									<tr style='background:#e6e6e6'>
										<td> <strong>Cell Number 	:</strong></td>
										<td>".$maylain_pCellNumber."</td>
										<td> <strong>Email ID 	:</strong></td>
										<td>".$maylain_pEmailID."</td>
										<td> <strong>Viber ID 	:</strong></td>
										<td>".$maylain_pViberID."</td>
									</tr>
									<tr>
										<td> <strong>Skype ID 	:</strong></td>
										<td>".$maylain_pSkypeID."</td>
										<td style='text-align:left'></td>
										<td></td>
										<td></td>
										<td style='text-align:left'></td>
									</tr>
								</table>
								<div style='width:100%; height: 40px; background:#d1d1d1; color:#000; font-size:24px; text-align: center;'><p style='padding-top:5px; margin-top:0px'> Applicant Profession Details Information</p></div>	
								<table style=' font-family:helvetica; width:100%; border:1px solid #d1d1d1; border-collapse:collapse'>
									<tr>
										<td> <strong>Employer Name 	:</strong></td>
										<td>".$maylain_proEmployerName."</td>
										<td><strong>Employer's Address 	:</strong></td>
										<td style='text-align:left'>".$maylain_proEmployerAddress."</td>
										<td><strong>Postal Code 	 	:</strong></td>
										<td>".$maylain_proPostalCode."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Occupation 	:</strong></td>
										<td>".$maylain_proOccupation."</td>
										<td> <strong>Department 	:</strong></td>
										<td>".$maylain_proDepartment."</td>
										<td> <strong>Monthly Income 	:</strong></td>
										<td>".$maylain_proMonthlyIncome."</td>
									</tr>
									<tr>
										<td> <strong>Type of Property 	:</strong></td>
										<td>".$maylain_proTypeofProperty."</td>
										<td><strong>Situated of Property :</strong></td>
										<td style='text-align:left'>".$maylain_proSituatedofProperty."</td>
										<td><strong>Value of Property	:</strong></td>
										<td>".$maylain_proValueofProperty."</td>
									</tr>
								</table>
								<div style='width:100%; height: 40px; background:#d1d1d1; color:#000; font-size:24px; text-align: center;'><p style='padding-top:5px; margin-top:0px'> Applicant Family Details Information</p></div>	
								<table style=' font-family:helvetica; width:100%; border:1px solid #d1d1d1; border-collapse:collapse'>
									<tr>
										<td> <strong>Marital Status 	:</strong></td>
										<td>".$maylain_marital_status."</td>
										<td><strong>Spouse Title 	:</strong></td>
										<td style='text-align:left'>".$maylain_fSpouseTitle."</td>
										<td><strong>First Name 	 	:</strong></td>
										<td>".$maylain_fSpouseFirstName."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Middle Name	:</strong></td>
										<td>".$maylain_fSpouseMiddleName."</td>
										<td> <strong>Last Name 	:</strong></td>
										<td>".$maylain_fSpouseLastName."</td>
										<td> <strong>Physical Address 	 	:</strong></td>
										<td>".$maylain_fSpousePhysicalAddress."</td>
									</tr>
									<tr>
										<td> <strong>Postal Code 	:</strong></td>
										<td>".$maylain_fSpousePostalCode."</td>
										<td><strong>Phone (Home):</strong></td>
										<td style='text-align:left'>".$maylain_fSpousePhoneHome."</td>
										<td><strong>Phone (Work)	:</strong></td>
										<td>".$maylain_fSpousePhoneWork."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Cell Number	:</strong></td>
										<td>".$maylain_fSpouseCellNumber."</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td colspan='6' style='color: #ff0000;font-size:20px; text-align:center;'>Next to Kin Details Information <br/><span style='font-size:12px; color:#000;'> (Not residing at the applicant's address)</span></td>
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Title	:</strong></td>
										<td>".$maylain_fKinTitle."</td>
										<td> <strong>First Name 	:</strong></td>
										<td>".$maylain_fKinFirstName."</td>
										<td> <strong>Middle Name 	 	:</strong></td>
										<td>".$maylain_fKinMiddleName."</td>
									</tr>
									<tr>
										<td> <strong>Last Name 	 	:</strong></td>
										<td>".$maylain_fKinLastName."</td>
										<td><strong>Relationship 	 	:</strong></td>
										<td style='text-align:left'>".$maylain_fKinRelationship."</td>
										<td><strong>Physical Address	:</strong></td>
										<td>".$maylain_fKinPhysicalAddress."</td>
									</tr>
									<tr style='background:#e6e6e6;'>
										<td> <strong>Postal Code 	:</strong></td>
										<td>".$maylain_fKinPostalCode."</td>
										<td><strong>Phone (Home) 	 	:</strong></td>
										<td style='text-align:left'>".$maylain_fKinPhoneHome."</td>
										<td><strong>Phone (Work)	:</strong></td>
										<td>".$maylain_fKinPhoneWork."</td>
									</tr>
									<tr>
										<td> <strong>Cell Number	:</strong></td>
										<td>".$maylain_fSpouseCellNumber."</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									
								</table>
							</div>";

				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				
				// mail($to,$subject,$mailText,$headers);
				// echo $mailText;
				if(mail($to,$subject,$mailText,$headers)){
					echo "Successfully Submitted the Application. Thank you very much. We will reply shortly!!";
				}else
				{
					echo "Wrong";
				}
			//	} //while loops brace


		} //last else
		
	}
?>