<?php
    include("logincheck.php");
var_dump($_SESSION);
    include("connect.php");

    $leerling = $conn->prepare("SELECT name, id, klas_id FROM `leerlingen` WHERE klas_id = :klas_id");
    $leerling->execute(array('klas_id' => $_SESSION['klassen']));

    $_SESSION['werkprocessen'] = array();
    // loop over werkprocessen
    foreach($_POST as $key=>$value){
        if($value == "on"){
            $name = substr($key, 2);
            array_push($_SESSION['werkprocessen'], $name);
        }
    }
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
            </div>
        </header>
    </body>
</html>

