<?php session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php"); ?>

<head>
<style>
 


.aa:link, .aa:visited {
  background-color: #f44336;
  color: white;
  padding: 20px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.aa:hover, .aa:active {
  background-color: red;
}
        
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
                height: 200px;
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
     $b_date=$_POST['b_date'];
$b=$_POST['radio'];
//echo $b;
 
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
	//echo "orderid------".$oid;
		date_default_timezone_set('Asia/Calcutta'); // time zone change

		$d = date("Y-m-d"); // to get current  date
    
	

if($b=="credit"){
	?>
<h3 style="position:relative;left:620px;top:130px;">CARD Info.  </h3>
    	<div class="div1"  style="position:relative;top:150px;">
        <form action="card.php" method="post">
           
            <table style="position: relative;left:10px;top:10px">
                <tr>
                    <td>
                        <label>  Card Number</label>
                    </td>
                    <td>
                        <input type="text" name="cno" required />
						<input type="text" name="id" value="<?php echo $a;?>" hidden required />
                        						<input type="text" name="b_date" value="<?php echo $b_date;?>" hidden required />

                      </td>
                </tr>
                      
		   <tr>
      <td><label>cvv:</label></td>
         <td><input type="text" name="cvv"></td>
      </tr>
                 
                   <tr>
                    <td>
                        <label> Expiry Date</label>
                    </td>
                    <td>
                        <input type="date" name="date"/>
                      </td>
                </tr>
           <tr><td></td></tr>                    
				<tr><td></td><td><input type="submit" value="verify"/></td></tr>
            </table>
            
            
        </form></div>

 
<?php
}
 else{
      //echo $accbal;
$sql="insert into booking values('$bid','$user','$auditoriumname','$amount','$b_date','cod','booked','$img','$owner')";
         setDatas($sql);

         $sql="update add_auditorium set availablity='unavailable' where audi_id='$a'";
         setDatas($sql);
       
       echo "
        <div style='position:relative;left:450px;top:120px;'>
      <font color='red'>Auditoriumname Name:</font>$auditoriumname<br>
      <font color='red'>Location:</font>$location<br>
      
      <font color='red'>Amount:</font>$amount<br>
      <font color='red'>Seat:</font>$seat<br>
    
      

      
      we will get back to you shortly!!!!! Thank You.
      </div>
  ";

 }
 }
 
?>













