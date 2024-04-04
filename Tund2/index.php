<?php
$name = 'Raido';
$fruits = ['apple', 'bannana', 'orange', 'kiwi', 'lemon', 'grape', 'waterme'];

?>
    <?include 'partials/header.php';?>
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