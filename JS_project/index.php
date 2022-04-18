<?php
session_start();   
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
        
    }
    else{
        echo '<span class="error">Veuillez entrez votre nom</span>';
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Room</title>
    <link rel="stylesheet" href="style/style2.css">
</head>
<body>
    <div id="loginform">
    <p>Entrez votre nom !</p>
    <form action="afficher.php" method="post">
        <label for="name">Nom &mdash;</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
    
</body>
</html>