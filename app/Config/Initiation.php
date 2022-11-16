<?php

spl_autoload_register(function ($classname) {

    require $filename = '../app/Models/' . ucfirst($classname) . ".php";
});

require 'Constants.php';
require 'Functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';
