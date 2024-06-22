<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Form</title>
    <style>
        body {
           
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
		
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px;
			height:350px;
        }
        h1 {
		
            text-align: center;
            color: #333333;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        select,
        textarea {
            width: calc(100% - 10px);
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 10px;
        }
        input[type="submit"]{
            width: 40%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"] {
            background-color:#dc3545;
            color: white;
            margin-right: 4%;
        }
        input[type="reset"] {
            background-color: #dc3545;
            color: white;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
	
    </style>
	
</head>
<body >

	
<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          Helping Hands
                      </a>
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li><a href="meetings.html">About Us</a></li>
                          <li class="scroll-to-section"><a href="#apply">About Us</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Programms</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.html"></a></li>
                                  <li><a href="meeting-details.html"></a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#courses">contact Us</a></li> 
                          <li class="scroll-to-section"><a href="registration.html">Profile</a></li> 
                      </ul> 	         
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>  
  </header>
  

      <div class="video-overlay header-text" style="padding-left:500px;	padding-top: 250px;">
	 
    <div class="form-container">
                <h3>Login !</h3><br><br>
            <form method="POST" >
	
			<div class="form-group">
               <!-- <label for="name">Enter full name:</label>--!>
                <input type="text" id="username" name="username" required placeholder="*username">
            </div>
			<div class="form-group">
              <!--  <label for="donation">Donation amount:</label>--!>
                <input type="number" id="password" name="password" required placeholder="*password">
            </div>

			 <input type="submit" name="submit" id="submit" value="LOGIN">
        </form>
                      
				             
              </div>
	   </div>   

</body>
</html>
<?php
$connection=mysqli_connect("localhost","root","","register");
if(isset($_POST['submit'])){
	
	//$fname=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="select * from regis where username='".$username."' and password='".$password."'";
	$result=mysqli_query($connection,$query);
	$count=mysqli_num_rows($result);
	
	if($count==1){
	Header("Location:index.php");
	}else{
		echo "invalid access";
	}
}
?>
