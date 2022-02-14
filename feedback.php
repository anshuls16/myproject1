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
	$query = "select *from feedback";
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
	<div class="container">
  <h2>Feedback form</h2>
  <form action="" method="POST">

  	 <div class="form-group">
      <label for="pwd">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
   
  <div class="form-group">
      <label for="feed">Feeback Message:</label>
      <input type="text" class="form-control" id="subject" placeholder="Enter Feedback " name="subject">
    </div>
    <div class="form-group">
      <label for="book">Add Book</label>
      <input type="text" class="form-control" id="book" placeholder="Enter Add Book" name="book">
    </div>
    
    <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

</div>
	
</body>
</html>


<?php
 
  if (isset($_POST['submit']))
{
     $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $book=$_POST['book'];
 $conn=mysqli_connect('localhost','root','');
  mysqli_select_db($conn,'lms');
   
$sql="INSERT INTO `feedback`(`name`, `email`, `subject`,`book`) VALUES ('$name','$email','$subject','$book')";



$res=mysqli_query($conn,$sql);

echo($res);
echo "$res";
if ($res==true) 
    // code...

     echo '<script>  alert("Succefully Add Feedback");   </script>';

else


     echo '<script>  alert("Wrong Some Thing");   </script>';


}

?>