<?php
    function getMessages(){
        global $db;
        $resultats = $db->query("SELECT * FROM chat ORDER BY created_at DESC LIMIT 10");
        $messages = $resultats->fetchAll();
        echo json_encode($messages);
    }
?>