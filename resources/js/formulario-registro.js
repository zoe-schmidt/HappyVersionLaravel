window.onload=function(){
    var regxmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var testpass= /^\w{3,10}$/;
    var testnombre= /^\w{3,50}$/;
    var testapellido= /^\w{3,50}$/;

    var formulario=document.querySelector("#registro");

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
            if(element.name == 'password_confirmation' && element.value.trim()==' '){
                event.preventDefault();
                alert("el campo contraseña esta vacio");
            }
            /* FALTA VALIDAR QUE LO INGRESADO POR PASSWORD CONFIRMATION Y LO INGRESADO POR PASSWORD SEAN IGUALES*/
            /* else if(element.name == 'password_confirmation' && !testpass.test(element.value)){
                event.preventDefault();
                alert("la contrasena debe tener al menos 3 caracteres");
            } 
            */

            if(element.name == 'nombre' && element.value.trim()==' '){
                event.preventDefault();
                alert("el campo nombre esta vacio");            
            } else if (element.name == 'nombre' && !testnombre.test(element.value)){
                event.preventDefault();
                alert("el nombre debe tener al menos 3 letras");
            }
            if(element.name == 'apellido' && element.value.trim()==' '){
                event.preventDefault();
                alert("el campo nombre esta vacio");            
            } else if (element.name == 'apellido' && !testapellido.test(element.value)){
                event.preventDefault();
                alert("el apellido debe tener al menos 3 letras");
            }


            

    }
}


    }