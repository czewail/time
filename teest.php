<?php
$time = mktime(0, 0, 0, 12 + 1, 1, date('Y'));
echo date('Y-m-d H:i:s', $time);