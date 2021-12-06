function Validator(options){


function validate(inputElement,rule){

    var errorMessage =rule.test(inputElement.value);
    var errorElement=inputElement.parentElement.querySelector('.form-control');

    console.log('errorMessage');
    if(errorMessage){
    errorElement.innerText=errorMessage;
    }
    else
    errorElement.innerText='';

}


    var formElement=document.querySelector(options.form);
    if(formElement){
    options.rules.forEach(function (rule){
            var inputElement=formElement.querySelector(rule.selector);

          if(inputElement){
              inputElement.onblur=function(){
                  validate(inputElement,rule);


          }
    });

}
}
 Validator.isRequired=function(selector){
  return {
    selector:selector,
    test:function(value){
        return value.trim() ? undefind:'Vui long nhap'

    }
  };
 }
 Validator.isEmail=function(selector){
return {
    selector:selector,
    test:function(value){

    }
  };
 }
