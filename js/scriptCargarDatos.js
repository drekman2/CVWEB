$(function(){
    $.post('../consultas/consultas.php',"dni='71305965P'",
    function(datos){
        cargaDatosPersonales(datos);
    }).error(function(){
        console.log("error datos personales");
    });  
    $.post('../consultas/consultas.php',"dni='71305965P'&operacion=consultaExperiencia",
    function(datos){
        jQuery.each( datos, function( i, val) {
            console.log(i+" "+val);
        });
    }).error(function(){
        console.log("error experiencias");
    });
});

function cargaDatosPersonales(datos){
    var resultado=JSON.parse(datos);
    $("#contactDetails").empty();
    $("#foto").attr( "src",resultado[0].rutaFotoPerfil);
    $("#nombre").html(resultado[0].nombre+" "+resultado[0].apellidos);
    var contacto="<ul>";
    contacto+="<li>Móvil: "+resultado[0].movil+"</li>";
    contacto+="<li>E-mail: <a href='mailto:"+resultado[0].email+"'>"+resultado[0].email+"</a></li>";
    contacto+="<li>descargarselo en formato PDF desde <a href="+resultado[0].rutaCVpdf+">aqui</a><br>";
    contacto+="<a href="+resultado[0].rutaCVpdf+"><img src='../img/pdf.gif' alt='Curriculum Vitae en PDF' width='60' height='41' longdesc='Curriculum Vitae en PDF'></a></li>";
    contacto+="<li>Edad: "+resultado[0].edad+"</li></ul>";
    $("title").html("Miguel Ángel Díez Delgado - Curriculum Vitae");
    $("#contactDetails").html(contacto);
    $("#mensaje").html("Bienvenido al CV de "+resultado[0].nombre+" "+resultado[0].apellidos);    
}

function cargaExperiencias(datos){
    var resultado=JSON.parse(datos);
       
}

