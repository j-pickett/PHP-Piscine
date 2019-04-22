#!/usr/bin/php
<?php
    $i = 1;
    $res = array();
    while ($i < $argc) {
        $arr = ($argv[$i]);
        $arr = preg_replace('/\s\s+/', ' ', $arr);
        $arr = explode(" ", $arr);
        $res = array_merge($res, $arr);
        $i++;
    }
   sort($res);
   foreach ($res as $word)
        echo "$word\n";
?>