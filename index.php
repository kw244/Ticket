<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Ticket</title>
  <link rel="icon" href="resources/tenko-logo.png">
  
  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

</head>

<body>

<!-- Start Header -->
<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="logo">
          <a href="#"><img src="resources/tenko-logo.png" alt="logo" class="img-responsive"></a>
          <span class="company-name"><p>Ticket</p></span>
        </div>
        <div class="navigation">
          <nav>
            <ul class="custom-list list-inline">
              <li><a href="#hero">Home</a></li>
              <li><a href="#events">Events</a></li>
              <li><a href="#features">Features</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li><a href="#faq">FAQ</a></li>
              <li><a href="#hero" class="btn btn-red">Sign Up</a></li>
            </ul>
          </nav>
          <i class="fa fa-list toggleMenu"></i>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Header -->



<!-- Start About -->
<section id="events">
  <div class="container">
    
    <div class="row" id="eventGrid">
        <div class="col-md-8 col-md-offset-2 preamble">
            <h3>Upcoming Events</h3>
        </div>   
        <!-- grid of events gets populated here -->
        
    </div>
    
  </div>
  

  
  
</section>
<!-- End About -->



<!-- Scripts -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.ba-outside-events.min.js"></script>
<script src="js/jquery.ui.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type:"GET",
            url:"database/display-events.php",
            dataType:"html",
            success: function(response){
                $("#eventGrid").append(response); 
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type:"GET",
            url:"database/get-events.php",
            dataType:"json",
            success: function(response){
                console.log(response);
            }
        });
    });

</script>

</body>
</html>
