<?php session_start();
    var_dump($_SESSION);
    include("connect.php");

    $opleidingen = $conn->prepare("SELECT opleiding_name, id FROM `opleidingen` ORDER BY id");
    $opleidingen->execute();
?>

<!DOCTYPE html>
<html>
<<<<<<< HEAD
<head>

</head>
<body>
    <a href="../index.php?action=logout">Log oud</a>
    <header>
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
    </header>
</body>
=======
    <?php include("head.php"); ?>
    <body>
        <?php include("menu.php"); ?>
        <header>
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
        </header>
    </body>
>>>>>>> origin/master
</html>
