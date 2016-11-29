<?php
    include("connect.php");

    $opleidingen = $conn->prepare("SELECT opleiding_name, id FROM `opleidingen` ORDER BY id");
    $opleidingen->execute();
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
                <form action="klassen.php" method="post" class="form">
                    <select name="opleidingen">
                        <?php
                            while($row = $opleidingen->fetch(PDO::FETCH_ASSOC)){ 
                        ?>
                        <option value="<?php echo ($row['id']);?>">
                            <?php echo ($row['opleiding_name']);?>
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