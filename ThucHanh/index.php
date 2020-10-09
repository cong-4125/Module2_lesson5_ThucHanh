<?php
include_once 'Circle.php';
include_once 'Cylinder.php';
include_once 'Rectangle.php';
include_once 'Square.php';
$circle = new Circle('c1', 4);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder(c2,4,8);
echo 'Cylinder area: ' . $cylinder->calculateArea()."<br>";
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter();

$rectangle = new Rectangle(r1,4,5);
echo 'rectangle area:' . $rectangle->calculateArea().'<br>';
echo 'rectangle perimeter :' . $rectangle->calculatePerimeter().'<br>';

$square = new Square(s1,5,5);
echo 'square area:' . $square->calculateArea().'<br>';
echo 'square perimeter:' . $square->calculatePerimeter().'<br>';