<?

class Animal
{
    public $weight, $color, $age;

    function info()
    {
        echo 'Weight:' . $this->weight . '<br>' . 'Color:' . $this->color . '<br>' . 'Age:' . $this->age;
    }
}



class Lion extends Animal
{
    public $speed;
    function info()
    {
        echo '<span class="color">Скорость: </span>' . $this->speed . '<br>' . '<span class="color">Weight: </span>' . $this->weight . '<br>' . '<span class="color">Color: </span>' . $this->color . '<br>' . '<span class="color">Age: </span>' . $this->age;
    }
}


class Rabbit extends Animal
{
    public $types;
    function info()
    {
        echo '<span class="color">Тип: </span>' . $this->types . '<br>' . '<span class="color">Weight: </span>' . $this->weight . '<br>' . '<span class="color">Color: </span>' . $this->color . '<br>' . '<span class="color">Age: </span>' . $this->age;
    }
}

class Wolf extends Animal
{
    public $height;
    function info()
    {
        echo '<span class="color">Рост: </span>' . $this->height . '<br>' . '<span class="color">Weight: </span>' . $this->weight . '<br>' . '<span class="color">Color: </span>' . $this->color . '<br>' . '<span class="color">Age: </span>' . $this->age;
    }
}
$lion = new Lion();
$lion->weight = '100';
$lion->color = 'красный';
$lion->age = '6';
$lion->speed = '7503478374598';


$rabbit = new Rabbit();
$rabbit->weight = '10';
$rabbit->color = 'зеленый';
$rabbit->age = '3';
$rabbit->types = 'Большеухий';


$wolf = new Wolf();
$wolf->weight = '80';
$wolf->color = 'тигровый';
$wolf->age = '2';
$wolf->height = '180000см';

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h2 class="title">Животные и их характеристики</h2>
        <div class="info">

            <div class="info_animal">
                <img src="img/lion.jpg" alt="" class="img">
                <p class="text">
                    <?
                    $lion->info();
                    ?>
                </p>
            </div>
            <div class="info_animal">
                <img src="img/rabbit.jpg" alt="" class="img">
                <p class="text">
                    <?
                    $rabbit->info();
                    ?>
                </p>
            </div>
            <div class="info_animal">
                <img src="img/wolf.jpg" alt="" class="img">
                <p class="text">
                    <?
                    $wolf->info();
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>