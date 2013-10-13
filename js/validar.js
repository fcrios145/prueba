var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

$(document).ready(function() {
  $('#submit').click(function(){
    var nombre = $('#cajaNombre').val();
    var correo = $('#cajaMail').val();
    var mensaje = $('#cajaMsj').val();
    //var sel = $('#radioButton').val();
    var sel = $("#radioButton option:selected").text();

    if(nombre == "") {
      $('#mensaje1').fadeIn();
      return false;
    } else {
      $('#mensaje1').fadeOut();
      if(correo == "" || !filter.test(correo)) {
        $('#mensaje2').fadeIn();
        return false;
      } else {
        $('#mensaje2').fadeOut();
        if(mensaje == '') {
          $('#mensaje3').fadeIn();
          return false;
          } else {
            $('#mensaje3').fadeOut();
            if(sel.text() == "") {
              $('#mensaje4').fadeIn();
              return false;
            }

          }
          
        }

    }

  });
});