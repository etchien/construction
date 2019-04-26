<?php

require 'database.php';
if(isset($_POST))
{

  $nom = verifyInput($_POST['name']);
  $prenom = verifyInput($_POST['firstname']);
  $contact = verifyInput($_POST['contact']);
   $fonction = verifyInput($_POST['fonction']);
   $adresse_mail = verifyInput($_POST['email']);
  $mot_de_pass = verifyInput($_POST['password']);

}

  $db = database::connect();

  $insert = $db-> prepare("INSERT INTO admin(`NOM_ADMIN`, `PRENOM_ADMIN`, `CONTACT_ADMIN`, `FONCTION_ADMIN`, `EMAIL_ADMIN`, `PASSWORD_ADMIN`) VALUES (?,?,?,?,?,?)");
  $insert ->execute(array($nom,$prenom,$contact,$fonction,$adresse_mail,$mot_de_pass));

  database::disconnect();

  header('location:admin.php');

  function verifyInput($magara)
  {
    $mag=trim($magara);
    $mag=stripcslashes($magara);
    $mag=htmlspecialchars($magara);

    return $mag;
  }


 ?>
