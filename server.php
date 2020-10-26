<?php

include('funcs.php');
require('const.inc.php');
session_start();


$id = $_SESSION['fitxa']['id'];
$dom = new DOMDocument();
$dom->load(DATA);
$root = $dom->documentElement;
$personatges = $root->getElementsByTagName('pj');

if (isset($_POST['Guarda'])) {
    foreach ($personatges as $pj) {
        if ($pj->getAttribute('id') == $id) {
            $pj_orig = $pj;
            echo 'entrem a modificar ' . $pj->getElementsByTagName('nombre')->item(0)->textContent;
            foreach (COLUMNS as $col) {
                //echo $pj->getElementsByTagName($col)->item(0)->textContent;
            }
            echo '<br> nous valors <br>';
            foreach (COLUMNS as $col) {
                //echo '<br>' . $_POST[$col];
                $pj->getElementsByTagName($col)->item(0)->nodeValue = $_POST[$col];
                $_SESSION['fitxa'][$col] = $_POST[$col];
            }
            $root->replaceChild($pj, $pj_orig);
        }
    }
}
echo $dom->saveXML();
$dom->save(DATA);

//header("Location:fitxa.php");
