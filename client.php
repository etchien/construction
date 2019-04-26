
<?php

require 'admin/database.php';
if(isset($_POST))
{

  $nom = verifyInput($_POST['name']);
  $prenom = verifyInput($_POST['firstname']);
  $date_de_naissance = verifyInput($_POST['date_naissance']);
  $lieu_residence = verifyInput($_POST['lieu_résidence']);
  $contact = verifyInput($_POST['contact']);
  $email = verifyInput($_POST['email']);
  $login = verifyInput($_POST['login']);
  $Mot_de_pass = verifyInput($_POST['password']);

}

  $db = database::connect();

  $insert = $db-> prepare("INSERT INTO client(`NOM_CLT`, `PRENOM_CLT`, `DAT_NAISS_CLT`, `LIEU_DE_RESIDENCE_CLT`, `CONTACT_CLT`, `EMAIL_CLT`, `LOGIN_CLT`, `PASSWORD_CLT`) VALUES (?,?,?,?,?,?,?,?)");
  $insert ->execute(array($nom,$prenom,$date_de_naissance,$lieu_residence,$contact,$email,$login,$Mot_de_pass));


  database::disconnect();

  header("location:index.php");



  function verifyInput($mag)
  {
    $mag=trim($mag);
    $mag=stripcslashes($mag);
    $mag=htmlspecialchars($mag);

    return $mag;
  }


 ?>
