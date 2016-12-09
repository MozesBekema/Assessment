<?php

    include("logincheck.php");
    //var_dump($_SESSION);
    include("connect.php");
    $klas = $conn->prepare("SELECT klas_name, id FROM `klas` WHERE id = :id");
    $klas->execute(array('id' => $_SESSION['klassen']));
    $row = $klas->fetch(PDO::FETCH_ASSOC);
//    var_dump($row['klas_name']);
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
            <form action="confirm.php" method="post">
                <?php
                    echo "Je bent <b>".$_POST['Leerling']."</b> aan het beoordelen, uit klas ".$row['klas_name'];

                ?><br/><br>
				<?php
					foreach($_SESSION['werkprocessen'] as $werk){
						?>
						<label>
							<?= $werk
							?>
				</label><input type="range" class="mdl-slider mdl-js-slider" min="1" max="5" step="1" name="<?php echo $werk;?>"><br/>
						<?php
					}
				?>

                <?php include("button.php")?>
            </form>
        </div>
    </header>
</body>
</html>
