<?php
//    var_dump($_POST);
    include("connect.php");
    $wp = $conn->prepare("SELECT wp_name, id FROM `wp` WHERE kt_id = :kt_id ORDER BY id");
    $wp->execute(array('kt_id' => $_POST['kerntaken']));
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <header>
            <form action="leerling.php" method="post" id="required">
                <?php
                    while($row = $wp->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <input type="checkbox" name="<?php echo ($row['id']);?>"><?php echo ($row['wp_name']);?></td>
                <?php
                    }
                ?>
            <?php include("button.php")?>
            </form>
    </header>
</body>
</html>
