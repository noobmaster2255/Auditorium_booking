<?php 
include_once("../shares/db/mydatabase.inc");?>
<?php 
include("top.php"); ?>
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
  color:black;
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
 </head><?php
					$sql="select login_reg.*,owner_reg.* from login_reg JOIN owner_reg ON login_reg.username=owner_reg.email where login_reg.status='1' " ;
                     
                     $tbl=getDatas($sql);
					?>
			                     
	
	<h1 style="position:relative;left:520px;top:100px;color:black;">APPROVED OWNERS</h1>

	<table border="4"style="position:relative;left:150px;width:1100px;top:150px;">

	<tr>

    <th>IMAGE</th>
     <th>NAME</th>
    <th>GENDER</th>
    <th>DOB</th>
    <th>HOUSE</th>
     <th>STREET</th>
      <th>CITY</th>
    <th>COUNTRY</th>
     <th>STATE</th>
     <th>DISTRICT</th>
     <th>PINCODE</th>
      <th>EMAIL</th>
      <th>LICENSENUM</th>
      
      <th>PHONENUM</th>

   >
    <?php
        for($i=0;$i<count($tbl);$i++)
    {
for($j=0;$j<count($tbl[$i]);$j++)
{
}
    ?>

<tr>
<td><img src="<?php echo $tbl[$i][17]; ?>" width="50" height="50"></td>
<td><?php echo $tbl[$i][5];?></td>
<td><?php echo $tbl[$i][6];?></td>
<td><?php echo $tbl[$i][7];?></td>
<td><?php echo $tbl[$i][8];?></td>
<td><?php echo $tbl[$i][9];?></td>
<td><?php echo $tbl[$i][10];?></td>
<td><?php echo $tbl[$i][11];?></td>
<td><?php echo $tbl[$i][12];?></td>
<td><?php echo $tbl[$i][13];?></td>
<td><?php echo $tbl[$i][14];?></td>
<td><?php echo $tbl[$i][15];?></td>
<td><?php echo $tbl[$i][16];?></td>
<td><?php echo $tbl[$i][18];?></td>


</tr>


<?php
}

?>
    
</table>
								
	
   

		
					