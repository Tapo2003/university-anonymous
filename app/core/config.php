<?php

    if($_SERVER['SERVER_NAME'] == 'localhost'){
        /*database config*/
        define('DBNAME','univesity_anonymouse');
        define('DBHOST','localhost');
        define('DBUSER','root');
        define('DBPASS','');
        define('DBDRIVER','');
        define('ROOT','http://localhost/university-anonymous/public');
        
    }else{
        define('DBNAME','my_db');
        define('DBHOST','localhost');
        define('DBUSER','root');
        define('DBDRIVER','');
        define('ROOT','https://yourwebsite.com');
    }   
    define('APP_NAME', "My website");
    define("APP_DESC", "Best app on the planet");
    //true means throw errors. change to false when is on life server 
    define("DEBUG",true);

