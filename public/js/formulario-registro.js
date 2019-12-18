window.onload=function(){
    var regxmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var testpass= /^\w{3,10}$/;
    var testnombre= /^\w{3,50}$/;
    var testapellido= /^\w{3,50}$/;

    var formulario=document.querySelector("form.registro");




   formulario.onsubmit=function(event){
          var elementos=this.elements;

        for(var element of elementos){

           if(element.type=='hidden' || element.type=='submit'){
               continue;
           }
            if(element.name == 'email' && element.value.trim()==' '){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'Completa el campo';
            }else if(element.name == 'email' && !regxmail.test(element.value)){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'No es un email';
            }
            if(element.name == 'password' && element.value.trim()==' '){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'El campo contrasena esta vacio';
            }else if (element.name == 'password' && !testpass.test(element.value)){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'La contrasena debe tener al menos 3 caracteres';
            }
            if(element.name == 'password_confirmation' && element.value.trim()==' '){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'El campo confirmar contrasena esta vacio';
            }
             else if(element.name == 'password_confirmation' && !testpass.test(element.value)){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'Las contrasenas no coinciden';
            }


            if(element.name == 'nombre' && element.value.trim()==' '){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'El campo nombre esta vacio';
            } else if (element.name == 'nombre' && !testnombre.test(element.value)){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'El nombre debe tener al menos 3 letras';
            }
            if(element.name == 'apellido' && element.value.trim()==' '){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'El campo apellido esta vacio';
            } else if (element.name == 'apellido' && !testapellido.test(element.value)){
                event.preventDefault();
                var small = element.parentElement.querySelector('small.error');
                small.innerHTML = 'El apellido debe tener al menos 3 letras';
            }




    }
}


    }
