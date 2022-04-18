<?php
    function postMessage(){
        global $db;
        if(!array_key_exists('author', $_POST) || !array_key_exists('content', $_POST)){
            echo json_encode(["status" => "error","message" => "Un champ n'a pas ete correctement entre"]);
            return;
        }
        $author = $_POST['author'];
        $content = $_POST['content'];
        $query =$db->prepare('INSERT INTO chat SET author = :author, content = :content, created_at = NOW()');
        $query->execute([
            'author' => $author,
            'content' => $content,
        ]);
        echo json_encode(["status" => "success"]);
    }
?>