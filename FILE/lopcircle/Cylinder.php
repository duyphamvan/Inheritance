<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 25/01/2019
 * Time: 18:32
 */
include_once 'Circle.php';
class Cylinder extends Circle
{
    public $height;

    /**
     * @param mixed $height
     */
    public function setRadius($radius)
    {
        parent::setRadius($radius); // TODO: Change the autogenerated stub
    }

    public function setColor($color)
    {
        parent::setColor($color); // TODO: Change the autogenerated stub
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    public function calculateArea()
    {
        return parent::calculateArea()*2 + parent::calculatePerimeter()*$this->height; // TODO: Change the autogenerated stub
    }

    public function  calculateVolume()
    {
        return parent::calculateArea()*$this->height;
    }

    public function __toString()
    {
        return 'Cylinder Height is: '.$this->height.'<br/>'.'Color is: '.$this->getColor().'<br/>'.'Radius is: '. $this->getRadius().'<br/>'.'Area is: '. $this->calculateArea().'<br/>'.'Volume is: '. $this->calculateVolume();// TODO: Implement __toString() method.

    }

}
$a = new Cylinder();
$a->setHeight(2);
$a->setColor('blue');
$a->setRadius(3);
echo $a;