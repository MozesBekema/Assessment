<?php
    include("head.php");
?>
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title" style="color:#ffffff;">Assessment Beoordelingen</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation">
                <li><?php echo "Hallo, ".$_SESSION['login_user']['name'] ?></li>
                <a href="../index.php?action=logout">Log out</a>
            </nav>

        </div>
    </header>
