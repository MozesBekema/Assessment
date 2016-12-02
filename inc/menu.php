<?php
    include("head.php");
?>
<nav>
    <ul>
        <?php echo "Hallo, ".$_SESSION['login_user']['name'] ?>
        <li><a href="../index.php?action=logout">Log out</a></li>
    </ul>
</nav>
