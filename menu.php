<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hamburger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>


<div class="headLandscapeWrapper">
<div class="headLandscape">
  <div class="logoCol">
    <img class="logo img-responsive" src="images/artagonist.png" height="55" width="200">
  </div>
</div>
</div>

  <div class="wrapper">
    <div class="head">

    <div class="row">
    <div class="col-2">
    </div>


    <div class="col-8 logoCol">
      <img class="logo img-responsive" src="images/artagonist.png" height="33" width="133">
    </div>

    <div class="col-2">
    </div>
  </div>
    </div>
    <div class="wrapper1">

      <p class="welcome">WELCOME!</p>


    <form method="post" action="login.php" class="loginData text-center">
      <input name="name" type="text" class="guest Name inputName" value="<?php echo keepvalues('name');?>" placeholder="NAME"/> <!-- placeholder -->
      <p class="info hint1">Guest name</p> <!-- welcome -->
      <input type="text" name="surname" class="guest Surname inputSurname" value="<?php echo keepvalues('surname');?>" placeholder="SURNAME"/> <!-- placeholder -->
      <p class="info hint2">Guest surname</p> <!-- welcome -->
      <input type="password" name="number" class="guest ID inputID" value="<?php echo keepvalues('number');?>" placeholder="ID"/> <!-- placeholder -->
      <p class="info hint3">Guest ID</p> <!-- welcome -->
      <input class='button loginButton' type="submit" value='LOG IN' />
    </form>

  </div>

  <div id="" class="errfield text-center">
    <?php
      //if(isset($_GET['error_message'])){
      //  echo $_GET['error_message'];
      //}
    ?>
    </div>
</div>

  <script src="js/vendor/jquery-1.11.2.min.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/error.js"></script>

</body>
</html>


<?php
require_once dirname ( __FILE__ ) . '/config.php';

if (isset ( $_SESSION ['number'] ) && isset ( $_SESSION ['name'] ) && isset ( $_SESSION ['surname'] ) && isset ( $_SESSION ['room'] )) {
	header ( 'Location: ' . 'controls.php?room=' . $_SESSION ['room'] ); //padaryt, kad mygtukas butu neaktyvus
} elseif (isset ( $_SESSION ['number'] ) && isset ( $_SESSION ['name'] ) && isset ( $_SESSION ['surname'] )) {
	header ( 'Location: ' . 'check.php?number=' . $_SESSION ['number'] );
} else {
	die ( '' );}


// palieka ivestas reiksmes langeliuose

function keepvalues($value) {
	if (isset ( $_POST [$value] )) {
		echo $_POST [$value];
	}
}

?>
