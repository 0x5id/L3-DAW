<?php

    //Je récupère les infos du qcm dans la bdd
    include("../Model/Model.php");
    $_pdo = Model::getBDD();
    
    $qcm =$_pdo->getQCM($_REQUEST['idQ']);

    $qcm = simplexml_load_file('QCM/qcm'.$qcm['cours'].'.xml');
    
    
    include("Vue/qcm.php");

?>
