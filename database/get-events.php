<?php

    require_once("connection.php");
    
    //open database connection
    $mysqli = openConnection();

    //retrieve and return event data as json
    $eventArray = getEvents($mysqli);
    
    echo json_encode($eventArray);
    
    // close connection 
    closeConnection($mysqli);

?>
