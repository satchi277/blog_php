<!-- Custom styles for this dbconfig file-->
<link href="../css/sb-admin-2.min.css" rel="stylesheet">

<?php

$myServer = "localhost";
$myUser = "root";
$myPass = "";
$myDB = "admin";

$connection = mysqli_connect($myServer, $myUser, $myPass, $myDB);

if($connection)
{
   //echo "database connected";
 }
 else
 {
	 die("Connection failed: " . mysqli_connect_error());
   
   echo '
		   <div class="container">
			   <div class="row">
				   <div class="col-md-8 mr-auto ml-auto text-center py-5 mt-5">
					   <div class="card">
								<h1 class="card-title bg-danger text-white"> Database Connection Failed </h1>
							   <h2 class="card-title"> Database Failure</h2>
							   <p class="card-text"> Please Check Your Database Connection.</p>
							   <a href="#" class="btn btn-primary">:( </a>
						   </div>
					   </div>
				   </div>
			   </div>
		   </div>
	   ';
 }
 
?>