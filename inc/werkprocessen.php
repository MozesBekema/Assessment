<?php
//    var_dump($_POST);
    include("connect.php");
    $wp = $conn->prepare("SELECT wp_name, id FROM `wp` WHERE kt_id = :kt_id ORDER BY id");
    $wp->execute(array('kt_id' => $_POST['kerntaken']));
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
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" style="margin-left:auto; margin-right:auto;">
            <form action="leerling.php" method="post">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">Kies de werkprocessen voor </th>
                    </tr>
                </thead>
            <tbody>
                <?php
                    while($row = $wp->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric" required><input name="<?php echo ($row['id']);?>" type="checkbox"><?php echo ($row['wp_name']);?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
            <?php include("button.php")?>
            </form>
    </header>
</body>
</html>
