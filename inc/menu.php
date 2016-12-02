<?php
    include("head.php");
?>
<nav>
    <ul>
        <?php echo $_SESSION['login_user']['name'] ?>
        <li><a href="../index.php?action=logout">Log out pl</a></li>
    </ul>
</nav>
