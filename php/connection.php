<?php
  //Connection
  $database="Inspire Foundation Group";
  $user="root";
  $password="";
  $server="localhost";

  try
  {
    $conn= new PDO("mysql:host=$server; dbname=$database", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo('happiness');
  }

  catch(PDOException $e)
  {
    echo 'Connection Failed: '.$e->getMessage();
  }
?>
