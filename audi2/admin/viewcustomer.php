<?php
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<head>
<style>
body{
        background-color:blanchedalmond;
        
      

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
$sql="select * from customer_reg";
$tbl=getDatas($sql);
if($tbl==null)
{
	echo"no datas";
}
else
{
	?>
	<h1 style="position: relative;left:500px;top:100px;color:#17c3a2;">CUSTOMER INFO</h1>
	<table border="4"style="position:relative;left:150px;width:1100px;top:150px;">
	<tr>
	<th>NAME</th>
	<th>GENDER</th>
	<th>MOBILENUM</th>
	<th>DOB</th>
	<th>HOUSE</th>
	<th>STREET</th>
	<th>CITY</th>
	<th>COUNTRY</th>
	<th>STATE</th>
	<th>DISTRICT</th>
	<th>PINCODE</th>
	<th>EMAIL</th>

	
	
	</tr>
	<?php
		for($i=0;$i<count($tbl);$i++)
	{
for($j=0;$j<count($tbl[$i]);$j++)
{
}
	?>

<tr>

<td><?php echo $tbl[$i][1];?></td>
<td><?php echo $tbl[$i][2];?></td>
<td><?php echo $tbl[$i][3];?></td>
<td><?php echo $tbl[$i][4];?></td>
<td><?php echo $tbl[$i][5];?></td>
<td><?php echo $tbl[$i][6];?></td>
<td><?php echo $tbl[$i][7];?></td>
<td><?php echo $tbl[$i][8];?></td>
<td><?php echo $tbl[$i][9];?></td>
<td><?php echo $tbl[$i][10];?></td>
<td><?php echo $tbl[$i][11];?></td>
<td><?php echo $tbl[$i][12];?></td>

<?php
}
}
?>
	
</table>
