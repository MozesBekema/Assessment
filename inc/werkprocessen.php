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
            <div class="card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                </div>
                <form action="leerling.php" method="post" id="required">

                        <?php
                            while($row = $wp->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <input type="checkbox" class="wpCenter" name="wp<?= str_replace(".","_",$row['wp_name']);?>">
                            <label><?php echo ($row['wp_name']);?></label>
                        <?php
                            }
                        ?>
                        <br/>
                <?php include("button.php")?>
                </form>
            </div>
        </header>
    </body>
</html>
