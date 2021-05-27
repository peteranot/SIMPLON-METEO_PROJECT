<?php

    include 'class/class_salutation.php';

    $salut = new salut();


    $reponse = $_POST['reponse'];

    $reponse = $salut->salutation($reponse);
    echo $reponse;

?>
