<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 25/01/2019
 * Time: 18:29
 */

class Circle
{
    public $radius;
    public $color;

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    public function calculateArea()
    {
        return pi()*$this->radius**2;
    }

    public function  calculatePerimeter()
    {
        return 2*pi()*$this->radius;
    }

    public function __toString()
    {
        return 'Circle Color is: '. $this->getColor().'<br/>'.'Radius is: '. $this->getRadius().'<br/>'.'Area is: '. $this->calculateArea().'<br/>'.'Perimeter is: '.$this->calculatePerimeter().'<hr/>';   // TODO: Implement __toString() method.
    }
}
$circle = new Circle();
$circle->setColor('blue');
$circle->setRadius(3);
echo $circle;