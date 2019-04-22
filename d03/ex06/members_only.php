<?php
#if correct login, get img content, then echo msg and img encoded in 64 bit
if ($_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys' || $_SERVER['PHP_AUTH_USER'] == 'zaz')
{
    $file = file_get_contents('../img/42.png');
    echo "<html><body>Hello Zaz<br />\n<img src='data:image/png;sbase64,".base64_encode($file)."'>\n</body></html>\n";
}
#if ! zaz, create headers to reproduce the pdf errors, echo member only, double escape member area
else
{
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
    echo "<html><body>That area is accessible for members only</body></html>\n";
}
?>