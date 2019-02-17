<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 25/01/2019
 * Time: 22:22
 */

class MoveablePoint extends Point
{
   public $xSpeed;
   public $ySpeed;

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setSpeed($xSpeed,$ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->YSpeed = $ySpeed;

    }

    public function getSpeed()
    {
        $arr[] = parent::getX();
        $arr[] = parent::getY();
        $arr[] = $this->xSpeed;
        $arr[] = $this->ySpeed;
        return json_encode($arr);
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;

    }

    public function __toString()
    {
        return $this->getSpeed();
    }
}