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
            <link href="css/assessment.css" rel="stylesheet" type="text/css" />
        </head>
    <body>
        <header style="margin-top:-60px;">
                <?php
                if(!isset($_SESSION['login_user'])){
            ?>
                <form action="inc/opleiding.php" method="POST">
                        <input type="text" name="username" placeholder="username" required autocomplete="off">

                    </div>
                    </br>
                        <input type="password" name="password" placeholder="password" required autocomplete="off">
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
                <button type="submit" name="submit" value="Login" style="margin-left:128px;">Login</button>
            </form>
        </header>
    </body>

    </html>
