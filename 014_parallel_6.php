<?php
$channel = new \parallel\Channel();
$thread = new \parallel\Runtime();
$thread->run(function (\parallel\Channel $channel) {
    $channel->send('hello');
    $channel->send('parallel');
}, [$channel]);
$result[] = $channel->recv();
$result[] = $channel->recv();
assert('hello parallel' === join(' ', $result));
var_dump($result);