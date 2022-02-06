<?php 
session_start();
$username=$_SESSION['userid'];
include('top.php');
include_once('../shares/db/mydatabase.inc');
?>
<html><head>
<style>
body{
        background:url(g3.jpg) no-repeat top fixed ;
        background-size:cover;
        
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


<body>
<center>

<p align= "right">
    <h3 style="position: relative;top:150px;left:20px;color:red">Change Password </h3>

<font style="font-size:30;color:black;"><b>

<form method="post" action="">
<table cellspacing="10" cellpadding="5" style="position:relative;top:170px;">
<tr>
<td><font style="font-size:20;color:black;"><b><i> Old Password</td><td><input type= "password" name ="t1" /></i></b></td>
</tr>
<tr><td><font style="font-size:20;color:black;"><b><i>New Password </td><td><input type= "password" name="t2" /></i></b></td></tr>
<tr><td><font style="font-size:20;color:black;"><b><i>Confirm New Password </td><td><input type= "password" name="t3" /></i></b></td></tr>

<tr><td><center></td><td><input type="submit" value="submit" /></b></i></td></tr>
</b>
</table>
</center>
</form>

<?php
if(isset($_POST["t1"])){
	$oldpwd=$_POST["t1"];
	
	$newpwd=$_POST["t2"];
$cpwd=$_POST["t3"];	
$sql="select password from login_reg where password='$oldpwd' and username='$username'";
$tbl=getDatas($sql);
echo $dt[0][0];

if($tbl!=null)
{
	if($newpwd==$cpwd)
	{
$sql2="update login_reg set password='$newpwd' where username='$username' and type='owner'";

setDatas($sql2);
echo"<script>alert('Success');</script>"; 
	}
	else{
		msgbox('password mismatch');
	}
}
}

?>
<!-- Bootstrap Core JavaScript -->
<script src="../temp/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="../temp/js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
 
