<?php 

use Model\ActiveRecord;

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

//Conectar DATABASE
$db = conectarDB();


ActiveRecord::setDB($db);