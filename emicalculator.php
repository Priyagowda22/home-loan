<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);


?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Home Loan Management System | EMI Calcaultor</title>
    
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
            <h2 class="heading-agileinfo">EMI Calcaultor<span>Speed Up The Loan Process</span></h2>
            <span class="w3-line black"></span>

            <div class="inner-sec-w3layouts-agileinfo mt-md-5 pt-5">
            
                
                <div class="contact_grid_right mt-5">
                    <form method="post">
                        <div class="contact_left_grid">
                            <input type="text" name="lamount" placeholder="Loan Amount" pattern="[0-9]+" title="Only Numbers" required >
                            <input type="text" name="lrate" placeholder="Interest  Rate. Ex: 6.7" required class="form-control"  pattern="[0-9]+(\.[0-9]{1,2})?%?"title="This must be a number with up to 2 decimal places">
                                 <input type="text" name="tenure" placeholder="Tenure in Year" required class="form-control" maxlength="2" pattern="[0-9]" title="2 Numeric characters only"> <br />
        <p>
                            <input type="submit" value="Submit" name="submit">
                            <input type="reset" value="Clear"></p>
                            <div class="clearfix"> </div>
                        </div>
                    </form>
                </div>
                <?php if(isset($_POST['submit'])){?>
<table class="table table-bordered">
    <tr>
        <th colspan="4" style="font-size:22px; text-align:center;"> Loan Details</th>
    </tr>
    
    <tr>
        <th>Loan Amount</th>
        <td><?php echo $dloan=$_POST['lamount']?></td>
        <th>Loan Interest</th>
            <td><?php echo $lroi=$_POST['lrate']?> %</td>
    </tr>
        <tr>
        <th>Loan Tenure</th>
        <td colspan="3"><?php echo $ltenure=$_POST['tenure']?> Years</td>
    </tr>


    <?php 
$rate = $lroi/12; //converting int to month
$time=$ltenure*12; // Converting in to month
$simpleinterst=($rate*$time*$dloan)/100;
?>
       <tr>
<th>Total interest</th>
<td><?php echo $simpleinterst?></td>
<th>Total Payable Amount<br />
Principle + Interest</th>
<td><?php echo $totalpayable=$simpleinterst+$dloan?></td>
  </tr>             
   
          <tr>
<th>Monthly EMI</th>
<td><?php echo round($totalpayable/$time,2);?></td>
<th>Total EMI Installments</th>
<td><?php echo $time;?></td>
  </tr> 
</table>
<?php }?>



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