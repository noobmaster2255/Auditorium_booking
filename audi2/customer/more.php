<?php 
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");?>
<?php include("top.php");?>
<head>
<style>
body{
        background-color: cadetblue;
        background-size: cover;
	    background-position: center;
	   

    }
input,t
        
input,textarea,select{
                border: 2px solid;
             border-radius: 6px;
             width:200px;
           
             
            }
            label{
                color: green;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
               
            }
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:10%;
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

	<!-- banner -->
	<!-- more -->
		
<?php
	 if(isset($_GET['id']))
	 {
	
		$a=$_GET['id'];
		
		
			
		$sql="select * from add_auditorium where audi_id='$a'";
		$tbl=getDatas($sql);

	
	
	?>
	<div style="position:relative;left:300px;top:250px;">
<div class="agileinfo_single">
<div style="position:relative;left:60px;top:-110px">
<font color="green">
<?php
				echo "<h1>". $tbl[0][1]."</h1>";
				?></font>
				</div>
				<div class="col-md-4 agileinfo_single_left" style="position:relative;left:50px;top:-100px;">
				<?php
					echo "<img  src='".$tbl[0][8]."'  style='position:relative;width:250px;height:200px;'>";
					?>
				</div>
				<div class="col-md-8 agileinfo_single_right" style="position:relative;top:-80px;">
					
					<div class="w3agile_description">
						<h4><font color="#d88c22">Name:</font></h4><?php
						echo "<h4>".$tbl[0][1]."</h4>";
							?>
					</div>
                    
					<br>
					<div class="w3agile_description">
						<h4><font color="#d88c22">Location:</font></h4><?php
						echo "<h4>".$tbl[0][2]."</h4>";
							?>
					</div>
                    <br>
                    <div class="w3agile_description">
						<h4><font color="#d88c22">Category:</font></h4><?php
						echo "<h4>".$tbl[0][4]."</h4>";
							?>
					</div>
					<br>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
						<h4><font color="#d88c22">Amount:</font></h4><?php
							echo "<h4>".$tbl[0][6]."</h4>";
							?>
                        </div>
                        <br>
					 <div class="w3agile_description">
						<h4><font color="#d88c22">Seat:</font></h4><?php
						echo "<h4>".$tbl[0][7]."</h4>";
							?>
					</div>
					<br>
                            	<div class="w3agile_description">
						<h4><font color="#d88c22">Purpose:</font></h4><?php
						echo "<h4>".$tbl[0][5]."</h4>";
							?>
					</div>
					<br>
                           
                            <div class="w3agile_description">
						<h4><font color="#d88c22">time:</font></h4><?php
						echo "<h4>".$tbl[0][9]."</h4>";
							?>
					</div>
                        <form action="test.php" method="post">
                        <table style="position:relative;right:10px;top:30px">
                            <tr>
                            <td>
                                <label>Booking Date</label>
                           <script  src="css/jquery.js" type="text/javascript"></script>
     <script  src="css/jquery-ui.js" type="text/javascript"></script>
    <link href="css/ui-lightness/jquery.ui.all.css"    rel="stylesheet" type="text/css">


<td> <input type="text" id="txtDate" name="date"  required/><br>

</td>
</tr>

<script>
$(function(){
    $("#txtDate").datepicker({
        dateFormat :"yy-m-d",
        minDate:0,
       // var day=minDate.getDay();
    });
});
</script>
                                <input type="text" name="id" hidden value="<?php echo $a;?>" readonly="" >
                                </td>
                            
                            
                            </tr>
                            <tr><td></td></tr>
                            <tr><td></td><td><input type="submit" value="confirm"</td>
                                </td></tr>
                        </table>
                        </form>
                        
					<br>
                            
						</div>
						<br>
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	 <?php  }?>s
		<div class="clearfix"></div>
		<!-- more -->


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
        </div>
    </div>
</head>
