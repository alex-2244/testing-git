<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

?>
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
	
	
	   
</style>
 
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed:top">
<div class="container-fluid">
<div class="navbar-header">
<p>Hey, <?php echo $_SESSION['username']; ?>!</p>
</div>
<ul class="nav navbar-nav">
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
</nav>
<div class="container">    
  <div class="row">
    <div class="col-md-2 sidenav">
	<div class="list-group">
	 <a href="dashboard.php" class="list-group-item">Home</a>
     <a href="index 2.php" class="list-group-item">Dashboard</a>
	 <a href="index 1.php" class="list-group-item">Customer</a>
	   </div>
    <div class="col-md-10 text-left"> 
	
    </div> 
  
	</div>
  
</div>


	
</body>
</html>
