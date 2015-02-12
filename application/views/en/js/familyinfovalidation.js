function formValidator(){


   var title3 = document.getElementById('title3');
   var firstName3 = document.getElementById('firstName3');
   var middleName3 = document.getElementById('middleName3');
   var lastName3 = document.getElementById('lastName3');
   var relationship = document.getElementById('relationship');
   var physicalAddress2 = document.getElementById('physicalAddress2');
   var postalCode5 = document.getElementById('postalCode5');
   var phoneHome2 = document.getElementById('phoneHome2');
   var phoneWork2 = document.getElementById('phoneWork2');
   var cellNumber3 = document.getElementById('cellNumber3');


   
   
   // Check each input in the order that it appears in the form!


            if(madeSelection(title3, "Please select Kin title")){
            
              if(notEmpty(firstName3, "Please enter your kin first name")){
                if(isAlphabet(firstName3, "Alphabet only for name")){
              if(space(firstName3, "Enter minimum 3 characters")){
                if(notEmpty(middleName3, "Please enter kin middle name")){
                  if(isAlphabet(middleName3, "Alphabet only for name")){
                if(space(middleName3, "Enter minimum 3 characters")){
                  if(notEmpty(lastName3, "Please enter kin last name")){
                    if(isAlphabet(lastName3, "Alphabet only for name")){
                  if(space(lastName3, "Enter minimum 3 characters")){
                    if(notEmpty(relationship, "Please enter your relationship")){
                    if(space(relationship, "Enter minimum 3 characters")){
                      if(notEmpty(physicalAddress2, "Please enter your physical address")){
                      if(space(physicalAddress2, "Space not allow")){
                    
                    if(notEmpty(postalCode5, "Please enter your postal code")){
                    if(space(postalCode5, "Enter minimum 3 characters")){
                    if(isNumeric(postalCode5, "Numbers only for postal code")){
                    if(lengthRestriction(postalCode5, 4, 6)){
                    
                        // if(notEmpty(phoneHome2, "Please enter your home phone number")){
                        // if(space(phoneHome2, "Enter minimum 3 characters")){
                        // if(isNumeric(phoneHome2, "Numbers only for phone number")){
                        // if(lengthRestriction(phoneHome2, 5, 15)){
                        
                         
                        // 	  if(notEmpty(phoneWork2, "Please enter your work phone number")){
                        //     if(space(phoneWork2, "Enter minimum 3 characters")){
                        //     if(isNumeric(phoneWork2, "Numbers only for phone number")){
                        // 	  if(lengthRestriction(phoneWork2, 5, 15)){
                            
                        	      if(notEmpty(cellNumber3, "Please enter your cell number")){
                                if(space(cellNumber3, "Enter minimum 3 characters")){
                                if(isNumeric(cellNumber3, "Numbers only for cell number")){
                        	      if(lengthRestriction(cellNumber3, 5, 15)){
                                

                        	 	     
                        	 	 
                     return true;
                  }
               }
             }
          }
       }
   }

    }

    }
   
   }}}}}}}}}}}}}}
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
   var alphaExp = /^[a-zA-Z ]*$/;
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


