<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 25/01/2019
 * Time: 22:51
 */
include_once 'Point.php';
include_once 'MoveablePoint.php';
$poin = new Point();
$poin->setX(2);
$poin->setY(3);
echo $poin;
echo '<hr/>';

$movepoin = new MoveablePoint();
$movepoin->setX(2);
$movepoin->setY(3);
$movepoin->setXSpeed(2);
$movepoin->setYSpeed(3);
echo 'Begin move: '.$movepoin;
$movepoin->move();

echo '<hr/>';
echo 'After move1: '.$movepoin;
$movepoin->move();
echo '<hr/>';
echo 'After move2: '.$movepoin;