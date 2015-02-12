
function formValidator(){
   // Make quick references to our fields
   var amountVal = document.getElementById('amountVal');
   var year = document.getElementById('year');
   var month = document.getElementById('month');
   var interest = document.getElementById('interest');
   var loanPurpose = document.getElementById('loanPurpose');
   //var accountName = document.getElementById('accountName');
  // var accountNo = document.getElementById('accountNo');
   //var bankName = document.getElementById('bankName');
   
   
   // Check each input in the order that it appears in the form!
   if(madeSelection(amountVal, "Please select your loan amount")){
      if(madeSelection( year, "Please select year")){
         if(isNumeric(month, "Please click on calculate")){
         
            if(isNumeric(interest, "Please click on calculate")){
               
               if(notEmpty(loanPurpose, "Please enter your loan useing purpose")){
                   if(space(loanPurpose, "Enter minimum 3 characters")){
                  // if(notEmpty(accountName, "Please enter your account name")){
                  //     if(space(accountName, "Enter minimum 3 characters")){
                  //    if(notEmpty(accountNo, "Please enter your account no")){
                  //        if(space(accountNo, "Enter minimum 3 characters")){
                       
                  //       if(notEmpty(bankName, "Please enter your Bank name")){
                  //           if(space(bankName, "Enter minimum 3 characters")){
                     return true;
                  }
               }
             }
          }
       }
   }

    
  
   
   return false;
   
    }

    function notEmpty(elem, helperMsg){
   if(elem.value.length == 0){
      alert(helperMsg);
      elem.focus(); // set the focus to this input
      return false;
   }
   return true;
    }

    function isNumeric(elem, helperMsg){
   var numericExpression = /^[+0-9.]+$/;
   if(elem.value.match(numericExpression)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
    }

    function isAlphabet(elem, helperMsg){
   var alphaExp =/^[a-zA-Z ]*$/;
   if(elem.value.match(alphaExp)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
    }

function isAlphanumeric(elem, helperMsg){
   var alphaExp = /^[0-9a-zA-Z]+$/;
   if(elem.value.match(alphaExp)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
}

function lengthRestriction(elem, min, max){
   var uInput = elem.value;
   if(uInput.length >= min && uInput.length <= max){
      return true;
   }else{
      alert("Please enter between " +min+ " and " +max+ " characters");
      elem.focus();
      return false;
   }
}

function madeSelection(elem, helperMsg){
   if(elem.value == ""){
      alert(helperMsg);
      elem.focus();
      return false;
   }else{
      return true;
   }
}

function emailValidator(elem, helperMsg){
   var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
   if(elem.value.match(emailExp)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
}
function space(elem, helperMsg){

    
    var pattern =/^[_'-.0-9A-Za-z!,@#$%][_'-.0-9A-Za-z!,@#$% ]+[_'-.0-9A-Za-z!,@#$%\s]$/;
        if(elem.value.match(pattern)){
      return true;
   }else{
      alert(helperMsg);
      elem.focus();
      return false;
   }
}


