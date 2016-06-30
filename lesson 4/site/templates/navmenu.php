<ul>
<?php
/**Функиця формирования навигационного меню
 * @return string
 */

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

