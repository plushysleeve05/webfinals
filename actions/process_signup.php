<?php
include_once '../settings/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO school (name, email, username, password, address, city, country) 
            VALUES ('$name', '$email', '$username', '$hashed_password', '$address', '$city', '$country')";

    if (mysqli_query($conn, $sql)) {
        $response = array(
            "success" => true,
            "message" => "School signed up successfully."
        );
        echo json_encode($response);
    } else {
        $response = array(
            "success" => false,
            "message" => "Error: " . mysqli_error($conn)
        );
        echo json_encode($response);
    }

    mysqli_close($conn);
} else {
    $response = array(
        "success" => false,
        "message" => "Invalid request method."
    );
    echo json_encode($response);
}
?>
