<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $isEasy = true;
        if ($isEasy = true)
        {
            echo 'C\'est facile !!!';
        }
        else   
        {
            echo 'C\'est difficile !!!';
        }
        echo '<br>';
        echo ($isEasy = true) ? 'C\'est facile !!!' : 'C\'est difficile !!!';
        ?>
    </body>
</html>