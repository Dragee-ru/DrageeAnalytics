<?php
require_once 'libs/db.lib.php';
$data = mysqli_fetch_assoc(DB::select('Analytics', ['*'], 'duration="day"'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Аналитика активности Драже</title>
    <meta http-equiv="refresh" content="60">
</head>
<body>
<h1><span><?= $data['value'] ?></span><br>показов номеров<br>были зафиксированы за последний день</h1>
<style>
    :root {
        font-family: Helvetica, sans-serif;
    }

    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: unset;
        padding: unset;
    }

    h1 {
        text-align: center;
        font-weight: 400;
        color: gray;
    }

    h1 span {
        color: black;
        font-size: 2em;
        font-weight: 300;
    }
</style>
</body>
</html>