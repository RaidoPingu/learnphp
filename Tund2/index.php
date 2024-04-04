<?php
$name = 'Raido';
$fruits = ['apple', 'bannana', 'orange', 'kiwi', 'lemon', 'grape', 'waterme'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World <?=$name?></h1>
    <p>Tere</p>
    <ul>
       <?php foreach($fruits as $fruit) : ?>
        <?php if($fruit != 'apple'):  ?>
            <li><?=$fruit?></li>
        <?php else: ?>
        <li>
            <i>
                <?=$fruit?>
            </i>
        <?php endif; ?> 
    <?php endforeach; ?>
        
    </ul>

</body>
</html>