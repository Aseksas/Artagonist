<?php

require_once dirname ( __FILE__ ) . '/config.php';

if (isset ( $_REQUEST ['check'] )) {
	$_POST ['name'] = $_SESSION ['name'];
	$_POST ['surname'] = $_SESSION ['surname'];
	$_POST ['number'] = $_SESSION ['number'];
	if (isset ( $_SESSION ['room'])) {
		$_POST ['room'] = $_SESSION ['room'];
	}
}

if (! empty ( $_POST ['number'] )) {
	$name = strtoupper ( $_POST ['name'] ); // Vardas
	$surname = strtoupper ( $_POST ['surname'] ); // Pavarde
	$number = $_POST ['number']; // Registracijos ID
	                            // $number=2091;
	                            // $name='';
	                            // $surname='ccc';
	$serverName = $MSSQL_SERVER;
	$connectionInfo = array (
			"Database" => $MSSQL_DB,
			"UID" => $MSSQL_USER,
			"PWD" => $MSSQL_PWD
	);
	$conn = sqlsrv_connect ( $serverName, $connectionInfo );
	// jei nepavyko nutraukiam scripta ir laukiam kito karto....
	if ($conn) {
		$sql = "select kundennr, buchstatus, resstatus, zimmernr, katnr from protel.dbo.buch where buchnr=$number";
		$stmt = sqlsrv_query ( $conn, $sql );
		$j = 0;
		while ( $row = sqlsrv_fetch_array ( $stmt ) ) {
			$masyvas = array (
					$row ['kundennr'],
					$row ['buchstatus'],
					$row ['resstatus'],
					$row ['zimmernr'],
					$row ['katnr']
			);
			$mass [$j] = $masyvas;
			$j = $j + 1;
		}
		if (! empty ( $masyvas )) {
			// print_r ($mass);
			$room = $masyvas [3];
			if (($masyvas [4] != 7) and ($masyvas [4] != 8)) {
				if (($masyvas [1] != 2) and ($masyvas [2] == 1)) {
					if (! $stmt) {
						die ( print_r ( sqlsrv_errors (), true ) );
					} else {
						$sqlkdnr = "select name1, vorname from protel.dbo.kunden where kdnr=$masyvas[0]";
						$stmtkdnr = sqlsrv_query ( $conn, $sqlkdnr );
					}

					$rowkdnr = sqlsrv_fetch_array ( $stmtkdnr );
					$vardas = array (
							$rowkdnr ['name1'],
							$rowkdnr ['vorname']
					);
					// print_r ($vardas);

					// tikrina ar nepaliktas tarpas vardo ir pavardes gale
					if (strcmp ( substr ( $vardas [1], - 1 ), ' ' ) == 0) {
						$vardas [1] = substr ( $vardas [1], 0, - 1 );
					}
					if (strcmp ( substr ( $vardas [1], 0, 1 ), ' ' ) == 0) {
						$vardas [1] = substr ( $vardas [1], 1 );
					}
					if (strcmp ( substr ( $vardas [0], - 1 ), ' ' ) == 0) {
						$vardas [0] = substr ( $vardas [0], 0, - 1 );
					}
					if (strcmp ( substr ( $vardas [0], 0, 1 ), ' ' ) == 0) {
						$vardas [0] = substr ( $vardas [0], 1 );
					}

					if ((strtoupper ( $vardas [1] ) == $name) and (strtoupper ( $vardas [0] ) == $surname)) {
						$kambarys = findRoom ( $room );
						if ($kambarys != 0) {
							if (isset ( $_SESSION ['room'] ) && $_SESSION ['room'] != $kambarys) {
								$_SESSION ['room'] = $kambarys;
								echo 5;
							} else {
								$_SESSION ['number'] = $number;
								$_SESSION ['name'] = $name;
								$_SESSION ['surname'] = $surname;
								$_SESSION ['room'] = $kambarys;
								if (isset ( $_REQUEST ['check'] )) {
									echo 1;
									//Kambariu skirtingu sviesu valdymo konfiguraciju priskirimai
								} else {
										header ( 'Location: ' . 'controls.php?room=' . $kambarys );


								}

							}
						} elseif ($masyvas [3] == - 10) {
							$_SESSION ['number'] = $number;
							$_SESSION ['name'] = $name;
							$_SESSION ['surname'] = $surname;
							unset($_SESSION ['room']);
							if (isset ( $_REQUEST ['check'] )) {
								echo 2;
							}else{
								header ( 'Location: ' . 'check.php?number=' . $number );
							}
						}
					} else {
						if (isset ( $_REQUEST ['check'] )) {
							echo 3;
						}else{
							header ( 'Location: ' . 'index.php?error_message=1');//neteisingas vardas/pavardė
						}
					}
				} else {
					session_destroy ();
					if (isset ( $_REQUEST ['check'] )) {
						echo 4;
					}else{
						header ( 'Location: ' . 'index.php?error_message=2');	//rezervacija pacibaigus
					}
				}
			} else {
				session_destroy ();
				header ( 'Location: ' . 'index.php?error_message="3"');			//kambarys neegzistuoja
			}
		} else {
			session_destroy ();
			header ( 'Location: ' . 'index.php?error_message=4');				//tokios reervacijos nėra
		}
	} else {
		die ( "Prisijungti prie MsSQL nepavyko." );										//prisijungti prie MySQL nepavyko
		header ( 'Location: ' . 'index.php?error_message=5');
		// die(print_r(sqlsrv_errors(), true));
	}
} else {
	$activePage = "saunasss";
	header ( 'Location: ' . 'index.php?error_message=6');						//neteisingas ID
}



?>
<script type="text/javascript" src="js/ajax.js"></script>
