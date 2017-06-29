/**
 * Created by Laurynas on 2017.04.06.
 * Edited by Paulius on 2017.06.19.
 */


 //Tikrina ar rezervacija galiojanti, jei ne perkrauna puslapi
//$(window).load(function(){

// $(window).resize(function() {
//     var currentwidth = $(this).css('width'); //just one way to get the window width
//     var scaledwidth = parseInt(currentwidth) * 0.25; //calculate a new width
//     $('.wrapper').css('width', scaledwidth); //one way to set an element's width (iframe in this case)
//     console.log(currentwidth);
// });

   $(document).ready(function() {
var roomOption = document.getElementById("room").value;

var roomOption = 404;
console.log(roomOption);
 if ((roomOption==206)||(roomOption==207)||(roomOption==209)||(roomOption==211)
										||(roomOption==308)||(roomOption==309)||(roomOption==310)||(roomOption==403)
										||(roomOption==407)||(roomOption==408)||(roomOption==409)||(roomOption==410)){
                      $(".leftButtonNr0").hide();     $(".rightButtonNr0").hide();
                      $(".leftButtonNr1").show();     $(".rightButtonNr1").show();
                      $(".leftButtonNr2").show();     $(".rightButtonNr2").show();
                      $(".leftButtonNr3").show();     $(".rightButtonNr3").show();
                      $(".leftButtonNr4").show();     $(".rightButtonNr4").hide();
                      $(".leftButtonNr5").hide();     $(".rightButtonNr5").hide();
                      $(".leftButtonNr6").hide();     $(".rightButtonNr6").hide();
                      $(".leftButtonNr7").hide();     $(".rightButtonNr7").hide();
                      $(".leftButtonNr8").hide();     $(".rightButtonNr8").hide();
                      $(".leftButtonNr9").hide();     $(".rightButtonNr9").hide();
                      $(".leftButtonNr10").hide();

									}else if((roomOption==201)||(roomOption==203)||(roomOption==204)||(roomOption==205)
										||(roomOption==210)||(roomOption==301)||(roomOption==303)||(roomOption==304)
										||(roomOption==305)||(roomOption==307)||(roomOption==311)||(roomOption==401)){
                      $(".leftButtonNr0").hide();     $(".rightButtonNr0").hide();
                      $(".leftButtonNr1").show();     $(".rightButtonNr1").show();
                      $(".leftButtonNr2").show();     $(".rightButtonNr2").show();
                      $(".leftButtonNr3").show();     $(".rightButtonNr3").show();
                      $(".leftButtonNr4").show();     $(".rightButtonNr4").hide();
                      $(".leftButtonNr5").hide();     $(".rightButtonNr5").show();
                      $(".leftButtonNr6").hide();     $(".rightButtonNr6").hide();
                      $(".leftButtonNr7").hide();     $(".rightButtonNr7").hide();
                      $(".leftButtonNr8").hide();     $(".rightButtonNr8").hide();
                      $(".leftButtonNr9").hide();     $(".rightButtonNr9").hide();
                      $(".leftButtonNr10").hide();

                  }else if((roomOption==202)||(roomOption==212)||(roomOption==302)||(roomOption==402)){
                    $(".leftButtonNr0").hide();     $(".rightButtonNr0").hide();
                    $(".leftButtonNr1").show();     $(".rightButtonNr1").show();
                    $(".leftButtonNr2").show();     $(".rightButtonNr2").show();
                    $(".leftButtonNr3").show();     $(".rightButtonNr3").show();
                    $(".leftButtonNr4").hide();     $(".rightButtonNr4").hide();
                    $(".leftButtonNr5").hide();     $(".rightButtonNr5").hide();
                    $(".leftButtonNr6").hide();     $(".rightButtonNr6").hide();
                    $(".leftButtonNr7").hide();     $(".rightButtonNr7").hide();
                    $(".leftButtonNr8").hide();     $(".rightButtonNr8").hide();
                    $(".leftButtonNr9").hide();     $(".rightButtonNr9").hide();
                    $(".leftButtonNr10").hide();

                 }else if(roomOption==312){
                    $(".leftButtonNr0").hide();     $(".rightButtonNr0").hide();
                    $(".leftButtonNr1").show();     $(".rightButtonNr1").show();
                    $(".leftButtonNr2").show();     $(".rightButtonNr2").show();
                    $(".leftButtonNr3").show();     $(".rightButtonNr3").show();
                    $(".leftButtonNr4").hide();     $(".rightButtonNr4").show();
                    $(".leftButtonNr5").show();     $(".rightButtonNr5").hide();
                    $(".leftButtonNr6").show();     $(".rightButtonNr6").show();
                    $(".leftButtonNr7").hide();     $(".rightButtonNr7").hide();
                    $(".leftButtonNr8").hide();     $(".rightButtonNr8").hide();
                    $(".leftButtonNr9").hide();     $(".rightButtonNr9").hide();
                    $(".leftButtonNr10").hide();

                }else if(roomOption==406){
                    $(".leftButtonNr0").hide();     $(".rightButtonNr0").hide();
                    $(".leftButtonNr1").show();     $(".rightButtonNr1").show();
                    $(".leftButtonNr2").show();     $(".rightButtonNr2").show();
                    $(".leftButtonNr3").show();     $(".rightButtonNr3").show();
                    $(".leftButtonNr4").hide();     $(".rightButtonNr4").show();
                    $(".leftButtonNr5").hide();     $(".rightButtonNr5").hide();
                    $(".leftButtonNr6").hide();     $(".rightButtonNr6").hide();
                    $(".leftButtonNr7").hide();     $(".rightButtonNr7").hide();
                    $(".leftButtonNr8").hide();     $(".rightButtonNr8").hide();
                    $(".leftButtonNr9").hide();     $(".rightButtonNr9").hide();
                    $(".leftButtonNr10").hide();

									}else if(roomOption==404){
                    $(".leftButtonNr0").show();     $(".rightButtonNr0").show();
                    $(".leftButtonNr1").show();     $(".rightButtonNr1").show();
                    $(".leftButtonNr2").show();     $(".rightButtonNr2").show();
                    $(".leftButtonNr3").show();     $(".rightButtonNr3").show();
                    $(".leftButtonNr4").hide();     $(".rightButtonNr4").hide();
                    $(".leftButtonNr5").hide();     $(".rightButtonNr5").hide();
                    $(".leftButtonNr6").hide();     $(".rightButtonNr6").hide();
                    $(".leftButtonNr7").show();     $(".rightButtonNr7").show();
                    $(".leftButtonNr8").show();     $(".rightButtonNr8").show();
                    $(".leftButtonNr9").hide();     $(".rightButtonNr9").hide();
                    $(".leftButtonNr10").hide();

									}else if((roomOption==208)||(roomOption==405)||(roomOption==306)){
                    $(".leftButtonNr0").hide();     $(".rightButtonNr0").hide();
                    $(".leftButtonNr1").show();     $(".rightButtonNr1").show();
                    $(".leftButtonNr2").show();     $(".rightButtonNr2").show();
                    $(".leftButtonNr3").hide();     $(".rightButtonNr3").hide();
                    $(".leftButtonNr4").hide();     $(".rightButtonNr4").hide();
                    $(".leftButtonNr5").hide();     $(".rightButtonNr5").hide();
                    $(".leftButtonNr6").hide();     $(".rightButtonNr6").hide();
                    $(".leftButtonNr7").hide();     $(".rightButtonNr7").hide();
                    $(".leftButtonNr8").hide();     $(".rightButtonNr8").show();
                    $(".leftButtonNr9").show();     $(".rightButtonNr9").hide();
                    $(".leftButtonNr10").show();}
//});






// var holdWidth = $(window).width();
// var holdHeight = $(window).height();
// console.log(holdHeight/holdWidth);
// if ((holdHeight/holdWidth)<1.61){
//   $(".button").css({
//     fontSize: 4+"em"
// });
// }
// else if ((holdHeight/holdWidth)>1.61){
//   $(".button").css({
//     fontSize: 6.5+"vw"
// });
// }
//   console.log("yah");

// var holdAverageSize = (holdWidth + holdHeight) / 4;
// $(window).on('resize', function () {
//   newAverageSize = ($(window).width() + $(window).height()) / 4;
//   newPercentage = ((newAverageSize / holdAverageSize) * 100) + "%";
//   $("html").css("font-size", newPercentage)
//   console.log(newPercentage);
// });




   $('.inputName').val("Laurynas");
   $('.inputSurname').val("Jakstas");
   $('.inputID').val("2244");

   $('.mobile-nav').click(function(){
     $(this).toggleClass('visible');
     $(".burgerMenu").toggleClass('visible');
     $(".burgerMenuText").toggleClass('visible');
     $(".wrapper1").toggleClass('visible');
   });

   $('.leftButtonNr1' )
   .bind( "touchstart", function(){$('.leftButtonNr1').addClass('active'); $(".buttonImg1").attr('src','images/lightOn.png');})
   .bind( "touchend", function(){$('.leftButtonNr1').removeClass('active'); $(".buttonImg1").attr('src','images/lightOff.png');});

   $('.leftButtonNr2' )
   .bind( "touchstart", function(e){$('.leftButtonNr2').addClass('active'); $(".buttonImg2").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.leftButtonNr2').removeClass('active'); $(".buttonImg2").attr('src','images/lightOff.png');});

   $('.leftButtonNr3' )
   .bind( "touchstart", function(e){$('.leftButtonNr3').addClass('active'); $(".buttonImg3").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.leftButtonNr3').removeClass('active'); $(".buttonImg3").attr('src','images/lightOff.png');});

   $('.leftButtonNr4' )
   .bind( "touchstart", function(e){$('.leftButtonNr4').addClass('active'); $(".buttonImg4").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.leftButtonNr4').removeClass('active'); $(".buttonImg4").attr('src','images/lightOff.png');});

   $('.leftButtonNr5' )
   .bind( "touchstart", function(e){$('.leftButtonNr5').addClass('active'); $(".buttonImg5").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.leftButtonNr5').removeClass('active'); $(".buttonImg5").attr('src','images/lightOff.png');});

   $('.leftButtonNr6' )
   .bind( "touchstart", function(e){$('.leftButtonNr6').addClass('active'); $(".buttonImg6").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.leftButtonNr6').removeClass('active'); $(".buttonImg6").attr('src','images/lightOff.png');});

   $('.leftButtonNr7' )
   .bind( "touchstart", function(e){$('.leftButtonNr7').addClass('active'); $(".buttonImg7").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.leftButtonNr7').removeClass('active'); $(".buttonImg7").attr('src','images/lightOff.png');});

   $('.leftButtonNr8' )
   .bind( "touchstart", function(e){$('.leftButtonNr8').addClass('active'); $(".buttonImg8").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.leftButtonNr8').removeClass('active'); $(".buttonImg8").attr('src','images/lightOff.png');});

   $('.leftButtonNr9' )
   .bind( "touchstart", function(e){$('.leftButtonNr9').addClass('active'); $(".buttonImg9").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.leftButtonNr9').removeClass('active'); $(".buttonImg9").attr('src','images/lightOff.png');});



   $('.rightButtonNr1' )
   .bind( "touchstart", function(e){$('.rightButtonNr1').addClass('active'); $(".buttonImg11").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.rightButtonNr1').removeClass('active'); $(".buttonImg1").attr('src','images/lightOff.png');});

   $('.rightButtonNr2' )
   .bind( "touchstart", function(e){$('.rightButtonNr2').addClass('active'); $(".buttonImg22").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.rightButtonNr2').removeClass('active'); $(".buttonImg22").attr('src','images/lightOff.png');});

   $('.rightButtonNr3' )
   .bind( "touchstart", function(e){$('.rightButtonNr3').addClass('active'); $(".buttonImg33").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.rightButtonNr3').removeClass('active'); $(".buttonImg33").attr('src','images/lightOff.png');});

   $('.rightButtonNr4' )
   .bind( "touchstart", function(e){$('.rightButtonNr4').addClass('active'); $(".buttonImg44").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.rightButtonNr4').removeClass('active'); $(".buttonImg44").attr('src','images/lightOff.png');});

   $('.rightButtonNr5' )
   .bind( "touchstart", function(e){$('.rightButtonNr5').addClass('active'); $(".buttonImg55").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.rightButtonNr5').removeClass('active'); $(".buttonImg55").attr('src','images/lightOff.png');});
   $('.rightButtonNr6' )
   .bind( "touchstart", function(e){$('.rightButtonNr6').addClass('active'); $(".buttonImg66").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.rightButtonNr6').removeClass('active'); $(".buttonImg66").attr('src','images/lightOff.png');});

   $('.rightButtonNr7' )
   .bind( "touchstart", function(e){$('.rightButtonNr7').addClass('active'); $(".buttonImg77").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.rightButtonNr7').removeClass('active'); $(".buttonImg77").attr('src','images/lightOff.png');});

   $('.rightButtonNr8' )
   .bind( "touchstart", function(e){$('.rightButtonNr8').addClass('active'); $(".buttonImg88").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.rightButtonNr8').removeClass('active'); $(".buttonImg88").attr('src','images/lightOff.png');});

   $('.rightButtonNr9' )
   .bind( "touchstart", function(e){$('.rightButtonNr9').addClass('active'); $(".buttonImg99").attr('src','images/lightOn.png');})
   .bind( "touchend", function(e){$('.rightButtonNr9').removeClass('active'); $(".buttonImg99").attr('src','images/lightOff.png');});

 $('.topMenuIconLeft' ).click(function(){
 if($('.topMenuIconTextLeft').hasClass('active')){
     $('.topMenuIconTextLeft').removeClass('active')
     $('.topMenuIconTextRight').addClass('active')
     $('.lightButtons').removeClass('active')
     $('.tempButtons').addClass('active')

 } else {
     $('.topMenuIconTextLeft').addClass('active')
     $('.topMenuIconTextRight').removeClass('active')
     $('.lightButtons').addClass('active')
     $('.tempButtons').removeClass('active')
 }
 });

 $('.topMenuIconRight').click(function(){

 if($(".topMenuIconTextRight").hasClass('active')){
     $(".topMenuIconTextRight").removeClass('active')
     $('.topMenuIconTextLeft').addClass('active')

     $('.tempButtons').removeClass('active')
     $('.lightButtons').addClass('active')

 } else {
     $(".topMenuIconTextRight").addClass('active')
     $('.topMenuIconTextLeft').removeClass('active')

     $('.tempButtons').addClass('active')
     $('.lightButtons').removeClass('active')
     //padaryt CSS, kad butu linkai balti
 }
 });

 // $(".loginButton").click(function(){
 //   $.ajax({
 //     url:"login.php",
 //    type:"POST",
 //    data:{
 //      name:$(".inputName").value(),
 //      surname:$(".inputSurname").value(),
 //      number:$(".inputID").value()
 //    },
 //    success:function(data){
 //      console.log(data);
 //    }
 //
 //   });
 // });

   }); // baigias cia dokument ready


 function check_reservation(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if(this.responseText.trim()=='5' || this.responseText.trim()==  '2' || this.responseText.trim()==  '3' || this.responseText.trim()==  '4') {
                //document.getElementById('demo').innerHTML=this.responseText;
                location.reload();
            }
        }
    } ;
    xmlhttp.open('GET', 'login.php?check=' + document.querySelector('#room').value, true);
    xmlhttp.send();
}
 //Tikrina ar priskirtas kambarys, jei taip - perkrauna puslapi
function check_room_assign(){
     var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if(this.responseText.trim()==  '1' || this.responseText.trim()==  '4'){
				location.reload();
			}
		}
	} ;
    xmlhttp.open('GET', 'login.php?check=' + document.getElementById('number').value, true);
    xmlhttp.send();


}


function common_post(a, b){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    var kamb = document.getElementById("room").value;
    //var kamb= 210;
    // Create some variables we need to send to our PHP file
    console.log(kamb);
    var url = "tcp.php";
    var fn = document.getElementById(a).value;
    console.log("iki cia veikia");
    var vars = "room="+kamb+"&a="+fn;
    hr.open("POST", url, true)
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById(b).innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById(b).innerHTML = "processing...";
}

// Fake Constants
var INITIAL_TIME = 1000;
var ACCELERATION = .7;
var MIN_TIME = 100;

// create global variables to hold DOM objects, and timer
var up = null,
    down = null,
    count = null,
    timer = null;

// Increment the counter
function increment (time) {
    if ( count.value > 299 ) return(console.log("lower it"));
    // decrease timeout by our acceleration factor, unless it's at the minimum
    time = (time * ACCELERATION > MIN_TIME) ? (time * ACCELERATION) : MIN_TIME;
    count.value ++ ;

    if(count.value % 10==0){
      $(".setTemp").text(count.value/10 + ".0");
    }
    else{
      $(".setTemp").text(count.value/10);
    }

    console.log(count.value);

    // set the timeout for the next round, and pass in the new smaller timeout
    timer = setTimeout(
        function () {
            increment(time);
        }, time);
}
// Same as increment only subtracts one instead of adding.
// -- could easily make one function and pass an pos/neg factor instead
function decrement (time) {
    if ( count.value < 171 ) return(console.log("rise it up"));
    time = time * ACCELERATION > MIN_TIME ? (time * ACCELERATION) : MIN_TIME;
    count.value --;

    if(count.value % 10==0){
      $(".setTemp").text(count.value/10 + ".0");
    }
    else{
      $(".setTemp").text(count.value/10);
    }

    timer = setTimeout(
        function () {
            decrement(time);
        }, time);
}

// Initialize the page after all the forms load
window.onload = function () {
    // initialization function
$(".setTemp").text("20.0");
    // assign DOM objects to our vars for ease of use.
    up = document.getElementById('up_btn');
    down = document.getElementById('dwn_btn');
    count = document.getElementById('temperatura');

    // create event handlers for mouse up and down

    up.onmousedown = function () {
        increment(INITIAL_TIME);
        $('.setTempButton').click();

    }
    down.onmousedown = function () {
        decrement(INITIAL_TIME);
        $('.setTempButton').delay().click();
    }

    document.onmouseup = function () {
        clearTimeout(timer);
    }

}
