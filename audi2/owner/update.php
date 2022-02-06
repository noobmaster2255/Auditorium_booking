<?php
session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php");?>
<head>
<script src="maha.js"></script>
<style>
       
input [type=text],textarea,select{
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

<?php
if(isset($_GET['id']))

{
        $a=$_GET['id']; 
      $sql="select * from add_auditorium where audi_id='$a'";
    $tbl=getDatas($sql);

}
//$sql="select * from customer_reg where email='$user'";

 
    
?>
<div class="w3_login">
    <h3 style="position: relative;top:250px;left:620px;">Edits </h3>
      
        <form action="" method="post" >
            <table style="position: relative;left:500px;top:280px">
      <div id="err" style="color: red;height: 20px"></div>

              
                <tr>
                    <td>
                        <label>Availablity</label>
                    </td>
                    
                <td>
                          <input type="radio" name="availability" value="available">Available
                          <input type="radio" name="availability"value="unavailable">Unavailable
                      </td>
                </tr>
              <tr>
               <td>
                
        <input type="submit" value="UPDATE"/>
                        </td>
                        </tr>

            </table>
            
            
        </form>
                                   </div>
        <div class="clearfix"></div>

<?php
        
        
        if(isset($_POST['availability'])){
        
       
        $f=$_POST['availability'];
        //$g=$_POST['expecteddate'];
            

        
        $sql="update add_auditorium set  availability='$f' where audi_id ='$a'";
        setDatas($sql);
        msgbox("updated");
        nextpage('view_addhouseboat.php');
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

  </script>q
</body>
</html>