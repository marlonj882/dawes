<?php

function clearData($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);

    return $data;
}

?>
