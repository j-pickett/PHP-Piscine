#!/usr/bin/php
<?php
function ft_split($str) {
    $arr = explode(" ", $str);
    sort($arr);
    $ret = array();
    foreach ($arr as $val) {
        if (!empty($val))
            $ret[] = $val;

    }
    unset($arr);
    return ($ret);
}

print_r(ft_split("HELLO WOLRD AAA"));
?>
