<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['login'])) 
  {
    $mobno=$_POST['mobno'];
    $password=md5($_POST['password']);
    $sql ="SELECT ID FROM tbluser WHERE MobileNumber=:mobno and Password=:password";
    $query=$dbh->prepare($sql);
    $query->bindParam(':mobno',$mobno,PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['hlmsuid']=$result->ID;
}
$_SESSION['login']=$_POST['mobno'];
echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}
?>
<!DOCTYPE HTML>
<html lang="zxx">
<head>
	<title>Home Loan Management System::Sign Up Page</title>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!-- online fonts -->
	<!-- titles -->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
</head>

<body>
	
	<?php include_once('includes/header.php');?>
	<!-- banner -->
	<section class="banner-1">
	</section>
	<!-- //banner -->
	<!--/contact-->
	<section class="contact py-5">
		<div class="container py-md-4 mt-md-3">
			<h2 class="heading-agileinfo">Login Form<span>Speed Up The Loan Process</span></h2>
			<span class="w3-line black"></span>
			<div class="inner-sec-w3layouts-agileinfo mt-md-5 pt-5">
			
				<div class="contact_grid_right mt-5">
					<h6>Existing user please fill this form.</h6>
					<form method="post" name="login">
						<div class="contact_left_grid">
					<input placeholder="Mobile:" type="text" tabindex="3" name="mobno" required="true" maxlength="10" pattern="[0-9]+" class="form-control">
						<br>
						<input placeholder="password" type="password" tabindex="4" name="password" required="true" id="password" class="form-control">
							
							<p style="padding-top: 30px;">
							<input type="submit" value="Submit" name="login">
							<input type="reset" value="Clear"></p>
							<div class="clearfix"> </div>
						</div>
					</form>
					 <p><a href="forgot-password.php">FORGOT YOUR PASSWORD ?</a></p>
					 <p><a href="sign-up.php">Signup</a></p>
				</div>
			</div>
		</div>
	</section>
	<!--//contact-->
<?php include_once('includes/footer.php');?>

<!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js ">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>
</html>