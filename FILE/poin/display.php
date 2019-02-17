<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 25/01/2019
 * Time: 22:01
 */
include_once 'Point2D.php';
include_once 'Point3D.php';

$point2d = new Point2D();
$point2d->setX(2);
$point2d->setY(3);
echo 'Point2D:'. $point2d;
//$point2d->setXY(5,6);
//echo $point2d;

echo '<hr/>';
$point3d = new Point3D();
$point3d->setX(2);
$point3d->setY(3);
$point3d->setZ(2);
echo 'Point3D:'. $point3d;