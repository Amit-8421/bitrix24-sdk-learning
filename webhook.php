<?php

error_log("===== WEBHOOK HIT =====");
error_log("Event: " . ($_REQUEST['event'] ?? ''));
error_log("Token: " . ($_REQUEST['auth']['application_token'] ?? ''));
error_log(print_r($_REQUEST, true));

echo "OK";