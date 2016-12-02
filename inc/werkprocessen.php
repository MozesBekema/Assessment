<?php
    include("logincheck.php");
    include("connect.php");
    $wp = $conn->prepare("SELECT wp_name, id FROM `wp` WHERE kt_id = :kt_id ORDER BY id");
    $wp->execute(array('kt_id' => $_POST['kerntaken']));
    $_SESSION['kerntaken'] = $_POST['kerntaken'];
?>
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>
        <?php include("menu.php"); ?>
        <header>
            <form action="leerling.php" method="post" id="required">
                <?php
                    while($row = $wp->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <input type="checkbox" name="wp<?php echo ($row['wp_name']);?>">
                    <label><?php echo ($row['wp_name']);?></label>
                <?php
                    }
                ?>
            <?php include("button.php")?>
            </form>
        </header>
    </body>
</html>
