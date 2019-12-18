window.onload=function(){

    var regxmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var testpass= /^\w{3,10}$/;

    var formulario=document.querySelector("#formulario-ingreso");

    var elementos=formulario.elements;


   formulario.onsubmit=function(event){

        for(var element of elementos){

           if(element.type=='hidden' || element.type=='submit'){
               continue;
           }
            if(element.name == 'email' && element.value.trim()==' '){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'Completa el campo';
            }else if(element.name == 'email' && !regxmail.test(element.value)){
                console.log(regxmail.test(element.value));
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'Email invalido';
            }else if(element.name == 'password' && element.value.trim()==' '){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'Completa el campo';
            }else if (element.name == 'password' && !testpass.test(element.value)){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'La contraseña debe tener al menos 3 caracteres';
            }

        }
    }
}
