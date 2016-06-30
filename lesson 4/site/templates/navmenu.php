<ul>
<?php
    global $NAVMENU;
    foreach ($NAVMENU as $menuitem => $menuaction) {
        ?>
            <li>
                <a href="?route=<?=$menuaction?>">
                    <?=$menuitem?>
                </a>
            </li>
        <?php
    };
?>
</ul>
