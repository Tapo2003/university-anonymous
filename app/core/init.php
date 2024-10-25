<?php

spl_autoload_register(function($classname){
    // ../models/User.php
    include "../app/models/" .ucfirst($classname) .".php";

});

    require 'config.php';
    require 'function.php';
    require 'Database.php';
    require 'Model.php';
    require 'Controller.php';
    require 'App.php';