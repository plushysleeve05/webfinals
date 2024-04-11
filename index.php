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


  <!-- scorestyle sheet -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts2/icomoon/style.css">

  

 

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
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Sign Up with your school</a></li>
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
                                          <img src="images22/sports.png" alt="Image">
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
          <br><br>
          <div class="owl-4-slider owl-carousel">
          <div class="item">
            <div class="video-media">
              <img src="images2/img_1.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#10 / Forward</span>
                  <h3 class="m-0">Phillip Hobbs</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images2/img_2.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#7 / Forward</span>
                  <h3 class="m-0">Garry Norris</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images2/img_3.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#4 / Forward</span>
                  <h3 class="m-0">Romolu Harper</h3>
                </div>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="video-media">
              <img src="images2/img_1.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#4 / Forward</span>
                  <h3 class="m-0">Phillip Hobbs</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images2/img_2.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#1 / GoalKeeper</span>
                  <h3 class="m-0">Garry Norris</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images2/img_3.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#8 / Forward</span>
                  <h3 class="m-0">Romolu Harper</h3>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

          <button class="button-24" role="button"><a href="">Add your team for an Event</a></button>
        </div>
    </div>
  </section>



  <!-- work section -->
  <section class="work_section layout_padding">
    <!-- placeholder for next homepage attribute -->
  </section>

  <!-- end work section -->

  
  <!-- target section -->
  <section class="target_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              1000+
            </h2>
            <h5>
              Years of Business
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              20000+
            </h2>
            <h5>
              Projects Delivered
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              10000+
            </h2>
            <h5>
              Satisfied Customers
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              1500+
            </h2>
            <h5>
              Cups of Coffee
            </h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end target section -->
  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    
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

</body>

</html>