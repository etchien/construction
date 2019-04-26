<?php

class database{
private static $dbHost="localhost";
private static $dbName="construction";
private static $dbUser="root";
private static $dbPassword="";
private static $connection=null;


  public static function connect()
  {
    try{
      self::$connection=new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbPassword);
    }
    catch(PDOExeption $e){
      die($e->getMessage());
    }
    return  self::$connection;
    }
  public static function disconnect()
  {
    self::$connection= null;
  }

}
database::connect();


?>
