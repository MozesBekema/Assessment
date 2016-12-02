<?php

    include("logincheck.php");
//    var_dump($_SESSION);
    include("connect.php");
?>
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
<body>
    <?php include("menu.php"); ?>
    <header>
            <form action="confirm.php" method="post">
                <?php
                    echo "Je bent <b>".$_POST['Leerling']."</b> aan het beoordelen, uit klas ".$_SESSION['kerntaken'];
                ?>
                <?php

                ?>
                <input type="range" min="1" max="5" step="1" name="<?php echo ($row['wp_name']);?>">
                <?php

                ?>
                <?php include("button.php")?>
            </form>
    </header>
</body>
</html>
