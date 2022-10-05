<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="oefenen">
    <form class="derdeForm" method="post" action="">
        <label>Naam:
            <input type="text" name="name">
        </label><br><br>
        <label>Wat is je film keuze:<br>
            <input type="radio" name="movie" value="1">Spiderman<br>
            <input type="radio" name="movie" value="2">Avatar<br>
            <input type="radio" name="movie" value="3">No exit<br>
            <input type="radio" name="movie" value="4">Prisoners<br>
        </label><br>
        <input type="submit" name="verzenden" value="Verzenden">
        <br>
    </form>
</div>





<?php
if(isset($_POST['verzenden'])){
    if($_POST['name'] == NULL || $_POST['movie'] == NULL ){
        echo "Er is niet alles ingevuld";
    }else{
        session_start();
        $name = $_POST['name'];
        $_SESSION['name'] = $name;
        $movie = $_POST['movie'];
        switch ($movie){
            case "1": $_SESSION['movie'] = "Spiderman"; break;
            case "2": $_SESSION['movie'] = "Avatar"; break;
            case "3": $_SESSION['movie'] = "No exit"; break;
            case "4": $_SESSION['movie'] = "Prisoners"; break;
            default: echo "Er is geen mogelijkheid ingevuld"; break;
        }
        header('Location: movie.php');
    }
}
?>
















<h1>Kiezen</h1>
<p>Maak een keuze uit een lijst van films. </p>
<p>Wanneer je op de knop drukt:</p>
<ul>
    <li>Controleert je programma of je je naam en een radio button ingedrukt hebt. Zo niet, geef de melding: Vul alle velden in!</li>
</ul>
</p>      <br>

<p>Wanneer alles ingevuld is:
<ol>
    <li>Zet de naam in een SESSION </li>
    <li>Zet de keuze in een SESSION </li>
    <li>Ga naar een andere pagina </li>
    <li>Laat de naam en de keuze zien door de SESSION's uit te lezen </li>

</ol>
</p>



<h2>FILM:</h2>

<form method='post'>
    <label>Naam: </label>
    <input type='text' name='name'> <br>


    <br>
    <label>Wat is je film keuze: </label> <br>
    <input type='radio' name='movie' value='1'> Spider-Man: No Way Home <br>
    <input type='radio' name='movie' value='3'> Avatar <br>
    <input type='radio' name='movie' value='4'> Don't look up <br>
    <input type='radio' name='movie' value='5'> Jumanji: The Next Level <br>


    <br>

    <input type='submit' name='verzenden' value='Keuze verzenden'>
</form>



</body>
</html>
