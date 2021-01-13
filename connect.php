<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'colorb69_1';
$db_pass		= 'rathunona1.';
$db_database	= 'colorb69_chamindayamaha2'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>