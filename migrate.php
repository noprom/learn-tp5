#!/usr/bin/env php
<?php
/**
 * migration迁移文件
 *
 * Author: Noprom <tyee.noprom@qq.com>
 * Date: 7/25/16 3:17 PM.
 */

chdir(__DIR__);

if (count($argv) == 1)
    $command = "./vendor/bin/phinx migrate -c Data/Config/migrate.php";

if (count($argv) == 2)
    $command = "./vendor/bin/phinx create {$argv[1]} -c Data/Config/migrate.php";

$fp = popen($command, "r");

//output result in real time
if ($fp) {
    while (!feof($fp)) {
        echo fread($fp, 1024);
        flush();
    }
    fclose($fp);
}