<?php
    include("logincheck.php");
//    var_dump($_SESSION);
    include("connect.php");

    $leerling = $conn->prepare("SELECT name, id, klas_id FROM `leerlingen` WHERE klas_id = :klas_id ORDER BY id");
    $leerling->execute(array('klas_id' => $_SESSION['klassen']));

    $_SESSION['werkprocessen'] = array();
    // loop over werkprocessen
    foreach($_POST as $key=>$value){
		if(substr($key, 0, 6) == "wp_id_"){
            array_push($_SESSION['werkprocessen'], $value);
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
                    <h2>Leerling</h2>
                </div>
                <form action="beoordelen.php" method="post">
                    <select name="Leerling">
                        <?php
                            while($row = $leerling->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <option value="<?php
									   	echo ($row['id']);
									   ?>" type="checkbox">
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

