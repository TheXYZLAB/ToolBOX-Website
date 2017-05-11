<?php
    $tmp = $_GET['tmp'];    // Which template
    echo file_get_contents("static/Template/Citation/" . $tmp . ".html");   // Case!
?>