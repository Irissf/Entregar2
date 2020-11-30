<?php

require_once("Vigues.php");
require_once("Extranjero.php");
require_once("Noria.php");


$noria = new Noria();

$vigues1 = new Vigues(18, "Pippa Viguesa", "21435433G", true);
$noria->inicioViaje($vigues1);
echo "<br>";
$vigues2 = new Vigues(2, "Will Vigues", "0", false);
$noria->inicioViaje($vigues2);
echo "<br>";
$vigues3 = new Vigues(43, "Shanon Viguesa", "1111111", false);
$noria->inicioViaje($vigues3);
echo "<br>";
$vigues4 = new Vigues(30, "John Vigues", "12454338G", true);
$noria->inicioViaje($vigues4);
echo "<br>";
$extranjero1 = new Extranjero(61, "Sota", "54511454K");
$noria->inicioViaje($extranjero1);
echo "<br>";
$extranjero2 = new Extranjero(5, "Caballo", "0");
$noria->inicioViaje($extranjero2);
echo "<br>";

$noria->finViaje($vigues2);
echo "<br>";
echo "<br>Lista de pasajeros en la noria:<br>";
$noria->listarPasajeros();

$extranjero3 = new Extranjero(44, "Rey", "54a54123E");
$noria->inicioViaje($extranjero3);
echo "<br>";

$noria->finViaje($vigues1);

echo "<br>";
$extranjero4 = new Extranjero(25, "As", "5A5324J");
$noria->inicioViaje($extranjero4);
echo "<br>";
$noria->finViaje($extranjero1);
echo "<br>";
$noria->finViaje($vigues4);
echo "<br>======================================================<br>";

$extranjero7 = new Extranjero(23, "Anubis", "11111111J");
$noria->inicioViaje($extranjero7); // este entra
echo "<br>";
$extranjero8 = new Extranjero(23, "Ra", "11111111J");
$noria->inicioViaje($extranjero8);
echo "<br>";

$noria->inicioViaje($extranjero4); //lo intenta pero dni igual que el otro terrorista.
echo "<br>======================================================<br>Menores:<br>";
$noria->listarMenores();
echo "<br>======================================================<br>Vigueses:<br>";
$noria->listarVigueses();
echo "<br>======================================================<br>Pasajeros:<br>";
$noria->listarPasajeros();
echo "<br>======================================================<br>";
$noria->beneficioViaje();
$noria->mostrarGenteTotal();
