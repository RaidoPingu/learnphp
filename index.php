
<?php

class box {
    public $with;
    public $height;
    public $lenght;
    public $material;

    public function describe() {
        echo '$with ' . $this->with . " heaight " . $this->height . ' lenght ' . $this->lenght;
    }
}

$box1 = new box();
$box1->with= 1;
$box1->height = 2;
$box1->lenght = 3;
$box1-> material = 'wood';

var_dump($box1);
$box2 = new box();
$box2->with= 1;
$box2->height = 2;
$box2->lenght = 3;
$box2-> material = 'wood';

var_dump($box2);

?>


