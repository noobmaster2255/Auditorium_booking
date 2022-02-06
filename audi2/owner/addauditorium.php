<?php
session_start();
$user=$_SESSION['userid'];
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<html>
<style>
table{
         width: 500px;
         height: 700px;
     }
     input[type=text],input[type=email],input[type=date] ,input[type=password],select{
    width:100%;
    padding: 13px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
     }
         label
         {
             color: red;
         }
     input[type=submit] ,input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
     }
     
     input[type=submit]:hover {
    background-color: #ac2925;
}
    </style>   
<title>CUSTOMER FORM
</title>
</head>
<body>

<div style="position:relative;border:groove;left:420px;height:850px;width:700px;top:100px;background-color:#ccc ">
     <h3 style="position: relative;top:50px;left:220px;"><font color="blue">ADD AUDITORIUM </font></h3>
      
<body>
 <br>
<form action="" method="post" enctype="multipart/form-data">
      
            <table style="position:relative;left:60px;top:25px"> 

<br>
<tr>
<td><label>&nbsp;&nbsp;&nbsp; AUDITORIUM NAME:</label></td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td><label>&nbsp;&nbsp;&nbsp; LOCATION:</label></td>
<td><input type="text" name="location"></td>
</tr>
<tr>
<td><label>&nbsp;&nbsp;&nbsp; DISTRICT:</label></td>
<td>
<select name="district">
<option value="Alappuzha">Alappuzha</option>
<option value="Ernakulam">Ernakulam</option>
<option value="Pathanamthitta">Pathanamthitta</option>
<option value="Kollam">Kollam</option>
<option value="Kozhikode">Kozhikode</option>
<option value="Idukki">Idukki</option>
<option value="Palakkad">Palakkad</option>
<option value="Malappuram">Malappuram</option>
<option value="Wayanad">Wayanad</option>
<option value="Kasargode">Kasargode</option>
<option value="Kannur">Kannur</option>
<option value="Thrissur">Thrissur</option>
<option value="Thiruvananthapuram">Thiruvananthapuram</option>
</select>
    </td>
</tr>

<tr>
                   <td><label>&nbsp;&nbsp;&nbsp; CATEGORY:</label></td>
                    <td>
                        <select name="category">
                           
<option value="ac">AC</option>
<option value="nonac">NON AC</option>


                                     </select>
                      </td>
                </tr> <tr><td></td></tr>
              
                
<tr>
<td><label>&nbsp;&nbsp;&nbsp; PURPOSE:</label></td>
    <td><textarea  name="purpose"></textarea></td>
</tr>
<tr>
<td><label>&nbsp;&nbsp;&nbsp; NO OF SEATS:</label></td>
<td><input type="number" name="seat"></td>
</tr>
<tr>
<td><label>&nbsp;&nbsp;&nbsp; AMOUNT:</label></td>
<td><input type="text" name="amount"></td>
</tr>
<tr>
<td><label>&nbsp;&nbsp;&nbsp; IMAGE:</label></td>
<td><input type="file" name="file"></td>
</tr>
<tr>
<td><label>&nbsp;&nbsp;&nbsp; TIMING:</label></td>
<td><input type="radio" name="timing" value="morning 10am">&nbsp;morning 10am
     <input type="radio" name="timing" value="evening 5pm">&nbsp;&nbsp;evening 5pm
      <input type="radio" name="timing" value="full day">&nbsp;full day
</td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="confirm"></td>
<td><input type="Reset" value="cancel"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
$fldr = "../uploads";
	$allowedExts = array("jpg", "gif", "jpeg","mp4");
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	$f=$_FILES["file"]["name"];
	
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
            $n2=$_POST['location'];
            $n3=$_POST['district'];
			$n4=$_POST['category'];
			$n5=$_POST['purpose'];
			$n6=$_POST['seat'];
            $n7=$_POST['amount'];
			$n8=$_POST['file'];			
			$n9=$_POST['timing'];
			$sql="select ifnull(max(audi_id),0)+1 from add_auditorium";
			$tbl=getDatas($sql);
		$sql="insert into add_auditorium values('$tbl[0][0]','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$fname','$n9','$user','available')";
		setDatas($sql);	
			msgbox('successfully uploaded');
		}
		}
	}
?>