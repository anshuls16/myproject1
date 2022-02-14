<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$book_author = "";
	$book_no = "";
	$email="";
	$name="";
	$issuedate="";
	$returndate="";
	$query = "select books_issue.book_name,books_issue.book_author,books_issue.email,books_issue.issuedate, books_issue.returndate,users.name from books_issue,users where users.email=books_issue.email";
?>
s
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}

table{

	position: absolute;
	left: 50%;
	top: 100%;
	margin-top: 10%;
	transform: translate(-50%, -50%);
	border-collapse: collapse;
	width: 800px;
	height: 200px;
	border: 1px soild #bdc3c7;
	box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2),-1px -1px 8px rgba(0, 0, 0, 0.2);
}

tr{

	transition: all .2s ease-in;
	cursor: pointer;
}


th,td{

	padding: 12px;
	text-align: left;
	border-bottom: 1px solid #ddd;
}

#header{
	background-color: #16a085;
	text-align: center;
}

	
  	</style>
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php">Library Management System(LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
						<a class="dropdown-item" href="feedback.php">Feedback</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="user_dashboard.php" class="nav-link">Dashboard</a>
			</li>
			
			
			
			</li>
		</ul>
	</div>
</nav>

<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr id="header">
					<th>Book Name:</th>
					<th>Book Author:</th>
					<th> Student Email</th>
					<th>Student Name</th>
					<th>Issue Date</th>
					<th>Return Date</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$book_name = $row['book_name'];
						$book_author = $row['book_author'];
						$email = $row['email'];
						$name =$row['name'];
						$issuedate = $row['issuedate'];
						$returndate=$row['returndate'];
					
				?>
						<tr>
							<td><?php echo $book_name;?></td>
							<td><?php echo $book_author;?></td>
							<td><?php echo $email;?></td>
							<td><?php echo $name;?></td>
							<td><?php echo $issuedate;?></td>
							<td><?php echo $returndate;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
	
</body>
</html>





