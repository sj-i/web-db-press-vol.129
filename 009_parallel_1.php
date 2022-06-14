<?php
$task = function (string $arg): void {
    for ($i = 0; $i < 10; $i++) {
        echo $arg;
        sleep(1);
    }
};
// スレッドの生成
$thread1 = new \parallel\Runtime();
$thread2 = new \parallel\Runtime();
// スレッドの実行
$thread1->run($task, ['1']);
$thread2->run($task, ['2']);
// スレッドの終了を待つ
$thread1->close();
$thread2->close();
