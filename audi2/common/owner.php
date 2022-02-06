<?php
include("../shares/db/mydatabase.inc");
include("top.php");

?>
<html>
<head>
<title> REG FORM
</title>
</head>
<head>
<style>

table{
         width: 800px;
         height: 250px;
     }
     input[type=text],input[type=email],input[type=date] ,input[type=password],select,textarea{
    width:80%;
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
<div style="position:relative;left:320px;height:730px;width:900px;top:100px;background-color:#ccc "><br><br>
<form action="" method="post" enctype="multipart/form-data">
<h3 style="position: relative;left:300px;"><font color="black">OWNER   REGISTRATION</font></h3>
<br>
<div id="err" style="color: #ccc;height: 20px"></div>
<table style="position:relative;left:50px;height:600px;">

<tr>
<td><label> NAME:</label></td>
<td><input type="text" name="name" required="" onkeypress="return verifyText(event,'err')"></td>

<tr>
<td><label>GENDER:</label></td>
<td><input type="radio" name="gender" value="male" required="">MALE
&nbsp;&nbsp;<input type="radio" name="gender"value="female" required="">FEMALE</td>
</tr>
<tr>
<td><label>DATE OF BIRTH:</label></td>
	 <script  src="css/jquery.js" type="text/javascript"></script>
     <script  src="css/jquery-ui.js" type="text/javascript"></script>
    <link href="css/ui-lightness/jquery.ui.all.css"    rel="stylesheet" type="text/css">
 <td><input type="text" name="dob" id="txtDate" ></td>
	
<script>
$(function(){
    $("#txtDate").datepicker({
        dateFormat :"yy-m-d",
        maxDate:0,
       // var day=minDate.getDay();
    });
});
</script>
</tr> 
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
    <td><input type="text" name="city" required></td>
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
<td><input type="text" name="code" ></td>
</tr>
<tr>
<td><label>EMAIL:</label></td>
<td><input type="email" name="email" required=""></td>
</tr>
<tr>
<td><label>LICENSE NUMBER:</label></td>
<td><input type="text" name="licensenum" required=""></td>
</tr>
<tr>
<td><label>ANY ID PROOF:</label></td>
<td><input type="file" name="file" required=""></td>
</tr>
<tr>
<td><label>PHONE NUMBER:</label></td>
<td><input type="text" name="phonenum"required=""  pattern="^\d{4}\d{3}\d{3}$" title="must contain 10 numbers"></td>
</tr>
<tr>
<td><label>JOIN DATE:</label></td>
<td><input type="date" name="date" required=""></td>
</tr>
<tr>
<td><label> PASSWORD:</label></td>
<td><input type="password" name="password" required=""></td>
</tr>
<tr>
<td><label>CONFIRM PASSWORD:</label></td>
<td><input type="password" name="conformpassword" required=""></td>
</tr>
<tr>
<td><input type="submit" value="register"></td>
<td><input type="Reset" value="cancel"></td>
</tr>
</table>
</form>
    </div>
    
</body>
</html>
<?php
	$fldr = "../uploads";
	$allowedExts = array("jpg", "gif", "jpeg","mp4");
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	$f=$_FILES["file"]["name"];
	
	//echo "upload/$f";

	
	$size = $_FILES["file"]["size"];
	if($_FILES["file"]["size"] > 5000000)
	{
		die("File Size is ".($size/1000000)."MB, Maximum allowed size is 5MB");
	}
	if ((($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "video/mp4"))
	
	&& ($_FILES["file"]["size"] <= 50000000)
	&& in_array($extension, $allowedExts)){
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " .$_FILES["file"]["error"]. "<br />";
		}
		else
		{
		if (file_exists("$fldr/" .$_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " already exists. ";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"$fldr/" . $_FILES["file"]["name"]);
			

			$mv_name = $_FILES["file"]["name"];		
			$mv_type = $_FILES["file"]["type"];
				$fname=$fldr."/".$mv_name;
			$mv_size = $_FILES["file"]["size"];
			
			 $n1=$_POST['name'];
            $n2=$_POST['gender'];
            
            $n4=$_POST['dob'];
            $n5=$_POST['house'];
            $n6=$_POST['street'];
            $n7=$_POST['city'];
            $n8=$_POST['country'];
            $n16=$_POST['state'];
            $n17=$_POST['district'];
            $n11=$_POST['code'];
         
			
			 $n3=$_POST['email'];
			$n13=$_POST['licensenum'];
			$n14=$_POST['file'];
			$n15=$_POST['phonenum'];
			
			$n9=$_POST['password'];
			$n10=$_POST['conformpassword'];
             
$sql="select username from login_reg where username='$n3'";
			$tbl=getDatas($sql);
			if($tbl!=null){
				msgbox("user exist");
			}
			else
			{
			
			 if($n9==$n10){

			 	$sql="select ifnull(max(owner_id),0)+1 from owner_reg";
			 	$tbl=getDatas($sql);

			date_default_timezone_set('Asia/Calcutta'); // time zone change

		$d = date("Y-m-d"); // to get current  date
    

     $sql="insert into owner_reg values('$tbl[0][0]','$n1','$n2','$n4','$n5','$n6','$n7','$n8','$n16','$n17','$n11','$n3','$n13','$fname','$n15')";
     setDatas($sql);
     $sql="insert into login_reg values('$n3','$n9','owner','0')";
     setDatas($sql);
     msgbox('success');
     }
else
{
	msgbox('password mismatch');

}
    }
}
}
	}


    ?>
