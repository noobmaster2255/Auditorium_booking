<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php");?>
<br><br><br><br><br><br><br><br><br><br>
<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="../temp/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="../temp/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="../temp/css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="../temp/css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="../temp/css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="../temp/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="../temp///fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="../temp///fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	</head>
<!-- //products-breadcrumb -->
<div class="left-ads-display py-lg-4 col-lg-9" style="position:relative;left:150px;top:-50px">
                  <div class="row">

<?php
$sql="select * from booking where customer='$user'";
$tbl=getDatas($sql);
if($tbl==null){
									echo "<div style='position:relative;top:50px;left:320px;'><font color='red'>NO Orders...</font></div>";

}
else
{
for($i=0;$i<count($tbl);$i++)
{
	
	for($j=0;$j<count($tbl[$i]);$j++)
	{
		
	}


?>
<div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
		 
			 <div class="men-thumb-item">
			<?php
			
	echo "<img src='".$tbl[$i][7]."' style='position:relative;width:150px;height:200px;'><br>";
?>
</div>
<div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
									   <?php
	echo "&emsp;&emsp;<font color='red'>Auditorium Name:</font>".$tbl[$i][2]."<br>
	
&emsp;&emsp;<font color='red'>Amount:</font>".$tbl[$i][3]."<br>
&emsp;&emsp;<font color='red'>Pay_type:</font>".$tbl[$i][5]."<br>
&emsp;&emsp;<font color='red'>Date:</font>".$tbl[$i][4]."<br>";
    date_default_timezone_set('Asia/Calcutta'); // time zone changes
    	?>
</div></div></div> <div class="clearfix"></div></div>
	</div></div></div>
<?php
}

}
?>

</div></div>