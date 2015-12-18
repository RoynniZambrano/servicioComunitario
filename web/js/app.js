 $(document).ready(function(){
 
  logginUsuario(); 
  mainboogey();
  toggleLogin();

}); 

function mainboogey() {

  // spy and scroll menu boogey
  $("#navbar ul li a[href^='#']").on('click', function(e) {
     // prevent default anchor click behavior
     e.preventDefault()

     // store hash
     var hash = this.hash

     // animate
     $('html, body').animate({
         scrollTop: $(this.hash).offset().top
       }, 1000, function(){
         window.location.hash = hash
       })

  });

}

function logginUsuario(){

  $("#loggin-div").on('click' , '#loggin-usuario-boton', function(event) {
    event.preventDefault();
    form = $("#loggin-form");
    
    var inform = function(result){

      if(result == '.')
          window.location.href = Routing.generate('tesis_admin_homepage');

          form.remove();
          $("#loggin-div").prepend(result);
      
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

function toggleLogin(){
  
  $("#toggle-login").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    $("#toggle-div").slideToggle();
});
}
