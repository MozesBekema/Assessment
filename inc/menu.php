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
                <!-- Right aligned menu below button -->
                <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                    <li class="mdl-menu__item"><a href="opties.php">Opties</a></li>

                    <li class="mdl-menu__item"><a href="../index.php?action=logout">Uitloggen</a></li>
                </ul>
            </nav>
        </div>
    </header>
