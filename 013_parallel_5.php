<?php
// 無名チャンネル
$anonymous_channel = new \parallel\Channel();
// 名前付きチャンネル
$named_channel = \parallel\Channel::make('name');
// 別スレッドから名前で作成済みチャンネルを取得
$named_channel = \parallel\Channel::open('name');