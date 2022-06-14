<?php
$task = function (int $arg): void {
    include 'A.php';
    A::$static_mutable = $arg;
    for ($i = 0; $i < 10; $i++) {
        echo A::$static_mutable;
        sleep(1);
    }
};

$thread = new \parallel\Runtime();
// 1と2が交互に出力
$thread->run($task, [1]);
$task(2);
$thread->close();
