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
$sql="select * from feedback_reg";
$tbl=getDatas($sql);
if($tbl==null)
{
	echo"no datas";
}
else
{
	?>
	<h1 style="position: relative;left:500px;top:120px;color:#17c3a2;">FEEDBACK  DETAILS</h1>
	<table border="4"style="position:relative;left:150px;width:1100px;top:150px;">
	<tr>
	<th>NAME</th>
	<th>EMAIL</th>
    <th>FEEDBACK</th>
	
	
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

<?php
}
}
?>
	
</table>
