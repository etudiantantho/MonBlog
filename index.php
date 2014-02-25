<?php
require 'Modele.php';

try {
    $billets = getBillets();
    require 'vueAcceuil.php';
}
catch(Exception $e) {
    $messageErreur = $e->getMessage();
    require 'vueErreur.php';
}
