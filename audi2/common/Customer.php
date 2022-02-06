<?php
include("../shares/db/mydatabase.inc");
include("top.php");

?>
<html>
<head>
<style>

table{
         width: 800px;
         height: 250px;
     }
     input[type=text],input[type=email],input[type=date] ,input[type=password],select,textarea{
    width:100%;
    padding: 3px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
     }
         label
         {
             color: black;
         }
     input[type=submit] ,input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: right;
     }
     
     }
    </style> 
    <script src="../common//maha.js"></script> 
 </head>
<body>
<div style="position:relative;left:320px;height:850px;width:900px;top:100px;background-color:#ccc "><br>
<br>
<form action="" method="post" enctype="multipart/form-data">
<h3 style="position: relative;left:300px;"><font color="black">CUSTOMER REGISTRATION</font></h3>
<br>
<div id="err" style="color: #ccc;height: 40px"></div>
<table style="position:relative;left:50px;height:700px;">

<tr>
<td><label>NAME:</label></td>
<td><input type="text" name="name" required="" onkeypress="return verifyText(event,'err')"></td>
</tr>
<tr>
<td><label>GENDER:</label></td>
<td><input type="radio" name="gender" value="male" required="">MALE
&nbsp;&nbsp;<input type="radio" name="gender"value="female" required="">FEMALE</td>
</tr>
<tr>
<td><label>MOBILE NUMBER:</label></td>
<td><input type="text" name="mobilenum" required=""  pattern="^\d{4}\d{3}\d{3}$" title="must contain 10 numbers"></td>
</tr>
<tr>
<td><label>DATE OF BIRTH:</label></td>
	<script  src="css/jquery.js" type="text/javascript"></script>
     <script  src="css/jquery-ui.js" type="text/javascript"></script>
    <link href="css/ui-lightness/jquery.ui.all.css"    rel="stylesheet" type="text/css">
 <td><input type="text" name="dob" id="txtDate"></td>
</tr> 	
<script>
$(function(){
    $("#txtDate").datepicker({
        dateFormat :"yy-m-d",
        maxDate:0,
       // var day=minDate.getDay();
    });
});
</script>
<tr>
<td><label>HOUSE NO./NAME:</label></td>
    <td><input type="text" name="house" required></td>
</tr>
 <tr>
<td><label>STREET/LOCALITY:</label></td>
 <td><input type="text" name="street" required></td>
</tr>   
<tr>
<td><label>CITY:</label></td> 
    <td><input type="text" name="city" required ></td>
</tr>
 <tr>
<td><label>COUNTRY:</label></td>
<td><input type="text" name="country" required></td>
</tr>
<tr>
<td><label>STATE:</label></td>
<td><input type="text" name="state" required></td>
</tr>
<tr>
<td><label>DISTRICT:</label></td>
<td><input type="text" name="district" required></td>
</tr>
<tr>
<td><label>PINCODE:</label></td>
<td><input type="text" name="pincode" required></td>
</tr>
<tr>
<td><label>EMAIL:</label></td>
<td><input type="email" name="email" required></td>
</tr>


<tr>
<td><label>PASSWORD:</label></td>
<td><input type="password" name="password" required></td>
</tr>
<tr>
<td><label>CONFIRM PASSWORD:</label></td>
<td><input type="password" name="conformpassword" required></td>
</tr>
<tr>
<td> 
<input type="submit"   value="register">
</td>
<td>
<input type="reset"   value="cancel">
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if (isset($_POST['name'])) {

        $sql="select ifnull(max(customer_id),0)+1 from customer_reg";
        $tbl=getDatas($sql);
        
         $n1=$_POST['name'];
         echo $n1;

     $n2=$_POST['gender'];
     $n3=$_POST['mobilenum'];
     $n4=$_POST['dob'];
     $n5=$_POST['house'];
     $n6=$_POST['street'];
     $n7=$_POST['city'];
     $n8=$_POST['country'];
     $n9=$_POST['state'];
     $n10=$_POST['district'];
     $n11=$_POST['pincode'];
     $n12=$_POST['email'];
     $n13=$_POST['password'];
     $n14=$_POST['conformpassword'];
	$sql="select username from login_reg where username='$n12'";
	$tbl=getDatas($sql);
	if($tbl!=null){		msgbox("User Exist");
				  }
		else{
     if($n13==$n14){
        date_default_timezone_set('Asia/Calcutta'); // time zone change

        $d = date("Y-m-d"); // to get current  date

     $sql="insert into customer_reg values('$tbl[0][0]','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11','$n12')";
     setDatas($sql);
     $sql="insert into login_reg values('$n12','$n13','customer','1')";
     setDatas($sql);
     msgbox('success');
     }
else
{
    msgbox('password mismatch');

}
    
}
}
    ?>
























