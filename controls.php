<?php
require_once dirname ( __FILE__ ) . '/config.php';
checkPermission ( $_GET ['room'] );
//define ( 'kambarys', $_GET ['room'] );
//echo 'Kambario ' . kambarys . ' valdymas<br/><br/>';
//echo '<div class="my_class">'.$cart->count_product.'</div>';
$GLOBALS['kambarys'] = $_GET ['room'];

?>

<html>
<head>
  <meta charset="utf-8">
  <title>Hamburger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/controls.css">
</head>

<body>



<div class="headLandscapeWrapper">
<div class="headLandscape">

      <div class="burgerMenuLandscape">
        <div class="mobile-nav">
          <span></span>
        </div>
      </div>





  <div class="logoCol">
    <img class="logo img-responsive" src="images/artagonist.png" height="55" width="200">
  </div>


</div>
  </div>
  <div class="wrapper" >
    <div class="head" >
      <div class="row">
        <div class="col-3 ">
          <div class="mobile-nav">
            <span></span>
          </div>
        </div>
    <div class="col-6 logoCol">
      <img class="logo img-responsive" src="images/artagonist.png" height="55" width="200">
    </div>

    <div class="col-3 text-xs-right roomNumber">
      <div class="room">
        <p class="roomText">Room</p>
        <p class="roomNr"><?php echo $kambarys; ?></p>
      </div>
    </div>
  </div>
    </div>

    <div class="text-xs-center roomNumberLandscape">
      <div class="roomLandscape">
        <p class="roomTextLandscape">Room</p>
        <p class="roomNrLandscape"><?php echo $kambarys; ?></p>
      </div>
    </div>


    <div class="burgerMenu">
  </div>
    <ul class="burgerMenuText text-center">
      <li><a href="#" onclick="location='logout.php'" class="logOut text-center">Log Out</a></li>
      <li><a href="#" name='checkin' onclick="location='send_email.php?nr=2'" class="checkOut">Check Out</a></li>
    </ul>



    <!-- template
    light
    check out  -->


    <div class="wrapper1">



    <div class="row controls">
      <div class="col-6 Left">
        <div class="topMenuIconLeft active">
          <div class="responsiveness">
            <img class="img-responsive" src="images/lightBulb.png" height="50" width="50" >
          </div>
          <a href="#" class="topMenuIconText topMenuIconTextLeft active">Lights</a>
        </div>

        <div class="lightButtons active text-center">
          <div class="roomSetting leftButtonNr0">

            <div class="imgFrameLandscape">
              <img class="img-responsive" src="images/roomLight.png"  alt="">
            </div>

          <p class="roomSettingText mainRoom">ROOM</p>
        </div>
<!--LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT -->

          <button name="Ap2" id="On" type="button" value="ON" onclick="common_post('On', 'status2');" alt="button"              class="button leftButtonNr1">
              <div class="row">


              <div class="imgImg col-6">
                <img class="buttonImg1 img-responsive" src="images/lightOff.png" width="50" height="50" >
              </div>
              <div class="col-6 buttonTextSpan">
                <p class="buttonText">On</p>
              </div>
                </div>
          </button>


          <button name="Ap4" id="LBedOn" type="button" value="L BED ON" onclick="common_post('LBedOn', 'status4');"      class="button leftButtonNr2">
              <div class="row">
              <div class="imgImg col-6">
                <img class="buttonImg2 img-responsive" src="images/lightOff.png" width="50" height="50" >
              </div>
              <div class="col-6 buttonTextSpan">
                <p class="buttonText">LBedOn</p>
              </div>
                </div>
          </button>


          <button name="Ap5" id="LBedOff" type="button" value="L BED OFF" onclick="common_post('LBedOff', 'status5');"   class="button leftButtonNr3">
              <div class="row">
              <div class="imgImg col-6">
                <img class="buttonImg3 img-responsive" src="images/lightOff.png" width="50" height="50" >
              </div>
              <div class="col-6 buttonTextSpan">
                <p class="buttonText">LBedOff</p>
              </div>
                </div>
          </button>

          <button name="Ap8" id="Read" type="button" value="READ" onclick="common_post('Read',  'status8');"             class="button leftButtonNr4">
              <div class="row">
              <div class="imgImg col-6">
                <img class="buttonImg4 img-responsive" src="images/lightOff.png" width="50" height="50" >
              </div>
              <div class="col-6 buttonTextSpan">
                <p class="buttonText">Read</p>
              </div>
                </div>
          </button>

          <button name="Ap11" id="On 1" type="button" value="ON 1" onclick="common_post('On 1', 'status11');"            class="button leftButtonNr5">
              <div class="row">
              <div class="imgImg col-6">
                <img class="buttonImg5 img-responsive" src="images/lightOff.png" width="50" height="50" >
              </div>
              <div class="col-6 buttonTextSpan">
                <p class="buttonText">On 1</p>
              </div>
                </div>
          </button>

          <button name="Ap13" id="Decor 1" type="button" value="DECOR 1" onclick="common_post('Decor 1', 'status13');"   class="button leftButtonNr6">
              <div class="row">
              <div class="imgImg col-6">
                <img class="buttonImg6 img-responsive" src="images/lightOff.png" width="50" height="50" >
              </div>
              <div class="col-6 buttonTextSpan">
                <p class="buttonText">Decor 1</p>
              </div>
                </div>
          </button>


          <button name="Ap8" id="Read" type="button" value="READ LEFT"onclick="common_post('Read Left',  'status8');"    class="button leftButtonNr7">
              <div class="row">
              <div class="imgImg col-6">
                <img class="buttonImg7 img-responsive" src="images/lightOff.png" width="50" height="50" >
              </div>
              <div class="col-6 buttonTextSpan">
                <p class="buttonText">ReadLeft</p>
              </div>
                </div>
          </button>

          <button name="Ap16" id="On Right" type="button" value="ON RIGHT" onclick="common_post('On Right', 'status16');"class="button leftButtonNr8">
              <div class="row">
              <div class="imgImg col-6">
                <img class="buttonImg8 img-responsive" src="images/lightOff.png" width="50" height="50" >
              </div>
              <div class="col-6 buttonTextSpan">
                <p class="buttonText">OnRight</p>
              </div>
                </div>
          </button>

          <input name="Ap15"id="BedOn" type="button" value="BED ON" onclick="common_post('BedOn', 'status15');"         class="button leftButtonNr9">

          <input name="Ap8" id="Read" type="button" value="READ" onclick="common_post('Read',  'status8');"             class="button leftButtonNr10">


          <!-- <a href="#" name="ApPicture" id="Read" type="image" value="READ" onclick="common_post('Read',  'status8');" src="images/lightBulb.png" alt="button" class="button leftButtonNr11">
              <img class="buttonImg img-responsive" src="images/lightBulb.png" width="60" height="60" >
          </a> -->

<!--TEFL TEFL TEFL TEFL TEFL TEFL TEFL TEFL TEFL TEFL TEFL TEFL TEFL TEFL TEFL TEFL   -->
        </div>
      </div>
        <div class="col-6 Right">
          <div class="topMenuIconRight">
            <div class="responsiveness">
            <img  class="img-responsive" src="images/tempTerm.png" height="50" width="50" >
            </div>
            <a href="#" class="topMenuIconText topMenuIconTextRight">Temperature</a>
          </div>

          <div class="lightButtons active text-center">
            <div class="roomSetting">

              <div class="imgFrameLandscape">
              <img class="img-responsive" src="images/bedRoomLight.png"  alt="button">
            </div>
              <p class="roomSettingText bedRoom">BED ROOM</p>

            </div>
<!--RIGHT RIGHT RIGHT RIGHT RIGHT RIGHT RIGHT RIGHT RIGHT RIGHT RIGHT RIGHT RIGHT RIGHT  -->

          <input name="Ap3" id="Off"type="button" value="OFF" onclick="common_post('Off', 'status3');"                              class="button rightButtonNr1">

          <input name="Ap6" id="RBedOn" type="button" value="R BED ON" onclick="common_post('RBedOn', 'status6');"                  class="button rightButtonNr2">

          <input name="Ap7" id="RBedOff" type="button" value="R BED OFF" onclick="common_post('RBedOff', 'status7');"               class="button rightButtonNr3">

          <input name="Ap9" id="Table" type="button" value="Table" onclick="common_post('Table',  'status9');"                      class="button rightButtonNr4">

          <input name="Ap10" id="Decor" type="button" value="DECOR" onclick="common_post('Decor',  'status10');"                    class="button rightButtonNr5">

          <input id="Off 1" type="button" value="Off 1" onclick="common_post('Off 1', 'status12');"                                 class="button rightButtonNr6">

          <input name="Ap14" id="Read Right" type="button" value="READ RIGHT" onclick="common_post('Read Right',  'status18');"     class="button rightButtonNr7">

          <input name="Ap17" id="Off Right"type="button" value="OFF RIGHT" onclick="common_post('Off Right', 'status17');"          class="button rightButtonNr8">

          <input name="Ap14" id="BedOff" type="button" value="BED OFF" onclick="common_post('BedOff', 'status14');"                 class="button rightButtonNr9">
<!--THGIR THGIR THGIR THGIR THGIR THGIR THGIR THGIR THGIR THGIR THGIR THGIR THGIR THGIR  -->
          </div>
        </div>
  </div>

        <form method="POST">
          <input type="hidden" id="room" value=<?php echo $kambarys;?>><br>
        <div class="tempButtons text-center">

          <input name="dabartine" id="Dabartine temperatura" type="hidden"
      			value="Dabartine temperatura"
      			onclick="common_post('Dabartine temperatura', 'statusTemp');">



          <div id="statusTemp" class="currentTemp static"></div>

          <div class="row text-center">
            <div class="col-4 text-center">
              <input type="button" id="up_btn" class="button tempSigns" value="+" onclick="setTimeout(common_post,3000,'temperatura','temp');"/>
            </div>
            <div class="col-4 text-center">
              <p class="setTemp"></p>
              <input type="hidden" id="temperatura" class="setTemp tempSigns" name="count" min="170" max="300" value="200" />
            </div>
            <div class="col-4 text-center">
              <input type="button" id="dwn_btn" class="button tempSigns" value="-"  onclick="setTimeout(common_post,3000,'temperatura','temp');"/>
            </div>
          </div>
          <p class="tempWarning"></p>
          <div id="temp"></div>
        </div>
        </form>
        <div class="stat">
        <div id="status2"></div>
        <div id="status3"></div>
        <div id="status4"></div>
        <div id="status5"></div>
        <div id="status6"></div>
        <div id="status7"></div>
        <div id="status8"></div>
        <div id="status9"></div>
        <div id="status10"></div>
        <div id="status14"></div>
		    <div id="status15"></div>
        <div id="status16"></div>
        <div id="status17"></div>
        <div id="status18"></div>
        <div id="status19"></div>
      </div>
  </div>
</div>

  <script src="js/vendor/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>

  <script>
  setInterval(check_reservation,10000);
  setInterval(common_post,20000,'Dabartine temperatura','statusTemp');
  </script>

</body>
</html>
