<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="oefenen">
    <form class="tweedeForm" method="post" action="">
        <label>Gebruikersnaam:
            <input type="text" name="username">
        </label><br>
        <label>Wachtwoord:
            <input type="text" name="password">
        </label><br>
        <input type="submit" name="verzenden" value="Verzenden">
        <br>
    </form>
</div>



<?php
if(isset($_POST['verzenden'])){
    if($_POST['username'] == NULL || $_POST['password'] == NULL ){
        echo "Er is niet alles ingevuld";
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = filter_input(INPUT_POST, 'username', FILTER_VALIDATE_EMAIL);
        if(!$username){
            echo "Vul een email in";
        }else {
            if ($username == "example@gmail.com" || $password == "pass") {
                header("Location: admin.php");
            } else {
                echo "Verkeerde email of wachtwoord ingevoerd";
            }
        }
    }
}
?>



<h1>De opdracht</h1>
<p>Wanneer je op de inlog knop drukt:
<ul>
    <li>Controleert je programma of je alle velden ingevuld hebt. Zo niet, geef de melding: Vul alle velden in!</li>
    <li>Controleert je programma of je gebruikersnaam een email is. Zo niet, geef de melding: Vul een email als gebruikersnaam in! </li>
</ul>
</p>      <br>

<p>Wanneer alles ingevuld is en je gebruikersnaam een email is:
<ol>
    <li>Als je gebruikersnaam: test@gmail.com en je wachtwoord: 1234 is => Je gaat naar de admin pagina"</li>
    <li>Als je gebruikersnaam en/ of wachtwoord niet kloppen: Geef de melding: "Uw gebruikersnaam en/of wachtwoord is niet bekend bij ons."</li>
</ol>
</p>


<h2>Inloggen</h2>

<form method='post'>
    <label>Gebruikersnaam: </label>
    <input type='text' name='username'> <br>

    <label>Wachtwoord: </label>
    <input type='password' name='password'> <br>

    <br>
    <br>



    <input type='submit' name='verzenden' value='Verzenden'>
</form>



</body>
</html>
