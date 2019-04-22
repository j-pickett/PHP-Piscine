#!/usr/bin/php
<?php
if ($argc == 4)
{
    if (trim($argv[2]) == '+')
        printf("%d", (intval($argv[1]) + intval($argv[3])));
    if (trim($argv[2]) == '-')
        printf("%d", (intval($argv[1]) - intval($argv[3])));
    if (trim($argv[2]) == '*')
        printf("%d", (intval($argv[1]) * intval($argv[3])));
    if (trim($argv[2]) == '/')
        printf("%d", (intval($argv[1]) / intval($argv[3])));
    if (trim($argv[2]) == '%')
        printf("%d", (intval($argv[1]) % intval($argv[3])));
}
printf("\n");
?>
