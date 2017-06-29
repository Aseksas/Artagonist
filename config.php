<?php

//pradedama sesija
$expire = 7*24*3600; // We choose a week duration

ini_set('session.gc_maxlifetime', $expire);

session_start(); //We start the session

setcookie(session_name(),session_id(),time()+$expire);

//require_once dirname(__FILE__) . '/mssql.php';


$SERVER = 'http://'.$_SERVER['HTTP_HOST'].'/ArtagonistPHP3/';
$CONTROL = "control.php";
$MSSQL_SERVER="KAROLISB-PC\SQLEXPRESSPROTEL,1433";
$MSSQL_USER="saa";
$MSSQL_PWD="wago00";
$MSSQL_DB="tp_apsvietimas";
$MAIL = 'paulius.s@odri.lt';
//$MSSQL_SERVER="192.168.24.210";
//$MSSQL_USER="proteluser";
//$MSSQL_PWD="protel915930";
//$MSSQL_DB="protel";

//funkcija kuri valdymo lange tikrina ar kambario langas atitinka su sesija ir jei atitinkta tada tikrina ar tebera rezervacija
function checkPermission($section)
{
    if (isset($_SESSION['number'])&& isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['room'])) {
        if ($_SESSION['room'] == $section) {
        } else {
            header('Location: '.'logout.php' );
        }
    }  elseif (isset($_SESSION['number'])&& isset($_SESSION['name']) && isset($_SESSION['surname']) && !isset($_SESSION['room'])) {
    	header('Location: '.'check.php?number='.$_SESSION['number'] );
    }

    else {
        header('Location: '.'logout.php' );
    }
}

function checkPermission1($section){
    if(isset($_SESSION['number'])&& isset($_SESSION['name']) && isset($_SESSION['surname'])) {
        if($_SESSION['number']==$section) {
        }
        else{
            header('Location: '.'logout.php' );
        }

		if(isset($_SESSION['room'])){
			header('Location: '.'controls.php?room='.$_SESSION['room'] );
		}
    }
    else{
        header('Location: '.'logout.php' );
    }
}


function findRoom($room)
{
    if ($room == '1') {
        return 201;
    } elseif ($room == '2') {
        return 202;
    } elseif ($room == '3') {
        return 203;
    } elseif ($room == '4') {
        return 205;
    } elseif ($room == '5') {
        return 204;
    } elseif ($room == '6') {
        return 206;
    } elseif ($room == '7') {
        return 207;
    } elseif ($room == '8') {
        return 208;
    } elseif ($room == '9') {
        return 209;
    } elseif ($room == '10') {
        return 210;
    } elseif ($room == '11') {
        return 211;
    } elseif ($room == '12') {
        return 212;
    } elseif ($room == '13') {
        return 301;
    } elseif ($room == '14') {
        return 302;
    } elseif ($room == '15') {
        return 303;
    } elseif ($room == '16') {
        return 305;
    } elseif ($room == '17') {
        return 304;
    } elseif ($room == '18') {
        return 306;
    } elseif ($room == '19') {
        return 307;
    } elseif ($room == '20') {
        return 308;
    } elseif ($room == '21') {
        return 309;
    } elseif ($room == '22') {
        return 310;
    } elseif ($room == '23') {
        return 311;
    } elseif ($room == '24') {
        return 312;
    } elseif ($room == '25') {
        return 401;
    } elseif ($room == '26') {
        return 402;
    } elseif ($room == '27') {
        return 403;
    } elseif ($room == '28') {
        return 404;
    } elseif ($room == '29') {
        return 405;
    } elseif ($room == '30') {
        return 406;
    } elseif ($room == '31') {
        return 407;
    } elseif ($room == '32') {
        return 408;
    } elseif ($room == '33') {
        return 409;
    } elseif ($room == '34') {
        return 410;
    }
    else{
        return 0;
    }
}



?>
