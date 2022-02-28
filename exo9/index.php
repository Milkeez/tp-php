<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <form action="controller.php" method="post">
        <label>saisir un nombre</label><input type= "text" name="n" value="<?php if(!isset($_SESSION['error']['n']) && isset($_SESSION['post']))
         echo $_SESSION['post']['n']; else '' ?>">
        <?php if(isset($_SESSION['error']['n'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['n']?></span>
            <?php endif?> <br>
            <input type="submit" value="valider" name="ok">
     </form>
    
</body>
</html>