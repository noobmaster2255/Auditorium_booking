
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
$sql="select * from add_auditorium";
$tbl=getDatas($sql);
if($tbl==null)
{
	echo"no datas";
}
else
{
	?>
	<h1 style="position: relative;left:500px;top:120px;color:red;">VIEW AUDITORIUMS</h1>
	<table border="4"style="position:relative;left:50px;width:1300px;top:150px;">
	<tr>
	<th>Image</th>
	<th>Auditorium Name</th>
	<th>Location</th>
	<th>District</th>
	<th>Category</th>
	<th>Purpose</th>
	<th>Amount</th>
	<th>Seat</th>
	<th>Timing</th>
	<th>Owner</th>
	<th>Availability</th>
</tr>
</tr>
</tr>
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
<td><img src="<?php echo $tbl[$i][8]; ?>" width="100" height="100"></td>

<td><?php echo $tbl[$i][1];?></td>
<td><?php echo $tbl[$i][2];?></td>
<td><?php echo $tbl[$i][3];?></td>
<td><?php echo $tbl[$i][4];?></td>
<td><?php echo $tbl[$i][5];?></td>
<td><?php echo $tbl[$i][6];?></td>
<td><?php echo $tbl[$i][7];?></td>
<td><?php echo $tbl[$i][9];?></td>
<td><?php echo $tbl[$i][10];?></td>
<td><?php echo $tbl[$i][11];?></td>
</tr>
<?php
}
}
?>
	
</table>
