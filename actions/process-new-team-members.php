<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jsonData = file_get_contents('php://input');
    if (!empty($jsonData)) {
        $requestData = json_decode($jsonData, true);
        $teamName = isset($requestData['team_name']) ? trim($requestData['team_name']) : '';
        $memberName = isset($requestData['member_name']) ? trim($requestData['member_name']) : '';
        if (!empty($teamName) && !empty($memberName)) {
            include_once '../settings/connection.php';
            global $conn;
            $sql = "SELECT team_id FROM teams WHERE team_name = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $teamName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $teamId);
            mysqli_stmt_fetch($stmt);
            mysqli_stmt_close($stmt);
            if (!empty($teamId)) {
                $sql = "INSERT INTO members (team_id, member_name) VALUES (?, ?)";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "is", $teamId, $memberName);
                if (mysqli_stmt_execute($stmt)) {
                    echo json_encode(array('success' => true, 'message' => 'Member added successfully'));
                } else {
                    echo json_encode(array('error' => 'Failed to add member: ' . mysqli_error($conn)));
                }
                mysqli_stmt_close($stmt);
            } else {
                echo json_encode(array('error' => 'Team not found'));
            }
            mysqli_close($conn);
        } else {
            echo json_encode(array('error' => 'Invalid team name or member name'));
        }
    } else {
        echo json_encode(array('error' => 'No JSON data received'));
    }
} else {
    echo json_encode(array('error' => 'Invalid request method'));
}
?>
