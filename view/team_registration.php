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
            <h1 class="text-white">Team and Player Registration</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
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
            <h2 class="heading">Star Players / Videos</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


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
        <label for="team-name">Team Name</label>
        <input type="text" class="form-control" id="team-name" placeholder="Enter Team Name">
    </div>
    <div class="form-group">
        <label for="members">Members</label>
        <textarea class="form-control" id="members" rows="3" placeholder="Enter Team Members"></textarea>
    </div>
    <div class="form-group">
        <label for="event-select">Select Event</label>
        <select class="form-control" id="event-select">
            <!-- Populate this dropdown with events fetched from the database -->
            <option value="event1">Event 1</option>
            <option value="event2">Event 2</option>
            <option value="event3">Event 3</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Create Team</button>
</form>

            </div>
          </div>
        </div>
      </div>
      </div>
    </div>


    
    


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
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

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

</body>

</html>