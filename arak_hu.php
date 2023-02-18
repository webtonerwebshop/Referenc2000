<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bacchus Panzió | Áraink</title>
    <meta name="title" content="Bacchus Panzió | Áraink">
    <meta name="description" content="Bacchus Panzió Eger aktuális áraink | Napi szobaárak | Szolgáltatás árak | Akciós ajánlatok">

    <link rel="shortcut icon" href="Commonfiles/bacchus_logo.png" type="image/png">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
    <link rel="stylesheet" href="Commonfiles/commonstyle.css">
    <link rel="stylesheet" href="CSS/arakstyle.css">


    <script src="Commonfiles/commonlogic.js"></script>
    <script src="JS/araklogic.js"></script>

</head>
<body>
    <header>
        <svg xmlns="http://www.w3.org/2000/svg" class="toggle" viewBox="0 0 448 512" onclick="navdisplay()"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg></li>



        <a class="bacchus_logo" href="index.html">
            <img src="Commonfiles/bacchus_logo.png">
        </a>

        <div id="navbar">
            <ul class="menu">
                <li class="item"><a href="index.html">Főoldal</a></li>
                <li class="item has-submenu" onclick="navdisplay_rooms()"><a tabindex="0">Szobáink<span class="downicon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 125.48 81.21">
                      <path d="M16.33,0H109.14c14.34,0,21.69,17.18,11.79,27.55l-46.41,48.61c-6.42,6.73-17.16,6.73-23.58,0L4.54,27.55C-5.36,17.18,1.99,0,16.33,0Z"/>
                  </svg></span></a>
                    <ul class="submenu" id="rooms">
                        <li class="subitem"><a href="standard_hu.html">Standard</a></li>
                        <li class="subitem"><a href="superior_hu.html">Superior</a></li>
                        <li class="subitem"><a href="superiorplusz_hu.html">Superior plusz</a></li>
                        <li class="subitem"><a href="apartman_hu.html">Apartman</a></li>
                    </ul>
                </li>
                
                <li class="item has-submenu" onclick="navdisplay_services()"><a tabindex="0">Szolgáltatásaink<span class="downicon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 125.48 81.21">
                      <path d="M16.33,0H109.14c14.34,0,21.69,17.18,11.79,27.55l-46.41,48.61c-6.42,6.73-17.16,6.73-23.58,0L4.54,27.55C-5.36,17.18,1.99,0,16.33,0Z"/>
                  </svg></span></a>
                    <ul class="submenu" id="services">
                        <li class="subitem"><a href="wellness_hu.html">Wellness</a></li>
                        <li class="subitem"><a href="etterem_hu.html">Étterem</a></li>
                        <li class="subitem"><a href="rendezvenyek_hu.html">Rendezvények lebonyolítása</a></li>
                        <li class="subitem"><a href="egyeb_hu.html">Egyéb</a></li>
                    </ul>
                </li>

                <li class="item"><a href="arak_hu.html">Áraink</a></li>

                <li class="item"><a href="galeria_hu.html">Galéria</a></li>

                <li class="item"><a href="kapcsolat_hu.html">Kapcsolat</a></li>


            </ul>
        </div>
    </header>


    <div id="iconbar">
        <a href="https://www.facebook.com/profile.php?id=100064209871832" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>

        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></a>

        <a href="">
            <img src="Commonfiles/en_flag.png"></a>

        <a href="">
            <img src="Commonfiles/de_flag.png"></a>




    </div>


    <main>






        <img id="openingImg" src="Images/Main/openingimg.png">


        <div class="curve-after" id="segment1">
            <div id="welcomebox">
                <h1>Áraink</h1>
            </div>


            <div class="cards-container">
                <div class="card light">

                    <h1>Szobaáraink 2023</h1>



                    <table id="roomprices">



                        <tr id="tablehead">
                            <th></th>
                            <th>Elő és utószezon</th>
                            <th>Főszezon</th>
                        </tr>
                        <tr id="roomprice-explanation">
                            <td></td>
                            <td>2023.01.02. - 03.15.</td>
                            <td>2023.03.15. - 09.30.</td>
                        </tr>
                        <tr>
                            <td>Kétágyas Standard szoba</td>
                            <td>    <?php 


$host = "localhost";
$dbname = "data";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);




$sql = "SELECT value FROM `prices` WHERE name = standard";


mysqli_stmt_execute($sql);


$result = mysqli_stmt_get_result($sql);



mysqli_stmt_close($stmt);
mysqli_close($conn);


?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Egyágyas Standard szoba</td>
                            <td>18.000.-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kétágyas Superior szoba</td>
                            <td>30.000.-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Egyágyas Superior szoba</td>
                            <td>22.000.-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Superior plusz szoba</td>
                            <td>35.000.-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Apartman 2 fő részére</td>
                            <td>38.400.-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pótágyak (1 fő részére)</td>
                            <td>8.000.-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pótágy Apartman (1 fő részére)</td>
                            <td>10.000.-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kisállat</td>
                            <td>3.000.-/éj</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Félpanzió</td>
                            <td>5.000.-/fő/alkalom</td>
                            <td></td>
                        </tr>
                    </table>

                    <small>Az árak forintban, 1 éjszakára értendőek.</small>












                </div>
    





    
            </div>

        </div>

        <br>
        <br>
        <br>
        <br>
        <br>


        <div class="cards-container">
            <div class="card dark">

                <h1>Egyéb, szobákkal kapcsolatos árak</h1>



                <table id="roomdetails">




                    <tr>
                        <td>Idegenforgalmi adó (18 éves kor felett)</td>
                        <td>580.- Ft/fő/éj</td>
                    </tr>
                    <tr>
                        <td>Zárt parkoló vagy mélygarázs használata</td>
                        <td>1.500.- Ft/autó/éj</td>
                    </tr>
                    <tr>
                        <td>Egyes szobáink légkondicionálóval felszereltek. A klíma ára:</td>
                        <td>2.000.- Ft/szoba/éj</td>
                    </tr>
                    <tr>
                        <th>Gyermekkedvezmények:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><b>0-4 éves</b>  kor között a szülőkkel közös szobában elhelyezve</td>
                        <td>Ingyenes</td>
                    </tr>
                    <tr>
                        <td><b>4-6 éves</b> kor között a szülőkkel közös szobában történő elhelyezés esetén</td>
                        <td>Pótágy árának 25%-a</td>
                    </tr>
                    <tr>
                        <td><b>6-14 éves</b> kor között a szülőkkel közös szobában történő elhelyezés esetén</td>
                        <td>Pótágy árának 50%-a </td>
                    </tr>

                    <tr>
                        <td><b>14 éves kor</b> felett a szülőkkel közös szobában történő elhelyezés esetén</td>
                        <td>Felnőtt pótágy árak érvényesek</td>
                    </tr>

                </table>













            </div>







        </div>

   

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>



        <div class="curve-before-after" id="segment1">


            <div class="cards-container">
                <div class="card light">

                    <h1>Szolgáltatás árak</h1>



                    <table id="servicefees">




                        <tr>
                            <td>Wellness használat (minimum 2 fő)</td>
                            <td>2.500.- Ft/óra/fő</td>
                        </tr>
                        <tr>
                            <td>Éttermünkben a 3 fogásos menü ára</td>
                            <td>4.000,- Ft/fő</td>
                        </tr>
                        <tr>
                            <td>Éttermünkben a 2 fogásos menü ára</td>
                            <td>3.500,- Ft/fő</td>
                        </tr>
                        <tr>
                            <td>Egyes szobáink légkondicionálóval felszereltek. A klíma ára:</td>
                            <td>2.000.- Ft/szoba/éj</td>
                        </tr>
                        <tr>
                            <th>Gyermekkedvezmények:</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><b>0-4 éves</b>  kor között a szülőkkel közös szobában elhelyezve</td>
                            <td>Ingyenes</td>
                        </tr>
                        <tr>
                            <td><b>4-6 éves</b> kor között a szülőkkel közös szobában történő elhelyezés esetén</td>
                            <td>Pótágy árának 25%-a</td>
                        </tr>
                        <tr>
                            <td>Rendezvény lebonyolítás</td>
                            <td>Előzetes egyeztetés alapján</td>
                        </tr>
    
                        <tr>
                            <td>Konferenciaterem használat</td>
                            <td>Előzetes egyeztetés alapján</td>
                        </tr>
    
                    </table>
    



                </div>
    





    
            </div>

        </div>



        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>





    </main>








<footer>



        <p>
            Baratim Kft. 2023 ©
            <br>
            Minden jog fenntartva!
            <br>
            Készítette: Eördögh Döme
        </p>

        <div id="socialicons">


        <a href="tel:+36 36 428 950">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
            +36 36 428 950
        </a>
        
        

        <a href="mailto:bacchuspanzio@t-online.hu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
            bacchuspanzio@t-online.hu
        </a>

        

        <a href="https://goo.gl/maps/npfFQoNSEsL5QTjp8">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
        3300 Eger, Szépasszony-völgy u. 29.
        </a>

        <a href="https://www.facebook.com/profile.php?id=100064209871832">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
            Bacchus Panzió
        </a>

        </div>



        

    </footer>




    <upicon id="upicon">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
        </a>


    </upicon>



</body>
</html>