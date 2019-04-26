<?php 
require("BD.php");
if (isset($_POST)) {

	$nom=verifyInput($_POST['nom']);
	$email =verifyInput ($_POST['email']);
	
}

$db = database::connect();
$insert = $db -> prepare("SELECT* FROM cliens WHERE nom=? AND email=?");
 $insert ->execute(array($nom,$email));
 if ($mardo=$insert->fetch()) {
 	header('location:constructeur.php');
 }
 else{
 	header('location:terrain.php');

 }
 



Database::disconnect();




function verifyInput($koro){
	$koro=trim($koro);
	$koro=stripcslashes($koro);
	$koro=htmlspecialchars($koro);
	
	return $koro;
}

 ?>