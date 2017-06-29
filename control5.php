<?php
require_once dirname ( __FILE__ ) . '/config.php';
checkPermission ( $_GET ['room'] );
define ( 'kambarys', $_GET ['room'] );
echo 'Kambario ' . kambarys . ' valdymas<br/><br/>';

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
	<button type="button" onclick="location='logout.php'">logout</button>
	<button type="button" name='checkin'
		onclick="location='send_email.php?nr=2'">CheckOut</button>
	<div id="check"></div>
	<div id="email"></div>
	<h3>Temperatūra</h3>
	<div id="temp"></div>

	<label for="temperatura">Temperatura:</label>
	<form method="POST">
		<input type="number" name="count" id="temperatura" min="170" max="300"
			value="200" />&degC <input type="button" id="up_btn" value="+" /> <input
			type="button" id="dwn_btn" value="-" /> <input name="tpB"
			type="button" value="Nustatyti"
			onclick="common_post('temperatura', 'temp');"><br> 
 			<input
			name="dabartine" id="Dabartine temperatura" type="hidden"
			value="Dabartine temperatura"
			onclick="common_post('Dabartine temperatura', 'statusTemp');"> 
		<div id="statusTemp" class="static"></div>
		<input type="hidden" id="room" value="<?php echo $_GET['room'];?>"><br>
		<h3>Apšvietimas</h3>

		<input
			name="Ap2" id="On" type="button" value="On"
			onclick="common_post('On', 'status2');"> <input name="Ap3" id="Off"
			type="button" value="Off" onclick="common_post('Off', 'status3');"> <input
			name="Ap4" id="LBedOn" type="button" value="LBedOn"
			onclick="common_post('LBedOn', 'status4');"> <input name="Ap5"
			id="LBedOff" type="button" value="LBedOff"
			onclick="common_post('LBedOff', 'status5');"> <input name="Ap6"
			id="RBedOn" type="button" value="RBedOn"
			onclick="common_post('RBedOn', 'status6');"> <input name="Ap7"
			id="RBedOff" type="button" value="RBedOff"
			onclick="common_post('RBedOff', 'status7');"> <input name="Ap9"
			id="Table" type="button" value="Table"
			onclick="common_post('Table',  'status9');">

		<div id="status2"></div>
		<div id="status3"></div>
		<div id="status4"></div>
		<div id="status5"></div>
		<div id="status6"></div>
		<div id="status7"></div>
		<div id="status9"></div>
		
	</form>
	<div id="testas"></div>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script>
	setInterval(check_reservation,10000);
	setInterval(common_post,20000,'Dabartine temperatura','statusTemp');
	</script>
</body>
</html>
