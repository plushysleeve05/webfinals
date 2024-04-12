<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jsonData = file_get_contents('php://input');
    if (!empty($jsonData)) {
        $requestData = json_decode($jsonData, true);
        $teamName = isset($requestData['team_name']) ? trim($requestData['team_name']) : '';
        $eventId = isset($requestData['event_id']) ? intval($requestData['event_id']) : 0;
        if (!empty($teamName) && $eventId > 0) {
            include_once '../settings/connection.php';
            global $conn;
            $sql = "INSERT INTO teams (team_name, event_id) VALUES (?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "si", $teamName, $eventId);
            if (mysqli_stmt_execute($stmt)) {
                http_response_code(200); // Set HTTP status code to 200 OK
                echo json_encode(array('success' => true, 'message' => 'Team registered successfully'));
            } else {
                http_response_code(400); // Set HTTP status code to 400 Bad Request
                echo json_encode(array('success' => false, 'error' => 'Failed to register team: ' . mysqli_error($conn)));
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        } else {
            http_response_code(400); // Set HTTP status code to 400 Bad Request
            echo json_encode(array('success' => false, 'error' => 'Invalid team name or event ID'));
        }
    } else {
        http_response_code(400); // Set HTTP status code to 400 Bad Request
        echo json_encode(array('success' => false, 'error' => 'No JSON data received'));
    }
} else {
    http_response_code(405); // Set HTTP status code to 405 Method Not Allowed
    echo json_encode(array('success' => false, 'error' => 'Invalid request method'));
}
?>
