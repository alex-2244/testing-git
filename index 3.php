<?php
//include auth_session.php file on all user panel pages
include("dashboard.php");

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--<p style="color:red">Note: Before Use Reload to check this Counter</p>-->
<style>
.counter
{
    background-color: #eaecf0;
    text-align: center;
}
.employees,.customer,.design,.order
{
    margin auto 0;
   
}
.counter-count
{
    font-size: 18px;
    background-color: #00b3e7;
    border-radius: 50%;
    position: relative;
    color: #ffffff;
    text-align: center;
    line-height: 52px;
    width: 92px;
    height: 92px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    display: inline-block;
}

.employee-p,.customer-p,.order-p,.design-p
{
    font-size: 24px;
    color: #000000;
    line-height: 34px;
}
</style>

<div class="counter">
<div class="container">
<div class="row">
 <div class="col-sm-10 text-left"> 
	
    
           
			<div class="customer">
			<p class="counter-count"></p>
                    <p class="employee-p">Customer</p>
			

<?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect("localhost", "root", "",  
                                                 "demo"); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      
    // query to fetch Username and Password from 
    // the table geek 
    $query = "SELECT * FROM employees"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 
     
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
           if ($row) 
              { 
		  
                    echo("Number of row in the table : " . $row); 
					
               } 
        // close the result. 
		
        mysqli_free_result($result); 
		
    } 
  
    // Connection close  
    mysqli_close($connection); 
?>


</div>
           </div>
</div>
</div>
</div>
