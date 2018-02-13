$(function(){
    $("#dni").focus();
    $("#formulario_registro").validate({
                rules:{
                    dni:{
                        required:true,
                        nifES:true
                    },				
                    password:{
                        required:true,
                        nowhitespace:true
                    },
                    password2:{
                        equalTo:"#password",
                        nowhitespace:true
                    }
                },
                messages:{
                    dni:{
                        required:"Dni es obligatorio",
                        nifES:"Introduce un dni válido"
                    },				
                    password:{
                        required:"Password es obligatorio",
                        nowhitespace:"No introduzcas espacios en blanco"
                    },
                    password2:{
                        equalTo:"No son iguales las contraseñas",
                        nowhitespace:"No introduzcas espacios en blanco"
                    }
                },
                highlight: function(element) {
                    $(element).css({ backgroundColor: 'Red' });
                },
                unhighlight: function(element) {
                    $(element).css({ backgroundColor: '#FF9' });
                }
        });
        $("#formulario_registro").submit(function() {
                $.post('../consultas/loginRegistro.php',$('#formulario_registro').serialize() + '&operacion='+"InsertarAccesoUsuarios",
                    function(datos){
                        console.log(datos);
                        alert('Insercion Correcta');
                }).error(function(){
                    console.log("error");
                });
	    return false;
	});
        
	   
	    
	    
});