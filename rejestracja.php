<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="rejestracja.css">
</head>
<body>

    <?php
        include 'laczenie.php';

    if (isset($_REQUEST['action']) && $_REQUEST['action'] == "register") {
    $username = $_REQUEST['email'];
        // ochrona przed SQL wpisywaniem niechcianych rekordów do bazy przez użytkownika
    $username = mysqli_real_escape_string($conn,$username);

    $password = $_REQUEST['password'];
    $passwordRepeat = $_REQUEST['passwordRepeat'];
        // ochrona przed SQL wpisywaniem niechcianych rekordów do bazy przez użytkownika
    $password = mysqli_real_escape_string($conn,$password);
    // sprawdzenie czy podana nazwa użytkownika już istnieje
    $query1 = "SELECT nazwa_uzytkownika FROM uzytkownicy WHERE nazwa_uzytkownika LIKE '$username'";
    $result1 = mysqli_query($conn,$query1);
    if( mysqli_num_rows($result1) == 0)
    {
        if($password == $passwordRepeat) {
            //hasła są identyczne - kontynuuj
            $query = "INSERT uzytkownicy VALUES (null,'$username','$password')";
            $result = mysqli_query($conn,$query);

            if($result) {
                // pomyślna rejestrajca - przekierowanie do logowania
                header("Location: index.php");
            } else {
                // błąd rejestracji
                echo "Coś poszło nie tak!";
            }
        }   else {
                // hasło zostało powtórzone w zły sposób
        echo "Hasła nie są zgodne - spróbuj ponownie!";
        }
    }
    else{
        // zajęta nazwa użytkownika
        echo "Podana nazwa uzytkownika juz istnieje!";
    }
}
        

    ?>
    
        
    <form method="post">

    <div class="bg" aria-hidden="true">
            <div class="bg__dot"></div>
            <div class="bg__dot"></div>
        </div>
    <table id="rejestracja">
    
        <tr id="mlyn">
       
            <td>
            <div class="form__spacer" aria-hidden="true"></div>
            <div class="form__input-container">
                <input
                    aria-label="User"
                    class="form__input"
                    type="text"
                    name="email"
                    id="username"
                    placeholder=" "
                />
                <label class="form__input-label" for="emailInput">Username</label>
            </div>
            </td>
           
        </tr>
        <tr>
            <td>
            <div class="form__input-container">
                <input
                    aria-label="Password"
                    class="form__input"
                    type="password"
                    name="password"
                    id="password"
                    placeholder=" "
                />
                <label class="form__input-label" for="passwordInput">Password</label>
            </div>
            </td>
            
        </tr>
        <tr>
            <td>
            <div class="form__input-container">
                <input
                    aria-label="Password"
                    class="form__input"
                    type="password"
                    name="passwordRepeat"
                    
                    placeholder=" "
                />
                <label class="form__input-label" for="passwordRepeat">Confirm Password</label>
                
            </div>
            </td>
            
        </tr>
        <tr>
            
            <td>
            <div class="form__spacer" aria-hidden="true"></div>
                <input type="hidden" name="action" value="register">
                <input class="form__button" type="submit" value="Zarejestruj">
            </td>
        </tr>
    </table>
</body>
</html>
    