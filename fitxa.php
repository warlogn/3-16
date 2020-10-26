<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'Diplomata';
            font-style: normal;
            font-weight: 400;
            src: local('Diplomata'), local('Diplomata-Regular'), 
            url(https://fonts.gstatic.com/s/diplomata/v8/8UgOK_RUxkBbV-q561I6kFtXRa8TVwTICgirnJhmVJw.woff2) 
            format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, 
            U+20AC, U+2212, U+2215;
        }
        .wide-font {
             font-family: 'Diplomata', cursive;
             position:absolute; 
             font-size: 45px;
             text-align: center; 
        }
    </style>
</head>
<body>
<?php
include 'funcs.php';
session_start();
//error_reporting(0);

if (empty($_GET['id'])) {
    header("Location:index.php");
} else {
    getInfo($_GET['id']);
}
?>

<form action='server.php' method='post'>
    <!-- imatge -->
    <img src='static/fitxaPJ.png' style="width:850px; height:630px;" >

    <!-- Nombre -->
    <input type='text' name='nombre' value='<?php echo $_SESSION['fitxa']['nombre']?>' 
    size="30px" style="position:absolute; left:99px; top:60px;">

    <!-- reputacion -->
    <input type='text' name='reputacion' value='<?php echo $_SESSION['fitxa']['reputacion']?>' 
    size="30px" style="position:absolute; left:117px; top:90px;">

    <!-- rango -->
    <input type='text' name='rango' value='<?php echo $_SESSION['fitxa']['rango']?>' 
    size="30px" style="position:absolute; left:80px; top:120px;">

    <!-- total -->
    <input type='text' name='total' value='<?php echo $_SESSION['fitxa']['total']?>' 
    size="33px" style="position:absolute; left:70px; top:205px;">

    <!-- estaMision -->
    <input type='text' name='estamision' value='<?php echo $_SESSION['fitxa']['estamision']?>' 
    size="26px" style="position:absolute; left:118px; top:235px;">

    <!-- Hecho un desastre -->
     <input type='checkbox' name='hechoundesastre' value='<?php echo $_SESSION['fitxa']['hechoundesastre']?>'
    style="position:absolute; left:133px; top:303px;">

    <!-- Tullido -->
    <input type='checkbox' name='tullido' value='<?php echo $_SESSION['fitxa']['tullido']?>'
    style="position:absolute; left:133px; top:325px;">

    <!-- Muerto -->
    <input type='checkbox' name='muerto' value='<?php echo $_SESSION['fitxa']['muerto']?>'
    style="position:absolute; left:118px; top:350px;" >

    <!-- Armadura -->
    <input type='checkbox' name='armadura' value='<?php echo $_SESSION['fitxa']['armadura']?>'
    style="position:absolute; left:221px; top:341px;">

    <!-- Drogas -->
    <input type='checkbox' name='drogas' value='<?php echo $_SESSION['fitxa']['drogas']?>'
    style="position:absolute; left:312px; top:341px;">

    <!-- cualidad1 -->
    <input type='text' name='cualidad1' value='<?php echo $_SESSION['fitxa']['cualidad1']?>' 
    size="33px" style="position:absolute; left:582px; top:94px;">

    <!-- cualidad2 -->
    <input type='text' name='cualidad2' value='<?php echo $_SESSION['fitxa']['cualidad2']?>' 
    size="33px" style="position:absolute; left:582px; top:122px;">

    <!-- cualidad3 -->
    <input type='text' name='cualidad3' value='<?php echo $_SESSION['fitxa']['cualidad3']?>' 
    size="33px" style="position:absolute; left:582px; top:151px;">

    <!-- cualidad4 -->
    <input type='text' name='cualidad4' value='<?php echo $_SESSION['fitxa']['cualidad4']?>' 
    size="33px" style="position:absolute; left:582px; top:180px;">

    <!-- cualidad5 -->
    <input type='text' name='cualidad5' value='<?php echo $_SESSION['fitxa']['cualidad5']?>' 
    size="33px" style="position:absolute; left:582px; top:209px;">

    <!-- defecto1 -->
    <input type='text' name='defecto1' value='<?php echo $_SESSION['fitxa']['defecto1']?>'
    size="33px" style="position:absolute; left:582px; top:268px;">

    <!-- defecto2 -->
    <input type='text' name='defecto2' value='<?php echo $_SESSION['fitxa']['defecto2']?>'
    size="33px" style="position:absolute; left:582px; top:297px;">

    <!-- defecto3 -->
    <input type='text' name='defecto3' value='<?php echo $_SESSION['fitxa']['defecto3']?>'
    size="33px" style="position:absolute; left:582px; top:325px;">

    <!-- defecto4 -->
    <input type='text' name='defecto4' value='<?php echo $_SESSION['fitxa']['defecto4']?>'
    size="33px" style="position:absolute; left:582px; top:354px;">

    <!-- arma1 -->
    <input type='text' name='arma1' value='<?php echo $_SESSION['fitxa']['arma1']?>'
    size="22px" style="position:absolute; left:15px; top:422px;">

    <!-- arma2 -->
    <input type='text' name='arma2' value='<?php echo $_SESSION['fitxa']['arma2']?>'
    size="22px" style="position:absolute; left:15px; top:450px;">

    <!-- arma3 -->
    <input type='text' name='arma3' value='<?php echo $_SESSION['fitxa']['arma3']?>'
    size="22px" style="position:absolute; left:15px; top:479px;">

    <!-- arma1CC -->
    <input type='text' name='arma1CC' value='<?php echo $_SESSION['fitxa']['arma1CC']?>'
    size="4px" style="position:absolute; left:215px; top:422px;">

    <!-- arma2CC -->
    <input type='text' name='arma2CC' value='<?php echo $_SESSION['fitxa']['arma2CC']?>'
    size="4px" style="position:absolute; left:215px; top:450px;">

    <!-- arma3CC -->
    <input type='text' name='arma3CC' value='<?php echo $_SESSION['fitxa']['arma3CC']?>'
    size="4px" style="position:absolute; left:215px; top:479px;">

    <!-- peleaCC -->
    <input type='text' name='peleaCC' value='<?php echo $_SESSION['fitxa']['peleaCC']?>'
    size="4px" style="position:absolute; left:215px; top:510px;">

    <!-- arma1CD -->
    <input type='text' name='arma1CD' value='<?php echo $_SESSION['fitxa']['arma1CD']?>'
    size="4px" style="position:absolute; left:325px; top:422px;">

    <!-- arma2CD -->
    <input type='text' name='arma2CD' value='<?php echo $_SESSION['fitxa']['arma2CD']?>'
    size="4px" style="position:absolute; left:325px; top:450px;">

    <!-- arma3CD -->
    <input type='text' name='arma3CD' value='<?php echo $_SESSION['fitxa']['arma3CD']?>'
    size="4px" style="position:absolute; left:325px; top:479px;">

    <!-- arma1LD -->
    <input type='text' name='arma1LD' value='<?php echo $_SESSION['fitxa']['arma1LD']?>'
    size="4px" style="position:absolute; left:425px; top:422px;">

    <!-- arma2LD -->
    <input type='text' name='arma2LD' value='<?php echo $_SESSION['fitxa']['arma2LD']?>'
    size="4px" style="position:absolute; left:425px; top:450px;">

    <!-- arma3LD -->
    <input type='text' name='arma3LD' value='<?php echo $_SESSION['fitxa']['arma3LD']?>'
    size="4px" style="position:absolute; left:425px; top:479px;">

    <!-- HC -->
    <input type="text" name='HC' value='<?php echo $_SESSION['fitxa']['HC']?>'
    class="wide-font" style="left:450px; top:90px; height:65px; width: 65px;" value="3">

    <!-- HFC -->
    <input type="text" name='HFC' value='<?php echo $_SESSION['fitxa']['HFC']?>' 
    class="wide-font" style="left:450px; top:205px; height:65px; width: 65px;" value="7">

    <!-- Equipo, Medallas y Notas -->
    <input type="text" name='nota' value='<?php echo $_SESSION['fitxa']['nota']?>'
    style="position:absolute; left:540px; top:450px; height:300px; width: 300px;">

    <input type="submit" name='Guarda' value="Guarda" style="position:absolute; left:950px; top:60px;">
</form>
</body>
</html>