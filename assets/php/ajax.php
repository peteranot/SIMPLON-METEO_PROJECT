<?php

    include 'class/class_salutation.php';

    $salut = new salut();

	//get reponse
    $reponse = $_POST['reponse'];

    $reponse = $salut->salutation($reponse);
    echo $reponse;

?>
