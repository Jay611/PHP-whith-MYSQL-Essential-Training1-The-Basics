<?php
    // Output Buffering
    // Data in output buff is editable.
    // Headers can be changed.
    // Whitespace can be sent before header edits and redirects.
    ob_start(); // output buffefing is turned on

    // Assign file path to PHP constants
    // __FILE__ returns the current path to this file
    // dirname() returns the path to the parent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');

    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);

    require_once('functions.php');
    require_once('database.php');
    require_once('query_functions.php');
    
    $db = db_connect();
?>