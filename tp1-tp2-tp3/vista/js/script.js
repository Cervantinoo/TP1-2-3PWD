$(document).ready(function() {
    $('#miFormulario').submit(function(event) {
      //event.preventDefault(); // Evita el envío del formulario por defecto
  
      var usuario = $('#usuario').val();
      var contraseña = $('#contraseña').val();
  
      // Verifica si el usuario es una dirección de correo válida
     
      if (usuario === contraseña) {
        $('#mensajeError').text('El usuario y la contraseña tienen que ser distintos');
        event.preventDefault();
        
        return;
      }
  
      // Verifica si la contraseña cumple con los requisitos
      var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z\d]).{8,}$/;
      if (!passwordPattern.test(contraseña)) {
        $('#mensajePass').text('La contraseña debe tener al menos 8 caracteres, una mayúscula, un número y un símbolo.');
       
        event.preventDefault();
        return;
      }
  
      // Si ambas verificaciones pasan, puedes enviar el formulario al servidor
      
      $('#mensajeError').text('');
      /*
      alert('Formulario válido. Enviar al servidor.');
      */
    });
  });