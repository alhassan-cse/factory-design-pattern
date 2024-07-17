<?php
spl_autoload_register(function($class_name){
    include "../classes/".$class_name.".php";
});


$driver = New Database;
echo $driver->setDriver('mysql');

echo $driver->connect("localhost",'DV657',"username_text","password_tex");

 

?>