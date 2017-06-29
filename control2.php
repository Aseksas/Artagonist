<?php
require_once dirname ( __FILE__ ) . '/config.php';
checkPermission ( $_GET ['room'] );
//define ( 'kambarys', $_GET ['room'] );
$GLOBALS['kambarys'] = $_GET ['room'];
?>

<html>
<head>
<title>Valdymas</title>
<style>
div.static {
    position: static;
	width: 250px;
	height: 300px;
    border: 1px solid #000000;
}

</style>
</head>
<body>

  <p class="roomNr"><?php echo $kambarys; ?></p>
	<button type="button" onclick="location='logout.php'">logout</button>
	<button type="button" name='checkin'
		onclick="location='send_email.php?nr=2'">CheckOut</button>
	<h3>Temperatūra</h3>
	<div id="temp"></div>

	<label for="temperatura">Temperatura:</label>
	<form method="POST">
		<input type="number" name="count" id="temperatura" min="170" max="300"
			value="200" />&degC
    <input type="button" id="up_btn" value="+" />
    <input type="button" id="dwn_btn" value="_" />

    <input class="setTempButton" name="tpB" type="hidden" value="Nustatyti"
			onclick="common_post('temperatura', 'temp');">

    <br>

 		<input name="dabartine" id="Dabartine temperatura" type="hidden"
			value="Dabartine temperatura"
			onclick="common_post('Dabartine temperatura', 'statusTemp');">
		<div id="statusTemp" class="static"></div>


		<h3>Apšvietimas</h3>

		<input name="Ap2" id="On" type="button" value="On"
			onclick="common_post('On', 'status2');">
    <input name="Ap3" id="Off" type="button" value="Off"
      onclick="common_post('Off', 'status3');">
    <input name="Ap4" id="LBedOn" type="button" value="LBedOn"
			onclick="common_post('LBedOn', 'status4');">
    <input name="Ap5" id="LBedOff" type="button" value="LBedOff"
      onclick="common_post('LBedOff', 'status5');">
    <input name="Ap6" id="RBedOn" type="button" value="RBedOn"
			onclick="common_post('RBedOn', 'status6');">
    <input name="Ap7" id="RBedOff" type="button" value="RBedOff"
			onclick="common_post('RBedOff', 'status7');">
    <input name="Ap8" id="Read" type="button" value="Read"
			onclick="common_post('Read',  'status8');">
    <input name="Ap10" id="Decor" type="button" value="Decor"
			onclick="common_post('Decor',  'status10');">




		<div id="status2"></div>
		<div id="status3"></div>
		<div id="status4"></div>
		<div id="status5"></div>
		<div id="status6"></div>
		<div id="status7"></div>
		<div id="status8"></div>
		<div id="status10"></div>

<input type="hidden" id="room" value=<?php echo $kambarys;?>><br>

	</form>
	<div id="testas"></div>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script>
	setInterval(check_reservation,10000);
	setInterval(common_post,20000,'Dabartine temperatura','statusTemp');
	</script>
</body>
</html>
