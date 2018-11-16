<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $age = 18;
        $gender = 'femme';
        if ($age < 18 && $gender == 'homme')
        {
            echo 'Vous êtes un homme et vous êtes mineur';
        }
        elseif ($age >=18 && $gender == 'homme')                                                    
        {
            echo'Vous êtes un homme et vous êtes majeur';
        }
        elseif ($age < 18 && $gender == 'femme')     
        {
        
            echo 'Vous êtes une femme et vous êtes mineur';
        }
        elseif ($age >=18 && $gender == 'femme') 
        {
            echo'Vous êtes une femme et vous êtes majeur';
        }         
        ?>
    </body>
</html>