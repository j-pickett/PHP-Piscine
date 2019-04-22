<?php 
function auth($login, $passwd) {
    $account = unserialize(file_get_contents('../private/passwd'));
    if ($account)
    {
        foreach ($account as $key => $val) 
            {
                if ($val['login'] == $_POST['login'] && $val['passwd'] == $_POST['passwd'])
                    return TRUE;
                else
                    return False;
            }
    }
}
?>