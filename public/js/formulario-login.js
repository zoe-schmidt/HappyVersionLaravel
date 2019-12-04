window.onload=function(){

    var regxmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var testpass= /^\w{3,10}$/;

    var formulario=document.querySelector("#formulario-ingreso");

    var elementos=formulario.elements;


   formulario.onsubmit=function(event){
    event.preventDefault();

 
        for(var element of elementos){
    
           if(element.type=='hidden' || element.type=='submit'){
               continue;
           }
            if(element.name == 'email' && element.value.trim()==' '){
                event.preventDefault();
                alert("el campo esta vacio");
            }else if(element.name == 'email' && !regxmail.test(element.value)){
                console.log(regxmail.test(element.value));
                event.preventDefault();
                alert("no es mail tu vieja");
            }
            if(element.name == 'password' && element.value.trim()==' '){
                event.preventDefault();
                alert("el campo contraseña esta vacio");
            }else if (element.name == 'password' && !testpass.test(element.value)){
                event.preventDefault();
                alert("la contrasena debe tener al menos 3 caracteres");
            }
             
        }
    }
}

