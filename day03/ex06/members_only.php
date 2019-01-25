<?php
    if (($_SERVER['PHP_AUTH_USER'] != "zaz") || ($_SERVER['PHP_AUTH_PW'] != "jaimelespetitsponeys"))
    {
        header('HTTP/1.0 401 Unauthorized');
        header('WWW-Authenticate: Basic realm="My Realm"');
        echo "<html><body>Sorry. but you don`t have login!</body></html>\n";
        exit (1);
    }
    else
    {
        $file = file_get_contents('../img/42.png');
        echo "<html><body>". "\n";
        echo "Hello Zaz<br />\n<img src='data:image/png;base64,"
        .base64_encode($file)."'>\n</body></html>\n";
    }
?>
