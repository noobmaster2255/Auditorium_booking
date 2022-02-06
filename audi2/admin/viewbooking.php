
<?php
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<head>
<style>
body{
       background-color:blanchedalmond;
        background-size: cover;
        background-position: center;
        min-height: 700px;

    }                             
                                    

table
{
	width:100px;
	height:100px;
	border:2px solid #17c3a2;
	border-collapse;collapse;
}
th
{
	color:#17c3a2
	background-color:BLACK;
    text-align:center;
}
    
   td{
   	text-align:center;
   }tr{
   	text-align:center;
   }
   
</style>
</head>
<?php
$sql="select * from booking";
$tbl=getDatas($sql);
if($tbl==null)
{
	echo"no datas";
}
else
{
	?>
	<h1 style="position: relative;left:550px;top:100px;color:#17c3a2;">VIEW BOOKINGS</h1>
	<table border="4"style="position:relative;left:50px;width:1300px;top:150px;">
	<tr>
	<th>Image</th>
	
	<th>Customer</th>
	<th>Auditorium Name</th>
	<th>Amount</th>
	<th>Booking Date</th>
	<th>Payment Type</th>
	<th>Status</th>
	<th>Owner</th>
</tr>
</tr>
	<?php
		for($i=0;$i<count($tbl);$i++)
	{
for($j=0;$j<count($tbl[$i]);$j++)
{
}
	?>

<tr>
<td><img src="<?php echo $tbl[$i][7]; ?>" width="100" height="100"></td>

<td><?php echo $tbl[$i][1];?></td>
<td><?php echo $tbl[$i][2];?></td>
<td><?php echo $tbl[$i][3];?></td>
<td><?php echo $tbl[$i][4];?></td>
<td><?php echo $tbl[$i][5];?></td>
<td><?php echo $tbl[$i][6];?></td>
<td><?php echo $tbl[$i][8];?></td>
</tr>
<?php
}
}
?>
	
</table>
