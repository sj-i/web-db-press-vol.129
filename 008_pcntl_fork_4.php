<?php
// プロセス数をチェック
// 足りなければ子プロセスの補充

// 5プロセスずつ子プロセスを生成
const MAX_PROCESSES = 5;
$current_processes = 0;
for ($i = 0; $i < 20; $i++) {
    $pid = pcntl_fork();
    if ($pid !== 0) { // 親側
        $stopped = pcntl_wait($status, WNOHANG);
        if (++$current_processes >= MAX_PROCESSES) {
            $current_processes--;
        }
    } else { // 子側
        echo $i, PHP_EOL;
        sleep(2);
        die;
    }
}
pcntl_wait($status);