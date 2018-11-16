<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $isOk;
        if ($isOk == true)
        {
            echo 'c\'est ok !!';
        }
        else   
        {
            echo 'c\'est pas bon !!!';
        }
        echo '<br>';
        echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
        ?>
    </body>
</html>