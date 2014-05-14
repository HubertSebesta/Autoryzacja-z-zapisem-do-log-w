<?php
// importuję
require_once('class/Autentykacja.class.php');


//na podstawie klasy Autentykacja stworz zmienną obiektową ( „obiekt”) o nazwie $komponent
$komponentAutentykacji = new Autentykacja();

if ($komponentAutentykacji->test($_POST['login'],$_POST['haslo'])){
    echo "witaj w systemie";
}else{
    echo "zly login lub haslo!";
}


?>