<?php
$thread = new \parallel\Runtime();
$future = $thread->run(fn () => 42);
$result = $future->value();
var_dump($result);
assert(42 === $result);