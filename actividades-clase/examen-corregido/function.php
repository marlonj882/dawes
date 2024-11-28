<?php

function cleardata ($dato){
    if(is_array($dato)){
        return array_map('cleardata',$dato);
    }

    return htmlspecialchars(stripslashes(trim($dato)), ENT_QUOTES,'UTF-8');

}

?>