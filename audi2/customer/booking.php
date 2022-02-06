<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc"); 
include_once("top.php");
?>
<html>
<head>
<title>BOOKING DETAILS</title>
<style>

input[type=text],input[type=date],select
{
border-radius:3px;
border-spacing: inherit;
height:50px;
background-color: rgba(216, 216, 216, 0.63);
width:500px;
color: black;
}
        .b{
        border-radius:3px;
        border-spacing: inherit;
        background-color: rgba(216, 216, 216, 0.63);
        width:500px;
    }  input[type=text]:hover,input[type=date]:hover,input[type=time]:hover,textarea:hover{
    background-color: white;
    }
    
input[type=time]
    {
    border-radius:3px;
    background-color: rgba(216, 216, 216, 0.63);
height:50px;
width:100px;
    }
input[type=submit],input[type=reset] {
    margin: auto;
    padding: 10px 25px;
    margin-top: 25px;
    background-color: #146eb4;
    color: white;
border:none;
outline:none;
    letter-spacing: 1px;
    outline: 0;
    cursor: pointer;
}
    label{
        color: white;
    }
    .box label input{
        display:none;
    }
    .box label span{
        position: relative;
        display: inline-block;
        margin: 20px 10px;
        width: 50px;
        font-size: 18px;
        background:rgba(216, 216, 216, 0.63);
        border: 1px solid #ccc;
        color:black;
        border-radius: 4px; 
            }
    .box label input:checked ~ span{
        color: red;
        border: 1px solid green;
    }
    .box label input:checked ~ span:before{
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        top:0;
        left:0;
        background: green;
        z-index: -1;
        filter: blur(10px);
    }
    
    
input[type=submit]:hover,input[type=reset]:hover
{
    background-color: #ff9900;
    color: white;
}
    .table1
{
	border-radius:3px;	
height:500px;
    padding: 9px;
    }
.container_1 {
    background-color:beige;
width: 710px;
    margin: auto;
    padding: 30px 30px 30px;
    box-sizing: border-box;
   -webkit-box-shadow: 0 0 40px #aaa;
    -moz-box-shadow: 0 0 40px #aaa;
    box-shadow: 0 0 40px #aaa;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    -o-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -webkit-box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
    -moz-box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
    box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
    background: rgb(0, 0, 0); /* Fallback color */
    background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
    color:whitesmoke;
}
    
    body{
        background:url(pat4.jpg) no-repeat top fixed ;
        background-size:cover;
        
    }
textarea
{
    width: 99%;
background-color: rgba(216, 216, 216, 0.63);
    border-radius: 4px;
    }
tr
    {
        height:50px;
    }

</style>
 <script src="..///common/maha.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#date" ).datepicker({
	   				minDate: 0
                    
	   			});
            });</script>
    <style>
        .ui-datepicker { 
        height: 400px;
         line-height: 3px;
        }
        
        
    </style>
</head>
<?php
    
    if(isset($_GET['mode'])){
        $a=$_GET['mode'];
        //$sql="select doc_name,did from tbl_doctor where depart='$a'";
        //$tbl=getDatas($sql);
        //$did=$tbl[0][1];
    }
    $sql="select ifnull(max(bid),0)+1 from tbl_booking";
    $tbl=getDatas($sql);
    $id=$tbl[0][0];
    
    $sql="SELECT  `name`  FROM `customerreg` WHERE email='$user'";
    $tbl=getDatas($sql);
    $name=$tbl[0][0];
    
  
?>
    
<body>
<center>
<div class="container_1">
<form action="" method="post">
<table class="table1">	
    <br>
<h1>BOOKING FORUM</h1><br><br>
<tr>
<td>

<label>BOOKING ID :</label>
</td><td>
<input type="text" name="bid" value="BD<?php echo $id; ?>" readonly="">
    <input type="text" name="id" value="<?php echo $id; ?>" hidden="" readonly="">
    </td>
    </tr>
<tr>
<td><label> CUSTOMER EMAIL:</label></td>
    <td><input type="text" name="pname" value="<?php echo $name; ?>"></td></tr>
    
<tr>
<td>
<label>CHOOSE</label></td>
   <?php 
     $sql="select ssubcategory from addservice where scategory='$a' ";
        $tbl=getDatas($sql);
    ?>
<td><select name="sub_cat" required >
     <?php foreach($tbl as $row) {?>
<option  value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php } ?>
</select></td>
</tr>
    <tr>
    <td><label>CHOOSE SERVICE</label></td>
         <?php 
     $sql="select servicename from addservice where scategory='$a' ";
        $tbl=getDatas($sql);
    ?>
       <td><select name="sub_cat1" required >
     <?php foreach($tbl as $row) {?>
<option  value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php } ?>
</select></td> 
        
    
    
    </tr>
    
    
    
    
<tr>
<td>
<label>SELECT DATE:</label></td>
<td><input type="text" name="date" id="date" placeholder="mm-dd-yy" class="b" required></td>
    </tr>

<tr>
<td><label>TIME:</label></td>
<td><div class="box">
    <label><input type="radio" value="10:30" name="time">
    <span class="a">10:30</span>
    </label>
    <label><input type="radio" value="10:45" name="time">
    <span class="a">10:45</span>
    </label>
    <label><input type="radio" value="11:00" name="time">
    <span class="a">11:00</span>
    </label>
    <label><input type="radio" value="11:15" name="time">
    <span class="a">11:15</span>
    </label>
    <label><input type="radio" value="11:30" name="time">
    <span class="a">11:30</span>
    </label>
     <label><input type="radio" value="11:45" name="time">
    <span class="a">11:45</span>
    </label> 
    <label><input type="radio" value="12:00" name="time">
    <span class="a">12:00</span>
    </label>
    <label><input type="radio" value="12:15" name="time">
    <span class="a">12:15</span>
    </label>
     <label><input type="radio" value="12:30" name="time">
    <span class="a">12:30</span>
    </label>
    <label><input type="radio" value="12:45" name="time">
    <span class="a">12:45</span>
    </label>
    <label><input type="radio" value="2:00" name="time">
    <span class="a">2:00</span>
    </label>
    
<label><input type="radio" value="2:15" name="time">
    <span class="a">2:15</span>
    </label>
    <label><input type="radio" value="2:30" name="time">
    <span class="a">2:30</span>
    </label>
    <label><input type="radio" value="2:45" name="time">
    <span class="a">2:45</span>
    </label>
     <label><input type="radio" value="3:00" name="time">
    <span class="a">3:00</span>
    </label>
    <label><input type="radio" value="3:15" name="time">
    <span class="a">3:15</span>
    </label>
    <label><input type="radio" value="3:30" name="time">
    <span class="a">3:30</span>
    </label>
    <label><input type="radio" value="3:45" name="time">
    <span class="a">3:45</span>
    
    </label>
    </div>
</tr>
<tr>
<td>
<label> DESCRIPTION:</label></td>
    <td><textarea name="description" cols="50" rows="4" required></textarea></td></tr></table>
    
    <tr>
    <td><input type="hidden" name="status" value="Active" readonly=""></td></tr>
    
<input type="submit" name="submit1" value=" Book">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Reset">
    </form></div></center>
</body></html>



<?php

if(isset($_POST['bid'])){
    $bid=$_POST['bid'];
    $id=$_POST['id'];
     $pat=$_POST['pname'];
    $doc=$_POST['sub_cat1'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $des=$_POST['description'];
    //$stat=$_POST['status'];
    date_default_timezone_set('Asia/Calcutta');
    $date1 = date('h:i', time());// current time
    
    $b=date('D', strtotime($date));
    
 $sql="select servicecost from addservice
 where servicename	='$doc'";
	$tbl=getDatas($sql);
	$pr=$tbl[0][0];
    $sql="select time1 from tbl_booking where time1='$time' and date1='$date' and sub_cat='$doc'";
    $tbl=getDatas($sql);
    if($tbl!=null){
              
              msgbox('Sorry... No time slot! try another one.');

    }
    else
    {
    $sql="insert into `tbl_booking`(`customer`,`email`, `category`, `sub_cat`, `date1`, `time1`, `description`,`price`,`status`) values('$pat','$user','$a','$doc','$date','$time','$des','$pr','Active')" ;
    setDatas($sql);
     nextpage('payment.php?a='.$id.'& b='.$pr);
        
msgbox('BOOKING COMPLETED');
        
    }
    }
    


?>


