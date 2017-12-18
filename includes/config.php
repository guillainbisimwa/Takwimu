<?php

    /**
     * config.php
     *
     * NALEDI SERVICES 
     * JUNE 2017, goma
     *
     * Configures pages.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();

    // require authentication for most pages
   

?>
