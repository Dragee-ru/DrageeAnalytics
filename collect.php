<?php
require_once 'libs/db.lib.php';
echo json_encode(['status' => DB::query("
    UPDATE `Analytics` 
    SET `value` = `value` + 1
    WHERE `duration`='day'
")]);