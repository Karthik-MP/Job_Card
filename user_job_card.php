<?php
	include('dbconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<!-- bootstraps -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
 -->


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<body>
	<!-- nav -->
	<header>
		<div>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  		<a class="navbar-brand" href="user.php">GCGC</a>
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
		      			<li class="nav-item active">
		        			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      			</li>
					</ul>
					<ul class="navbar-nav mr-5">
						
						 <li class="nav-item active">
						 	<a class="nav-link" href="#">User <span class="sr-only">(current)</span></a>
						 </li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	
	<br><br>
	<!-- body -->
				<?php
						$company_uid=$_POST['c_uid'];
                        $result = mysqli_query($con,"SELECT * FROM jobcard where company_uid='$company_uid'") or die('Error');
                        $count1=mysqli_num_rows($result);
						if($count1<1){
							echo '<script>alert("Company Unqiue Id does not exist")</script>';
							
															
						}
						else{
                        while($row = mysqli_fetch_array($result)) 
                        {
                        	$companyname = $row['company_name'];
                        	
                        	$company_tpo = $row['company_tpo'];
                        	$companylogo = $row['companylogo'];
                        	$segment = $row['segment'];
                        	$venue = $row['venue'];
                        	$apply_before_da = $row['apply_before_da'];
                        	$salary = $row['salary'];
						    
						    $joining_at = $row['joining_at'];  
						    $ppt_date = $row['ppt_date'];  
						    // $campus_c = $row['campus_c'];  
						    $campus_date = $row['campus_date']; 
						    $Designation = $row['Designation'];                         	

	                        echo '
	                        <div class="container">
	                        	<div class="jumbotron">
	                        		<div class="text-center">
										<h2>'.strtoupper($companyname).'</h2><hr>
									</div>
										<div class="text-center">
											<img  class="mg-fluid img-thumbnail" style="border-radius:100%"  src="uploads/companylogo/'.$companylogo.'"  width=150 height=50%>
										</div>
									<div class="row">
										<div class="col-md-8 pl-5">
											<h5 class="align-middle">Company Unqiue Id : '.$company_uid.' </h5>
											<h5>Company TPO : '.$company_tpo.' </h5>
											<h5>Segment : '.$segment.' </h5>
											<h5>Joining at : '.$joining_at.' </h5>
											<h5>Presentation Talk on : '.$ppt_date.' </h5>
										</div>
										<div class="col-md-4 ">
											<h5>Venue : '.$venue.' </h5>
											<h5>Apply before date : '.$apply_before_da.' </h5>
											<h5>Salary : '.$salary.' </h5>
											<h5>Campus date : '.$campus_date.' </h5>
											<h5>Designation : '.$Designation.' </h5>
										</div>
									</div>
	                        	</div>	
	                        </div>

	                        ';
                		}
                	}
                ?>


	<footer align='center' class="bg-dark" style="position: fixed; bottom: 0; width: 100%; color: white">Copyright GITAM Bangalore &copy; 2020- All Rights Reserved</footer>
</html>