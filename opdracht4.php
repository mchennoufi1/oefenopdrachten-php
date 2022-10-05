<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="oefenen">
    <form class="derdeForm" method="post" action="">
        <label>Getal 1:
            <input type="text" name="getal1">
        </label><br>
        <label>Getal 2:
            <input type="text" name="getal2">
        </label><br><br>
        <label>Wat wil je:<br>
            <input type="radio" name="reken" value="1">+<br>
            <input type="radio" name="reken" value="2">-<br>
            <input type="radio" name="reken" value="3">*<br>
            <input type="radio" name="reken" value="4">/<br>
        </label><br>
        <input type="submit" name="verzenden" value="Verzenden">
        <br>
    </form>
</div>





<?php
if(isset($_POST['verzenden'])){
    if($_POST['getal1'] == NULL || $_POST['getal2'] == NULL || $_POST['reken'] == NULL ){
        echo "Er is niet alles ingevuld";
    }else{

        $getal1 = $_POST['getal1'];
        $getal1 = filter_input(INPUT_POST, 'getal1', FILTER_VALIDATE_INT);
        $getal2 = $_POST['getal2'];
        $getal2 = filter_input(INPUT_POST, 'getal2', FILTER_VALIDATE_INT);
        if(!$getal1 || !$getal2) {
            echo "Vul een getal in";
            }else{
            $reken = $_POST['reken'];
            switch ($reken) {
                case "1":
                    $uitkomst = $getal1 + $getal2;
                    echo $uitkomst;
                    break;
                case "2":
                    $uitkomst = $getal1 - $getal2;
                    echo $uitkomst;
                    break;
                case "3":
                    $uitkomst = $getal1 * $getal2;
                    echo $uitkomst;
                    break;
                case "4":
                    $uitkomst = $getal1 / $getal2;
                    $uitkomst = number_format($uitkomst, 2);
                    echo $uitkomst;
                    break;
                default:
                    echo "Er is geen mogelijkheid ingevuld";
                    break;
            }
            }
        }
}
?>




<h1>Rekenmachine</h1>
<p>Maak een rekenmachine die de uitkomst laat zien. </p>
<p>Wanneer je op de uitreken knop drukt:</p>
<ol>
    <li>Controleert je programma of je alle velden ingevuld hebt. Zo niet, geef de melding: Vul alle velden in!</li>
    <li>Controleert je programma of je in de 2 input velden een getal ingevuld hebt. Zo niet, geef de melding: Vul een getal in! </li>
</ol>
</p>      <br>

<p>Wanneer alles ingevuld is en de invoervelden getallen zijn:
<ul>
    <li>Als de aangeklikte radio button + is, optellen van de getallen </li>
    <li>Als de aangeklikte radio button - is, aftrekken van de getallen </li>
    <li>Als de aangeklikte radio button * is, vermenigvuldigen van de getallen </li>
    <li>Als de aangeklikte radio button / is, delen van de getallen. En laat dan de uitkomst zien met 2 cijfers achter de komma! </li>

</ul>
</p>



<h2>Rekenmachine</h2>

<form method='post'>
    <label>Getal 1: </label>
    <input type='number' name='number1'> <br>

    <label>Getal 2: </label>
    <input type='number' name='number2'> <br>

    <br>
    <label>Wat wil je: </label> <br>
    <input type='radio' name='reken' value='op'> + <br>
    <input type='radio' name='reken' value='af'> - <br>
    <input type='radio' name='reken' value='keer'> * <br>
    <input type='radio' name='reken' value='delen'> / <br>


    <br>

    <input type='submit' name='verzenden' value='Uitrekenen'>
</form>



</body>
</html>
