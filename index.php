<?php
    include("inc/connect.php");

    $errorLog = 0;

    if(isset($_GET['action']) && $_GET['action'] == "logout"){
        session_destroy();
         header("Location: index.php");
    }
    if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])){
        
        $username = $_POST['username'];
        $password = sha1(md5($_POST['password']));
        
        $username = filter_var($username, FILTER_SANITIZE_STRING);
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        
        $query = $conn->prepare("SELECT username, roles_id FROM `accounts` WHERE `username` = :username OR `email` = :username AND `password` = :password");
        $query->execute(array('username' => $username, 'password' => $password));
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){ 
            $username = $row['username']; 
            $roles_id = $row['roles_id'];
            $_SESSION['login_user'] = array($username, $roles_id);
        }
    }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <?php include("inc/head.php"); ?>
        
    </head>

    <body style="background-image: url(img/glu.jpg); background-size:cover;">
        <header>
        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                
            </div>
            <div class="mdl-card__supporting-text">
                <?php
                if(!isset($_SESSION['login_user'])){
            ?>
                <form action="" method="POST">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input type="text" name="username" required autocomplete="off" class="mdl-textfield__input">
                        <label class="mdl-textfield__label">Gebruikersnaam</label>
                    </div>
                    </br>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" class="password">
                        <input type="password" name="password" required autocomplete="off" class="mdl-textfield__input">
                        <label class="mdl-textfield__label">Wachtwoord</label>
                    </div>
                    </br>
                     
                <?php
            if ($errorLog == 1){
                echo "<p>Wrong username or password</p>";
            }
                ?>
                    <?php
            }
            else {
               header("Location: inc/opleiding.php");
            }
                    ?>
                
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <button type="submit" name="submit" value="Login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="margin-left: 205px;">Login</button>
            </div>
            </form>
            <a href="#">
            <div class="mdl-card__menu">
                <div id="tt4" class="icon material-icons">share</div>
                <div class="mdl-tooltip" for="tt4">
                    Deel deze website met</br> andere docenten!
                </div>
            </div>
            </a>
        </div>
        </header>
    </body>

    </html>