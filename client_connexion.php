<?php

require 'admin/database.php';
if(isset($_POST))
{
  $nom_user = verifyInput($_POST['login']);
  $password = verifyInput($_POST['password']);
}
  $db = database::connect();
  $insert = $db-> prepare(" SELECT*FROM client WHERE Login=? AND Mot_de_pass=?");
  $insert ->execute(array($nom_user,$password));
  if($magara=$insert->fetch()) {
    header("location:index.php");
  }
  else
  {
    header("location:index.php");
}
  function verifyInput($mag)
  {
    $mag=trim($mag);
    $mag=stripcslashes($mag);
    $mag=htmlspecialchars($mag);
    return $mag;
  }
 ?>
