<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 25/01/2019
 * Time: 15:55
 */
include_once ('Rectangle.php');class Square extends Rectangle{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
}