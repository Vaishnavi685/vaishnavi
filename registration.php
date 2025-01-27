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
    <title>Registration Form</title>
    <style>
        body {
            
            background-color: #f0f0f0;
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
            width: 800px;
			height:400px;
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
	
<?php
$connection=mysqli_connect("localhost","root","","register");

?>
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
                          <li class="scroll-to-section"><a href="#apply">Join Us</a></li>
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
  
 
  <img src="D:\xampp\htdocs\cc\helping_hands\assets\images\back1.jpg">

      <div class="video-overlay header-text" style="padding-left:280px;	padding-top: 190px;">
	 
    <div class="form-container">
                <h3>Registration Form !</h3>Please kindly fillup the following details for registration<br><br>
            <form method="POST" method=""><table>
			<tr >
           <td style="width:400px;"> <div class="form-group">
               <!-- <label for="name">Enter full name:</label>--!>
                <input type="text" id="name" name="name" required placeholder="*name">
            </div>
            <div class="form-group">
               <!--  <label for="email">Enter email-id:</label>--!>
                <input type="email" id="email" name="email" required placeholder="*email">
            </div>
            <div class="form-group">
              <!--  <label for="city">Select your city:</label>--!>
                <select id="city" name="city" required placeholder="*select city"> 
                    <option value="">Select city</option>
                    <option value="nagpur">Nagpur</option>
                    <option value="ahmednagar">Ahmednagar</option>
                    <option value="pune">Pune</option>
                    <option value="mumbai">Mumbai</option>
                </select>
            </div>
			<div class="form-group">
               <!-- <label for="name">Enter full name:</label>--!>
                <input type="text" id="username" name="username" required placeholder="*username">
            </div></td>
           <td style="width:400px;"> <div class="form-group">
                <!--<label for="mobile">Mobile no.:</label>--!>
                <input type="number" id="mobile" name="mobile" required placeholder="*mobile no">
            </div>
            <div class="form-group">
             <!--   <label for="address">Enter address:</label>--!>
                <textarea id="address" name="address" rows="1" required placeholder="*address"></textarea>
            </div>
            <div class="form-group">
              <!--  <label for="donation">Donation amount:</label>--!>
                <input type="number" id="donation" name="donation" required placeholder="*donation amount">
            </div>
			<div class="form-group">
              <!--  <label for="donation">Donation amount:</label>--!>
                <input type="number" id="password" name="password" required placeholder="*password">
            </div></td>
			</tr></table>
			 <input type="submit" name="submit" id="submit" value="SUBMIT">
        </form>
                      
				             
              </div>
	   </div>   
<?php
if (isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$donation=$_POST['donation'];
		
		$query="insert into reg_d(username,password,name,mobile,email,donation) values('".$username."','".$password."','".$name."','".$mobile."','".$email."','".$donation."')";
		mysqli_query($connection,$query);
	 
	}

?>

</body>
</html>
