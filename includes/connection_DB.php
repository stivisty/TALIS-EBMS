<?php

$HOST			=	"localhost";

$DATABASENAME	=	"jwqktnve_chimio";

$USER			=	"jwqktnve_mabula";

$PASSWORD		=	"qL_JGe8C&D[)";


// prefixe
$PREFIXE_COUNTRY = '+257.'; // prefixe du pays


$dsn = "mysql:host=$HOST;dbname=$DATABASENAME;charset=utf8mb4";
$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];
try {
  $pdo = new PDO($dsn, $USER, $PASSWORD, $options);
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('Something weird happened'); //something a user can understand
}



?>