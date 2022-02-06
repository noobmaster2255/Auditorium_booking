<?php session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
include("top.php");
?>
<br><br><br><br><br><br><br><br><br><br>
<head>
<style>
 table{
                   border: 3px solid #111;
                   border-radius: 1px;
                   width:2500px;
                   margin-left:0px;
                   
               }
               th {
    background-color: #17c3a2;
    color: white;
    height: 50px;
   text-align:center; 
   width: 1000px;
}
tr{
    height: 20px;
    border-bottom: 1px solid #ddd;
     text-align: center;
}
    
    
     body{
         background-color:grey;
        background-size: cover;
        background-repeat: no-repeat;
        height: 1500px;    
    }


    </style>
</head>
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
<body
 style="background-color: tomato;
        background-size: cover;
	    background-position: center;
	    min-height: 800px;">

<!-- //products-breadcrumb -->
<div class="left-ads-display py-lg-4 col-lg-9" style="position:relative;left:150px;top:-50px">
                  <div class="row">

<?php
$sql="select * from booking where owner='$user'";
$tbl=getDatas($sql);
if($tbl==null){
echo "<div style='position:relative;top:250px;'><font color='red'>NO Orders...</font></div>";

}
else
{
    
    ?><h1 style="position: relative;left:490px;top:-150px;color:white;">MY ORDERS</h1>
	<table border="3" style="position:relative;left:50px;top:-100px;width:1000px;color:white;">
                          <tr>
                          <th>Image</th> 
                          <th>Customer</th>
                          <th>Auditorium Name</th>
                          <th>Amount</th>                     
                          <th>Booking Date</th>  
                          <th>Pay_type</th>                              
                          <th> Status</th> 
                          <th> Owner</th>  
                          
                          </tr>
                          <?php
    
for($i=0;$i<count($tbl);$i++)
{
	
	for($j=0;$j<count($tbl[$i]);$j++)
	{ 
		
    }
?>
<tr style="background:black;color:white">
    <td><img src="<?php echo $tbl[$i][7];?>" width="100" height="100"></td>
    <td><b><?php echo $tbl[$i][1];?></b></td>
    <td><b><?php echo  $tbl[$i][2];?></b></td>
    <td><b><?php echo $tbl[$i][3];?></b></td>
    <td><b><?php echo $tbl[$i][4];?></b></td>
    <td><b><?php echo $tbl[$i][5];?></b></td>
    <td><b><?php echo $tbl[$i][6];?></b></td>
    <td><b><?php echo $tbl[$i][8];?></b></td>
    
</tr>

    
  <?php
}}
    ?>
  </table>