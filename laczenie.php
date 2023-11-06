<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php
$servername = "localhost";
$adminName = "root";
$password = "";
$dbName = 'autobusy';

// łączenie z bazą
$conn = mysqli_connect($servername, $adminName,$password, $dbName);    


// sprawdzanie połączenia
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

</body>
</html>