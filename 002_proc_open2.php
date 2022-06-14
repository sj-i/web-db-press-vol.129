<?php
// PHP処理系を起動し./path/to/file.phpを実行
proc_open(
    [PHP_BINARY, 'child.php'],
    [],
    $unused
);
sleep(2);