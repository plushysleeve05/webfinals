<?php
include_once '../settings/connection.php';
global $conn;

$sql = "SELECT event_id, name FROM events";
$result = mysqli_query($conn, $sql);

if ($result) {
    $events = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $events[] = $row;
    }

    mysqli_free_result($result); // Free the result set

    // Close the connection
    mysqli_close($conn);

    // Encode events as JSON
    $json_response = json_encode($events);

    // Set the content type header
    header('Content-Type: application/json');

    // Output JSON response
    echo $json_response;
} else {
    // Handle the case where the query fails
    echo json_encode(array('error' => 'Failed to fetch events: ' . mysqli_error($conn)));
}
?>
