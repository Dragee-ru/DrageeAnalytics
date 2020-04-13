<?php
require_once 'libs/db.lib.php';
$data = mysqli_fetch_assoc(DB::select('Analytics', ['*'], 'duration="day"'));
?>
<h1>За последний день было зафиксировано <?= $data['value'] ?> показов номеров</h1>