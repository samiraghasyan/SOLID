<?php

interface Shape
{
    public function area();
}

class Rectangle implements Shape
{
    public function __construct(
        public int $with,
        public int $height,
    )
    {

    }

    public function area(): float|int
    {
        // TODO: Implement area() method.
        return $this->with * $this->height;
    }
}

class Circle implements Shape{

    public function __construct(
        public $radius,
    )
    {

    }

    public function area(): float|int
    {
        // TODO: Implement area() method.
        return $this->radius * $this->radius * pi();
    }
}

class AreaCalculator {
    public function calculate($shapes) {
        $area = [];
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}

$circle = new Circle(radius: 20);
$rectangle = new Rectangle(with: 15, height: 30);



$cal = new AreaCalculator();
$cal = $cal->calculate([$circle, $rectangle]);
echo $cal;