
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style1.css">

<style>
nav {
      background-color: red;
      color: white;
      padding: 15px;
    }
	.row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
     footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	.counter
{
    background-color: #eaecf0;
    text-align: center;
}

.counter-count
{
    font-size: 18px;
    background-color: #00b3e7;
    border-radius: 20%;
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

.customer-p
{
    font-size: 24px;
    color: #000000;
    line-height: 24px;
}
	
	
	   
</style>
 
</head>
<body>
<?php
//include auth_session.php file on all user panel pages
include("dashboard.php");

?>
<div class="counter">
<div class="container">
<div class="row">
 <div class="col-md-10 text-left"> 
	
    
           
			<div class="customer">
			<p class="counter-count"></p>
                    <p class="customer-p">Customer</p>
			

			

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
  
</div>


	
</body>
</html>
