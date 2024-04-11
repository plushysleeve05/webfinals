<!DOCTYPE html>
<html lang="en">

<head>
  <title>View/Add Events &mdash; SporitfyHub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
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

   <!-- Add your custom CSS here -->
   <style>
    

    /* Hide the form container by default */
#event-form-container {
    opacity: 0;
    height: 0;
    overflow: hidden;
    transition: opacity 0.3s ease, height 0.3s ease;
}

/* Show the form container when it's visible */
#event-form-container.visible {
    opacity: 1;
    height: auto;
    transition: opacity 0.3s ease, height 0.3s ease;
}
#sd {
  &-container {
    position: fixed;
    bottom: 10px;
    left: 50%;
    transform: translateY(-50%);
  }
}

.arrow {
  position: relative;
  width: 42px;
  height: 16px;
  opacity: 0;
  
  &::before,
  &::after {
    content: "";
    width:21px;
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
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Sign Up with your school</a></li>
          </ul>
        </nav>
  <div class="site-wrap">
    <div class="hero overlay" style="background-image: url('../images2/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">View and Add Events</h1>
            <p>Welcome to our event creation platform. Here you can easily organize and manage your events with ease. Get started today!</p>          </div>
        </div>
      </div>
    </div>

    
    
    <div class="container1">

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
  

    
    <div class="site-section bg-dark">
      <div class="container">
      <button id="show-form-btn" class="btn btn-primary">Click to add Event</button>

      <div id="event-form-container" class="hidden">
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="widget-next-match" >
              <div class="widget-title">
                <h3>Add Your Events Here!</h3>
              </div>
            </div>
              <br><br>
          <div>
              <form>
                <div class="form-group">
                  <label for="event-name">Event Name</label>
                  <input type="text" class="form-control" id="event-name" placeholder="Enter Event Name">
                </div>
                <div class="form-group">
                  <label for="event-date">Date</label>
                  <input type="date" class="form-control" id="event-date">
                </div>
                <div class="form-group">
                  <label for="event-time">Time</label>
                  <input type="time" class="form-control" id="event-time">
                </div>
                <div class="form-group">
                  <label for="event-location">Location</label>
                  <input type="text" class="form-control" id="event-location" placeholder="Enter Location">
                </div>
                <div class="form-group">
                  <label for="event-sport-type">Sport Type</label>
                  <select class="form-control" id="event-sport-type">
                    <option value="football">Football</option>
                    <option value="basketball">Basketball</option>
                    <option value="volleyball">Volleyball</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Event</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    
        <br><br><br>


        <div class="col-12 title-section">
            <h2 class="heading">All Events:</h2>
          </div>
        <div class="row" id="event-list-container">
          
        </div><!-- .site-section -->

    

        
    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>News</h3>
              <ul class="list-unstyled links">
                <li><a href="#">All</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Tickets</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Online Ticket</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Matches</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Standings</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Twitter</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->

  <script src="../js2/jquery-3.3.1.min.js"></script>
  <script src="../js2/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js2/jquery-ui.js"></script>
  <script src="../js2/popper.min.js"></script>
  <script src="../js2/bootstrap.min.js"></script>
  <script src="../js2/owl.carousel.min.js"></script>
  <script src="../js2/jquery.stellar.min.js"></script>
  <script src="../js2/jquery.countdown.min.js"></script>
  <script src="../js2/bootstrap-datepicker.min.js"></script>
  <script src="../js2/jquery.easing.1.3.js"></script>
  <script src="../js2/aos.js"></script>
  <script src="../js2/jquery.fancybox.min.js"></script>
  <script src="../js2/jquery.sticky.js"></script>
  <script src="../js2/jquery.mb.YTPlayer.min.js"></script>


  <script src="../js2/main.js"></script>

  <!-- ajax to dynamically update events -->
  <script>
    // Function to fetch and update events
    function updateEvents() {
        // AJAX request to update_events.php
        $.ajax({
            url: '../actions/update_events.php',
            type: 'GET',
            success: function(response) {
                // Update the content of the event list container with the fetched events
                $('#event-list-container').html(response);
            },
            error: function(xhr, status, error) {
                console.error('Error fetching events:', error);
            }
        });
    }

    // Call the updateEvents function initially to load events on page load
    $(document).ready(function() {
        updateEvents();

        // Set interval to periodically update events (e.g., every 5 seconds)
        setInterval(updateEvents, 5000); // 5000 milliseconds = 5 seconds
    });

    document.addEventListener('DOMContentLoaded', function () {
        var formContainer = document.getElementById('event-form-container');
        var showFormBtn = document.getElementById('show-form-btn');

        showFormBtn.addEventListener('click', function () {
            formContainer.classList.toggle('visible');
        });
    });
</script>


</body>

</html>