<?php
class Point2D{
    public $xCoordinate;
    public $yCoordinate;
    public function __construct($xCoordinate,$yCoordinate)
    {
        $this->xCoordinate=$xCoordinate;
        $this->yCoordinate=$yCoordinate;
    }
    public function getX(){
        return $this->xCoordinate;
    }
    public function getY(){
        return $this->yCoordinate;
    }
    public function setX($xCoordinate){
        $this->xCoordinate=$xCoordinate;
    }
    public function setY($yCoordinate){
        $this->yCoordinate=$yCoordinate;
    }
    public function setXY($xCoordinate,$yCoordinate){
        $this->xCoordinate=$xCoordinate;
        $this->yCoordinate=$yCoordinate;
    }
    public function getXY(){
        $arr=[$this->xCoordinate,$this->yCoordinate];
        return $arr;
    }
    public function toString(){
        echo "Cac toa do lan luot la: x= $this->xCoordinate , y= $this->yCoordinate ";
    }
}
