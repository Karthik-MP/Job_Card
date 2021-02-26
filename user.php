<?php
	include('dbconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<style>
	/*#search{
		margin-left: 50%;
	}*/
	input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>
<body>
	<!-- nav -->
	<header>
		<div>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  		<a class="navbar-brand" href="#">GCGC</a>
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
			<div class="position-relative">
				<div style="margin-left: 30%">
					<form class="form-inline" action="user_job_card.php" method="post">
						<label class="form-label col-form-label-lg">Enter Company Unqiue</label>
					    <input id='search' class="form-control ml-2" name="c_uid" type="number" placeholder="Company Unqiue ID " aria-label="Search">
					    <button  class="btn btn-outline-success ml-2" type="submit">Search</button>
				  </form>
				</div>
			</div>

	<footer align='center' class="bg-dark" style="position: fixed; bottom: 0; width: 100%; color: white">Copyright GITAM Bangalore &copy; 2020- All Rights Reserved</footer>
</html>