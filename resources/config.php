<?php

ob_start();

session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);


defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");

				//localhost details
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");  //assign this to the database

defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");
		
				
				//bath college
//defined("DB_HOST") ? null : define("DB_HOST", "por16002139.studentweb.citybathcoll.ac.uk");
//defined("DB_USER") ? null : define("DB_USER", "fdscyr1POR16002139");  //assign this to the database

//defined("DB_PASS") ? null : define("DB_PASS", "OGUDk79mrY");
//defined("DB_NAME") ? null : define("DB_NAME", "c27por16002139a2");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);  //take this off and use PDO


//$db = new PDO ("mysql:host=".$host.";dbname=".$DB_HOST,'root',''); //PDO use this instead of the above , also anywhere else that has used "escape_string($string)" use PDO instead
//stmt = $db->prepare("SELECT * FROM users WHERE username=:username");  //PDO use this instead of escape string 1
//$stmt->bindvalue(':username', $username, PDO::PARAM_STR);				//PDO use this instead of escape string 2
//$row = $stmt->fetch(PDO::FETCH_ASSOC);								//PDO use this instead of escape string 3



require_once("functions.php");
require_once("cart.php");

?>