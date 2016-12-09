<?php session_start();
    include("inc/connect.php");

    $errorLog = 0;

    if(isset($_GET['action']) && $_GET['action'] == "logout"){
        session_destroy();
         header("Location: index.php");
    }
    if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = filter_var($username, FILTER_SANITIZE_STRING);
        $password = filter_var($password, FILTER_SANITIZE_STRING);

        $query = $conn->prepare("SELECT username, roles_id, name FROM `accounts` WHERE `username` = :username AND `password` = :password");
        $query->execute(array('username' => $username, 'password' => $password));

        $row = $query->fetch(PDO::FETCH_ASSOC);

        if($row != false) {
            $_SESSION['login_user'] = $row;
            header("Location: inc/opleiding.php");
        }
        else {
            $errorLog = 1;
        }
    }
?>
    <!DOCTYPE html>
    <html>
        <head>
            <link href="css/assessment.css" rel="stylesheet" type="text/css" />
        </head>
        <?php include("inc/head.php"); ?>
    <body>
        <header>
            <div class="card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Assessment Beoordeling GLU</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <?php
                        if(!isset($_SESSION['login_user'])){
                    ?>
                    <form action="index.php" method="POST">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input type="text" class="mdl-textfield__input" name="username" required autocomplete="off">
                            <label class="mdl-textfield__label">Gebruikersnaam</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-top:-20px;">
                            <input type="password" class="mdl-textfield__input" name="password" required autocomplete="off">
                            <label class="mdl-textfield__label">Wachtwoord</label>
                        </div>
                    <?php
                        if ($errorLog == 1){
                            echo "<p>Verkeerde gebruikersnaam of wachtwoord, probeer het opnieuw</p>";
                        }
                    ?>
                    <?php
                    }
                    ?>
                    <div class="mdl-card__actions mdl-card--border">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="submit" value="Login" style="margin-left:216px;">Login</button>
                    </div>
                    </form>
                </div>
            </div>
        </header>
    </body>

    </html>
