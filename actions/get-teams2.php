<?php
include '../settings/connection.php';
global $conn;

$sql = "SELECT teams.team_name, events.name AS event_name
        FROM teams 
        INNER JOIN events ON teams.event_id = events.event_id";

$result = mysqli_query($conn, $sql);

$teams = array(); // Array to store teams

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        // Store each team in the array
        $teams[] = $row;
    }
}

// Close the database connection
mysqli_close($conn);

// Set the content type header to JSON
header('Content-Type: application/json');

// Output the teams array as JSON
echo json_encode($teams);
?>
