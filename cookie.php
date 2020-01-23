<?php
    $expire = time()+60*60*24*30;

    setcookie('user','aptechmedia.com',$expire);
?>

<html>
    <head>
        <title>
            php cookies
        </title>
    </head>
    <body>
        <?php

        $cook = $_COOKIE['user'];
            var_dump($cook);
        ?>
    </body>
</html>