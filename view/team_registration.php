<!DOCTYPE html>
<html lang="en">

<head>
  <title>Team Registration &mdash; Sportify</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css2/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../css2/jquery-ui.css">
  <link rel="stylesheet" href="../css2/owl.carousel.min.css">
  <link rel="stylesheet" href="../css2/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css2/owl.theme.default.min.css">

  <link rel="stylesheet" href="../css2/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../css2/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../fonts2/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../css2/aos.css">

  <link rel="stylesheet" href="../css2/style.css">

  <style>
    .arrow {
      position: relative;
      width: 42px;
      height: 16px;
      opacity: 0;

      &::before,
      &::after {
        content: "";
        width: 21px;
        height: 2px;
        background-color: #fff;
        border-radius: 2px;
        display: inline-block;
      }

      &::before {
        transform: rotate(45deg) translateX(25%)
      }

      &::after {
        transform: rotate(-45deg) translateX(-25%)
      }

      &:nth-child(1) {
        top: -50px;
        opacity: 1;
        animation: arrow2 1s ease 0s infinite;
      }

      &:nth-child(2) {
        top: -25px;
        animation: arrow1 1s ease 0.25s infinite;
      }
    }

    @keyframes arrow1 {
      from {
        opacity: 0;
        top: -25px;
      }

      to {
        opacity: 0;
        top: 0px;
      }

      50% {
        opacity: 1;
      }
    }

    @keyframes arrow2 {
      from {
        opacity: 0;
        top: -35px;
      }

      to {
        opacity: 0;
        top: -10px;
      }

      50% {
        opacity: 1;
      }
    }
  </style>


</head>

<body>
  <nav class="nav1">
    <a class="logo" href="index.html">
      <span>
        <img src="../images/lg.png" alt="">
      </span>
    </a>

    <ul class="">
      <li><a href="../index.php">Home</a></li>
      <li><a href="signup.php">Sign Up with your school</a></li>
    </ul>
  </nav>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>




    <div class="hero overlay" style="background-image: url('../images2/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">Team Registration</h1>
            <p>Register your team and  wit ease! Join our vibrant community of sports enthusiasts and showcase your team's talent on the field. Whether you're into football, basketball, volleyball, or any other sport, our platform provides you with the tools to organize, manage, and compete in exciting events. Don't miss out on the opportunity to connect with other teams, and take your sporting journey to the next level!</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex team-vs">
            <span class="score">
              <div id="sd-container">
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
              </div>
            </span>

            <div class="team-1 w-50">

            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">ADD TEAMS</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
              <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
              <span></span>
              <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


        <div id="event-form-container-1" class="hidden">
          <div class="row mb-5">
            <div class="col-lg-12">
              <div class="widget-next-match">
                <div class="widget-title">
                  <h3>Add Your Teams Here!</h3>
                </div>
              </div>
              <br><br>
              <div>
                <form id="team-registration-form">
                  <div class="form-group">
                    <label for="team-name">Team Name</label>
                    <input type="text" class="form-control" id="team-name" placeholder="Enter Team Name">
                  </div>
                  <div class="form-group">
                    <label for="event-select">Select Event</label>
                    <select class="form-control" id="event-select">
                      <!-- Option for default selection -->
                      <option value="">Select an event</option>
                      <?php
                      // Include the script to fetch events
                      include_once '../actions/get-events.php';

                      // Check if events are fetched successfully
                      if ($events && is_array($events)) {
                        // Loop through each event and create an option
                        foreach ($events as $event) {
                          // Output option with event details
                          echo '<option value="' . $event['event_id'] . '">' . $event['name'] . '</option>';
                        }
                      } else {
                        // If no events are fetched or an error occurs
                        echo '<option value="">No events found</option>';
                      }
                      ?>
                    </select>
                  </div>
                  <button type="button" id="submit-btn" class="btn btn-primary">Create Team</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        






    <footer class="footer-section">
      <div class="row text-center">
        <div class="col-md-12">
          <div class=" pt-5">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>

        <!-- footer section -->
        <section class="container-fluid footer_section">
          <!-- give me a suitable footer -->
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <a href="index.html">
                  <img src="../images/lg.png" alt="">
                  <!-- put an all rights reserved here -->
                  <p>Copyright &copy; 2024</p>
                </a>
                </a>
              </div>
            </div>
          </div>

        </section>
        <!-- footer section -->

      </div>
  </div>
  </footer>



  </div>
  <!-- .site-wrap -->

  <script src="..js2/jquery-3.3.1.min.js"></script>
  <script src="..js2/jquery-migrate-3.0.1.min.js"></script>
  <script src="..js2/jquery-ui.js"></script>
  <script src="..js2/popper.min.js"></script>
  <script src="..js2/bootstrap.min.js"></script>
  <script src="..js2/owl.carousel.min.js"></script>
  <script src="..js2/jquery.stellar.min.js"></script>
  <script src="..js2/jquery.countdown.min.js"></script>
  <script src="..js2/bootstrap-datepicker.min.js"></script>
  <script src="..js2/jquery.easing.1.3.js"></script>
  <script src="..js2/aos.js"></script>
  <script src="..js2/jquery.fancybox.min.js"></script>
  <script src="..js2/jquery.sticky.js"></script>
  <script src="..js2/jquery.mb.YTPlayer.min.js"></script>


  <script src="..js2/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Add event listener to the submit button
      document.getElementById('submit-btn').addEventListener('click', function() {
        // Get the form data
        var formData = {
          team_name: document.getElementById('team-name').value,
          event_id: document.getElementById('event-select').value
        };

        // Send an AJAX request to the endpoint
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../actions/process-team-registration.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
          if (xhr.status >= 200 && xhr.status < 400) {
            // Success response
            var response = JSON.parse(xhr.responseText);
            alert(response.success); // Show success message
          } else {
            // Error response
            alert('Error: ' + xhr.statusText);
          }
        };
        xhr.onerror = function() {
          // Connection error
          alert('Connection error');
        };
        xhr.send(JSON.stringify(formData)); // Send JSON data
      });
    });

    
  </script>



</body>

</html>