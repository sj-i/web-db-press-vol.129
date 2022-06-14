<?php
// forkで子プロセスに実行が枝分かれ
// $pidは増えた子プロセス側では0、親側では子のPID
$pid = pcntl_fork();
if ($pid !== 0) {
    pcntl_wait($status); // 子の終了を待つ
}