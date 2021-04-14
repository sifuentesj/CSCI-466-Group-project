<?php
 include('info.php');
 try { // if something goes wrong, an exception is thrown
   $dsn = "mysql:host=courses;dbname=z1880305";
   $pdo = new PDO($dsn, $username, $password);
 }
 catch(PDOexception $e) { // handle that exception
   echo "Connection to database failed: " . $e->getMessage();
 }
?>

