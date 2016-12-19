<?php
    include("logincheck.php");
    include("connect.php");

    $opleidingen = $conn->prepare("SELECT opleiding_name, id FROM `opleidingen` ORDER BY opleiding_name");
    $opleidingen->execute();
?>

<!DOCTYPE html>
<html>
<head>

</head>
    <?php include("head.php"); ?>
    <body>
        <?php include("menu.php"); ?>
        <header>
            <div class="card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2>Opleiding</h2>
                </div>
                <form action="klassen.php" method="post">
                    <select name="opleiding_name">
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
        </header>
    </body>
</html>
