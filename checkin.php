<?php
require_once dirname ( __FILE__ ) . '/config.php';
checkPermission1 ( $_GET ['number'] );

echo 'Įsiregistravimo pranešimas išsiųstas į administraciją <br>';
echo 'Laukite kambario patvirtinimo';

?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<input type="hidden" id="number"
	value="<?php echo $_SESSION['number'];?>">
<br>

<div id="demo"></div>
<script type="text/javascript" src="js/ajax.js"></script>
<script>
setInterval(check_room_assign, 3000);
</script>
</body>


</html>
