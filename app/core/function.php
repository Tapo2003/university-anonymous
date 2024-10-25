<?php

    function esc($str){
        return htmlspecialchars($str);
    }


    function redirect($path){
        header("Location: " . ROOT ."/".$path);
    }

    