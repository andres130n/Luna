$(document).ready(function () {


    $('#myForm').submit(function(event) {
        // Previene que el formulario se envíe de forma convencional
        event.preventDefault();
        
        // Obtiene los valores de los campos del formulario
        var name = $('#name').val();
        var email = $('#email').val();
        
        // Envía los datos al servidor mediante una solicitud POST
        $.post('seguridad.jsp', {name: name, email: email}, function(response) {
          // Agrega la respuesta del servidor al elemento de texto
          $('#response').text(response);
        });
      });

//
//    $("button").click(function () {
//
//        //alert($('#us1').val());
//        
//        if ($('#us1').val() == ""){
//            
//            alert("No hay usuario escrito");
//            
//        }
//        
//         if ($('#cl1').val() == ""){
//            
//            alert("No hay clave escrito");
//            
//        }
//        
//
//    });
//
//
//    $("#boton").click(function () {
//        
//        
//        
//        
//        if ($('#us1').val() !== null){
//            
//            alert("Usuario Vacio");
//            
//        }
//        
//        if ($('#us1').val() !== ""){
//            
//            alert("Usuario Vacio");
//            
//        }
//        
////        if (usuario.empty()){
////            
////            alert("Usuario Vacio");
////            
////        }
//        
////        $.post("login.jsp", {us1: $('#us1').val(), cl1: $('#cl1').val()}, function (htmlexterno) {
////            
////            $("#cargando").html(htmlexterno);
////            
////        });
//
//
//    });


});