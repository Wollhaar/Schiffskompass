<?php

include_once 'Model/Kompass.php';
include_once 'Controller/kompassController.php';

$kompass = new \Controller\kompassController();
$kurs = $kompass->dreheRuder();
$gradZahl = $kurs->getGrad();
$alt = $gradZahl;

if(isset($_GET)){
    $gradZahl = $_GET['grad'];
}

$kurs = $kompass->dreheRuder($gradZahl);

include_once 'View/index.php';

