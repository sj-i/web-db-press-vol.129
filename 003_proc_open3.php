<?php
$process = proc_open(
    [PHP_BINARY, 'child.php'],
    [],
    $unused
);
$is_running = true;
while ($is_running) {
    $status = proc_get_status($process);
    $is_running = $status['running'];
}
// 終了コード
echo $status['exitcode'];
