<?php

    require_once("connection.php");
    
    //open database connection
    $mysqli = openConnection();

    //retrieve and display event data
    $eventArray = getEvents($mysqli);
    displayEvents($eventArray);
    
    // close connection 
    closeConnection($mysqli);

?>
