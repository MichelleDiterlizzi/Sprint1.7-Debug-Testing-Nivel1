<?php

function grau($nota){
    
    if (!is_numeric($nota)) {
        return null;
    }
    else if ($nota>60){
        return "Primera división";
    }
    else if ($nota>= 45){
        return "Segunda división";
    }
    else if ($nota>=33){
        return "Tercera división";
    }
    else if ($nota<33){
        return "El estudiante tiene que reprovar";
    }
    else if (!is_numeric($nota)) {
        return null;
    }
}


?>