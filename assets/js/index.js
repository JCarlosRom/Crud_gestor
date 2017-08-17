$(document).ready(function(){
	
});

$(document).on('click', '.lnk-footer, .btn-leer-mas, .icon-socio, #lnk_promo, #lnk_afiliar', function(e){
	e.preventDefault();
})

var completarCampos = "Debe llenar todos los campos antes de continuar";
var success = "La accion se realizó con exito!";
var error = "Ocurrió un error inesperado, por favor intentelo mas tarde o pongase en contacto con el administrador del sitio";
var emailError = "El correo utilizado debe cumplir con el siguiente formato Ej: micorreo@gmail.com";

validaOnlyNumbers('phone');
validaCampoLength('phone','15');
validaCampoLength('mensaje','500');
validaCampoLength('name','50');

$(document).on('click','#btn_correo', function(e){
	e.preventDefault();

	var valor = $('#email').val();
	var nombre=  $('#name').val();
	var correo= $('#email').val();
	var telefono= $('#phone').val();
	var mensaje= $('#mensaje').val();

	var info={nombre:nombre, correo:correo, telefono:telefono, mensaje:mensaje};


	if (nombre != "" && correo != "" && telefono != "" && mensaje != "") {
		if (validarEmail(valor)) {
			$.ajax({
				url:'assets/routes/routeMain.php',
				type:'post',
				data: {action: 'enviar', info: info},
				dataType:'json',
				beforeSend: function(){
					showSpinner();
				},
				error: function(error){
					$('#mensaje_success').slideUp();
					$('#mensaje_error').slideDown();
					removeSpinner();
					console.log(error);
				},
				success: function(data){
					removeSpinner();

					$('#mensaje_success').slideDown();
					$('#mensaje_error').slideUp();
				}
		   	}); //fin ajax
		}
		else
			customAlert('Atención', emailError);		
	}
	else
		customAlert('Atención', completarCampos);
	


 });		
		