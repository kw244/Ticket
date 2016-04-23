<?php

    require_once("connection.php");
    
    //open database connection
    $mysqli = openConnection();

    //retrieve and display event data
    $eventId = (int) $_GET["id"];
    $ticketsArray = getTicketsByEventId($mysqli, $eventId);
    displayTickets($ticketsArray);
    
    // close connection 
    closeConnection($mysqli);

?>
