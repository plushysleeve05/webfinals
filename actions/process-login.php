<?php
session_start();
include_once '../settings/connection.php';


$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = ? LIMIT 1";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];

        $school_query = "SELECT * FROM schools WHERE id = ?";
        $stmt = $mysqli->prepare($school_query);
        $stmt->bind_param('i', $user['school_id']);
        $stmt->execute();
        $school_result = $stmt->get_result();
        $school = $school_result->fetch_assoc();
        $_SESSION['school_name'] = $school['name'];

        header("Location: ../view/add_and_view_events.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Invalid email or password.";
        header("Location: ../login.html");
        exit();
    }
} else {
    $_SESSION['login_error'] = "User not found.";
    header("Location: ../login.html");
    exit();
}
?>
