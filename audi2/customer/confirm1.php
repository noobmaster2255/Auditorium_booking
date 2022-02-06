<?php session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php"); ?>

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
                height: 400px;
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
 
	
		<!---feedback-->
			<?php
		if(isset($_GET['id'])){
			$a=$_GET['id'];
            $d=$_GET['d'];
            //$sql="select ";
			$sql="select * from add_auditorium where audi_id='$a'";
			$tbl=getDatas($sql);
			
		}
?>
	
    <h3 style="position: relative;left:620px;top:150px;">CONFIRM </h3>
    	<div class="div1"  style="position: relative;top:180px;">
        <form action="pro_payment.php" method="post">
           
            <table style="position: relative;left:10px;top:30px">
                <tr>
                    <td>
                        <label>User  Name</label>
                    </td>
                    <td>
                      <input type="text" name="name" value="<?php echo $user;?>" readonly="" >
                      </td>
                </tr>
           <tr><td></td></tr>
                 
                   <tr>
                    <td>
                        <label> Auditorium Name</label>
                    </td>
                    <td> 
                        <input type="text" name="auditoriumname" value="<?php echo $tbl[0][1];?>" readonly="" >
                         <input type="text" name="id" hidden value="<?php echo $a;?>" readonly="" >
                         <input type="text" name="b_date" hidden value="<?php echo $d;?>" readonly="" >
                      </td>
                </tr>
           <tr><td></td></tr>
               
               <tr>
                    <td>
                        <label> Location</label>
                    </td>
                    <td>
                        <input type="text" name="location" value="<?php echo $tbl[0][2];?>" readonly="qq  ">
                      </td>
                </tr>
           <tr><td></td></tr>
		   <tr>
                    <td>
                        <label> seat</label>                    </td>
                    <td>
                        <input type="text" name="seat" value="<?php echo $tbl[0][7];?>" readonly>
                      </td>
                </tr>

           <tr><td></td></tr>
       <tr>
                    <td>
                        <label>  amount</label>
                    </td>
                    <td>
                        <input type="text" name="amount" value="<?php echo $tbl[0][6];?>"readonly >
                      </td>
                </tr>
		   <tr><td></td></tr>
       
		    <tr>
                    <td>
                        <label> Payment Type</label>
                    </td>
                    <td>
                        <input type="radio" name="radio" value="cod" checked>Cash On Direct</td><td>
						<input type="radio" name="radio" value="credit">Credit/Debit
                      </td>
                </tr>
           <tr><td></td></tr>
         
               
				<tr><td></td><td><input type="submit" value="CONFIRM"></td></tr>
            </table>
            
            
        </form></div>
                                   </div>
								   
        <div class="clearfix"></div>

	
