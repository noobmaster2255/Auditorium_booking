<?php
session_start();
$user=$_SESSION['userid'];
include("../shares/db/mydatabase.inc");
?>
<?php include("top.php");
?>
<head>
<style>
       
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

<?php
$sql="select * from customer_reg where email='$user'";
$tbl=getDatas($sql);


?>


<div style="position:relative;border:groove;left:420px;height:400px;width:500px;top:100px;background-color:#ccc ">
     <h3 style="position: relative;top:50px;left:220px;"><font color="blue">MY PROFILE</font></h3>
      
        <form action="" method="post" >
            <table style="position:relative;left:60px;top:80px">
          
                <tr>
                    <td>
                        <label> User Name:</label>
                    </td>
                    <td>
                        <?php echo $tbl[0][1];?>
                      </td>
                </tr>
           <tr><td></td></tr>
                 
                
               <tr>
                    <td>
                        <label> Gender:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][2];?>
                      </td>
                </tr>
               
                <tr><td></td><td></td></tr>
                 <tr>
                    <td>
                        <label>Phone Number:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][3];?>
                      </td>
                </tr> <tr><td></td></tr>
        <tr>
                    <td>
                        <label> Email:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][5];?>
                      </td>
                </tr>
               
                <tr><td></td><td></td></tr>
                 <tr>
                    <td>
                        <label> Address:</label>
                    </td>
                    <td>
                          <?php echo $tbl[0][4];?>
                      </td>
                </tr>
        <tr><td></td><td>
                
                 </td></tr>
               <tr><td></td><td></td></tr>
          <tr><td></td><td></td></tr>
         
                <tr><td>
                        <div class="w3l_header_right1">
      &emsp;&emsp;&emsp;&emsp;<h2><a href="edit.php"><font color="red">EDIT</font></a></h2>
    </div></td></tr>
            </table>
            
            
        </form>
                                   </div>
        <div class="clearfix"></div>
    

