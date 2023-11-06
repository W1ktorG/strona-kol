<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
    include 'laczenie.php';
 ?>


</body>
<?php


// Sprawdzenie, czy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    // Pobranie danych z formularza
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    // ochrona przed SQL wpisywaniem niechcianych rekordów do bazy przez użytkownika
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);
    
        // Zapytanie do bazy danych w celu weryfikacji użytkownika
        $query = "SELECT nazwa_uzytkownika, haslo FROM uzytkownicy WHERE nazwa_uzytkownika = '$username' AND haslo = '$password'";
        $result = mysqli_query($conn,$query);
        $row = $result->fetch_assoc();

        if($row == null){
            // złe hasło  
            echo("Błędny użytkownik lub hasło");
        }else{
            // poprawne hasło - przekierowanie do strony  
            header("Location: strona_glowna.php");
        }
   
    }
                    
?>

</html>