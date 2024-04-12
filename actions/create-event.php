<?php
include_once '../settings/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventName = $_POST['event_name'];
    $eventDate = $_POST['event_date'];
    $eventTime = $_POST['event_time'];
    $eventLocation = $_POST['event_location'];
    $sportType = $_POST['sport_type'];

    $sql = "INSERT INTO events (name, date, time, location, sport_type) 
            VALUES ('$eventName', '$eventDate', '$eventTime', '$eventLocation', '$sportType')";

    if (mysqli_query($conn, $sql)) {
        $eventId = mysqli_insert_id($conn);

        $response = array(
            'success' => true,
            'message' => 'Event created successfully'
        );
        echo json_encode($response);
    } else {
        $response = array(
            'success' => false,
            'message' => 'Error creating event: ' . mysqli_error($conn)
        );
        echo json_encode($response);
    }

    mysqli_close($conn);
} else {
    $response = array(
        'success' => false,
        'message' => 'Method not allowed'
    );
    echo json_encode($response);
}
?>
