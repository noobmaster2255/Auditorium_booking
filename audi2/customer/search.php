<?php
include("../shares/db/mydatabase.inc");
include("top.php");

?>

<style>
* {
    box-sizing: border-box;
}
body{
        background-image: url(7.jpg);
        background-size: cover;
        background-position: center;
        min-height: 700px;

    }


input[type=text],select  {

    width: 300px;
    height: 150px
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    color:blue;
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
    width: 2s5%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 30px) {
    .col-25, .col-75, input[type=submit],input[type=reset] {
        width: 75%;
        margin-top: 0;
    }
}
</style>
</head>
    

<body>
<form action="search_result.php" method="post">
 
<table style="position:relative;left:600px;top:100px;height:100px;">
<tr>
       
        <input type="text" name="search" placeholder="      search here........" />
        <input type="submit" value="ok"/>
       
    </tr>
<tr> 
    <td><label>Location:</label></td>    
    <td><input type="text" name="loc">    </td>
    </tr>
    
</tr>
<tr><td></td><td></td></tr><tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>

<tr>
<td><label>District:</label></td>
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
</tr>
       <tr>
    <td><input type="submit" value="Submit"></td>
    </tr>
       </table>
       </form>
       </body>
       </html>


