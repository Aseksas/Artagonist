<?php
require_once dirname ( __FILE__ ) . '/config.php';

checkPermission1 ( $_GET ['number'] );

echo 'Sveiki, ' . $_SESSION ['name'] . ' ' . $_SESSION ['surname'] . ' (reg.nr.: ' . $_SESSION ['number'] . ')';

?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<button type="button" onclick="location='logout.php'">logout</button>
	<br>
	<button type="button" name='checkin'
		onclick="location='send_email.php?nr=1'">CheckIn</button>
	<input type="hidden" id="number"
		value="<?php echo $_SESSION['number'];?>">
	<br>
	<div id="check"></div>
	<div id="email"></div>
	<div id="demo"></div>

	<script type="text/javascript" src="js/ajax.js"></script>
	<script>
setInterval(check_room_assign, 3000);
</script>
</body>


</html>









