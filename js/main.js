$( document ).ready(function() {

    // open hamburger
    console.log("gay");

    $('.inputName').val("Laurynas");
    $('.inputSurname').val("Jakstas");
    $('.inputID').val("2244");

    $('.mobile-nav').click(function(){
      $(this).toggleClass('visible');
      $(".burgerMenu").toggleClass('visible');
      $(".burgerMenuText").toggleClass('visible');
      $(".wrapper1").toggleClass('visible');
    })

    $('.inputName').focus(function() {
    $('.inputName').val("");
    });

    $('.inputSurname').focus(function() {
    $('.inputSurname').val("");
    });

    $('.inputID').focus(function() {
      $('.inputID').val("");
    });


    $('.loginButton' ).click(function(){

      name = $('.inputName').val();
      surname = $('.inputSurname').val();
      password = $('.inputID').val();

      window.location.href = "login.php?name=" + name;

    });


  });
