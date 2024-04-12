


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SportifyHub</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <link rel="stylesheet" href="css2/style.css">
</head>

<body>
  
  <div class="hero_area">

    
    <!-- header section strats -->

      <video autoplay loop muted plays-inline class="back-video">
        <source src="videos/Nike Commercial - You Can't Stop Sport(1).mp4" type="video/mp4">
      </video>

        <nav class="nav1">
          <a class="logo" href="index.html">
            <span>
              <img src="images/lg.png" alt="">
            </span>
          </a>

          <ul class="">
            <li><a href="view/add_and_view_events.php">Add Events</a></li>
            <li><a href="view/team_registration.php">Register Team and Players</a></li>
            <li><a href="view/signup.html">Sign Up with your school</a></li>
          </ul>
        </nav>

        <div class="content">
          <h1>SportifyHub</h1>
          <a href="#who_section"  onclick="scrollToSection(event)">View Events</a>
        </div>
    <!-- end header section -->
  </div>
  <!-- who section -->

  <div id="who_section"></div>
  <br><br>
  <section class="who_section">
    <div class="container">
      <div class="row">
        <div class="col-12 title-section" style="display: inline;">
          <h2 class="heading">Upcoming Events</h2>
          <button class="button-24" role="button"><a href="view/add_and_view_events.php">View All</a></button>
        </div>
        <?php
          include_once'settings/connection.php';
          global $conn;
          $sql = "SELECT name, date, time, location FROM events LIMIT 4";
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
                                          <img src="images2/sports.png" alt="Image">
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
    </div>
  </section>

  <!-- end who section -->

  <!-- another who section -->
  <section class="who_section">
    <div class="container">
      <div class="row">
        <div class="col-12 title-section" style="display: inline;">
          <h2 class="heading">Current Teams</h2>
          <br>
          <div class="owl-4-slider owl-carousel">
            
          </div>
    </div>

          <button class="button-24" role="button"><a href="">Add your team for an Event</a></button>
        </div>
    </div>
  </section>

  

  <!-- end target section -->


  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <!-- give me a suitable footer -->
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <a href="index.html">
            <img src="images/lg.png" alt="">
            <!-- put an all rights reserved here -->
            <p>Copyright &copy; 2024</p>
          </a>
          </a>
        </div>
      </div>
    </div>
    
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

  <!-- score stuff -->
   <!-- .site-wrap -->

   
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js2/jquery-migrate-3.0.1.min.js"></script>
   <script src="js2/jquery-ui.js"></script>
   <script src="js2/popper.min.js"></script>
   <script src="js2/bootstrap.min.js"></script>
   <script src="js2/owl.carousel.min.js"></script>
   <script src="js2/jquery.stellar.min.js"></script>
   <script src="js2/jquery.countdown.min.js"></script>
   <script src="js2/bootstrap-datepicker.min.js"></script>
   <script src="js2/jquery.easing.1.3.js"></script>
   <script src="js2/aos.js"></script>
   <script src="js2/jquery.fancybox.min.js"></script>
   <script src="js2/jquery.sticky.js"></script>
   <script src="js2/jquery.mb.YTPlayer.min.js"></script>
 
 
   <script src="js2/main.js"></script>

   <!-- scrolling javascript -->
   <script>
      function scrollToSection(event) {
          event.preventDefault();
          const navbarHeight = document.querySelector('nav').offsetHeight; // Get the height of the navbar
          const sectionTop = document.querySelector('#who_section').offsetTop - navbarHeight; // Calculate the top position of the section

          window.scrollTo({
              top: sectionTop,
              behavior: 'smooth'
          });
      }
    </script>
    <script>
  $(document).ready(function() {
    // Function to fetch team details via AJAX
    function fetchTeams() {
      $.ajax({
        url: 'actions/get-teams.php', // URL of your get-teams.php file
        type: 'GET',
        success: function(response) {
          // Append the retrieved HTML response to the .owl-4-slider element
          $('.owl-4-slider').html(response);
          // Initialize the Owl Carousel
          $(".owl-4-slider").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 2
              },
              1000: {
                items: 4
              }
            }
          });
        },
        error: function(xhr, status, error) {
          // Handle error if AJAX request fails
          console.error(xhr.responseText);
        }
      });
    }

    // Call the fetchTeams function when the document is ready
    fetchTeams();
  });
</script>

</body>

</html>