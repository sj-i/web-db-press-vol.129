<?php
$process = proc_open(
    [PHP_BINARY, 'child2.php'],
    [
        0 => ['pipe', 'r'], // STDIN
        1 => ['pipe', 'w'], // STDOUT
        2 => [ // STDERR
            'file',
            'error_log.txt',
            'a',
        ],
    ],
    $pipes
);
fwrite($pipes[0], "プロセスの標準入力に書き込み\n");
// プロセスの標準出力から読み込み
$process_output = fgets($pipes[1]);
var_dump($process_output);