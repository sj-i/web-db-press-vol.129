<?php
// 送信10回分のバッファ付き無名チャンネル
$anonymous_buffered = new \parallel\Channel(10);
// 無制限バッファ付き名前付きチャンネル
$named_buffered = \parallel\Channel::make(
    'name',
    \parallel\Channel::Infinite
);