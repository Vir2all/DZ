<?php
include_once 'functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
</head>
<body>
<ul>
    <?php
        foreach ($users as $key => $val) {
            ?>
                <li>
                    <?=getUserInfo($val)?>
                </li>
            <?php
        }
    ?>
</ul>
</body>
</html>
