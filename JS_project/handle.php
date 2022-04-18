<?php

include("connexion_base.php");
include("enregistrer.php");
include("recuperer.php");

$task ="read";
    if(array_key_exists("task", $_GET)){
        $task = $_GET['task'];
    }

    if($task=="write"){
        postMessage();
    }else{
        getMessages();
    }
?>