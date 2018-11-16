<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $gender = femme;
        if ($gender == 'homme')
        {
            echo 'C\'est un développeur !!!';
        }
        else   
        {
            echo 'C\'est une développeuse!!!';
        }
        echo '<br>';
        echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
        ?>
    </body>
</html>