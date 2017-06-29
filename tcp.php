<?php
$timestamp = time();
ini_set('max_execution_time', 4);
//define('kambarys',$_POST['room']);
$kambarys=$_POST['room'];
$in = "000000000";
IF ($kambarys>=200&&$kambarys<=212){
	/* Get the IP address for the target host. */
	$address = "192.168.24.232";
}elseif($kambarys>=301&&$kambarys<=312){
	/* Get the IP address for the target host. */
	$address = "192.168.24.231";
}elseif($kambarys>=405&&$kambarys<=410){
	/* Get the IP address for the target host. */
	$address = "192.168.24.230";
}elseif($kambarys>=401&&$kambarys<=404){
	/* Get the IP address for the target host. */
	$address = "192.168.24.229";
}
// patikrinta adresa
// console.log($address);
// nustato siunciama komanda pagal paspausta mygtuka
IF ($_POST['a']=="Dabartine temperatura"){
	$in = "r".$kambarys."00000";
	echo $in;
}
IF ($_POST['a']<'301'){
	echo"Nustatyta temperatura".$_POST['a']."laipsniu";
	$in = "w".$kambarys."0t".$_POST['a'];
	echo $in;
}
/* IF ($_POST['a']=="Bye"){
	echo"Ijungtas apsvietimas ".$_POST['a'];
	$in = "w".$kambarys."0a000";
	echo $in;
}
IF ($_POST['a']=="Hi"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."0a001";
	echo $in;
} */
IF ($_POST['a']=="On"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."0a002";
	echo $in;
}
IF ($_POST['a']=="Off"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."0a003";
	echo $in;
}
IF (($_POST['a']=="LBedOn")or(($_POST['a']=="BedOn")&&($kambarys==306))){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."0a004";
	echo $in;
}
IF (($_POST['a']=="LBedOff")or(($_POST['a']=="BedOff")&&($kambarys==306))){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."0a005";
	echo $in;
}
IF (($_POST['a']=="RBedOn")or(($_POST['a']=="BedOn")&&($kambarys==208 or $kambarys==405))){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."0a006";
	echo $in;
}
IF (($_POST['a']=="RBedOff")or(($_POST['a']=="BedOff")&&($kambarys==208 or $kambarys==405))){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."0a007";
	echo $in;
}
IF ($_POST['a']=="Read"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."0a008";
	echo $in;
}
IF ($_POST['a']=="Table"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."0a009";
	echo $in;
}
IF ($_POST['a']=="Decor"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."0a010";
	echo $in;
}
//-------------------- 318patalpa (312kamb) exception ---------------------
IF ($_POST['a']=="Decor 1"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."1a010";
	echo $in;
}
IF ($_POST['a']=="On 1"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."1a002";
	echo $in;
}
IF ($_POST['a']=="Off 1"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."1a003";
	echo $in;
}
//-------------------- 320patalpa (312kamb) exception ---------------------
IF ($_POST['a']=="On"&&$kambarys==312){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a002";
	echo $in;
}
IF ($_POST['a']=="Off"&&$kambarys==312){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a003";
	echo $in;
}
IF ($_POST['a']=="Table"&&$kambarys==312){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a009";
	echo $in;
}
IF ($_POST['a']=="Decor"&&$kambarys==312){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a010";
	echo $in;
}
IF ($_POST['a']=="LBedOn"&&$kambarys==312){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a004";
	echo $in;
}
IF ($_POST['a']=="LBedOff"&&$kambarys==312){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a005";
	echo $in;
}
IF ($_POST['a']=="RBedOn"&&$kambarys==312){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a006";
	echo $in;
}
IF ($_POST['a']=="RBedOff"&&$kambarys==312){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a007";
	echo $in;
}
//-------------------- 312 kamb exception end ---------------------
//-------------------- 404 exception ---------------------
IF ($_POST['a']=="On Left"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."1a002";
	echo $in;
}
IF ($_POST['a']=="On Right"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a002";
	echo $in;
}
IF ($_POST['a']=="Off Left"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."1a003";
	echo $in;
}
IF ($_POST['a']=="Off Right"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a003";
	echo $in;
}
IF ($_POST['a']=="Read Left"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."1a008";
	echo $in;
}
IF ($_POST['a']=="Read Right"){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."2a008";
	echo $in;
}
IF (($_POST['a']=="LBedOn")&&($kambarys==404)){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."1a004";
	echo $in;
}
IF (($_POST['a']=="LBedOff")&&($kambarys==404)){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."1a005";
	echo $in;
}
IF (($_POST['a']=="RBedOn")&&($kambarys==404)){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."1a006";
	echo $in;
}
IF (($_POST['a']=="RBedOff")&&($kambarys==404)){
	echo"Ijungtas apsvietimas  ".$_POST['a'];
	$in = "w".$kambarys."1a007";
	echo $in;
}
//-------------------- 404 kamb exception end---------------------


error_reporting(E_ALL);

echo "<h2>TCP/IP Connection</h2>\n";

/* Get the port for the WWW service. */

$service_port = "3002";
$length = 2048;
$in_tp = "r".$kambarys."00000";
//$in_tp = "w4041a006";
/* Create a TCP/IP connection. */
back_to_connect:
$socket = fsockopen($address, $service_port, $errno, $errstr, 2);
if (!$socket) {
    echo "$errstr ($errno)<br />\n";
	// erroru registravimas faile, kambario nr; kokia klaida, timestamp
	$myfile=fopen("error_log_txt","a");
	$Fsize=filesize('error_log_txt');
	//echo 'dydis:'.filesize('error_log_txt').'bitu';
	//istrina klaidas kuomet failas pasiekia 300kb
	IF ($Fsize>300000){
		ftruncate($myfile, 0);
	}
	fwrite($myfile,"($kambarys)$errstr ($errno)($timestamp)");
	Fclose($myfile);
	goto back_to_connect;
} else {
	echo "OK, opened.<br />";
}
//Nuskaito kambario statusa, temperaturos setpointa

echo "Sending HTTP request...";
fwrite($socket, $in_tp);
echo "OK.<br />";
echo "Reading response:\n";
//Patikrina kambario buvio statusa
$buf=(fread($socket, $length));
//Ziuri ketvirta simboli is desines i kaire
$buf_status=substr ( $buf, -4, 1);

echo $buf. "<br/>";
echo "Kambario statusas: \n";
echo $buf_status. "<br/>";
//fclose($socket);
//Jei statusas 1 tada siuncia i valdikli valdymo signalus
IF (!empty($buf)&&($buf_status=='0')){ //reikia pakeist bandymuose i '1'
	fwrite($socket, $in);
	$buf_control=(fread($socket, $length));
	echo "$buf_control"."<br/>";
	echo "-------------------------------------------";
	fclose($socket);
}elseif (!empty($buf) or ($buf_status!=0) or ($buf_status!=1)){
	echo "Įvyko klaida.<n/>";
}elseif (!empty($buf) or ($buf_status!=0)){
	echo "Nieko nėra kambaryje.";
}
?>
