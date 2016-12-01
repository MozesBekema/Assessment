<?php
//    var_dump($_POST);
    include("connect.php");

    $klas = $conn->prepare("SELECT klas_name, id FROM `klas` WHERE opleiding_id = :opleiding_id ORDER BY id");
    $klas->execute(array('opleiding_id' => $_POST['opleiding_name']));
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

    <a href="../index.php?action=logout">Log out</a>
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
        <?php include("button.php")?>
        </form>
    </header>
</body>
</html>
