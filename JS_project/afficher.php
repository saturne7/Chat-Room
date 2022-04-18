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
    <link rel="stylesheet" href="style/style.css">
</head>

<body>    
    <header>
        <h1>Chat Room</h1>
        <p class="welcome">Bienvenue, <b><?php echo $_SESSION['name']; ?></b></p>
        <p class="logout"><a id="exit" href="index.php">Se Déconnecter</a></p>
    </header>
    <section class="chat">
        <div class="messages">
            <div class="message">
                <span class="date">23:22</span>
                <span class="author">Mathieu</span> :
                <span class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, harum.</span>
            </div>
            <div class="message">
                <span class="date">23:22</span>
                <span class="author">Mathieu</span> :
                <span class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, harum.</span>
            </div>
            <div class="message">
                <span class="date">23:22</span>
                <span class="author">Mathieu</span> :
                <span class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, harum.</span>
            </div>
            <div class="message">
                <span class="date">23:22</span>
                <span class="author">Mathieu</span> :
                <span class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, harum.</span>
            </div>
        </div>
        <div class="user-inputs">
            <form action="handle.php?task=write" method="POST">
                <input disabled="disables" type="text" id="author" name="author" value="<?php echo $_SESSION['name']?>">
                <input type="text" id="content" name="content" placeholder="Entrez votre message">
                <button type="submit">Envoyer</button>
            </form>
        </div>
        <script src="js/app.js"></script>
    </section>
</body>

</html>
