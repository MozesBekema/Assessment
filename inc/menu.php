<!doctype>
<html>

<head>
    <?php
        include("head.php");
    ?>
</head>
<div class="extraMenu">
    <span>Assessment Beoordelings Applicatie</span>
    <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon" style="float:right; top:12px; right:12px; color:#fff; background-color:transparent;">
      <i class="material-icons">more_vert</i>
    </button>
</div>

<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
    <a href="../index.php?action=logout" style="color:#000; text-decoration:none;"><li class="mdl-menu__item">Log out</li></a>
    <li class="mdl-menu__item"><a href="#" style="color:#000; text-decoration:none;">Share</a></li>
    <li class="mdl-menu__item"><a href="help.php" style="color:#000; text-decoration:none;">Help</a></li>
</ul>

</html>