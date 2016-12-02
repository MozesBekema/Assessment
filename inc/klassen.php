<?php
    include("logincheck.php");
    include("connect.php");

    $klas = $conn->prepare("SELECT klas_name, id FROM `klas` WHERE opleiding_id = :opleiding_id ORDER BY id");
    $klas->execute(array('opleiding_id' => $_POST['opleiding_name']));
?>
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>
        <?php include("menu.php"); ?>
        <header>
            <form action="kerntaken.php" method="post">
                <select name="Klassen">
                    <?php
                        while($row = $klas->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <option value="<?php echo ($row['id']);?>">
                        <?php
                            echo ($row['klas_name']);
                        ?>
                    </option>
                    <?php
                        }
                    ?>
                </select>
                <input type="hidden" name="opleiding_name" value="<?= $_POST['opleiding_name'] ?>">
            <?php include("button.php")?>
            </form>
        </header>
    </body>
</html>
