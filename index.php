<?php
   
    include("Cliente.php");
    $Cliente1 = new Cliente("João" , 22 , 13661552627);
    $Cliente1->setIdade(30);

    echo($Cliente1);

?>