<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $age = 18;
        if ($age >= 18)
        {
            echo 'Tu es majeur';
        }
        else   
        {
            echo 'Tu n\'es pas majeur';
        }
        echo '<br>';
        echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
        ?>
    </body>
</html>