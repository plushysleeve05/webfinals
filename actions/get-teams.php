<?php
include '../settings/connection.php';
global $conn;

$sql = "SELECT teams.team_name, events.name AS event_name
        FROM teams 
        INNER JOIN events ON teams.event_id = events.event_id";

$result = mysqli_query($conn, $sql);

$team_names = array(); // Array to store unique team names

echo '<div class="owl-4-slider owl-carousel">';

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if (!in_array($row['team_name'], $team_names)) {
            $team_names[] = $row['team_name'];
            
            echo '<div class="item">';
            echo '<div class="video-media">';
            echo '<img src="images2/img_1.jpg" alt="Image" class="img-fluid">';
            echo '<a href="#" class="d-flex play-button align-items-center" data-fancybox>';
            echo '<div class="caption">';
            echo '<span class="meta">#' . $row['event_name'] . '</span>';
            echo '<h3 class="m-0">' . $row['team_name'] . '</h3>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
        }
    }
} else {
    // If no teams are found
    echo '<p>No Teams have Registered for any event yet! Be the first to add your team</p>';
    echo '<button class="button-24" role="button"><a href="view/team_registration.php">Add Team</a></button>';
}

echo '</div>';

?>
