<?php
$process = proc_open(
    [PHP_BINARY, 'child.php'],
    [],
    $unused
);
$exit_code = proc_close($process);
var_dump($exit_code);