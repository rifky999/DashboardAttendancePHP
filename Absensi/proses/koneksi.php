<?php
try{
  $pdo = new PDO('mysql:host=localhost;dbname=absensi',"root","");
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e){
  echo "koneksi error".$e->getMessage();
}

 ?>
