<?php
// シェル経由でパラメータ1つで/path/to/commandを起動
proc_open('ls -la', [], $unused);
// シェルを通さず/path/to/commandを起動
proc_open(['ls', '-la'], [], $unused);
