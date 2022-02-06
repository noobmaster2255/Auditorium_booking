<?php 
include_once("../shares/db/mydatabase.inc");
include("top.php");
?>
<html>
<head>
<title>Feedback form</title>
<style>
 body{
        
        background-size: cover;
        background-position: center;
        min-height: 900px;
        background-color:blanchedalmond;;

    }

input[type=text],input[type=email],select
{
    border-radius:3px;
    height:50px;
    width:300px;
}

input[type=submit],input[type=reset]
{
    background-color:tomato;
    color:white;
    border:none;
    width:70px;
    height:30px;
}
input[type=submit]:hover,input[type=reset]:hover
{
    background-color:blue;
}
h1
    {
        background-color: cadetblue;
        
    }
h3
{
    color: black;
    background-size:cover;
    background-color:blanchedalmond;
  
}
table
{
    border-radius:3px;
    height:300px;
    cellspacing:10px;
    cellpadding:200px;
}     
textarea
{
    height:100px;
    width:350px;
}
</style>
</head>
<body>
<center>
<form action="" method="post">
<table>

<h3 style="position: relative;top:150px;left:20px;color:red">FEEDBACK FORM</h3>
<br><h3>We would love to hear your thoughts, concerns or problems with anything so we can improve!</h3>
<hr>
<br>
<br>

<tr>
<td><label>Name:</label></td>
<td><input type="text" name="name"></td>
</tr>
    <tr>
        <td><lable>EMAIL:</lable></td>
        <td><input type="email" name="email"></td>
    </tr>
<tr>
<td>
<label>Give  Us a Feedback:</label></td>
<td><textarea rows="4" cols="40" name="feedback"></textarea></td></tr>
</td>
</tr></table><br>
<input type="submit" name="submit1" value="Confirm">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Clear">
</form></center></body></html>
<?php
$sql="select ifnull (max(feedback_id),0)+1 from feedback_reg";
    $tbl=getDatas($sql);
if(isset($_POST['name']))
{
    
    $n1=$_POST['name'];
    
    $n2=$_POST['email'];
    $n3=$_POST['feedback'];
    $sql="insert into feedback_reg values('$tbl[0][0]','$n1','$n2','$n3')";
    setDatas($sql);
    msgbox('successfully added');
}
?>