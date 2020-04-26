
<header>
  <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <a class="navbar-brand" style="font-family: 'Trade Winds', cursive; color:#000;" href="index.php">
        Rent & Drive
      </a>
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        
            
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	  }}?>
             
           <?php if($_SESSION['login']){?>
            <div class="user_login">
              <ul>
                <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo htmlentities($result->FullName);  ?> <i class="fa fa-angle-down" aria-hidden="true"></i> </a>

                 <ul class="dropdown-menu">
                  
                <li><a href="profile.php">Profile Settings</a></li>
                  <li><a href="update-password.php">Update Password</a></li>
                <li><a href="my-booking.php">My Booking</a></li>
              <!-- <li><a href="post-testimonial.php">Post a Feedback</a></li>
                       <li><a href="my-testimonials.php">My Testimonial</a></li> -->
                <li><a href="logout.php">Sign Out</a></li>
                </ul>
            </li>
            </ul>
        </div>
            <?php } else { ?>

            <div class="login_btn mt-18"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
            <?php } ?>
          

            
          
        <!-- <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div> -->
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="car-listing.php">Car</a>
          <li><a href="bike-listing.php">Bike</a></li>
          <li><a href="earnwithus.php">Earn with Us</a></li>
          <!-- <li><a href="page.php?type=faqs">FAQs</a></li> -->
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>