<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ExerciceXP 1 : afficher sans variable   </h2>
<h3>
    <?php echo 'Hello, World!'; ?>
</h3>
<BR>
<h2>ExercieXP 2 : afficher avec une variable </h2>

    <?php
        $title = 'Hello PHP!';
    ?>
    <h3>
        <?php echo $title;?>
   </h3>
   <BR>

   <h2>ExercieXP 3 : Concatener deux variables </h2>

    <?php
        $bonjour = 'Bonjour';
        $journee = 'Bonne journée';
    ?>
    <h3>
        <?php echo $bonjour .' ' .$journee;?>
   </h3>
   <BR>

   <h2>ExercieXP 4 : Inverser une chaine </h2>

    <?php
        $invers_chaine = "ATOS ACDEMY BOOTCAMP FULLSTACK PHP ANGULAR 2023";
    ?>
    <h3>
        <?php echo strrev($invers_chaine) ?>
   </h3>
   
</body>
</html>