<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Library System</title>
</head>
<body>
    <div id="full">
        <div id="content">
            <div id="nav">
                    <h1>Library Management System(LMS)</h1>
                <div id="link">
                     <a href="home.php">Home</a>
                     
                     <a href="gallery.php">Books</a>
                     <a href="index.php">Sign-In</a>
                </div>
            </div>
            <div id="box1">
                
            <div id="overlay">
           
                <div id="boxcontent">
                    <div id="rightbox">
                        <h2> Consortium eLibrary</h2>
                        <h3>
                             Massive Collection beyond eBooks & eJournals
                        </h3>
                         <p> Read from over 100,000 eResources including top, peer reviewed eJournals and eBooks from world class publishers.</p>


                         <h2> "The man who does not read books has no advantage over the one who cannot read them"</h2>
                    </div>
                </div>

            </div>
        </div>
        <div id="box2">
            <h3>Engineering Book's</h3>
        <div id="menu">
            <div class="menubox"> Computer Science</div>            
            <div class="menubox">Civil</div>
            <div class="menubox">Electrical</div>            
            <div class="menubox">Mechanical </div>
        </div>
        </div>
        <div id="box3">
            <div id="left">  </div>
            <div id="right">
                <marquee  id ="marquee"width="100%" direction="up" height="100%" scrollamount="1">
                <ul>
               <li><b>Carry your student ID card (or CHOIS Card) with you when you enter the library.</b></li>
               <li><b>Do not take any book or other library material out of the library without following the borrowing procedures.</b></li>
              <li><b>Make sure to return the borrowed items by the due date.</b></li>
              <li><b>Never write in books or cut pages out of them</b></li>
              <li><b>Return books/materials to their original location on the bookshelf.</b></li>
  
              </ul> 
            </marquee> 
        </div>
        </div>
        <div id="box4">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="download.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b>Book Name:Effective Modern C++</b></h5>
    <p class="card-text">Author: Scott Meyers</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="download.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b>Book Name:Effective Modern C++</b></h5>
    <p class="card-text">Author: Scott Meyers</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="download.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b>Book Name:Effective Modern C++</b></h5>
    <p class="card-text">Author: Scott Meyers</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="download.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b>Book Name:Effective Modern C++</b></h5>
    <p class="card-text">Author: Scott Meyers</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> 
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="download.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b>Book Name:Effective Modern C++</b></h5>
    <p class="card-text">Author: Scott Meyers</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="download.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b>Book Name:Effective Modern C++</b></h5>
    <p class="card-text">Author: Scott Meyers</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

        </div>
        <div id="box5">
            <div id="formleft">\
                
            <h2>Feedback Form</h2> 

            <h3> <?php
 
  


if (isset($_POST['submit']))
{
     $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
 $conn=mysqli_connect('localhost','root','','lms');
  mysqli_select_db($conn,'lms');
   
$sql="INSERT INTO `feedback`(`name`, `email`, `subject`) VALUES ('$name','$email','$subject')";



$res=mysqli_query($conn,$sql);

if ($res==true) 
    // code...

     echo '<script>  alert("Succefully Register");   </script>';

else


     echo '<script>  alert("Wrong Some Thing");   </script>';


}

?></h3>


            <form method="POST">           
                <input type="text" id="fname" name="name" placeholder=" Name">   
           
                <input type="email" id="lname" name="email" placeholder="Email">
                         
            <textarea id="subject"name="subject" placeholder="Write something...." style="height:100px;width: 300px";></textarea>
            
                <input type="submit" value="Submit" name="submit" style="  box-shadow: 0 4px 6px 0 rgba(129, 129, 129, 0.603);margin-bottom: 10px;border: none; margin-left: 120px;  border-radius: 5px;height: 40px;width: 80px;font-size: 12PX;color: white;background-color:  #ff4757;">
            </form>
        </div>
            <div class="formright"><img src=""><div class="col-md-4" id="side_bar">
            <h5>Library Timing</h5>
            <ul>
                <li>Opening Timing: 8:00 AM</li>
                <li>Closing Timing: 8:00 PM</li>
                <li>(Sunday off)</li>
            </ul>

        </div>
        <div class="col-md-4">
            <h5>What we provide ?</h5>
            <ul>
                <li>Full furniture</li>
                <li>Free Wi-fi</li>
                <li>News Papers</li>
                <li>Discussion Room</li>
                <li>RO Water</li>
                <li>Peacefull Environment</li>
            </ul>
        </div>  
    </div>


        </div>
    </div>
    </div>
</body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</html>

 



 