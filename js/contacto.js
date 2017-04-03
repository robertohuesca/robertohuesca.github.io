(function(){
    $("#contact-btn").click(function() {
            
			var nombre = document.contacto.nombre.value;
            email = document.contacto.email.value;
			departamento = document.contacto.departamento.value;
            mensaje = document.contacto.mensaje.value;
		var datos = 'nombre='+ nombre + '&email=' + email + '&departamento=' + departamento + '&mensaje=' + mensaje;
		if (nombre == "") {
            $(".nombre").focus();
            return false;
        }else if(email == ""){
            $(".email").focus();    
            return false;
        }else if(mensaje == ""){
            $(".mensaje").focus();
            return false;
        }else{
               
		$.ajax({
		    method: "POST",
		    url: "../php/contacto.php",
		    data: datos,
		    success: function() {
		      
		        $('.msg').text('Mensaje enviado!').addClass('').animate({ 'right' : '130px' }, 300);  
		    },
		    error: function() {
		       
		        $('.msg').text('Hubo un error!').addClass('').animate({ 'right' : '130px' }, 300);                 
		    }
		});
		return false; 
        }	
    });
})();

