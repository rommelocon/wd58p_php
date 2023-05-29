<?php
abstract class Shape
{
    protected $name;
    abstract public function description();
}


interface IShape
{
    public function getArea($length, $width);
    public function getPerimeter($length, $width);
}

interface ITriangle
{
    public function getPerimeter($length, $width, $height);
    public function getAreaOfTriangle($base, $height);
}

class Square extends Shape implements IShape
{
    public function description()
    {
        return "Square has four equal sides.";
    }

    public function getArea($length, $width)
    {
        if ($length != $width) {
            return "Invalid";
        }

        return $length * $width;
    }

    public function getPerimeter($length, $width)
    {
        if ($length != $width) {
            return "Invalid";
        }

        return 4 * $length;
    }
}

class Rectangle extends Shape implements IShape
{
    public function description()
    {
        return "Rectangle has two equal sides.";
    }

    public function getArea($length, $width)
    {
        return $length * $width;
    }

    public function getPerimeter($length, $width)
    {
        return 2 * ($length + $width);
    }
}

class Triangle extends Shape implements ITriangle
{
    public function description()
    {
        return "Triangle has three sides.";
    }

    public function getAreaOfTriangle($base, $height)
    {
        return ($base * $height) / 2;
    }

    public function getPerimeter($side1, $side2, $side3)
    {
        return $side1 + $side2 + $side3;
    }
}

class Circle extends Shape implements IShape
{
    public function description()
    {
        return "Circle has no sides, only a curve.";
    }

    public function getArea($radius, $unused = null)
    {
        return round(pi() * pow($radius, 2), 2);
    }

    public function getPerimeter($radius, $unused = null)
    {
        return round(2 * pi() * $radius, 3);
    }
}

$shape1 = new Square();
echo $shape1->description() . "\n"; // output "Square has four equal sides."
echo $shape1->getArea(4, 4) . "\n"; // output 16
echo $shape1->getArea(4, 3) . "\n"; // output "Invalid" as length and width need to be equal
echo $shape1->getPerimeter(4, 4) . "\n"; // output 16
echo $shape1->getPerimeter(4, 3) . "\n"; // output "Invalid" as length and width need to be equal

$shape2 = new Rectangle();
echo $shape2->description() . "\n"; // output "Rectangle has two equal sides."
echo $shape2->getArea(4, 6) . "\n"; // output 24
echo $shape2->getPerimeter(4, 6) . "\n"; // output 20

$shape3 = new Triangle();
echo $shape3->description(); // output "Triangle have three sides."
echo $shape3->getAreaOfTriangle(4, 6); // output 12
echo $shape3->getPerimeter(4, 6, 7); // output 17

$shape4 = new Circle();
echo $shape4->description(); // output "Circle have no sides only curve."
echo $shape4->getArea(5); // output 78.54, consider the first parameter as the radius value
echo $shape4->getPerimeter(5); // output 31.416, consider the first parameter as the radius value