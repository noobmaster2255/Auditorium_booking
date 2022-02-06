<?php 
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>

<?php
if(isset($_POST['date']))
{
    date_default_timezone_set('Asia/Calcutta'); // time zone change

        $d = date("Y-m-d"); // to get current  date
    
    $d=$_POST['date'];
	echo $d;
    $owner=$_POST['id'];
	echo $owner;
    $sql="select b_date from booking where owner='$id' and b_date='$d' ";
    $tbl=getDatas($sql);
    $a=$tbl[0][0];
	echo $a;
	 if($a==$d){
        msgbox("This Date not available");
		nextpage('auditorium.php');
    }
    else
    {
        nextpage("confirm1.php?id=".$owner."&d=".$d."");
    }
   
}
?>