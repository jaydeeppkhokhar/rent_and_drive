<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Rent&Drive</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/js/jquery.datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <!--   <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" /> -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" rel="stylesheet">
    <!-- <link href="assets/css/custom.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/css/custom.css" type="text/css">
  </head>
  <body>
    <!-- Start Switcher -->
     <?php include('includes/colorswitcher.php');?> 
    <!-- /Switcher -->
    
    <!--Header-->
    <?php include('includes/header.php');?>
    <!-- /Header -->
    <!-- <section class="banner-section">
      <div class="container">
        <div class="div_zindex">
          <img src="Yamaha-YZF-R15-V3-Side-133615.webp" alt="img">
        </div>
      </div>
    </section> -->
    <!-- Banners -->
    <section id="banner" class="banner-section ">
      <div class="container">
        <div class="div_zindex">
          <div class="row">
            <div class="col-md-4">
              <div class="banner_content">
                <!-- <h1>Find the right car for you.</h1>
                <p>We have more than a thousand cars for you to choose. </p>
                <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div> -->
               <!--  <aside>
                  <div class="sidebar-widget">
                    <div class="widget_heading">
                      <h5><i class="" aria-hidden="true"></i>Book self-drive car and bike</h5>
                    </div>
                    <form method="post">
                      <div class="form-group input-group date">
                        <input type="text" class="form-control" id="fromDate" name="fromdate" placeholder="From Date And Time"  autocomplete="off" required>
                         <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                      </div>
                      <div class="form-group input-group date">
                        <input type="text" class="form-control"  id="toDate" name="todate" placeholder="To Date And Time" autocomplete="off" required>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </div> -->
                     <!--  <div class="form-group">
                       <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea> -->
                       <!-- <?php if($_SESSION['login'])
              {?>
              <div class="form-group">
                <input type="submit" class="btn"  name="submit" value="Book Now">
                 <a href="car-listing.php" class="btn btn-dark btn-sm">Search Car</a>
                 <a href="bike-listing.php" class="btn btn-dark btn-sm">Search Bike</a>
                 <input type="submit" name="car" class="btn btn-sm btn-dark" value="Search Car" />
                 <input type="submit" name="bike" class="btn btn-sm btn-dark" value="Search Bike" />
              </div>
            </span></form>
              <?php } else { ?>
<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Book</a>

              <?php } ?>
                      </div>
                    </div>
                  </aside> -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /Banners -->
        <!-- Resent Cat-->
        <section class="section-padding gray-bg">
          <div class="container">
            <div class="section-header text-center">
              <h2>Find the Best <span>CarForYou</span></h2>
<!--               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
 -->            </div>
            <div class="row">
              
              <!-- Nav tabs -->
              <div class="recent-tab">
                <ul class="nav nav-tabs" role="tablist">
                  <!-- <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>  -->
                  <a href="car-listing.php" class="btn btn-dark btn-sm"> Car<i aria-hidden="true"></i></a>
                </ul>
                <ul class="nav nav-tabs" role="tablist">
                  <!-- <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>  -->
                  <a href="bike-listing.php" class="btn btn-block"> Bike<i aria-hidden="true"></i></a>
                </ul>
              </div>
              <!-- Recently Listed New Cars -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="resentnewcar">
                  <?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
                  $query = $dbh -> prepare($sql);
                  $query->execute();
                  $results=$query->fetchAll(PDO::FETCH_OBJ);
                  $cnt=1;
                  if($query->rowCount() > 0)
                  {
                  foreach($results as $result)
                  {
                  ?>
                  <div class="col-list-3">
                    <div class="recent-car-list">
                      <div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
                      <ul>
                        <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
                      </ul>
                    </div>
                    <div class="car-title-m">
                      <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
                      <span class="price">Rs.<?php echo htmlentities($result->PricePerDay);?> /Day</span>
                    </div>
                    <div class="inventory_info_m">
                      <p><?php echo substr($result->VehiclesOverview,0,70);?></p>
                    </div>
                  </div>
                </div>
                <?php }}?>
                
              </div>
            

            <!-- Recently Listed new Bike -->
            <!-- <div class="tab-content"> -->
                <div role="tabpanel" class="tab-pane active" id="resentnewcar">
                  <?php $sql = "SELECT tblbike.VehiclesTitle,tblbikebrand.BrandName,tblbike.PricePerDay,tblbike.ModelYear,tblbike.id,tblbike.VehiclesOverview,tblbike.Vimage from tblbike join tblbikebrand on tblbikebrand.id=tblbike.VehiclesBrand";
                  $query = $dbh -> prepare($sql);
                  $query->execute();
                  $results=$query->fetchAll(PDO::FETCH_OBJ);
                  $cnt=1;
                  if($query->rowCount() > 0)
                  {
                  foreach($results as $result)
                  {
                  ?>
                  <div class="col-list-3">
                    <div class="recent-car-list">
                      <div class="car-info-box"> <a href="bike-detail.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage);?>" class="img-responsive" alt="image"></a>
                      <ul>
                        <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
                      </ul>
                    </div>
                    <div class="car-title-m">
                      <h6><a href="bike-detail.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
                      <span class="price">Rs.<?php echo htmlentities($result->PricePerDay);?> /Hour</span>
                    </div>
                    <div class="inventory_info_m">
                      <p><?php echo substr($result->VehiclesOverview,0,70);?></p>
                    </div>
                  </div>
                </div>
                <?php }}?>
                
              </div>
            </div>

          </div>
        </section>
        <!-- /Resent Cat -->
        <!--
        Fun Facts
        <section class="fun-facts-section">
          <div class="container div_zindex">
            <div class="row">
              <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                  <div class="cell">
                    <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
                    <p>Years In Business</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                  <div class="cell">
                    <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
                    <p>New Cars For Sale</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                  <div class="cell">
                    <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
                    <p>Used Cars For Sale</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                  <div class="cell">
                    <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
                    <p>Satisfied Customers</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          Dark Overlay
          <div class="dark-overlay"></div>
        </section>
        /Fun Facts
        Testimonial
        <section class="section-padding testimonial-section parallex-bg">
          <div class="container div_zindex">
            <div class="section-header white-text text-center">
              <h2>Our Satisfied <span>Customers</span></h2>
            </div>
            <div class="row">
              <div id="testimonial-slider">
                <?php
                $tid=1;
                $sql = "SELECT tbltestimonial.Testimonial,tblusers.FullName from tbltestimonial join tblusers on tbltestimonial.UserEmail=tblusers.EmailId where tbltestimonial.status=:tid";
                $query = $dbh -> prepare($sql);
                $query->bindParam(':tid',$tid, PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {  ?>
                <div class="testimonial-m">
                  <div class="testimonial-img"> <img src="assets/images/cat-profile.png" alt="" /> </div>
                  <div class="testimonial-content">
                    <div class="testimonial-heading">
                      <h5><?php echo htmlentities($result->FullName);?></h5>
                      <p><?php echo htmlentities($result->Testimonial);?></p>
                    </div>
                  </div>
                </div>
                <?php }} ?>
                
                
                
              </div>
            </div>
          </div>
          Dark Overlay
          <div class="dark-overlay"></div>
        </section> -->
        <!-- /Testimonial-->
        <!--Footer -->
        <?php include('includes/footer.php');?>
        <!-- /Footer-->
        <!--Back to top-->
        <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
        <!--/Back to top-->
        <!--Login-Form -->
        <?php include('includes/login.php');?>
        <!--/Login-Form -->
        <!--Register-Form -->
        <?php include('includes/registration.php');?>
        <!--/Register-Form -->
        <!--Forgot-password-Form -->
        <?php include('includes/forgotpassword.php');?>
        <!--/Forgot-password-Form -->
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/interface.js"></script>
        <!--Switcher-->
        <script src="assets/switcher/js/switcher.js"></script>
        <!--bootstrap-slider-JS-->
        <script src="assets/js/bootstrap-slider.min.js"></script>
        <!--Slider-JS-->
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>

        <script>
         /*$('#picker').datetimepicker({
             timepicker: false,
             datepicker: true,
             format: 'Y-m-d',//formate of date
             value: ''2020-1-1,//default value
           })*/
           
       
           /* jQuery(function () {

              $('#fromDate').datetimepicker({
                minDate: new Date(),
                minTime: new Date(),
                onChangeDateTime: function(ct, $i) {
                  newDate = new Date($i[0].value);
                  $('#toDate').datetimepicker('setOptions', {
                    minTime: newDate.setHours(newDate.getHours() + 2)
                  });
                }
              });
              $('#toDate').datetimepicker({
                minDate: new Date()
              });

*/
            // jQuery('#fromDate').datetimepicker({
            // //format: 'mm-dd-yyyy',
            // endDate: '+0d',
            // autoclose: true
            // });
            // jQuery('#toDate').datepicker({
            // //format: 'mm-dd-yyyy',
            // endDate: '+0d',
            // autoclose: true,
            // useCurrent: false
            // });
            // jQuery('#fromDate').datetimepicker().datepicker("setDate",new Date());
            // jQuery('#toDate').datetimepicker().datepicker("setDate",new Date());
            // jQuery("#fromDate").on("dp.change",function (e) {
            // jQuery('#toDate').data("DateTimePicker").setMinDate(e.date);
            // });
            // jQuery("#toDate").on("dp.change",function (e) {
            // jQuery('#fromDate').data("DateTimePicker").setMaxDate(e.date);
            // });
            });
          </script>
    </html>