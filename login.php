<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Your Page Title</title>
</head>
<body>
<?php
if (isset($_REQUEST['action']) && $_REQUEST['action'] == "login") {
    
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $db = mysqli_connect('localhost', 'root', '', 'autobusy');    

    //prepared statements
    $q = $db->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");  
    //podstaw wartości
    $q->bind_param("s", $email);
    //wykonaj
    $q->execute();
    $result = $q->get_result();

    $userRow = $result->fetch_assoc();
    if ($userRow == null) {
        //konto nie istnieje
        echo "Błędny login lub hasło <br>";
    } else {
        //konto istnieje
        if (password_verify($password, $userRow['passwordHash'])) {
            //hasło poprawne
            echo "Zalogowano poprawnie <br>";
        } else {
            //hasło niepoprawne
            echo "Błędny login lub hasło <br>";
        }
    }
}
if (isset($_REQUEST['action']) && $_REQUEST['action'] == "register") {
//rejestracja nowego użytkownika
    $db = new mysqli("localhost", "root", "", "autobusy");
    $email = $_REQUEST['email'];
    //wyczyść email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $password = $_REQUEST['password'];
    $passwordRepeat = $_REQUEST['passwordRepeat'];

    if($password == $passwordRepeat) {
        //hasła są identyczne - kontynuuj
        $q = $db->prepare("INSERT INTO uzytkownicy VALUES (NULL, ?, ?)");
        $passwordHash = password_hash($password, PASSWORD_ARGON2I);
        $q->bind_param("ss", $email, $passwordHash);
        $result = $q->execute();
        
        if($result) {
            echo "Konto utworzono poprawnie"; 
        } else {
            echo "Coś poszło nie tak!";
        }
    } else {

        echo "Hasła nie są zgodne - spróbuj ponownie!";
    }
}



?>

<h1>Zaloguj się</h1>
    <form method="post">
        <label for="emailInput">Nazawa użytkownika:</label>
        <input type="text" name="email" id="emailInput">
        <label for="passwordInput">Hasło:</label>
        <input type="password" name="password" id="passwordInput">
        <input type="hidden" name="action" value="login">
        <input type="submit" value="Zaloguj">
    </form>
    <h1>Zarejestruj się</h1>
    <form method="post">
        <label for="emailInput">Email:</label>
        <input type="email" name="email" id="emailInput">
        <label for="passwordInput">Hasło:</label>
        <input type="password" name="password" id="passwordInput">
        <label for="passwordRepeatInput">Hasło ponownie:</label>
        <input type="password" name="passwordRepeat" id="passwordRepeatInput">
        <input type="hidden" name="action" value="register">
        <input type="submit" value="Zarejestruj">
    </form>
</body>
</html>