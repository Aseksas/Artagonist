var maxTemp=35;
var minTemp=20;
var currentTemp=25;

$( document ).ready(function() {
  //$( ".setTemp" ).text( currentTemp);

  $('.mobile-nav').click(function(){
    $(this).toggleClass('visible');
    $(".burgerMenu").toggleClass('visible');
    $(".burgerMenuText").toggleClass('visible');
    $(".wrapper1").toggleClass('visible');
  })

  $('.leftButtonNr1' ).click(function(){

  if($(this).hasClass('active')){
      $(this).removeClass('active')
  } else {
      $(this).addClass('active')
  }
});

$('.leftButtonNr2' ).click(function(){

if($(this).hasClass('active')){
    $(this).removeClass('active')
} else {
    $(this).addClass('active')
}
});

$('.leftButtonNr3' ).click(function(){

if($(this).hasClass('active')){
    $(this).removeClass('active')
} else {
    $(this).addClass('active')
}
});

$('.leftButtonNr4' ).click(function(){

if($(this).hasClass('active')){
    $(this).removeClass('active')
    $('.leftButtonNr5').addClass('active')
} else {
    $(this).addClass('active')
    $('.leftButtonNr5').removeClass('active')
}
});

$('.leftButtonNr5' ).click(function(){

if($(this).hasClass('active')){
    $(this).removeClass('active')
    $('.leftButtonNr4').addClass('active')
} else {
    $(this).addClass('active')
    $('.leftButtonNr4').removeClass('active')

}
});

$('.rightButtonNr1' ).click(function(){

if($(this).hasClass('active')){
    $(this).removeClass('active')
} else {
    $(this).addClass('active')
}
});

$('.rightButtonNr2' ).click(function(){

if($(this).hasClass('active')){
    $(this).removeClass('active')
} else {
    $(this).addClass('active')
}
});

$('.rightButtonNr3' ).click(function(){

if($(this).hasClass('active')){
    $(this).removeClass('active')
} else {
    $(this).addClass('active')
}
});

$('.rightButtonNr4' ).click(function(){

if($(this).hasClass('active')){
    $(this).removeClass('active')
} else {
    $(this).addClass('active')
    $('.rightButtonNr5').removeClass('active')
}
});

$('.rightButtonNr5' ).click(function(){

if($(this).hasClass('active')){
    $(this).removeClass('active')
} else {
    $(this).addClass('active')
    $('.rightButtonNr4').removeClass('active')
}
});

$('.topMenuIconTextLeft' ).click(function(){
if($(this).hasClass('active')){
    $(this).removeClass('active')
    $('.topMenuIconTextRight').addClass('active')
    $('.lightButtons').removeClass('active')
    $('.tempButtons').addClass('active')

} else {
    $(this).addClass('active')
    $('.topMenuIconTextRight').removeClass('active')

    $('.lightButtons').addClass('active')
    $('.tempButtons').removeClass('active')
}
});

$('.topMenuIconTextRight' ).click(function(){

if($(this).hasClass('active')){
    $(this).removeClass('active')
    $('.topMenuIconTextLeft').addClass('active')

    $('.tempButtons').removeClass('active')
    $('.lightButtons').addClass('active')

} else {
    $(this).addClass('active')
    $('.topMenuIconTextLeft').removeClass('active')

    $('.tempButtons').addClass('active')
    $('.lightButtons').removeClass('active')
    //padaryt CSS, kad butu linkai balti
}
});

/*
$('.plusTemp' ).click(function(){

if(maxTemp!=currentTemp){
    //currentTemp++;
    $( ".setTemp" ).text( currentTemp);
    $(".tempWarning").text("");
    console.log(currentTemp);
} else {
  $(".tempWarning").text("Max Temp reached");
}
});

$('.minusTemp' ).click(function(){

if(minTemp!=currentTemp){
    //currentTemp--;
    $( ".setTemp" ).text( currentTemp);
    $(".tempWarning").text("");
} else {
  $(".tempWarning").text("Min Temp reached");
}
});

*/
  });
