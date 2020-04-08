<?php


class class_fan
{
    private $slow=1;
    private $medium=2;
    private $fast=3;
    private $speed;
    private $on=false;
    private $radius=5;
    private $color='blue';

    function get_speed(){
        return $this->speed;
    }
    function get_radius(){
        return $this->radius;
    }
    function get_color(){
        return $this->color;
    }
    function _construct($speed,$on,$color,$radius){
        $this->speed=$speed;
        $this->on=$on;
        $this->color=$color;
        $this->radius=$radius;
    }
    function to_string(){
        if ($this->on){
            echo "the fan is on with the speed is ".$this->speed."the color of the fan is :".$this->color."the radius is :".$this->radius;
        }else{
            echo  "the fan is off , with color is  ".$this->color."the radius of the fan is :".$this->radius;
        }
    }
}