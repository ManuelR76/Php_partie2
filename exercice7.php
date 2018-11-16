<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $isOk = true;
        if ($isOk == true)
        {
            echo 'c\'est ok !!';
        }
        else   
        {
            echo 'c\'est pas bon !!!';
        }
        echo '<br>';
        echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
        ?>
    </body>
</html>