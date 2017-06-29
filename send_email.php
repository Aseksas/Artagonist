<?php
/**
 * Created by PhpStorm.
 * User: Laurynas
 * Date: 2017.03.23
 * Time: 21:13
 */

require_once dirname(__FILE__) . '/config.php';


if(isset($_GET['nr'])) {
    if ($_GET['nr'] == 1) {
        if (isset($_SESSION['number']) && !isset($_SESSION['room'])) {
            $message = "Klientas " . $_SESSION['name'] . ' '. $_SESSION['surname'] . ' (reg.nr.: ' . $_SESSION['number'] . ')' . ' padare check-in.';
            // In case any of our lines are larger than 70 characters, we should use wordwrap()
            $message = wordwrap($message, 70, "\r\n");
            // Send
            mail($MAIL, 'Check-in ' . $_SESSION['name'] . ' ' . $_SESSION['surname'] . ' '. $_SESSION['number'], $message);
            header('Location:'.'checkin.php?number='.$_SESSION['number']);

        } else {
            //echo 'Jūsų kambarys(-iai) jau priskirtas(-i)';
        }
    }
}
if(isset($_GET['nr'])) {
    if ($_GET['nr'] == 2) {

        if (isset($_SESSION['number']) && isset($_SESSION['room'])) {
            $message = "Klientas " . $_SESSION['name'] . ' '.$_SESSION['surname'] . ' (reg.nr.: ' . $_SESSION['number'] . ')' . ' padare check-out.';
            // In case any of our lines are larger than 70 characters, we should use wordwrap()
            $message = wordwrap($message, 70, "\r\n");
            // Send
            mail($MAIL, 'Check-out ' . $_SESSION['name'] . ' ' . $_SESSION['surname'] . ' '. $_SESSION['number'], $message);
            //session_destroy();
            echo 'Išsiregistravimo pranešimas išsiųstas į administraciją';
            header( "refresh:10;url=logout.php" );
	    //header('Location: '.'logout.php' );
        } else {
            echo 'Dar nepadarytas įsiregistravimas arba nepriskirtas kambarys';
        }

    }
}
?>