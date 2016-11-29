<?php
//    var_dump($_POST);
    include("connect.php");

    $kt = $conn->prepare("SELECT kt_name, id FROM `kt` ORDER BY id");
    $kt->execute();
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("head.php"); ?>
</head>
<body>
    
        <?php
            include("menu.php");
        ?>
    <header>
        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
            <div class="mdl-card__supporting-text">
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
        </div>
    </header>
</body>
</html>