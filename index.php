<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="logowanie.css">
    
</head>
<form action="index.php" method="post">
<body>
<?php
include 'login3.php';
?>        

    
 <div class="bg" aria-hidden="true">
            <div class="bg__dot"></div>
            <div class="bg__dot"></div>
        </div>
        <div class="form__spacer" aria-hidden="true"></div>
        <form class="form" autocomplete="off">
            <div class="form__icon" aria-hidden="true"></div>
            <div class="form__input-container">
                <input
                    aria-label="User"
                    class="form__input"
                    type="text"
                    name="username"
                    id="username"
                    placeholder=" "
                />
                <label class="form__input-label" for="username">Username</label>
                    
            </div>
            <div class="form__input-container">
                <input
                    aria-label="Password"
                    class="form__input"
                    type="password"
                    name="password"
                    id="password"
                    placeholder=" "
                />
                <label class="form__input-label" for="password">Password</label>
            </div>
            <div class="form__spacer" aria-hidden="true"></div>
            <button class="form__button">Log in</button>
            <a class="form__button" href="rejestracja.php">Register</a>
        </form>
        
    </body>  
        

</table>    
</body>
</html>