<?php
require_once 'libs/db.lib.php';
echo json_encode(['status' => DB::update('Analytics', ['value' => 0], 'duration="day"')]);