<?php
//    var_dump($_POST);
    include("logincheck.php");

    include("connect.php");
?>
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
<body>
    <?php include("menu.php"); ?>
    <header>
            <form action="" method="post">
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Verstuur</button>
            </form>
    </header>
</body>
</html>
