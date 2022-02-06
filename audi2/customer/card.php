<?php session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php"); ?>

<head>
<style>
        
input,textarea,select{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
           
             
            }
            label{
                color: green;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 400px;
            }
			
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: tomato;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover {
    background-color: #ac2925;
}


    </style>
 </head>
 
 <?Php
 if(isset($_POST['id']))
 {

$a=$_POST['id'];
//echo $a;
     $dd=$_POST['b_date'];
$sql="select * from add_auditorium where audi_id='$a'";
$tbl=getDatas($sql);
$auditoriumname=$tbl[0][1];
$location=$tbl[0][2];
//$quantity=1;
$category=$tbl[0][4];
$amount=$tbl[0][6];
$seat=$tbl[0][7];
$img=$tbl[0][8];
$owner=$tbl[0][10];
$sql="select ifnull(max(bid),0)+1 from booking";
    $tbl=getDatas($sql);
    $bid=$tbl[0][0];
     date_default_timezone_set('Asia/Calcutta'); // time zone change

$d = date("Y-m-d"); // to get current  date
		
 
		//echo $accbal;
$sql="insert into booking values('$bid','$user','$auditoriumname','$amount','$dd','credit','booked','$img','$owner')";
	       setDatas($sql);

	      $sql="update add_auditorium set availablity='unavailable' where audi_id='$a'";
         setDatas($sql);
       
       echo "
        <div style='position:relative;left:450px;top:120px;'>
      <font color='red'>Auditoriumname Name:</font>$Auditoriumname<br>
      <font color='red'>Location:</font>$Location<br>
      
      <font color='red'>Amount:</font>$Amount<br>
            <font color='red'>BOOKING DATE:</font>$dd<br>
			we will get back to you shortly!!!!! Thank You.
			</div>
 	";

 }

?>













