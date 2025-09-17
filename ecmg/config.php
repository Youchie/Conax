<?php
global $config;
//ECMG parameters
$config['bindaddress'] = "0.0.0.0";
$config['bindport'] = 8888;
$config['max_clients'] = 10;
$config['preview'] = 1;

//EMMG parameters
$config['muxaddress'] = 'localhost';
$config['muxport'] = 9999;
$config['interval'] = 120;

//SQLDB parameters
$config['servername'] = 'localhost'; 
$config['dbusername'] = 'root';
$config['dbpass'] = 'password';
$config['dbname'] = 'neovision2';

//GLOBAL CONSOLE OUTPUT
$config['echo'] = true;
?>