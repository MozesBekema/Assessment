<?php

    include("logincheck.php");
    include("connect.php");

    $_SESSION['beoordeling'] = $_POST;

?>
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
<body>
    <?php include("menu.php"); ?>
    <header>
        <div class="card-wide mdl-card mdl-shadow--2dp" style="text-align:center;">
                <div class="mdl-card__title">
                    <h2 style="text-align:center;font-size:2.5em;">Beoordeling verstuurd!</h2>
                </div>
                    Je hebt de student beoordeeld, de gegevens zijn opgelagen en verstuurd. U kunt nu een nieuwe student beoordelen of rechtsbovenaan op logout klikken.<br/><br/>
                <a href="opleiding.php">
                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="width:100%;">Nieuwe leerling beoordelen</button>
                </a>
            </form>
        </div>
    </header>
</body>
</html>
