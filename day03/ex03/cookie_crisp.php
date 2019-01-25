<?php
    if ($_GET['action'] == 'set')
    {
        if ($_GET['name'])
            setcookie($_GET['name'], $_GET['value']);
    }
    elseif ($_GET['action'] == 'get')
        echo $_COOKIE[$_GET['name']];
    elseif ($_GET['action'] == 'del')
    {
        if ($_GET['name'])
            setcookie($_GET['name'], '');
    }
?>

<!--action=set & name=plat & value=choucroute-->
