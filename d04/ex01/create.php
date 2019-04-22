<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK")
    {
       /* If the file or directory dont exist make them */
        if (!file_exists('../private')) 
        {
            mkdir("../private");
        }
        if (!file_exists('../private/passwd')) 
        {
            file_put_contents('../private/passwd', null);
        }
        $account = unserialize(file_get_contents('../private/passwd'));
        /* gets your password if it exists, and checks each acct cant have the same name*/
        if ($account)
        {
            $exist = 0;
            foreach ($account as $key => $val)
            {
                if ($val['login'] === $_POST['login'])
                    $exist = 1;
            }
        }
        /* exist checks for erros, if none, then store the info in a tmp and create the acct
        ** then add the information to the file passwd and say ok, then if submit is not ok, output error
         */
        if ($exist)
        {
            echo "ERROR\n";
        }
        else
        {
            $tmp['login'] = $_POST['login'];
            $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
            $account[] = $tmp;
            file_put_contents('../private/passwd', serialize($account));
            echo "OK\n";
        }
    } else 
    {
        echo "ERROR\n";
    }
?>