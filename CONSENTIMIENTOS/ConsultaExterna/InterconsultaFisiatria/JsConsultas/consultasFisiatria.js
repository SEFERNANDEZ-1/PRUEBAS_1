$(document).ready(function() {
    $('#especialidad').change(function() {
      var especialidad = $(this).val();
  
      if (especialidad != '') {
        $.ajax({
          url: 'consulta.php',
          type: 'post',
          data: {especialidad: especialidad},
          dataType: 'json',
          success:function(response) {
            var len = response.length;
            $('#especialista').empty();
            $('#especialista').append("<option value=''>Seleccione un especialista</option>");
            for (var i = 0; i < len; i++) {
              var firma = response[i]['firma'];
              var nombre = response[i]['nombre'];
              $('#especialista').append("<option value='"+firma+"'>"+nombre+"</option>");
            }
          }
        });
      } else {
        $('#especialista').empty();
        $('#especialista').append("<option value=''>Seleccione un especialista</option>");
      }
    });
  });
