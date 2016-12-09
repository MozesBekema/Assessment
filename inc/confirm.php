<?php
    var_dump($_POST);
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
                <?php include("button.php")?>
            </form>
    </header>
</body>
</html>
