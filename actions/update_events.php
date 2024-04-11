<?php
include_once '../settings/connection.php';
global $conn;

$sql = "SELECT name, date, time, location FROM events";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Extract event data
        $eventName = $row['name'];
        $eventDate = $row['date'];
        $eventTime = $row['time'];
        $eventLocation = $row['location'];

        // Output HTML with event data
        echo '
        <div class="col-lg-6 mb-4">
                      <div class="bg-light p-4 rounded">
                          <div class="widget-body">
                              <div class="widget-vs">
                                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">        
                                      <div class="team-2 text-center">
                                          <img src="../images2/sports.png" alt="Image">
                                          <br><br>
                                          <h3 style="color: red !important;">'.$eventName.'</h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="text-center widget-vs-contents mb-4">
                              <h4>World Cup League</h4>
                              <p class="mb-5">
                                  <span class="d-block">'.$eventDate.'</span>
                                  <span class="d-block">'.$eventTime.'</span>
                                  <strong class="text-primary">'.$eventLocation.'</strong>
                              </p>
                          </div>
                      </div>
                  </div>';
    }
} else {
    // If no events are found
    echo "No events found.";
}
?>
