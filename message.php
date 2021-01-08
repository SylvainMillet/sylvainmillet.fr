<!DOCTYPE html>


<HTML lang=FR>

<HEAD>

<link href="./style/style.css" rel="stylesheet" type="text/css">

</HEAD>

<BODY>


<?php
    $age=0;
    $age=(int)$_POST['age'];
    $name=htmlspecialchars($_POST['name']);

    if ((strcasecmp($name,"Marc")==0) and ($age==45)) {
       echo nl2br(" M agnifique regard aspirant dans les abysses tel le maelstro M  \r\n
       A dorable sourire plein de tendresse qui m'illumin A\r\n
       R avissant visage qui a pu me touche R \r\n
       C harmant homme dont on tombe accro C\n \n 
       
       I miss you... Rappelle-moi je t'en pries... \n");

    }
    else {
        echo ("Joyeux ". ($age+1) . "ème anniversaire en 2021 cher " . $name);

    }


?>

</BODY>

</HTML>