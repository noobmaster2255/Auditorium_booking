<?php
session_start();
$user=$_SESSION['userid'];
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<html>
<head>
<title>HOUSEBOAT DETAILS</title>
<style>
table
{
    border: 2px solid #111;
  border-radius:1px;
    border:5px solid red;
    
    margin-left: 0px;
    height:550px;
}     
th
    {
        background-color: #17c3a2;
        color: white;
        height: 40px;
        text-align: center;;
    }
    td{
      text-align: center;
    }
    tr
    {
        height: 30px;
        border-bottom: 1px solid #ddd;
    }
</style>
</head>
<?php 
    $sql="Select * from add_auditorium where owner='$user'";
    $tbl=getDatas($sql);
    if($tbl==null)
    {
       echo "<div style='position:relative;top:250px;left:620px;'><font color='red'>NO Bookings...</font></div>";
    }
    else
    {
?>        
        <h1 style="position:relative;left:500px;top:100px;color:red;">AUDITORIUM DETAILS</h1>
         <table  border=1 style="position:relative;left:150px;top:120px; width:1200px;height:250px;">
             <tr>
                 <th>IMAGE</th>
                 <th>AUDITORIUM NAME</th>
                 <th>LOCATION</th>
                 <th>DISTRICT</th>
                 <th>CATEGORY</th>
                 <th>PURPOSE</th>
                 <th>AMOUNT</th>
                 <th>SEAT</th>
                 <th>TIMING</th>
                 <th>AVAILABILITY</th>
                 <th>EDIT</th>
                 <th>AVAILABILITY UPDATE</th>
                 
             </tr>
  <?php
             for($i=0;$i<count($tbl);$i++)
             {
                 for($j=0;$j<count($tbl[$i]);$j++)
                 {
                     
     }
  ?>
   <tr>
      <td><img src="<?php echo $tbl[$i][8];?>"width="50" height="50"></td>
       <td><?php echo $tbl[$i][1];?></td>
       <td><?php echo $tbl[$i][2];?></td>
       <td><?php echo $tbl[$i][3];?></td>
       <td><?php echo $tbl[$i][4];?></td>
       <td><?php echo $tbl[$i][5];?></td>
       <td><?php echo $tbl[$i][6];?></td>
       <td><?php echo $tbl[$i][7];?></td>
       <td><?php echo $tbl[$i][9];?></td>
       <td><?php echo $tbl[$i][11];?></td>
       <td>
       <a href="edits.php?id=<?php echo $tbl[$i][0];?>">edit</a>
       </td>
       
       <td>
       <a href="update.php?id=<?php echo $tbl[$i][0];?>">update</a>
       </td>
      
   </tr>
        <?php
                 }
              }
        ?>
    </table>