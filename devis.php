
<?php

require 'admin/database.php';
if(isset($_POST))
{

  $nom = verifyInput($_POST['nom']);
  $description = verifyInput($_POST['desc']);
  $lieu = verifyInput($_POST['lieu_souhaite']);
  $contact = verifyInput($_POST['numero']);
  $email = verifyInput($_POST['adresse_mail']);

}

  $db = database::connect();

  $insert = $db-> prepare("INSERT INTO devis(`NOM_CLT`, `DESCRPITION_PROJET`, `LIEU_SOUHAITE`, `CONTACT_CLT`, `EMAIL_CLT`) VALUES (?,?,?,?,?)");
  $insert ->execute(array($nom,$description,$lieu,$contact,$email));


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
