<?php
//    var_dump($_POST);
    include("connect.php");

    $leerling = $conn->prepare("SELECT name, id FROM `leerlingen` ORDER BY name");
    $leerling->execute();
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
        <form action="beoordelen.php" method="post">
            <select name="Leerling">
                <?php
                    while($row = $leerling->fetch(PDO::FETCH_ASSOC)){ 
                ?>
                <option name="<?php echo ($row['id']);?>" type="checkbox">
                    <?php echo ($row['name']);?>
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

