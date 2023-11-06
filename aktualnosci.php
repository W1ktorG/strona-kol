<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobook/aktualności</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="autobus.png" type="image/x-icon">
    <script src="node.js"></script>
<?php
include 'laczenie.php';
?>
</head>
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

    <table id="aktualnosci">
        
                <a class="a" href="pierwsza_linia.php">3.10.2023 - Dodanie pierwszej linii autobusowej na stronę!</a>
                <a class="a" href="powstanie_strony.php">19.09.2023 - POWSTANIE STRONY!</a>
        
    </table>
        <footer>
            <div id="nazwa">
                Autobook
            </div>
            <div id="nrtel">
                tel 420 911 112
             </div>
        </footer>
        
</body>
</html>