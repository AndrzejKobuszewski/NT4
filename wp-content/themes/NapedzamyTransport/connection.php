<?php
$host = "localhost";
$user = "root";
$pass = "Vrsonpmhy991trn#5";
$db = "ZTransport40";
$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);

if($conn->errorCode()!=null) {
  var_dump($conn->errorInfo());
  die ("Połączenie nieudane. Błąd: ". $conn->errorInfo()[2]);
}
else {
//echo "Połączenie z bazą $db udane <br><br>";
}

?>
