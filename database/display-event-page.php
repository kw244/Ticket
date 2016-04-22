<?php

    require_once("connection.php");
    
    //open database connection
    $mysqli = openConnection();

    //retrieve and display event data
    $eventId = (int) $_GET["id"];
    $eventObject = getEventById($mysqli, $eventId);
    echo json_encode($eventObject);
    
    // close connection 
    closeConnection($mysqli);

?>
