<?php
include 'connect.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html id="bookingpage" lang="en">

<head>

  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <link href="booking-style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
<script  type="text/javascript"  src="/pA1a43Yxl5-7jLBd"></script></head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand header-logo" href="index.html"><img src="media/logo/J-trans-white.png"><span>JW
            Photography</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="about.html">ABOUT ME</a></li>
          <li><a href="galleryindex.html">GALLERY</a></li>
          <li><a href="bookingform.html">BOOKING</a></li>
          <li><a href="shopindex.php">SHOP</a></li>
          <li><a href="reviews.html">REVIEWS</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid">
    <section class="booking-form py-5 mt-5">
      <div class="booking-container py-5 mt-5">
        <h1>Booking Form</h1>

        <form method="post" action="bookinginsert.php">

          <div class="form-group">
            <label for="cname">Name:</label>
            <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="cno">Phone Number:</label>
            <input type="text" class="form-control" name="cno" id="cno" placeholder="Enter your phone number" required>
          </div>
          <div class="form-group">
            <label for="cemail">E-mail:</label>
            <input type="email" class="form-control" name="cemail" id="cemail" aria-describedby="emailHelp" placeholder="Enter email"
              required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="type">Type:</label>
            <select class="form-control" name="type" id="type">
              <option value="Pets">Pets</option>
              <option value="Event">Event</option>
              <option value="Photoshoot">Photoshoot</option>
              <option value="Workshop">Workshop</option>
              <option value="Print">Print</option>
            </select>
          </div>
          <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea class="form-control" id="notes" name="notes" rows="5" placeholder="Enter any additional notes"></textarea>
          </div>
          <button type="submit" class="button btn btn-primary">Submit</button>
        </form>
      </div>
    </section>
  </div>

  <footer class="container-fluid text-center">
    <a href="#home" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
  </footer>

  <script>
    $(document).ready(function () {
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#home']").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 500, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      $(window).scroll(function () {
        $(".slideanim").each(function () {
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
        });
      });
    })
  </script>
</body>

</html>