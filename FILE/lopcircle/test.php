<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 25/01/2019
 * Time: 18:43
 */

class ConNguoi
{
    private $name = 'Vũ Thanh Tài';
    private $age = 20;

    public function __toString()
    {
        return $this->name.$this->age;
    }
}

echo new ConNguoi();