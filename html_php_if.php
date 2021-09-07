<?php
$team = "learning group";
$hour = 12;
?>
<!DOCTYPE html>
<html>

<head>
    <title>My website</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>PHP basis - Control statements</h1>
    <p>Hello, <?= $team; ?></p>
    <?php if ($hour < 12) : ?>
        Good morning
    <?php elseif ($hour < 18) : ?>
        Good afternoon
    <?php elseif ($hour < 22) : ?>
        Good evening
    <?php else : ?>
        Good night
    <?php endif ?>
</body>

</html>