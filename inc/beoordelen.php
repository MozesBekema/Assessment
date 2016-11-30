<?php
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

            </form>
    </header>
</body>
</html>
