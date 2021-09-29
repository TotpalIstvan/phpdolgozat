<?php 
$aOldal = 0;
$bOldal = 0;
$aOldalMezo = '';
$bOldalMezo = '';
$hibaUzenet = '';
$terulet = 0;
$kerulet = 0;
$oldalHiba = false;

    if (empty($_SERVER['REQUEST METHOD']) === 'POST') {
    
        $aOldalMezo = $_POST['oldal_a'] ?? '';
        $bOldalMezo = $_POST['oldal_b'] ?? '';
    
        echo 'Kérem adja meg a két oldalt.';
     
    if ($aOldal < 0 || $bOldal < 0) {
        $oldalHiba = true;
        $hibaUzenet = 'Egyik oldal sem lehet negatív.';
        echo $hibaUzenet;

    }elseif ($aOldal === 0 || $bOldal === 0) {
        $oldalHiba = true;
        $hibaUzenet = 'Egyik oldal sem lehet 0.';
        echo $hibaUzenet;
    }else {
        $terulet = $aOldal*$bOldal;
        $kerulet = $aOldal + $bOldal;
        $oldalHiba = false;
        echo 'Sikeres validáció! <br />' + 'terület: ' +$terulet + ' Kerület: ' + $kerulet;
    } 


}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Téglalapos számonkérés</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form method="post">
        <div>
            <label>
                A téglalap egyik oldala: <br />
                <input type='text' name='oldal_a'><br />
            </label>
            <label>
                A téglalap másik oldala:<br />
                <input type='text' name='oldal_b'>  
            </label><br />
            <input type='submit' value='Feldolgoz'>
            <div class='hibauzenet'></div>
        </div>
    </form>
</body>
</html>
<!--
NEVEM: Tótpál István
OSZTÁLYOM: 14S
1. feladatrész:
 - szerepel az űrlapban mindkét oldal bekérése 1 pont/x pont
 - szerepel az oldalban submit gomb: 1 pont/x pont
 - a submit felírata: "feldolgoz" 1 pont/x pont
 - az űrlap POST metódussal küldi tovább a adatokat 1 pont/x pont
 
2. feladatrész:
 - csak akkor fut le a kód, ha a formot elküldted 1 pont/x pont
 - elkészültek a validációk  3 pont/x pont
 - hibaüzenet csak akkor jelenjen meg, ha ténylegesen is történt validációs hiba 1 pont/x pont
 - a "Sikeres" üzenet csak akkor jelenjen meg, ha nincs hiba. Ekkor a form ne jelenjen meg. 1 pont/x pont
 - sikertelen validáció esetén a form-ba töltsük vissza az adatokat 1 pont/x pont
 
3. feladatrész:
 - sikeres az eredmény kiíratása: 3 pont/x pont
 - helyesen számoltad a kerületet, területet: 1 pont/x pont
-->
