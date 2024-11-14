<?php
    /**
     * Este archivo cierra sesion
     * 
     * @author Marlon
     * @version 8.3.6
     */

    session_start();

    session_unset();

    session_destroy();

    header("Location: guiado3.php");

?>