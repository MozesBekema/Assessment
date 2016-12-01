<?php
//    var_dump($_POST);
    include("connect.php");

    $kt = $conn->prepare("SELECT kt_name, id FROM `kt` ORDER BY id");
    $kt->execute();
?>
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>
        <?php include("menu.php"); ?>
        <header>
            <form action="werkprocessen.php" method="post">
                <select name="kerntaken">
                    <?php
                        while($row = $kt->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <option value="<?php echo ($row['id']);?>">
                        <?php echo ($row['kt_name']);?>
                    </option>
                    <?php
                        }
                    ?>
                </select>
            <?php include("button.php")?>
            </form>
        </header>
    </body>
</html>
