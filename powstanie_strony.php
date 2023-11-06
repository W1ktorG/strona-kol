<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobook/aktualności</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="autobus.png" type="image/x-icon">
    <script src="node.js"></script>
</head>
<?php
include 'laczenie.php';    

?>
<body>
    <table class="username">
        <tr height="30px">
            <td id="username">
                <nav id="kontener">
                    <a style="posiotion: relative;right:10%" id="wyloguj" href="index.php">Wyloguj sie</a>
                </nav>
            </td>
        </tr>
    </table>

    <table class="header">
        <tr>
            <td id="menu">
                <img id="logo" src="autobus.png" alt="logo">

            <td id="menu1">
                <a class="a" href="strona_glowna.php">
                    <div>
                        <p>
                            Strona główna
                        </p>
                    </div>
                </a>
            </td>
            
            <td id="menu2">
                
                <a class="a" href="wybor_trasy.php">
                    <div>
                        <p>
                            Wybór trasy
                        </p>
                    </div>
                </a>
            </td>

            <td id="menu3">
                
                <a class="a" href="aktualnosci.php">
                    <div>
                        <p>
                            Aktualności
                        </p>
                    </div>
                </a>
                
            </td>
           
            <td id="menu4">
                
                <a class="a" href="cennik.php">
                    <div>
                        <p>
                            Cennik
                        </p>
                    </div>
                </a>
            </td>  
        </tr>
    </table>

    <table class="main">
        <tr height="100px">
            <td>
                <nav class="kontener">
                    <a id="link" href="aktualnosci.php">Powrót</a>
                </nav>
            </td>
            <td class="text2" width="40%">
                <br>
                19.09.2023 - rozpoczęła się oficjalna praca nad stroną Autobook! Prace potrwają maksymalnie do 11.11.2023. 
                Wtedy będzie można się zarejestrować.
            </td>
            <td style="text-align: right; font-size: medium;">
                <p style="padding-top: 150px;">
                    11.10.2023
                </p>
            </td>
        </tr>
        <tr>
            <td width="30%">

            </td>
            <td width="30%">
                
            </td>
            <td width="30%">

            </td>
        </tr>

    </table>

    <footer>
        <div id="nazwa">
            Nazwa firmy
        </div>
        <div id="nrtel">
            tel 911 911 911
         </div>
    </footer>
</body>
</html>