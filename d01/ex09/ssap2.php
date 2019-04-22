#!/usr/bin/php
<?php
##run command all in one line or it fails
function get_ascii($char)
{
    $ascii = ord($char);
    ##null check
	if ($ascii == 0)
        return $ascii;
    ##check anything not #s, or alphas
	if (($ascii < 48) || ($ascii >= 91 && $ascii <= 96) || ($ascii > 122))
        $ascii += 500;
    ##check nums
	else if (is_numeric($char))
        $ascii += 250;
    ##check for upper
	else if (ctype_upper($char))
		$ascii += 50;
	return $ascii;
}

function ssap2($s1, $s2)
{
    ##get lens to cmp
	$len1 = strlen($s1);
	$len2 = strlen($s2);
	$i = 0;
	while ($i < $len1 && $i < $len2)
	{
        ##set array to value of str at index i
		$a1 = get_ascii($s1[$i]);
        $a2 = get_ascii($s2[$i]);
        ##if arrays != return -1 if a1<, else 1 if a1>
		if ($a1 != $a2)
			return ($a1 < $a2 ? -1 : 1);
		$i++;
	}
	if ($len1 == $len2)
		return (0);
	return ($len1 == $i ? -1 : 1);
}
##parse args, split array, create $ret array for each val in array, sort by our deifned function ssap2
$i = 0;
while (++$i < $argc)
{
	$array = preg_split("/[ ]+/", $argv[$i], 0, PREG_SPLIT_NO_EMPTY);
	foreach ($array as $val)
		$ret[] = $val;
}
usort($ret, "ssap2");
##print each val in ret array as own word on line 
foreach ($ret as $val)
	echo $val."\n";
?>