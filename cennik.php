<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobook/cennik</title>
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
            </td>

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

    <table id="wybor">
    <tr>
        <td id="td">
            Wybierz trasę <br>
            <select name="trasy" id="trasy">
                <option value="none">-- Wybierz trasę --</option>
                <option value="sycow_ostrzeszow">Sycow-ostrzeszow</option>
                <option value="kepno_ostrzeszow">Kępno-Ostrzeszów</option>
            </select>
        </td>
        <td id="submit">
            <br>
        </td>
        <td id="wyniki">
            Cena za bilet pojedynczy: <span id="cena_pojedynczy"></span><br>
            Cena za bilet miesięczny: <span id="cena_miesieczny"></span>
        </td>
    </tr>
</table>

<script>
    var trasySelect = document.getElementById("trasy");

    trasySelect.addEventListener("change", function() {
        var selectedOption = trasySelect.options[trasySelect.selectedIndex].value;

        if (selectedOption === "sycow_ostrzeszow") {
            document.getElementById("cena_pojedynczy").textContent = "9.5 PLN";
            document.getElementById("cena_miesieczny").textContent = "178.5 PLN";
        } else if (selectedOption === "kepno_ostrzeszow") {
            document.getElementById("cena_pojedynczy").textContent = "10 PLN";
            document.getElementById("cena_miesieczny").textContent = "190 PLN";
        }
    });
</script>

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