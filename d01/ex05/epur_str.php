#!/usr/bin/php
<?php
    if($argc == 2) {
        $arr = ($argv[1]);
        $arr = preg_replace('/\s+/', ' ', $arr);
        $arr = trim($arr);
        echo ($arr);
        echo("\n");
    }
?>
