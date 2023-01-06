<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Restauracja Kulinaria.pl</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="baner">
     <h2>Restauracja Kulinaria.pl Zaprasza!</h2>
    </div>

       <div id="lewy">
        <p>Dania mięsne zamówisz już od 
<?php
// utworzenie zmiennych polaczeniowych

$server = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'baza2';

$conn = mysqli_connect($server,$user,$passwd,$dbname);

$zapytanie = "SELECT MIN(cena) FROM dania WHERE `typ`='2';";
$sql = mysqli_query($conn,$zapytanie);

while($wynik = mysqli_fetch_row($sql)){
    echo  $wynik[0] . " złotych"."</p>";
}

?>
        <img src="menu.jpg" alt="Pyszne spaghetti">
        <a href="menu.jpg"> <br />Pobierz obraz</a>
       </div>

         <div id="srodkowy">
          <h3>Przekąski</h3>
<?php

$zapytanie2 = "SELECT `id`, `nazwa`, `cena` FROM `dania` WHERE `typ`='3'";
$sql2 = mysqli_query($conn,$zapytanie2);

while($wynik2 = mysqli_fetch_row($sql2)){
    echo "<p>". $wynik2[0]. " ". $wynik2[1]. " " . $wynik2[2] . "</p>"."<br>";
}
?>
         </div>

            <div id="prawy">
             <h3>Napoje</h3>
<?php

$zapytanie3 = "SELECT `id`, `nazwa`, `cena` FROM `dania` WHERE `typ`='4'";
$sql3 = mysqli_query($conn,$zapytanie3);

while($wynik3 = mysqli_fetch_row($sql3)){
    echo "<p>". $wynik3[0] ." ". $wynik3[1] ." ". $wynik3[2]. "</p>". "<br>";
}
mysqli_close($conn);
?>
            </div>

               <div id="stopka">
                Stronę internetową opracował: <i>000000000</i>
               </div>
</body>
</html>