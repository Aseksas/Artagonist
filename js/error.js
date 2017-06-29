
  var url = window.location.href;
  var errorMessage;
  url = url.match(/\?error_message=(.+)$/); //ieško iki sakinio galo esan
  if(url === null){
    // nerado, ner klaidos
  }
  else{
      //console.log(url[0]);
       //url  reik pasiimt kaip inta(patrseInt)
       if (url[1]==1){
         $(".errfield").html("Neteisingas vardas/pavardė").delay( 1600 ).queue(function() {
                                    $(".errfield").empty();
                                    $(".errfield").dequeue();
                                });

        //  $('.Name').addClass('redLine').delay( 800 ).removeClass('redLine').addClass('greyLine');
        //  $('.Surname').addClass('redLine').delay( 800 ).removeClass('redLine').addClass('greyLine');
        //  $('.hint1').addClass('redText').delay( 800 ).removeClass('redText');
        //  $('.hint2').addClass('redText').delay( 800 ).removeClass('redText');


         $('.Name').addClass('redLine').delay( 1600 ).queue(function() {
                                    $('.Name').removeClass("redLine");
                                    $('.Name').dequeue();
                                });

         $('.hint1').addClass('redText').delay( 1600 ).queue(function() {
                                    $('.hint1').removeClass("redText");
                                    $('.hint1').dequeue();
                                });
        $('.hint2').addClass('redText').delay( 1600 ).queue(function() {
                                    $('.hint2').removeClass("redText");
                                    $('.hint2').dequeue();
                                });

        $('.Surname').addClass('redLine').delay( 1600 ).queue(function() {
                                    $('.Surname').removeClass("redLine");
                                    $('.Surname').dequeue();
                                });



       }
       else if (url[1]==2){
         $(".errfield").html("Rezervacija pasibaigus").delay( 1600 ).queue(function() {
                                    $(".errfield").empty();
                                    $(".errfield").dequeue();
                                });
       }

       else if (url[1]==3){
         $(".errfield").html("Kambarys neegzistuoja").delay( 1600 ).queue(function() {
                                    $(".errfield").empty();
                                    $(".errfield").dequeue();
                                });


       }

       else if (url[1]==4){
        //  $('.Name').addClass('redLine');
        //  $('.Surname').addClass('redLine');
        //  $('.ID').addClass('redLine');


         $(".errfield").html("Tokios rezervacijos nėra").delay( 1600 ).queue(function() {
                                    $(".errfield").empty();
                                    $(".errfield").dequeue();
                                });
        // $(".errfield").html("Tokios rezervacijos nėra").delay( 800 ).queue(function() {
        //                             $(".errfield").empty();
        //                             $(".errfield").dequeue();
        //                         });
        //
        //  $('.ID').addClass('redLine').delay( 800 ).queue(function() {
        //                             $('.ID').removeClass("redLine");
        //                             $('.ID').dequeue();
        //                         });
        //
        //
        //  $('.hint3').addClass('redText').delay( 800 ).queue(function() {
        //                             $('.hint3').removeClass("redText");
        //                             $('.hint3').dequeue();
        //                         });



       }

       else if (url[1]==5){
         $(".errfield").html("Nepavyko prisijungti prie MySQL").delay( 800 ).queue(function() {
                                    $(".errfield").empty();
                                    $(".errfield").dequeue();
                                });

       }

       else if (url[1]==6){
         $(".errfield").html("Neteisingas ID").delay( 800 ).queue(function() {
                                    $(".errfield").empty();
                                    $(".errfield").dequeue();
                                });

         $('.ID').addClass('redLine').delay( 800 ).queue(function() {
                                    $('.ID').removeClass("redLine");
                                    $('.ID').dequeue();
                                });


         $('.hint3').addClass('redText').delay( 800 ).queue(function() {
                                    $('.hint3').removeClass("redText");
                                    $('.hint3').dequeue();
                                });
       }

      // pridet klase
  }
