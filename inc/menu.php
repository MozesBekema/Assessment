<?php
    include("head.php");
?>
<nav>
    <ul>
        <li><a href="../index.php?action=logout">Log out</a></li>
        <li class="hallo"><?php echo "Hallo, ".$_SESSION['login_user']['name'] ?></li>
    </ul>
</nav>
