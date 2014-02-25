<?php
//renvoie la liste de tous les billets, triés pas id decroissant
function getBillets() {
    $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root', '');
    $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
        . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
        . ' order by BIL_ID desc');
    return $billets;
}
// effectue la connexion a la bdd
function getBdd()
{
    $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));   
    return $bdd;
}
