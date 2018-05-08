<?php

// no direct access
defined('EMONCMS_EXEC') or die('Restricted access');

function example_controller() {

    global $session, $route, $mysqli;
    
    // Default route format
    $route->format = 'json';
    
    // Result can be passed back at the end or part way in the controller
    $result = false;
    
    require "Modules/example/example_model.php";
    $example = new Example($mysqli);
    
    // Read access API's and pages
    if ($session['read']) {
    
    }
    
    // Write access API's and pages
    if ($session['write']) {
        if ($route->action == "view") {
            $route->format = 'html';
            return view("Modules/example/example_view.php", array());
        }
    }

    // Pass back result
    return array('content' => $result);
}
