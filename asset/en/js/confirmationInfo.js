$(document).ready(function(){
  
  $('#finalConfirm').click(function(){
    
    // Bank Information 
      var maylain_amountVal=$('#amountVal').val();
      var maylain_loanAmountInWords=$('#loanAmountInWords').val();
      var maylain_year=$('#year').val();
      var maylain_month=$('#month').val();
      var maylain_interest=$('#interest').val();
      
      var maylain_loanPurpose=$('#loanPurpose').val();
      var maylain_accountName=$('#accountName').val();
      var maylain_accountNo=$('#accountNo').val();
      var maylain_bankName=$('#bankName').val();
      
      //Personal Information

      var maylain_pTitle=$('#title1').val();
      var maylain_pFirstName=$('#firstName').val();
      var maylain_pMiddleName=$('#middleName').val();
      var maylain_pLastName=$('#lastName').val();
      var maylain_pGender=$('#gender').val();
      
      var maylain_pMotherName=$('#mothersName').val();
      var maylain_pFatherName=$('#fathersName').val();
      var maylain_pDateofBirth=$('#dob').val();
      var maylain_pNIC=$('#nic').val();
      var maylain_pNationality=$('#nationality').val();
      
      var maylain_pNationalityBy=$('#citizen').val();
      var maylain_pPermanentAddress=$('#permanentAddress').val();
      var maylain_pPermanentPostalCode=$('#postalCode1').val();
      var maylain_pDistrict=$('#district').val();
      var maylain_pProvince=$('#province').val();
      var maylain_pPresentAddress=$('#presentAddress').val();
      var maylain_pPresentPostalCode=$('#postalCode2').val();
      var maylain_pDistrict1=$('#district1').val();
      var maylain_pProvince1=$('#province1').val();
      
      var maylain_pWorkAddress=$('#workAddress').val();
      var maylain_pWorkPhoneNumber=$('#wpn').val();
      var maylain_pCellNumber=$('#cellno').val();
      var maylain_pEmailID=$('#emailid').val();
      var maylain_pViberID=$('#viberid').val();
      var maylain_pSkypeID=$('#skypeid').val();
      
      //professional Information

      var maylain_proEmployerName=$('#employerName').val();
      var maylain_proEmployerAddress=$('#employersAddress').val();
      var maylain_proPostalCode=$('#postalCode3').val();
      var maylain_proOccupation=$('#occupation').val();
      var maylain_proDepartment=$('#department').val();
      
      var maylain_proMonthlyIncome=$('#monthlyIncome').val();
      var maylain_proTypeofProperty=$('#propertyType').val();
      var maylain_proSituatedofProperty=$('#situatedProperty').val();
      var maylain_proValueofProperty=$('#valueOfProperty').val();
      
      //Family Information

      var maylain_marital_status=$('input[name=mstatus]:radio:checked').val();
      var maylain_fSpouseTitle=$('#title2').val();
      var maylain_fSpouseFirstName=$('#firstName2').val();
      var maylain_fSpouseMiddleName=$('#middleName2').val();
      var maylain_fSpouseLastName=$('#lastName2').val();
      
      var maylain_fSpousePhysicalAddress=$('#physicalAddress1').val();
      var maylain_fSpousePostalCode=$('#postalCode4').val();
      var maylain_fSpousePhoneHome=$('#phoneHome').val();
      var maylain_fSpousePhoneWork=$('#phoneWork').val();
      var maylain_fSpouseCellNumber=$('#cellNumber2').val();
      
      var maylain_fKinTitle=$('#title3').val();
      var maylain_fKinFirstName=$('#firstName3').val();
      var maylain_fKinMiddleName=$('#middleName3').val();
      var maylain_fKinLastName=$('#lastName3').val();
      var maylain_fKinRelationship=$('#relationship').val();
      
      var maylain_fKinPhysicalAddress=$('#physicalAddress2').val();
      var maylain_fKinPostalCode=$('#postalCode5').val();
      var maylain_fKinPhoneHome=$('#phoneHome2').val();
      var maylain_fKinPhoneWork=$('#phoneWork2').val();
      var maylain_fKinCellNumber=$('#cellNumber3 ').val();
      var maylain_capUserVal = $('#capUserVal').val();
      var maylain_captchaVal = $('#captchaVal').html();
      var maylain_finalConfirm=$('#finalConfirm').val();
      

      $.post('classes/confirmationInfoInsert.php',{
          amountVal:maylain_amountVal,
          loanAmountInWords:maylain_loanAmountInWords,
          year:maylain_year,
          month:maylain_month,
          interest:maylain_interest,
          
          loanPurpose:maylain_loanPurpose,
          accountName:maylain_accountName,
          accountNo:maylain_accountNo,
          bankName:maylain_bankName,
          maylain_pTitle:maylain_pTitle,
          
          maylain_pFirstName:maylain_pFirstName,
          maylain_pMiddleName:maylain_pMiddleName,
          maylain_pLastName:maylain_pLastName,
          maylain_pGender:maylain_pGender,
          maylain_pMotherName:maylain_pMotherName,
          
          maylain_pFatherName:maylain_pFatherName,
          maylain_pDateofBirth:maylain_pDateofBirth,
          maylain_pNIC:maylain_pNIC,
          maylain_pNationality:maylain_pNationality,
          maylain_pNationalityBy:maylain_pNationalityBy,
          
          maylain_pPermanentAddress:maylain_pPermanentAddress,
          
          maylain_pPermanentPostalCode:maylain_pPermanentPostalCode,
          maylain_pDistrict:maylain_pDistrict,
          maylain_pProvince:maylain_pProvince,
          maylain_pPresentAddress:maylain_pPresentAddress,
          maylain_pPresentPostalCode:maylain_pPresentPostalCode,
          maylain_pDistrict1:maylain_pDistrict1,
          maylain_pProvince1:maylain_pProvince1,
          maylain_pWorkAddress:maylain_pWorkAddress,
          
          maylain_pWorkPhoneNumber:maylain_pWorkPhoneNumber,
          maylain_pCellNumber:maylain_pCellNumber,
          maylain_pEmailID:maylain_pEmailID,
          maylain_pViberID:maylain_pViberID,
          maylain_pSkypeID:maylain_pSkypeID,
          maylain_proEmployerName:maylain_proEmployerName,
          maylain_proEmployerAddress:maylain_proEmployerAddress,
          
          maylain_proPostalCode:maylain_proPostalCode,
          maylain_proOccupation:maylain_proOccupation,
          maylain_proDepartment:maylain_proDepartment,
          maylain_proMonthlyIncome:maylain_proMonthlyIncome,
          maylain_proTypeofProperty:maylain_proTypeofProperty,
          
          maylain_proSituatedofProperty:maylain_proSituatedofProperty,
          maylain_proValueofProperty:maylain_proValueofProperty,
          maylain_marital_status:maylain_marital_status,
          maylain_fSpouseTitle:maylain_fSpouseTitle,
          maylain_fSpouseFirstName:maylain_fSpouseFirstName,
          
          maylain_fSpouseMiddleName:maylain_fSpouseMiddleName,
          maylain_fSpouseLastName:maylain_fSpouseLastName,
          maylain_fSpousePhysicalAddress:maylain_fSpousePhysicalAddress,
          maylain_fSpousePostalCode:maylain_fSpousePostalCode,
          maylain_fSpousePhoneHome:maylain_fSpousePhoneHome,
          
          maylain_fSpousePhoneWork:maylain_fSpousePhoneWork,
          maylain_fSpouseCellNumber:maylain_fSpouseCellNumber,
          maylain_fKinTitle:maylain_fKinTitle,
          maylain_fKinFirstName:maylain_fKinFirstName,
          maylain_fKinMiddleName:maylain_fKinMiddleName,
          
          maylain_fKinLastName:maylain_fKinLastName,
          maylain_fKinRelationship:maylain_fKinRelationship,
          maylain_fKinPhysicalAddress:maylain_fKinPhysicalAddress,
          maylain_fKinPostalCode:maylain_fKinPostalCode,
          maylain_fKinPhoneHome:maylain_fKinPhoneHome,
          
          maylain_fKinPhoneWork:maylain_fKinPhoneWork,
          maylain_fKinCellNumber:maylain_fKinCellNumber,
          maylain_capUserVal:maylain_capUserVal, //captcha val
	        maylain_captchaVal:maylain_captchaVal,        
          maylain_finalConfirm:maylain_finalConfirm
      },
      function(result){
        // alert(maylain_finalConfirm);
        alert(result);
               if(maylain_loanPurpose==""){
        $("#loanPurpose").focus();
      }else if(maylain_accountName==""){
        $("#accountName").focus();
      }else if(maylain_accountNo==""){  
         $("#accountNo").focus();
      }else if (maylain_bankName=="") {
        $("#bankName").focus();
      }else if (maylain_pFirstName=="") {
        $("#firstName").focus();
      }else if (maylain_pMiddleName==""){
        $("#middleName").focus();
      }else if (maylain_pLastName==""){
        $("#lastName").focus();
      }else if (maylain_pMotherName==""){
        $("#mothersName").focus();
      }else if (maylain_pNIC==""){
        $("#nic").focus();
      }else if (maylain_pPermanentAddress==""){
        $("#permanentAddress").focus();
      }else if (maylain_pPermanentPostalCode==""){
        $("#postalCode1").focus();
      }else if (maylain_pDistrict==""){
        $("#district").focus();
      }else if (maylain_pProvince==""){
        $("#province").focus();
      }else if (maylain_pPresentAddress==""){
        $("#presentAddress").focus();
      }else if(maylain_pPresentPostalCode==""){
        $("#postalCode2").focus();
      }else if (maylain_pDistrict1==""){
        $("#district1").focus();
      }else if (maylain_pProvince1==""){
        $("#province1").focus();
      }else if (maylain_pWorkAddress==""){
        $("#workAddress").focus();
      }else if (maylain_pWorkPhoneNumber==""){
        $("#wpn").focus();
      }else if (maylain_pCellNumber==""){
        $("#cellno").focus();
      }else if (maylain_pEmailID==""){
        $("#emailid").focus();
      }else if (maylain_proEmployerName==""){
        $("#employerName").focus();
      }else if (maylain_proEmployerAddress==""){
        $("#employersAddress").focus();
      }else if (maylain_proPostalCode==""){
        $("#postalCode3").focus();
      }else if (maylain_proDepartment==""){
        $("#department").focus();
      }else if (maylain_proMonthlyIncome=="") {
        $("#monthlyIncome").focus();
      }else if (maylain_proTypeofProperty==""){
        $("#propertyType").focus();
      }else if (maylain_proSituatedofProperty==""){
        $("#situatedProperty").focus();
      }else if (maylain_proValueofProperty==""){
        $("#valueOfProperty").focus();
      }else if (maylain_fKinFirstName==""){
        $("#firstName3").focus();
      }else if (maylain_fKinMiddleName==""){
        $("#middleName3").focus();
      }else if (maylain_fKinLastName==""){
        $("#lastName3").focus();
      }else if (maylain_fKinRelationship==""){
        $("#relationship").focus();
      }else if (maylain_fKinPhysicalAddress==""){
        $("#physicalAddress2").focus();
      }else if (maylain_fKinPostalCode==""){
        $("#postalCode5").focus();
      }else if (maylain_fKinPhoneHome==""){
        $("#phoneHome2").focus();
      }else if (maylain_fKinPhoneWork==""){
        $("#phoneWork2").focus();
      }else if (maylain_fKinCellNumber==""){
        $("#cellNumber3").focus();
      }else if (maylain_capUserVal==""){
        $("#capUserVal").focus();
      }else{
        if (result=="Successfully Submitted the Application. Thank you very much. We will reply shortly!!") {
        // alert("Successfully Submitted the Application.")
        window.location = "http://maylainvest.com/mayla/en/bankInfoForm.php";
        }else{
          return false;
        };
        };
      });
  });
});