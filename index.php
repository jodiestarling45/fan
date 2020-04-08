<?php
include "class_fan.php";
$fan1=new class_fan();
$fan1->_construct(3,true,"yellow",10);
$fan1->to_string();
$fan2=new class_fan();
$fan2->_construct(2,false,"blue",5);
$fan2->to_string();