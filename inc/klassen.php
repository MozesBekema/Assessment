<?php
//    var_dump($_POST);
    include("connect.php");

    $klas = $conn->prepare("SELECT klas_name, id FROM `klas` WHERE opleidingen_id = :opleidingen_id ORDER BY id");
    $klas->execute(array('opleidingen_id' => $_POST['opleidingen']));
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
                <form action="kerntaken.php" method="post">
                    <select name="Klassen">
                        <?php
                            while($row = $klas->fetch(PDO::FETCH_ASSOC)){ 
                        ?>
                        <option value="<?php echo ($row['id']);?>">
                            <?php echo ($row['klas_name']);?>
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