<?php
    //var_dump($_POST);

    include("logincheck.php");
//
    include("connect.php");

    $_SESSION['beoordeling'] = $_POST;

    var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
<body>
    <?php include("menu.php"); ?>
    <header>
        <div class="card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2>Confirm</h2>
                </div>
            <form action="" method="post">
                <?php echo "U heeft <b>".$_SESSION['leerling']."</b> beoordeeld, wilt u dit versturen?" ?><br/></br>
                <?php foreach ($_SESSION['beoordeling'] as $key => $value){ ?>
                    <?php echo ($key . ' ' . $value); ?><br/></br>
                <?php } ?>
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Verstuur</button>
            </form>
        </div>
    </header>
</body>
</html>
<?php
    //
?>
