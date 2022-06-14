<?php
$pid = pcntl_fork();
if ($pid !== 0) {
    // pcntl_wait($status)
    $return = pcntl_waitpid($pid, $status);
    var_dump($return, $status);
} else {
    exit(1);
}