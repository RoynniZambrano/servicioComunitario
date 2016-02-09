 $(document).ready(function(){

  creacionUsuario();
  creacionEstudiante(); 
  creacionUsuarioAlfa() 
  editarUsuario(); 
  eliminarUsuario();
  eliminarEstudiante(); 
  editarClave();  
  editarEstudiante(); 
  editarstClave();
  creacionActividad();  
  editarActividad();
  editarFase();
  eliminarActividad(); 
  creacionFase();
  eliminarFase(); 
  creacionProyecto();
  editarProyecto();
  eliminarProyecto();
  asignarTutores();
  editarTutores();
  creacionPeriodo();
  editarPeriodo();
  eliminarPeriodo();
  creacionDiario();
  editarDiario();
  eliminarDiario();
  creacionInfoAdicional();
  editarInfoAdicional();
  eliminarInfoAdicional();
  editarInforme();
  creacionResultados();
  editarResultados();
  eliminarResultados();
  asignarTutoria();
  editarTutoria();
  asignarLaborsc();
  editarLaborsc();
  asignarCoord();
  editarCoord();



}); 


// notificacion - creacion de usuario
function creacionUsuario(){

  $("#nuevo-usuario-div").on('click' , '#nuevo-usuario-boton', function(event) {
    event.preventDefault();
    form = $("#nuevo-usuario-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
     
          form.remove();
          $("#nuevo-usuario-div").prepend(result);
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}

// notificacion - editar usuario
function editarUsuario(){

  $("#editar-usuario-div").on('click' , '#editar-usuario-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-usuario-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-usuario-div").prepend(result);   
      
    };


    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion - editar usuario
function eliminarUsuario(){

  $("#editar-usuario-div").on('click' , '#eliminar-usuario-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-usuario-form");

      bootbox.confirm("¿Esta seguro que desea eliminarlo?", function(res) {
    
         if (res){
            var inform = function(result){
              if (result == ','){
                bootbox.alert("Ha ocurrido un error  :'(  .No se puede eliminar debido a sus relaciones en la base de datos");
              }else{
                bootbox.alert("Eliminado con exito");
                setTimeout(function() {
                  window.location.href = Routing.generate('user_list');
                }, 1500);
              }

            };

            $.ajax({
              type: edit_form.attr('method'),
              async: true,
              url: Routing.generate('user_delete'),
              data: edit_form.serialize(),
              dataType: 'text',
              success: inform
              });

          };

      }); 
  
  });
}





// notificacion - editar usuario
function eliminarEstudiante(){

  $("#editar-estudiante-div").on('click' , '#eliminar-estudiante-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-estudiante-form");

      bootbox.confirm("¿Esta seguro que desea eliminarlo?", function(res) {
    
         if (res){
            var inform = function(result){
              if (result == ','){
                bootbox.alert("Ha ocurrido un error  :'( .No se puede eliminar debido a sus relaciones en la base de datos");
              }else{
                bootbox.alert("Eliminado con exito");
                setTimeout(function() {
                  window.location.href = Routing.generate('user_list');
                }, 1500);
              }

            };

            $.ajax({
              type: edit_form.attr('method'),
              async: true,
              url: Routing.generate('student_delete'),
              data: edit_form.serialize(),
              dataType: 'text',
              success: inform
              });

          };

      }); 
  
  });
}


// notificacion - editar usuario
function editarClave(){

  $("#editarpass-usuario-div").on('click' , '#editarpass-usuario-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editarpass-usuario-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
      
          edit_form.remove();
          $("#editarpass-usuario-div").prepend(result);   
      
    };

    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion - creacion de usuario
function creacionEstudiante(){

  $("#nuevo-estudiante-div").on('click' , '#nuevo-estudiante-boton', function(event) {
    event.preventDefault();
    form = $("#nuevo-estudiante-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');

          form.remove();
          $("#nuevo-estudiante-div").prepend(result);
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}




// notificacion - editar usuario
function editarEstudiante(){

  $("#editar-estudiante-div").on('click' , '#editar-estudiante-boton', function(event) {
    event.preventDefault();
    form = $("#editar-estudiante-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
      
          form.remove();
          $("#editar-estudiante-div").prepend(result);   
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion - editar usuario
function editarstClave(){

  $("#editarpass-estudiante-div").on('click' , '#editarpass-estudiante-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editarpass-estudiante-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
      
          edit_form.remove();
          $("#editarpass-estudiante-div").prepend(result);   
      
    };

    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion - creacion de actividad
function creacionActividad(){

  $("#nuevo-actividad-div").on('click' , '#nuevo-actividad-boton', function(event) {
    event.preventDefault();
    form = $("#nuevo-actividad-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('activities_list');
     
          form.remove();
          $("#nuevo-actividad-div").prepend(result);
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion - editar actividad
function editarActividad(){

  $("#editar-actividad-div").on('click' , '#editar-actividad-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-actividad-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-actividad-div").prepend(result);   
      
    };


    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


function eliminarActividad(){

  $("#editar-actividad-div").on('click' , '#eliminar-actividad-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-actividad-form");

      bootbox.confirm("¿Esta seguro que desea eliminarlo?", function(res) {
    
         if (res){
            var inform = function(result){
              if (result == ','){
                bootbox.alert("Ha ocurrido un error  :'(  .No se puede eliminar debido a sus relaciones en la base de datos");
              }else{
                bootbox.alert("Eliminado con exito");
                setTimeout(function() {
                  window.location.href = Routing.generate('activities_list');
                }, 1500);
              }

            };

            $.ajax({
              type: edit_form.attr('method'),
              async: true,
              url: Routing.generate('activities_delete'),
              data: edit_form.serialize(),
              dataType: 'text',
              success: inform
              });

          };

      }); 
  
  });
}


// notificacion - creacion de fase
function creacionFase(){

  $("#nuevo-fase-div").on('click' , '#nuevo-fase-boton', function(event) {
    event.preventDefault();
    form = $("#nuevo-fase-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('fase_list');
     
          form.remove();
          $("#nuevo-fase-div").prepend(result);
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion - editar fase
function editarFase(){

  $("#editar-fase-div").on('click' , '#editar-fase-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-fase-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-fase-div").prepend(result);   
      
    };


    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


function eliminarFase(){

  $("#editar-fase-div").on('click' , '#eliminar-fase-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-fase-form");

      bootbox.confirm("¿Esta seguro que desea eliminarlo?", function(res) {
    
         if (res){
            var inform = function(result){
              if (result == ','){
                bootbox.alert("Ha ocurrido un error  :'(  .No se puede eliminar debido a sus relaciones en la base de datos");
              }else{
                bootbox.alert("Eliminado con exito");
                setTimeout(function() {
                  window.location.href = Routing.generate('fase_list');
                }, 1500);
              }

            };

            $.ajax({
              type: edit_form.attr('method'),
              async: true,
              url: Routing.generate('fase_delete'),
              data: edit_form.serialize(),
              dataType: 'text',
              success: inform
              });

          };

      }); 
  
  });
}


// notificacion - creacion de proyecto
function creacionProyecto(){

  $("#nuevo-proyecto-div").on('click' , '#nuevo-proyecto-boton', function(event) {
    event.preventDefault();
    form = $("#nuevo-proyecto-form");
    
    var inform = function(result){

      if(result == '.')

          window.location.href = Routing.generate('project_list');
     

          form.remove();
          $("#nuevo-proyecto-div").prepend(result);
          $( "#datepicker1" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });

          $( "#datepicker2" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });

          $( "#datepicker3" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });          
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion - editar proyecto
function editarProyecto(){

  $("#editar-proyecto-div").on('click' , '#editar-proyecto-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-proyecto-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-proyecto-div").prepend(result); 
          $( "#datepicker1" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });

          $( "#datepicker2" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });

          $( "#datepicker3" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });
      
    };


    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


function eliminarProyecto(){

  $("#editar-proyecto-div").on('click' , '#eliminar-proyecto-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-proyecto-form");

      bootbox.confirm("¿Esta seguro que desea eliminarlo?", function(res) {
    
         if (res){
            var inform = function(result){
              if (result == ','){
                bootbox.alert("Ha ocurrido un error  :'(  .No se puede eliminar debido a sus relaciones en la base de datos");
              }else{
                bootbox.alert("Eliminado con exito");
                setTimeout(function() {
                  window.location.href = Routing.generate('project_list');
                }, 1500);
              }

            };

            $.ajax({
              type: edit_form.attr('method'),
              async: true,
              url: Routing.generate('project_delete'),
              data: edit_form.serialize(),
              dataType: 'text',
              success: inform
              });

          };

      }); 
  
  });
}


// notificacion - asignaciones de tutores
function asignarTutores(){

  $("#add-tutores-div").on('click' , '#add-tutores-boton', function(event) {
    event.preventDefault();
    form = $("#add-tutores-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tutors_list');
     
          form.remove();
          $("#add-tutores-div").prepend(result);
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion - editar tutores
function editarTutores(){

  $("#editar-tutores-div").on('click' , '#editar-tutores-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-tutores-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-tutores-div").prepend(result);   
      
    };


    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion - creacion de Periodo
function creacionPeriodo(){

  $("#nuevo-periodo-div").on('click' , '#nuevo-periodo-boton', function(event) {
    event.preventDefault();
    form = $("#nuevo-periodo-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('periodo_list');
     
          form.remove();
          $("#nuevo-periodo-div").prepend(result);
          $( "#datepicker1" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });

          $( "#datepicker2" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });          
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion - editar Periodo
function editarPeriodo(){

  $("#editar-periodo-div").on('click' , '#editar-periodo-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-periodo-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-periodo-div").prepend(result); 
          $( "#datepicker1" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });

          $( "#datepicker2" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });
    };

    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


function eliminarPeriodo(){

  $("#editar-periodo-div").on('click' , '#eliminar-periodo-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-periodo-form");

      bootbox.confirm("¿Esta seguro que desea eliminarlo?", function(res) {
    
         if (res){
            var inform = function(result){
              if (result == ','){
                bootbox.alert("Ha ocurrido un error  :'(  .No se puede eliminar debido a sus relaciones en la base de datos");
              }else{
                bootbox.alert("Eliminado con exito");
                setTimeout(function() {
                  window.location.href = Routing.generate('periodo_list');
                }, 1500);
              }

            };

            $.ajax({
              type: edit_form.attr('method'),
              async: true,
              url: Routing.generate('periodo_delete'),
              data: edit_form.serialize(),
              dataType: 'text',
              success: inform
              });

          };

      }); 
  
  });
}


// notificacion - creacion de diario
function creacionDiario(){

  $("#nuevo-diario-div").on('click' , '#nuevo-diario-boton', function(event) {
    event.preventDefault();
    form = $("#nuevo-diario-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('diario_list');
     
          form.remove();
          $("#nuevo-diario-div").prepend(result);
          $( "#datepicker1" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          }); 

          $('#timepicker1').clockpicker({
              autoclose: true,
              twelvehour: true
          });

          $('#timepicker2').clockpicker({
              autoclose: true,
              twelvehour: true
          });           
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}



// notificacion - editar diario
function editarDiario(){

  $("#editar-diario-div").on('click' , '#editar-diario-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-diario-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-diario-div").prepend(result); 
          $( "#datepicker1" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });

          $('#timepicker1').clockpicker({
              autoclose: true,
              twelvehour: true
          });

          $('#timepicker2').clockpicker({
              autoclose: true,
              twelvehour: true
          });

    };

    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}



function eliminarDiario(){

  $("#editar-diario-div").on('click' , '#eliminar-diario-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-diario-form");

      bootbox.confirm("¿Esta seguro que desea eliminarlo?", function(res) {
    
         if (res){
            var inform = function(result){
              if (result == ','){
                bootbox.alert("Ha ocurrido un error  :'(  .No se puede eliminar debido a sus relaciones en la base de datos");
              }else{
                bootbox.alert("Eliminado con exito");
                setTimeout(function() {
                  window.location.href = Routing.generate('diario_list');
                }, 1500);
              }

            };

            $.ajax({
              type: edit_form.attr('method'),
              async: true,
              url: Routing.generate('diario_delete'),
              data: edit_form.serialize(),
              dataType: 'text',
              success: inform
              });

          };

      }); 
  
  });
}


// notificacion - creacion de infoAdicional
function creacionInfoAdicional(){

  $("#nuevo-infoAdicional-div").on('click' , '#nuevo-infoAdicional-boton', function(event) {
    event.preventDefault();
    form = $("#nuevo-infoAdicional-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('infoAdicional_list');
     
          form.remove();
          $("#nuevo-infoAdicional-div").prepend(result);
          $( "#datepicker3" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });   
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}

// notificacion - editar 
function editarInfoAdicional(){

  $("#editar-infoAdicional-div").on('click' , '#editar-infoAdicional-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-infoAdicional-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-infoAdicional-div").prepend(result);
          $( "#datepicker3" ).datepicker({
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
            dateFormat: "dd-mm-yy",
            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
          });              
      
    };


    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


function eliminarInfoAdicional(){

  $("#editar-infoAdicional-div").on('click' , '#eliminar-infoAdicional-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-infoAdicional-form");

      bootbox.confirm("¿Esta seguro que desea eliminarlo?", function(res) {
    
         if (res){
            var inform = function(result){
              if (result == ','){
                bootbox.alert("Ha ocurrido un error  :'(  .No se puede eliminar debido a sus relaciones en la base de datos");
              }else{
                bootbox.alert("Eliminado con exito");
                setTimeout(function() {
                  window.location.href = Routing.generate('infoAdicional_list');
                }, 1500);
              }

            };

            $.ajax({
              type: edit_form.attr('method'),
              async: true,
              url: Routing.generate('infoAdicional_delete'),
              data: edit_form.serialize(),
              dataType: 'text',
              success: inform
              });

          };

      }); 
  
  });
}


// notificacion - editar 
function editarInforme(){

  $("#editar-informe-div").on('click' , '#editar-informe-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-informe-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-informe-div").prepend(result);   
      
    };


    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}



// notificacion - creacion de resultados
function creacionResultados(){

  $("#nuevo-resultados-div").on('click' , '#nuevo-resultados-boton', function(event) {
    event.preventDefault();
    form = $("#nuevo-resultados-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('adicionales_list');
          form.remove();
          $("#nuevo-resultados-div").prepend(result);
                 
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}

// notificacion - editar resultados
function editarResultados(){

  $("#editar-resultados-div").on('click' , '#editar-resultados-boton', function(event) {
    event.preventDefault();
    form = $("#editar-resultados-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('adicionales_list');
          form.remove();
          $("#editar-resultados-div").prepend(result);
                 
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}



function eliminarResultados(){

  $("#editar-resultados-div").on('click' , '#eliminar-resultados-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-resultados-form");

      bootbox.confirm("¿Esta seguro que desea eliminarlo?", function(res) {
    
         if (res){
            var inform = function(result){
              if (result == ','){
                bootbox.alert("Ha ocurrido un error  :'(  .No se puede eliminar debido a sus relaciones en la base de datos");
              }else{
                bootbox.alert("Eliminado con exito");
                setTimeout(function() {
                  window.location.href = Routing.generate('adicionales_list');
                }, 1500);
              }

            };

            $.ajax({
              type: edit_form.attr('method'),
              async: true,
              url: Routing.generate('adicionales_delete'),
              data: edit_form.serialize(),
              dataType: 'text',
              success: inform
              });

          };

      }); 
  
  });
}


// notificacion - creacion de usuario
function creacionUsuarioAlfa(){

  $("#nuevo-estudiante-alfa-div").on('click' , '#nuevo-estudiante-alfa-boton', function(event) {
    event.preventDefault();
    form = $("#nuevo-estudiante-alfa-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');

          form.remove();
          $("#nuevo-estudiante-alfa-div").prepend(result);
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


function asignarTutoria(){

  $("#add-tutoria-div").on('click' , '#add-tutoria-boton', function(event) {
    event.preventDefault();
    form = $("#add-tutoria-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tutor_list');
     
          form.remove();
          $("#add-tutoria-div").prepend(result);
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion 
function editarTutoria(){

  $("#editar-tutoria-div").on('click' , '#editar-tutoria-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-tutoria-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-tutoria-div").prepend(result);   
      
    };


    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


function asignarLaborsc(){

  $("#add-laborsc-div").on('click' , '#add-laborsc-boton', function(event) {
    event.preventDefault();
    form = $("#add-laborsc-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('laborsc_list');
     
          form.remove();
          $("#add-laborsc-div").prepend(result);
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion 
function editarLaborsc(){

  $("#editar-laborsc-div").on('click' , '#editar-laborsc-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-laborsc-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-laborsc-div").prepend(result);   
      
    };


    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}



function asignarCoord(){

  $("#add-coordinadores-div").on('click' , '#add-coordinadores-boton', function(event) {
    event.preventDefault();
    form = $("#add-coordinadores-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('coord_list');
     
          form.remove();
          $("#add-coordinadores-div").prepend(result);
      
    };

    $.ajax({
      type: form.attr('method'),
      async: true,
      url: form.attr('action'),
      data: form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}


// notificacion 
function editarCoord(){

  $("#editar-coordinadores-div").on('click' , '#editar-coordinadores-boton', function(event) {
    event.preventDefault();
    edit_form = $("#editar-coordinadores-form");

    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');
  
          edit_form.remove();
          $("#editar-coordinadores-div").prepend(result);   
      
    };


    $.ajax({
      type: edit_form.attr('method'),
      async: true,
      url: edit_form.attr('action'),
      data: edit_form.serialize(),
      dataType: 'text',
      success: inform
      });
  });
}