<?php
    include("logincheck.php");
    include("connect.php");

    $account = $_SESSION['login_user']['id'];
    $leerling = $_SESSION['leerling']['id'];
    $klas = $_SESSION['klassen'];
    $wp = $_SESSION['werkprocessen'];

    if(isset($_POST['sendRating'])){
        for($i = 0;$i < count($_SESSION['werkprocessen']);$i++){
            $wp_id = $_SESSION['werkprocessen'][$i];
            $beoordeling = $_SESSION['beoordeling'][intval($wp_id)];

            $send = $conn->prepare("INSERT INTO `beoordeling` (`acounts_id`, `leerlingen_id`, `klas_id`, `wp_id`, `beoordeling`) VALUES(:account, :leerling, :klas, :wp, :beoordeling)");
            $send->execute(array('account' => $account, 'leerling' => $leerling, 'klas' => $klas, 'wp' => $wp_id, 'beoordeling' => $beoordeling));
        }

        header("Location: confirmed.php");
    }else{
        $_SESSION['beoordeling'] = $_POST;
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
                    <h2>Confirm</h2>
                </div>
            <form action="#" method="post">
                <?php echo "U heeft <b>".$_SESSION['leerling']['name']."</b> beoordeeld, wilt u dit versturen?" ?><br/></br>
                <?php foreach ($_SESSION['beoordeling'] as $key => $value){

                        $wpname = $conn->prepare("SELECT wp_name FROM `wp` WHERE id = :id");
                        $wpname->execute(array('id' => $key));
                        $row = $wpname->fetch(PDO::FETCH_ASSOC);

            ?>

                    <?php $search = array('1', '2', '3', '4', '5');
                          $replace = array('Beginner', 'Student', 'Stagiair', 'Medewerker', 'Professioneel');
                        echo ($row['wp_name'] . ':<span class="bold"> ' . $value=str_replace($search, $replace, $value)); ?><br/></br>
                </span>
                <?php } ?>
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="sendRating">Verstuur</button>
            </form>
        </div>
    </header>
</body>
</html>
