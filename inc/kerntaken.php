<?php
    include("logincheck.php");
    include("connect.php");

    $kt = $conn->prepare("SELECT kt_name, id FROM `kt` ORDER BY id");
    $kt->execute();
    $_SESSION['klassen'] = $_POST['klassen'];
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
            </div>
        </header>
    </body>
</html>
