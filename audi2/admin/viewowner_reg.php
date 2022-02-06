<?php
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<head><style>
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
$sql="select login_reg.*,owner_reg.* from login_reg JOIN owner_reg ON login_reg.username=owner_reg.email where login_reg.status='0' " ;
                     $tbl=getDatas($sql);
if($tbl==null)
{
    echo "<div style='position:relative;top:250px;left:620px;'><font color='black'>No New Registerations...</font></div>";

}
else
{
    ?>
    <h1 style="position: relative;left:500px;top:100px;color:white;"> NEW OWNERS</h1>
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

    <th colspan="2">APPROVAL</th>
    </tr>
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

<td>
<a href="?id=<?php echo $tbl[$i][0];?>& mode=app">APPROVE<style> color:green</style></a>
<a href="?id=<?php echo $tbl[$i][0];?>& mode=rej">REJECT<style> color:red</style></a>
</td>

</tr>


<?php
}
}

?>
    
</table>
<?php

if(isset($_GET['id'])){

  $id=$_GET['id'];
  $m=$_GET['mode'];
  echo $id;
  echo $m;
  if($m=="app"){
    $sql="update login_reg set status='1' where username='$id' ";
    setDatas($sql);
    msgbox('success');
    nextpage('approve.php');
  
  }
  else
  {
    $sql="update login_reg set status='0' where username='$id' ";
    setDatas($sql);
     msgbox('success');

   
}
}
?>