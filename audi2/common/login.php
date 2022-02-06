<?php
session_start();
include("../shares/db/mydatabase.inc");
include("top.php");
?>
<html>

<head>
<style>
* {
    box-sizing: border-box;
}
body{
        background-image: url(1.jpg);
        background-size: cover;
        background-position: center;
        min-height: 700px;

    }

input[type=text],input[type=password] {
    width: 400px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    color:white;
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

input[type=submit],input[type=reset]:hover {
    background-color: #45a049;
}

.container2 {
    border-radius: 2px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 50%;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}
    
.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 60px) {
    .col-25, .col-75, input[type=submit],input[type=reset] {
        width: 75%;
        margin-top: 0;
    }
}
</style>
</head>

<body>
        <h1 style="position:relative;left:620px;top:50px;">LOGIN</h1>

<form action="" method="post">


<div style="position:relative;top:190px;left:350px;">
                <div class="row">
                    <div class="col-25">
                        <label>USERNAME</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="username"  required="">
                    </div>
                    </div>
                <div class="row">
                    <div class="col-25">
                        <label>PASSWORD</label>
                        
                    </div>
                    <div class="col-75">
                        <input type="password" name="password" required="">
                        
                    </div>
                </div>
				   <div class="row">
                        <div  style="position:relative;right:-480px; top:30px">                         
                        <input type="reset" name="reset" value="Cancel">
                        </div>                        
                        <div  style="position:relative;right:-200px; top:30px">                         
                         <input type="submit" name="submit" value="Login"> 
                        </div>
                        </div>
            </div>
        </form>
    </body>
</html>
<?php
		if(isset($_POST['username']))
		{
		   $a=$_POST['username'];
		   $b=$_POST['password'];
		   
		   $sql="select type,status from login_reg where username='$a' and password='$b'";
		   $tbl=getDatas($sql);
		   $msg=mysql_error();
		   if($tbl<0)
		   {
			   $msg="inavlid login";
			   echo "<font color='white'>".$msg."</font>";	
		   }
		   if($msg=="")
		   {
			   if(count($tbl)>0)
			   {
				   if($tbl[0][0]==owner)
				   {
					   if($tbl[0][1]==1)
				   {
				  nextPage( '../'.$tbl[0][0].'/index.php');
                   $_SESSION['userid']=$a;

			   }
			   else
			   {
				   $msg="Sorry!!! You are not eligible for login!!";
				   echo"<script>alert('Sorry!!! You are not eligible for login!!');</script>";
				echo "<script> parent.location.href='../common/login.php'; </script>";
			   }
				   }
				   
				  else if($tbl[0][0]==customer)
				   {
					   
				  nextPage( '../'.$tbl[0][0].'/index.php');
                   $_SESSION['userid']=$a;

			   
				   }
				   else{
				  nextPage( '../'.$tbl[0][0].'/index.php');
                     $_SESSION['userid']=$a;
                  
			   }
			   
			   }
			   else{
				   
				   $msg="invalid";
				   echo"<script>alert('Invalid login !!!');</script>";
				echo "<script> parent.location.href='../common/login.php'; </script>";
			   }
				
		   
		}
		
		
        }
		?>