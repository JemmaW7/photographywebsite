<?php 
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <link href="shop-style.css" rel="stylesheet">
  <link href="footer.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script  type="text/javascript"  src="/NwW9Hq1LJUenVc8b"></script></head>

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
          <li><a href="shopindex.php">QUOTES</a></li>
           <li><a href="reviews.html">REVIEWS</a></li>
        </ul>
      </div>
    </div>
  </nav>



  <div id="main" class="container-fluid">
        
          
    <div class="main_shop">
    <section class="section-products">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header">
                        <h2>Quotes for Products</h2>
                    </div>
                </div>
            </div>
             <div class="row">
            <?php

              // Fetch  data from the database
              $sql = "SELECT * FROM product";
              $result = $conn->query($sql);
        
              // Display information
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
              ?>
            
                
                <!-- Single Product -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-1" class="single-product">
                        <div class="part-1" style="background: url('<?php echo $row['photo']; ?>'); background-size: contain; background-position: center;">
                          <span class="discount">15% off</span>

                        </div>
                        <div class="part-2">
                            <a href=""><h3 class="product-title"><?php echo $row['pname']; ?></h3></a>
                            <h4 class="product-old-price">€105</h4>
                            <h4 class="product-price"><?php echo "€".$row['price']; ?></h4>
                        </div>
                    </div>
                </div>
               
                <?php
                                }
                            } else {
                                echo "No product available";
                            }
                            $conn->close();
                        ?>
            </div>
            <button type="button" class="btn-lg button-89" onclick="window.location.href='bookingform2.php'">Book</button>
          </button>
        </div>
    </section>
    </div>

  </div>


  <footer class="container-fluid text-center">
      <a href="#home" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <div class="row">
        <div class="col-md-4">
            <h4>Contact</h4>
            <p>Phone: 00000000</p>
            <p>Email: xxxxxxxxx@gmail.com</p>
            <p>Address: 123 Main St, City, Country</p>
        </div>
        <div class="col-md-4">
            <h4>Follow Us</h4>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-md-4">
            <h4>Quick Links</h4>
            <ul class="list-unstyled">
                <li><a href="about.html">About Us</a></li>
                <li><a href="galleryindex.html">Gallery</a></li>
                <li><a href="bookingform.html">Booking</a></li>
                <li><a href="shopindex.php">Shop</a></li>
                <li><a href="reviews.html">Reviews</a></li>
            </ul>
        </div>
    </div>
    
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