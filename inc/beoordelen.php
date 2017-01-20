<?php
    include("logincheck.php");
    include("connect.php");
    $klas = $conn->prepare("SELECT klas_name, id FROM `klas` WHERE id = :id");
    $klas->execute(array('id' => $_SESSION['klassen']));
    $row = $klas->fetch(PDO::FETCH_ASSOC);

    $leerlingname = $conn->prepare("SELECT name FROM `leerlingen` WHERE id = :id");
    $leerlingname->execute(array('id' => $_POST['leerling']));
    $result = $leerlingname->fetch(PDO::FETCH_ASSOC);

    $_SESSION['leerling'] = array("id"=>$_POST['leerling'], "name"=>$result['name']);
?>
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
<body>
    <?php include("menu.php"); ?>
    <header>
        <div class="card-wide mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h2>Beoordelen</h2>
            </div>
            <form action="confirm.php" method="post">
                <?php

                    echo "Je bent <b>".$result['name']."</b> aan het beoordelen, uit klas ".$row['klas_name'];

                ?><br/><br>
				<?php
					foreach($_SESSION['werkprocessen'] as $wpid){
                        $wpname = $conn->prepare("SELECT wp_name FROM `wp` WHERE id = :id");
                        $wpname->execute(array('id' => $wpid));
                        $row = $wpname->fetch(PDO::FETCH_ASSOC);
//                        var_dump($row);
						?>
						<label>
							<?= $row['wp_name'];
							?>
				</label><input type="range" class="mdl-slider mdl-js-slider" min="1" max="5" step="1" name="<?php echo $wpid;?>"><br/>
						<?php
					}
				?>

                <?php include("button.php")?>
                <div class="mdl-card__title"></div>
            </form>
        </div>
    </header>
</body>
</html>
