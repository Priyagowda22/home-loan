<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['hlmsuid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {

$uid=$_SESSION['hlmsuid'];
$pannum=$_POST['pannum'];
$address=$_POST['address'];
$addtypeproof=$_POST['addressproofdoc'];
$sertype=$_POST['sertype'];
$mincome=$_POST['monthlyincome'];
$exloan=$_POST['exloan'];
$explamt=$_POST['explamt'];
$tenure=$_POST['tenure'];
$gname=$_POST['gname'];
$gmobnum=$_POST['gmobnum'];
$gemail=$_POST['gemail'];
$gaddress=$_POST['gaddress'];
$file=$_FILES["pccopy"]["name"];
$file1=$_FILES["uaddproof"]["name"];
$image=$_FILES["profile"]["name"];


$applicationno=mt_rand(10000, 99999);

$extension = substr($file,strlen($file)-4,strlen($file));

$allowed_extensions = array("docs",".doc",".pdf");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('File has Invalid format. Only docs / doc/ pdf format allowed');</script>";
}
else
{

$file=md5($file).time().$extension;
 move_uploaded_file($_FILES["pccopy"]["tmp_name"],"pancardfile/".$file);



$extension1 = substr($file1,strlen($file1)-4,strlen($file1));

$allowed_extensions1 = array("docs",".doc",".pdf");
if(!in_array($extension1,$allowed_extensions1))
{
echo "<script>alert('File has Invalid format. Only docs / doc/ pdf format allowed');</script>";
}
else
{

$file1=md5($file1).time().$extension1;
 move_uploaded_file($_FILES["uaddproof"]["tmp_name"],"addfile/".$file1);
$extension2 = substr($image,strlen($image)-4,strlen($image));
$allowed_extensions2 = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension2,$allowed_extensions2))
{
echo "<script>alert('Profile pic has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

$image=md5($image).time().$extension2;
 move_uploaded_file($_FILES["profile"]["tmp_name"],"images/".$image);

$sql="insert into tblapplication(UserID,ApplicationNumber,PanNumber,PanCardCopy,Address,AddressProofType,AdressDoc,ServiceType,MontlyIncome,ExistingLoan,ExpectedLoanAmount,ProfilePic,Tenure,GName,Gmobnum,Gemail,Gaddress)values(:uid,:applicationno,:pannum,:file,:address,:addtypeproof,:file1,:sertype,:mincome,:exloan,:explamt,:image,:tenure,:gname,:gmobnum,:gemail,:gaddress)";
$query=$dbh->prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->bindParam(':pannum',$pannum,PDO::PARAM_STR);
$query->bindParam(':file',$file,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':addtypeproof',$addtypeproof,PDO::PARAM_STR);
$query->bindParam(':file1',$file1,PDO::PARAM_STR);
$query->bindParam(':sertype',$sertype,PDO::PARAM_STR);
$query->bindParam(':mincome',$mincome,PDO::PARAM_STR);
$query->bindParam(':exloan',$exloan,PDO::PARAM_STR);
$query->bindParam(':explamt',$explamt,PDO::PARAM_STR);
$query->bindParam(':image',$image,PDO::PARAM_STR);
$query->bindParam(':tenure',$tenure,PDO::PARAM_STR);
$query->bindParam(':gname',$gname,PDO::PARAM_STR);
$query->bindParam(':gmobnum',$gmobnum,PDO::PARAM_STR);
$query->bindParam(':gemail',$gemail,PDO::PARAM_STR);
$query->bindParam(':gaddress',$gaddress,PDO::PARAM_STR);
$query->bindParam(':applicationno',$applicationno,PDO::PARAM_STR);

 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Application Has been sent.")</script>';
echo "<script>window.location.href ='application-form.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}
}
}
}
}
?>
<!DOCTYPE HTML>
<html lang="zxx">
<head>
	<title>Home Loan Management System::Application Form</title>
	
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
			<h2 class="heading-agileinfo">Application Form<span>Fill the following details</span></h2>
			<span class="w3-line black"></span>
			<div class="inner-sec-w3layouts-agileinfo mt-md-5 pt-5">
			
				<div class="contact_grid_right mt-5">
					<h6>Please Fill the Following Details</h6>
					<form method="post" enctype="multipart/form-data">
						<div class="contact_left_grid">
						<?php
$uid=$_SESSION['hlmsuid'];
$sql="SELECT * from  tbluser where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
						<label style="font-size: 18px;">Name :</label>	
					 <input value="<?php  echo $row->FullName;?>" name="fname" type="text" tabindex="1" required='true'>
					 <label style="font-size: 18px;padding-top: 20px;">Mobile Number:</label>	
					 <input type="text" tabindex="3" required='true' maxlength="10" pattern="[0-9]+" value="<?php  echo $row->MobileNumber;?>" name="mobno"><?php $cnt=$cnt+1;}} ?>
					 <label style="font-size: 18px;padding-top: 20px;">PAN Number:</label>
					 <input type="text" name="pannum" required="true" class="form-control" />
							<label style="font-size: 18px;padding-top: 20px;">Upload:</label>
					 <input type="file" name="pccopy" required="true" class="form-control"/>
					 <p><label style="font-size: 18px;padding-top: 20px;">Address:</label>
					 <textarea class="form-control" name="address" required="true" /></textarea></p>
					 <p><label style="font-size: 18px;padding-top: 20px;">Address Proof:</label>
					 <select class="form-control" name="addressproofdoc" required="true">
					 <option value="">Choose</option>
					 <option value="Voted ID">Voted ID</option>
					 <option value="Aadhar">Aadhar</option>
					 <option value="Passport">Passport</option>
					 <option value="Driving Licence">Driving Licence</option>
					 <option value="Other">Other(any other govt issue doc)</option></select></p>
		
					 <label style="font-size: 18px;padding-top: 20px;">Upload Address Proof:</label>
					 <input type="file" name="uaddproof" required="true" class="form-control" />
					 <p><label style="font-size: 18px;padding-top: 20px;">Service Type(govt/private/bussiness):</label>
					 
					 <input type="text" name="sertype" required="true" class="form-control" /></p>
					 <label style="font-size: 18px;padding-top: 20px;">Monthly Income:</label>
					 <input type="text" name="monthlyincome" required="true" class="form-control"/>
					 <label style="font-size: 18px;padding-top: 20px;">Existing Loan:</label>
					 <input type="radio" name="exloan" required="true" value="Yes" />Y
					 <input type="radio" name="exloan" required="true" value="No"/>N
					 <p><label style="font-size: 18px;padding-top: 20px;">Expected Loan Amt:</label>
					 <input type="text" class="form-control" name="explamt" required="true" /></p>
					 <label style="font-size: 18px;padding-top: 20px;">Profile Photo:</label>
					 <input type="file" class="form-control" name="profile" required="true" />
					 <p><label style="font-size: 18px;padding-top: 20px;">Tenure:</label>
					 <select name="tenure" class="form-control" required="true">
					 <option value="">Choose</option>
					 <option value="10 yrs">10 yrs</option>
					 <option value="12 yrs">12 yrs</option>
					 <option value="14 yrs">14 yrs</option>
					 <option value="15 yrs">15 yrs</option>
					 <option value="16 yrs">16 yrs</option>
					  <option value="18 yrs">18 yrs</option>
					   <option value="20 yrs">20 yrs</option></select></p>

					    <label style="font-size: 25px;padding-top: 20px;font-weight: bold;">Guarantor Info</label><br>
					    <label style="font-size: 18px;padding-top: 20px;">Guarantor Name:</label>
					 <input type="text" name="gname" required="true" class="form-control" />
					    <label style="font-size: 18px;padding-top: 20px;">Guarantor Mob Number:</label>
					 <input type="text" name="gmobnum" required="true" class="form-control" />
					 <label style="font-size: 18px;padding-top: 20px;">Guarantor Email:</label>
					 <input type="text" name="gemail" required="true" class="form-control" />
					 <label style="font-size: 18px;padding-top: 20px;">Guarantor Address:</label>
					 <textarea class="form-control" name="gaddress" required="true" /></textarea>
							<p style="padding-top: 30px;">
							<input type="submit" value="Submit" name="submit">
							<input type="reset" value="Clear"></p>
							<div class="clearfix"> </div>
						</div>
					</form>
					
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