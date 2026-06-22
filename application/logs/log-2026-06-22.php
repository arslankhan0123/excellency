<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-06-22 21:09:37 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'excellency' F:\Projects\excellency\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2026-06-22 21:09:37 --> Unable to connect to the database
ERROR - 2026-06-22 21:10:11 --> Query error: Table 'excellency.ci_sessions' doesn't exist - Invalid query: SELECT `data`
FROM `ci_sessions`
WHERE `id` = '5p6a8ivgvkbgv7ecmka54ipe7e16d1la'
ERROR - 2026-06-22 21:10:11 --> Severity: Warning --> session_write_close(): Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2026-06-22 21:10:11 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: /var/cpanel/php/sessions/ea-php74) Unknown 0
