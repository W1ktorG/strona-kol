<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobook/wybór trasy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="autobus.png" type="image/x-icon">
    <script src="node.js"></script>
</head>
<?php
include 'laczenie.php';  
?>
<body>
    <table class="username">
        <tr style="height: 30px;">
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
                <td width="8%">
                    
                     <br>
                    <form action="wybor_trasy.php" method="get">
                        <label for="trasa">Miasto startu</label>
                            <select name="wybor" id="trasa">

                                <option value="1">Syców</option>
                                <option value="2">Ostrzeszów</option>
                                <option value="3">Kępno</option>

                            </select>
                    </td>
                    <td>
                        <br>
                        <input id="wyslij_trasa" type="submit">
                    </td>
                            <td width="8%">
                                <form action="wybor_trasy.php" method="post">
                                    <label for="trasa2">Miasto końca</label>
                                    <select name="wybor2" id="trasa">
                                        <option value="1">Syców</option>
                                        <option value="2">Ostrzeszów</option>
                                        <option value="3">Kępno</option>


                            </td>
                            <td>
                                <br>
                                <input id="wyslij_do" type="submit">
                            </td>

                    </form>
                </td>

                <td width="8%">
                   <br>
                    <form action="wybor_trasy.php" method="post">
                        <label for="przystanek" >Wybierz przystanek</label>
                            <select name="przystanek" id="przystanek">
                                <option value="1">Syców Dworzec</option>
                                <option value="2">Syców targowisko</option>
                                <option value="3">Syców osiedle</option>
                                <option value="4">Pisarzowice</option>
                                <option value="5">Bałdowice</option>
                                <option value="6">Mąkoszyce</option>
                                <option value="7">Ligota</option>
                                <option value="8">Kobyla Góra Centrum</option>
                                <option value="9">Kobyla Góra osiedle</option>
                                <option value="10">Bierzów</option>
                                <option value="11">Rojów</option>
                                <option value="12">Ostrzeszów ul. Przemysłowa</option>
                                <option value="13">Ostrzeszów ul. Łąkowa</option>
                                <option value="14">Ostrzeszów ul. Powstańców Wlkp.</option>
                                <option value="15">Ostrzeszów ul. Kaliska</option>
                                
                            </select>

                    </form>
                </td>
                <td>
                    <br>
                    <input id="wyslij_przystanek" type="submit">
                </td>
                <td width="8%">
                   <br>
                    <form action="wybor_trasy.php" method="post">
                        <label for="godzina"> Wybierz godzine </label>
                            <select name="godzina" id="godzina">
                                <option value="6:50">6:50</option>
                                <option value="6:52">6:52</option>
                                <option value="6:54">6:54</option>
                                <option value="7:01">7:01</option>
                                <option value="7:03">7:03</option>
                                <option value="7:07">7:07</option>
                                <option value="7:10">7:10</option>
                                <option value="7:14">7:14</option>
                                <option value="7:16">7:16</option>
                                <option value="7:19">7:19</option>
                                <option value="7:21">7:21</option>
                                <option value="7:25">7:25</option>
                                <option value="7:27">7:27</option>
                                <option value="7:29">7:29</option>
                                <option value="7:32">7:32</option>
                            </select>
                    </form>
                </td>
                <td>
                    <br>
                    <input id="wyslij_godzina" type="submit">
                </td>
                
            </tr>
        </table>
        <table id="wynik">
            <th>
                
            </th>
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