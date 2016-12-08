<?php

    include("logincheck.php");
//    var_dump($_SESSION);
    include("connect.php");
    $klas = $conn->prepare("SELECT klas_name, id FROM `klas` WHERE id = :id");
    $klas->execute(array('id' => $_SESSION['klassen']));
    $row = $klas->fetch(PDO::FETCH_ASSOC);
//    var_dump($row['klas_name']);
?>
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
<body>
    <?php include("menu.php"); ?>
    <header>
            <form action="confirm.php" method="post">
                <?php
                    echo "Je bent <b>".$_POST['Leerling']."</b> aan het beoordelen, uit klas ".$row['klas_name'];
                ?>
                <?php

                ?>
                <input type="range" min="1" max="5" step="1" name="<?php echo ($row['klas_name']);?>">
                <?php

                ?>
                <?php include("button.php")?>
            </form>
    </header>
</body>
</html>
