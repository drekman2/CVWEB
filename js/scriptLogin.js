$(function(){
    $("#dni").focus();
    $("#formulario_login").validate({
            rules:{
                dni:{
                    required:true,
                    nifES:true
                },				
                password:{
                    required:true,
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
                }
            },
            submitHandler: function() {
                //form.submit();
                console.log("Pulsado login");
                $.post('consultas/loginRegistro.php',$('#formulario_login').serialize(),
                    function(datos){
                        console.log(datos);
                        if (datos==='autorizado'){
                            window.open('cv/cv.php','_self');
                        }else{
                            //si no existe le mando otra vez a la portada
                            $('body').load('index.php');
                            alert('dni o contraseña incorrecta');
                        }
                }).error(function(){
                    console.log("error login");
                });
            },
            highlight: function(element) {
                    $(element).css({ backgroundColor: 'Red' });
            },
            unhighlight: function(element) {
                    $(element).css({ backgroundColor: '#FF9' });
            }
        });
 	
       
});