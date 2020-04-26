<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['login'])==0)
{
	header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$vehicletitle=$_POST['vehicletitle'];
$brand=$_POST['brand'];
/*$vehicleoverview=$_POST['vehicalorcview'];*/
/*$priceperday=$_POST['priceperday'];*/
$fueltype=$_POST['fueltype'];
$modelyear=$_POST['modelyear'];
$seatingcapacity=$_POST['seatingcapacity'];
$vimage=$_FILES["img1"]["name"];
$image2=$_FILES["img2"]["name"];
$image3=$_FILES["img3"]["name"];
$image4=$_FILES["img4"]["name"];
$image5=$_FILES["img5"]["name"];
$airconditioner=$_POST['airconditioner'];
$powerdoorlocks=$_POST['powerdoorlocks'];
$antilockbrakingsys=$_POST['antilockbrakingsys'];
$brakeassist=$_POST['brakeassist'];
$powersteering=$_POST['powersteering'];
$driverairbag=$_POST['driverairbag'];
$passengerairbag=$_POST['passengerairbag'];
$powerwindow=$_POST['powerwindow'];
$cdplayer=$_POST['cdplayer'];
$centrallocking=$_POST['centrallocking'];
$crashcensor=$_POST['crashcensor'];
$leatherseats=$_POST['leatherseats'];
move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$_FILES["img1"]["name"]);
move_uploaded_file($_FILES["img2"]["tmp_name"],"img/vehicleimages/".$_FILES["img2"]["name"]);
move_uploaded_file($_FILES["img3"]["tmp_name"],"img/vehicleimages/".$_FILES["img3"]["name"]);
move_uploaded_file($_FILES["img4"]["tmp_name"],"img/vehicleimages/".$_FILES["img4"]["name"]);
move_uploaded_file($_FILES["img5"]["tmp_name"],"img/vehicleimages/".$_FILES["img5"]["name"]);
// aaya change kru chu/*
/*$sql="INSERT INTO tblearnwithus(VehicleTitle,VehicleBrand,VehiclesOverview,PricePerDay,FuelType,ModelYear,SeatingCapacity,Vimage1,Vimage2,Vimage3,Vimage4,Vimage5,AirConditioner,PowerDoorLocks,AntiLockBrakingSystem,BrakeAssist,PowerSteering,DriverAirbag,PassengerAirbag,PowerWindows,CDPlayer,CentralLocking,CrashSensor,LeatherSeats) VALUES(:vehicletitle,:brand,:vehicleoverview,:priceperday,:fueltype,:modelyear,:seatingcapacity,:vimage1,:vimage2,:vimage3,:vimage4,:vimage5,:airconditioner,:powerdoorlocks,:antilockbrakingsys,:brakeassist,:powersteering,:driverairbag,:passengerairbag,:powerwindow,:cdplayer,:centrallocking,:crashcensor,:leatherseats)";*/
$sql="INSERT INTO tblearnwithus(Name,VehicleTitle,VehicleBrand,FuelType,ModelYear,SeatingCapacity,Vimage,Image2,Image3,Image4,Image5,AirConditionar,PowerDoorLocks,AntiLockBreakingSystem,BreakAssist,PowerSteering,DriverAirbag,PassengerAirbag,PowerWindows,CDPlayer,CentralLocking,CrashSensor,LeatherSeats) VALUES(:name,:vehicletitle,:brand,:fueltype,:modelyear,:seatingcapacity,:vimage,:image2,:image3,:image4,:image5,:airconditioner,:powerdoorlocks,:antilockbrakingsys,:brakeassist,:powersteering,:driverairbag,:passengerairbag,:powerwindow,:cdplayer,:centrallocking,:crashcensor,:leatherseats) ";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
$query->bindParam(':brand',$brand,PDO::PARAM_STR);
/*$query->bindParam(':vehicleoverview',$vehicleoverview,PDO::PARAM_STR);*/
/*$query->bindParam(':priceperday',$priceperday,PDO::PARAM_STR);*/
$query->bindParam(':fueltype',$fueltype,PDO::PARAM_STR);
$query->bindParam(':modelyear',$modelyear,PDO::PARAM_STR);
$query->bindParam(':seatingcapacity',$seatingcapacity,PDO::PARAM_STR);
$query->bindParam(':vimage',$vimage,PDO::PARAM_STR);
$query->bindParam(':image2',$image2,PDO::PARAM_STR);
$query->bindParam(':image3',$image3,PDO::PARAM_STR);
$query->bindParam(':image4',$image4,PDO::PARAM_STR);
$query->bindParam(':image5',$image5,PDO::PARAM_STR);
$query->bindParam(':airconditioner',$airconditioner,PDO::PARAM_STR);
$query->bindParam(':powerdoorlocks',$powerdoorlocks,PDO::PARAM_STR);
$query->bindParam(':antilockbrakingsys',$antilockbrakingsys,PDO::PARAM_STR);
$query->bindParam(':brakeassist',$brakeassist,PDO::PARAM_STR);
$query->bindParam(':powersteering',$powersteering,PDO::PARAM_STR);
$query->bindParam(':driverairbag',$driverairbag,PDO::PARAM_STR);
$query->bindParam(':passengerairbag',$passengerairbag,PDO::PARAM_STR);
$query->bindParam(':powerwindow',$powerwindow,PDO::PARAM_STR);
$query->bindParam(':cdplayer',$cdplayer,PDO::PARAM_STR);
$query->bindParam(':centrallocking',$centrallocking,PDO::PARAM_STR);
$query->bindParam(':crashcensor',$crashcensor,PDO::PARAM_STR);
$query->bindParam(':leatherseats',$leatherseats,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Vehicle posted successfully";
}
else
{
$error="Something went wrong. Please try again";
}
}
}
?>
<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="theme-color" content="#3e454c">
		
		<title>Rent&Drive | Ean With Us</title>
		<!--Bootstrap -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
		<!--Custome Style -->
		<link rel="stylesheet" href="assets/css/style.css" type="text/css">
		<!--OWL Carousel slider-->
		<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
		<!--slick-slider -->
		<link href="assets/css/slick.css" rel="stylesheet">
		<!--bootstrap-slider -->
		<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
		<!-- Font awesome -->
		<link rel="stylesheet" href="admin/css/font-awesome.min.css">
		<!-- Sandstone Bootstrap CSS -->
		<link rel="stylesheet" href="admin/css/bootstrap.min.css">
		<!-- Bootstrap Datatables -->
		<link rel="stylesheet" href="admin/css/dataTables.bootstrap.min.css">
		<!-- Bootstrap social button library -->
		<link rel="stylesheet" href="admin/css/bootstrap-social.css">
		<!-- Bootstrap select -->
		<link rel="stylesheet" href="admin/css/bootstrap-select.css">
		<!-- Bootstrap file input -->
		<link rel="stylesheet" href="admin/css/fileinput.min.css">
		<!-- Awesome Bootstrap checkbox -->
		<link rel="stylesheet" href="admin/css/awesome-bootstrap-checkbox.css">
		<!-- Admin Stye -->
		<link rel="stylesheet" href="admin/css/style.css">
		<link rel="stylesheet" href="assets/css/custom.css" type="text/css">
		<style>
		.errorWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #dd3d36;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
		}
		.succWrap{
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #5cb85c;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
		} 
		</style>
	</head>
	<body>
		<?php include('includes/header.php');?>
		<div class="ts-main-content">
			<!-- <?php include('includes/leftbar.php');?> -->
			<div class="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							
							<h2 class="page-title">Post A Vehicle</h2>
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">Basic Info</div>
										<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
										else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
										<div class="panel-body">
											<form method="post" class="form-horizontal" enctype="multipart/form-data">
												<div class="form-group">
													<label class="col-sm-2 control-label">Full Name<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="name" class="form-control" required>
													</div>
													<label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="vehicletitle" class="form-control" required>
													</div>
													<!-- <label class="col-sm-2 control-label">Brand<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="brand" class="form-control" required></div> -->
														<!-- <select class="selectpicker" name="brandname" required>
															<option value=""> Select </option>
															<?php $ret="select id,BrandName from tblbrands";
															$query= $dbh -> prepare($ret);
															//$query->bindParam(':id',$id, PDO::PARAM_STR);
															$query-> execute();
															$results = $query -> fetchAll(PDO::FETCH_OBJ);
															if($query -> rowCount() > 0)
															{
															foreach($results as $result)
															{
															?>
															<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?></option>
															<?php }} ?>
														</select> -->
													
												</div>
												
												<div class="hr-dashed"></div>

												<!-- <div class="form-group">
													<label class="col-sm-2 control-label">Vehical Overview<span style="color:red">*</span></label>
													<div class="col-sm-10">
														<textarea class="form-control" name="vehicalorcview" rows="3" required></textarea>
													</div>
												</div> -->
												<div class="form-group">
													<!-- <label class="col-sm-2 control-label">Price Per Day<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="priceperday" class="form-control" required>
													</div> -->
													<label class="col-sm-2 control-label">Brand<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="brand" class="form-control" required></div>
													<label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<select class="selectpicker" name="fueltype" required>
															<option value=""> Select </option>
															<option value="Petrol">Petrol</option>
															<option value="Diesel">Diesel</option>
															<option value="CNG">CNG</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="modelyear" class="form-control" required>
													</div>
													<label class="col-sm-2 control-label">Seating Capacity<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="seatingcapacity" class="form-control" required>
													</div>
												</div>
												<div class="hr-dashed"></div>
												<div class="form-group">
													<div class="col-sm-12">
														<h4><b>Upload Images</b></h4>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-4">
														Car Image  <span style="color:red">*</span><input type="file" name="img1" required>
													</div>
													<div class="col-sm-4">
															 RC Book-Front side<span style="color:red">*</span><input type="file" name="img2" required>
															</div>
															<div class="col-sm-4">
																RC Book-Back Side<span style="color:red">*</span><input type="file" name="img3" required>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-4">
																Govt. ID-Front Side<span style="color:red">*</span><input type="file" name="img4" required>
															</div>
															<div class="col-sm-4">
																Govt. Id-Back Side<input type="file" name="img5">
															</div>
														</div> 
														<div class="hr-dashed"></div>
													</div>
												</div>
											
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">Accessories</div>
													<div class="panel-body">
														<div class="form-group">
															<div class="col-sm-3">
																<div class="checkbox checkbox-inline">
																	<input type="checkbox" id="airconditioner" name="airconditioner" value="1">
																	<label for="airconditioner"> Air Conditioner </label>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="checkbox checkbox-inline">
																	<input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1">
																	<label for="powerdoorlocks"> Power Door Locks </label>
																</div>
															</div>
															<div class="col-sm-3">
																	<div class="checkbox checkbox-inline">
																		<input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
																		<label for="antilockbrakingsys"> AntiLock Braking System </label>
																	</div>
															</div>
															<div class="col-sm-3">
																<div class="checkbox checkbox-inline">
																	<input type="checkbox" id="brakeassist" name="brakeassist" value="1">
																		<label for="brakeassist"> Brake Assist </label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-3">
																<div class="checkbox checkbox-inline">
																	<input type="checkbox" id="powersteering" name="powersteering" value="1">
																	<label for="powersteering"> Power Steering </label>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="checkbox checkbox-inline">
																	<input type="checkbox" id="driverairbag" name="driverairbag" value="1">
																	<label for="driverairbag">Driver Airbag</label>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="checkbox checkbox-inline">
																	<input type="checkbox" id="passengerairbag" name="passengerairbag" value="1">
																	<label for="passengerairbag"> Passenger Airbag </label>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="checkbox checkbox-inline">
																	<input type="checkbox" id="powerwindow" name="powerwindow" value="1">
																	<label for="powerwindow"> Power Windows </label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-3">
																<div class="checkbox checkbox-inline">
																	<input type="checkbox" id="cdplayer" name="cdplayer" value="1">
																	<label for="cdplayer"> CD Player </label>
																</div>
															</div>
																<div class="col-sm-3">
																	<div class="checkbox h checkbox-inline">
																		<input type="checkbox" id="centrallocking" name="centrallocking" value="1">
																		<label for="centrallocking">Central Locking</label>
																	</div>
																</div>
																<div class="col-sm-3">
																	<div class="checkbox checkbox-inline">
																		<input type="checkbox" id="crashcensor" name="crashcensor" value="1">
																		<label for="crashcensor"> Crash Sensor </label>
																	</div>
																</div>
																<div class="col-sm-3">
																	<div class="checkbox checkbox-inline">
																		<input type="checkbox" id="leatherseats" name="leatherseats" value="1">
																		<label for="leatherseats"> Leather Seats </label>
																	</div>
																</div>
														</div>
														<div class="form-group">
															<div class="col-sm-8 col-sm-offset-2">
																<button class="btn btn-default" type="reset">Cancel</button>
																<button class="btn btn-primary" name="submit" type="submit">Post</button>
															</div>
														</div>
													</div>
												</div>
										 	</form>
										 	</div>
										</div>
									</div>
								</div>
								</div>
							</div>
			</div>					
		</div>
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
							<!-- Loading Scripts -->
							<script src="admin/js/jquery.min.js"></script> 
							<script src="admin/js/bootstrap-select.min.js"></script>
							<script src="admin/js/bootstrap.min.js"></script>
							<script src="admin/js/jquery.dataTables.min.js"></script>
							<script src="admin/js/dataTables.bootstrap.min.js"></script>
							<script src="admin/js/Chart.min.js"></script>
							<script src="admin/js/fileinput.js"></script>
							<script src="admin/js/chartData.js"></script>
							<script src="admin/js/main.js"></script>
							<script src="assets/js/slick.min.js"></script> 
							<script src="assets/js/owl.carousel.min.js"></script> 
	</body>
</html>