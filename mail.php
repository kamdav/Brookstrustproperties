<?php
 
    if(isset($_POST['submit'])) {
        $name = strip_tags($_POST['form-name']);
        $email = strip_tags($_POST['form-email']);
        $phone = strip_tags($_POST['form-phone']);
        $message = strip_tags($_POST['form-message']);
 
        // Put email here
        $to = "kamil@takomo.co.uk";
        $from = $email;
 
        $message = "Name: $name \n
                    Email: $from \n  
                    Phone: $phone \n
                    Message: $message";
 
        $subject = 'Contact From Website';
 
      $headers = "MIME-Version: 1.0\r\n";  
      $headers .= "Content-type: text/plain; charset=utf-8\r\n";  
      $headers .= "To: ".$to." <".$to.">\r\n";  
      $headers .= "From: ".$from." <".$from.">\r\n";  
      $headers .= "Reply-To: ".$from." <".$from.">\r\n";  
      $headers .= "Return-Path: ".$from." <".$from.">\r\n";  
      $headers .= "\r\n";
 
        $ok = mail($to, $subject, $message, $headers);
 
        if($ok){
            echo '

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Brooks Trust - Contact us</title>
        <meta name="description" content="Brooks Trust – Student Accommodation in Lancaster">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/foundation.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
        
    </head>
    <body>

      <div class="row">
        <div class="large-12 columns space-top text-left home-logo">

          <!-- <h3><a href="index.html">WILLIAM A BROOKS AND BROOKSTRUST.CO.UK</a></h3>
          <p class="minus-top">Accommodation for students, postgraduates and university staff</p> -->

          <a href="index.html"><img src="img/william-a-brooks-and-logo.jpg" ></a>
          <p>Accommodation for students, postgraduates and university staff</p>
          
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns minus-top">

          <div class="nav-hr-top">
            <hr>
          </div>

          <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
              <li class="name">
              </li>
               <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
              <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>


            <section class="top-bar-section">
            

              <!-- Right Nav Section -->
              <ul class="right">
                <li class="has-dropdown">
                  <a href="#">Properties</a>
                  <ul class="dropdown">
                    <li><a href="rutland-avenue.html">Rutland Avenue</a></li>
                    <li><a href="coulston-road.html">Coulston Road</a></li>
                    <li><a href="bedford-place.html">Bedford Place</a></li>
                    <li><a href="barton-road.html">Barton Road</a></li>

                    <li><a href="the-romney.html">The Romney</a></li>
                    <li><a href="st-catherines-court.html">St Catherines Court</a></li>
                    <li><a href="westham-street.html">Westham Street</a></li>
                  </ul>
                </li>
                <li class="active"><a href="contact.html">Contact</a></li>
              </ul>

              <!-- Left Nav Section -->
              <ul class="left">
                <li ><a href="index.html">Home</a></li>
              </ul>
              
            </section>
          </nav>

          <div class="nav-hr-bottom">
            <hr>
          </div>

        </div> <!-- End Columns -->
      </div> <!-- End Row -->  


        <div class="row">
          <div class="large-12 columns text-center sent">
            <p>Mail sent</p>
          </div
        </div>

        <div class="row">

          <div class="small-12 large-6 columns space-top address">
            <address class="panel">
              <p><span>Contact information</span></p>
              <hr>

              <p><span>William A Brooks</span></p> <br>

              <b class="b-bigger">Email</b> <br>
                &nbsp;&nbsp;&nbsp; <span><a href="mailto:wbrooks@eximuscapital.com" target="_top">wbrooks@eximuscapital.com</a></span> 

              <br><br>

              <b class="b-bigger">Telephone</b> <br>
                &nbsp;&nbsp;&nbsp; <b>Lancaster:</b>&nbsp;&nbsp; <span>01524 401216 (24 hours)</span> <br>
                &nbsp;&nbsp;&nbsp; <b>London:</b>&nbsp;&nbsp; <span>020 7374 6000</span> <br>
                &nbsp;&nbsp;&nbsp; <b>Mobile:</b>&nbsp;&nbsp; <span>07802 749899</span> <br>
                &nbsp;&nbsp;&nbsp; <b>From outside the UK:</b>&nbsp;&nbsp; <span>+44 1524 401216</span> 

              <br><br>

              <b class="b-bigger">Address</b> <br>
                &nbsp;&nbsp;&nbsp; <span>C/o Eximus Capital <br>
                &nbsp;&nbsp;&nbsp; Warnford Court <br>
                &nbsp;&nbsp;&nbsp; 29 Throgmorton Street <br>
                &nbsp;&nbsp;&nbsp; London <br>
                &nbsp;&nbsp;&nbsp; EC2N 2AT</span>
            </address>
          </div>

          <div class="small-12 large-6 columns contact space-top">
            <form id="contact-form"  method="post" action="mail.php">

              <!-- Form name -->
              <label for="right-label">Name:</label>
              <input id="form-name" name="form-name" type="text" id="right-label" required>

              <!-- Phone -->
              <label for="right-label">Phone:</label>
              <input id="form-phone" name="form-phone" type="text" id="right-label">

              <!-- Email -->
              <label for="right-label">Email:</label>
              <input id="form-email" name="form-email" type="text" id="right-label">

              <label>Message:</label>
              <textarea id="form-message" name="form-message" rows="10" required></textarea>

              <input name="submit" id="submit" target="_self" type="submit" class="button success">

            </form>
          </div>

        </div>


      <div class="row">
        <div class="large-12 columns footer">
            
          <hr>
          <img src="img/eximus-capital-logo.jpg" alt="Eximus Capital Logo">

          <p>&copy; William A Brooks 2017</p>

        </div>

        <div class="large-12 columns by-takomo">
          <p>This site has been created by <a href="http://www.takomo.co.uk" target="_blank">Takomo</a></p>
        </div>
      </div>



      <script src="js/vendor/jquery.js"></script>
      <script src="js/foundation/foundation.js"></script>
      <script src="js/foundation/foundation.topbar.js"></script>
      <script src="js/foundation/foundation.tab.js"></script>

      <script>
        $(document).foundation();
      </script>

    </body>


            ';
        } else {
            echo '


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Brooks Trust - Contact us</title>
        <meta name="description" content="Brooks Trust – Student Accommodation in Lancaster">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/foundation.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
        
    </head>
    <body>

      <div class="row">
        <div class="large-12 columns space-top text-left home-logo">

          <!-- <h3><a href="index.html">WILLIAM A BROOKS AND BROOKSTRUST.CO.UK</a></h3>
          <p class="minus-top">Accommodation for students, postgraduates and university staff</p> -->

          <a href="index.html"><img src="img/william-a-brooks-and-logo.jpg" ></a>
          <p>Accommodation for students, postgraduates and university staff</p>
          
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns minus-top">

          <div class="nav-hr-top">
            <hr>
          </div>

          <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
              <li class="name">
              </li>
               <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
              <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>


            <section class="top-bar-section">
            

              <!-- Right Nav Section -->
              <ul class="right">
                <li class="has-dropdown">
                  <a href="#">Properties</a>
                  <ul class="dropdown">
                    <li><a href="rutland-avenue.html">Rutland Avenue</a></li>
                    <li><a href="coulston-road.html">Coulston Road</a></li>
                    <li><a href="bedford-place.html">Bedford Place</a></li>
                    <li><a href="barton-road.html">Barton Road</a></li>

                    <li><a href="the-romney.html">The Romney</a></li>
                    <li><a href="st-catherines-court.html">St Catherines Court</a></li>
                    <li><a href="westham-street.html">Westham Street</a></li>
                  </ul>
                </li>
                <li class="active"><a href="contact.html">Contact</a></li>
              </ul>

              <!-- Left Nav Section -->
              <ul class="left">
                <li ><a href="index.html">Home</a></li>
              </ul>
              
            </section>
          </nav>

          <div class="nav-hr-bottom">
            <hr>
          </div>

        </div> <!-- End Columns -->
      </div> <!-- End Row -->  


        <div class="row">
          <div class="large-12 columns text-center not-sent">
            <p>Error. Mail not sent. Please try again.</p>
          </div
        </div>

        <div class="row">

          <div class="small-12 large-6 columns space-top address">
            <address class="panel">
              <p><span>Contact information</span></p>
              <hr>

              <p><span>William A Brooks</span></p> <br>

              <b class="b-bigger">Email</b> <br>
                &nbsp;&nbsp;&nbsp; <span><a href="mailto:wbrooks@eximuscapital.com" target="_top">wbrooks@eximuscapital.com</a></span> 

              <br><br>

              <b class="b-bigger">Telephone</b> <br>
                &nbsp;&nbsp;&nbsp; <b>Lancaster:</b>&nbsp;&nbsp; <span>01524 401216 (24 hours)</span> <br>
                &nbsp;&nbsp;&nbsp; <b>London:</b>&nbsp;&nbsp; <span>020 7374 6000</span> <br>
                &nbsp;&nbsp;&nbsp; <b>Mobile:</b>&nbsp;&nbsp; <span>07802 749899</span> <br>
                &nbsp;&nbsp;&nbsp; <b>From outside the UK:</b>&nbsp;&nbsp; <span>+44 1524 401216</span> 

              <br><br>

              <b class="b-bigger">Address</b> <br>
                &nbsp;&nbsp;&nbsp; <span>C/o Eximus Capital <br>
                &nbsp;&nbsp;&nbsp; Warnford Court <br>
                &nbsp;&nbsp;&nbsp; 29 Throgmorton Street <br>
                &nbsp;&nbsp;&nbsp; London <br>
                &nbsp;&nbsp;&nbsp; EC2N 2AT</span>
            </address>
          </div>

          <div class="small-12 large-6 columns contact space-top">
            <form id="contact-form"  method="post" action="mail.php">

              <!-- Form name -->
              <label for="right-label">Name:</label>
              <input id="form-name" name="form-name" type="text" id="right-label" required>

              <!-- Phone -->
              <label for="right-label">Phone:</label>
              <input id="form-phone" name="form-phone" type="text" id="right-label">

              <!-- Email -->
              <label for="right-label">Email:</label>
              <input id="form-email" name="form-email" type="text" id="right-label">

              <label>Message:</label>
              <textarea id="form-message" name="form-message" rows="10" required></textarea>

              <input name="submit" id="submit" target="_self" type="submit" class="button success">

            </form>
          </div>

        </div>


      <div class="row">
        <div class="large-12 columns footer">
            
          <hr>
          <img src="img/eximus-capital-logo.jpg" alt="Eximus Capital Logo">

          <p>&copy; William A Brooks 2017</p>

        </div>

        <div class="large-12 columns by-takomo">
          <p>This site has been created by <a href="http://www.takomo.co.uk" target="_blank">Takomo</a></p>
        </div>
      </div>



      <script src="js/vendor/jquery.js"></script>
      <script src="js/foundation/foundation.js"></script>
      <script src="js/foundation/foundation.topbar.js"></script>
      <script src="js/foundation/foundation.tab.js"></script>

      <script>
        $(document).foundation();
      </script>

    </body>

            '; }
    }
?>