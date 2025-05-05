<!doctype html>
<html lang="en" 
      style = "background-color: yellowgreen;">
<head>
	<link 
            href="17v2.css" 
            rel = "stylesheet" 
            type = "text/css"> 
	<title>
            Success
        </title>
</head>
<style>
    body 
    {
	margin-top: 2%;
	margin-right:10%;
	margin-bottom: 2%;
	margin-left: 2%;
	color: #000000;
    }

    h1
    {
	font-family: "New Century Schoolbook", Times, serif;
	color: black;
	font-size: 40px;
	font-weight: bold;
	margin-bottom: -15px;
    }

    .spec1 
    {
	font-weight: bold; 
	color: #59594A;
    }

    .navigation 
    {
	
	margin-top: 10px;
	background-color: limegreen;
	z-index: 25;
    } 

    .content
    {
	position: absolute;
	padding: 0 0 20px 15%;
	margin-top: 10px;
	z-index: 20;
	width: 75%;
    } 

    li 
    {
	display: inline;
	margin: 0px auto 3px auto;
    }

    ul 
    {
	padding: 15px;
	margin: 0px auto 15px;
	border-top: 2px solid #000;
	border-bottom: 2px solid #000;
	text-align: center;
    }

    a 
    {
	color: #000000;
	text-transform: uppercase;
	text-decoration: none;
	padding: 6px 18px 5px 18px;
    }

    a:hover 
    {
	color: #cc3333;
	background-color: #ffffff;
    }
    #bottom
    {
        position: absolute;
        bottom: 0;
        left: 0;  
    }
    img
    {
        width: 70%;
        height: 70%;
    }
    .continue
    {
        display: block;
        margin-right: auto;
        margin-left: auto;
        border: none;
        background-color: #04AA6D;
        color: white;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
    }
</style>
<body>
	<div class = "navigation">
		<ul>
                    <li><a class = "on" href = "UserProfile.php">Home</a></li>
			<li><a href = "YourOwn.php">Your Own Recipes</a></li>
                        <li><a href = "Desert.php"> Recommend Recipes for Deserts</a></li>
			<li><a href = "Chiniese.php">Chinese's Food Recipes</a></li>
			<li><a href = "BBQ.php">BBQ Recipes</a></li>
                         <li><a href = "RessetingPassword.php">Settings</a></li>
                        <li><a href= "HomePage.php">Logout</a></li>
		</ul>
	</div>
	
	<div class = "content" align = "center">
	<h1>Your New Recipe has Been Saved</h1>
        <img src= "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/White_check_mark_in_dark_green_rounded_square.svg/2048px-White_check_mark_in_dark_green_rounded_square.svg.png"
                 alt ="Check Mark" class = "center">
        <a href="UserProfile.php"><input type="button"  class ="continue" value="Continue"></a>
	<p style="color:yellowgreen;"> --- </p>
        <p style="color:yellowgreen;"> --- </p>
        <p style="color:yellowgreen;"> --- </p>
        <p style="color:yellowgreen;"> --- </p>
    <div id ="bottom" >
     <p>
         &nbsp;
     </p>
     <p>
         &nbsp;
     </p>
     <div id="footer">
     </div>
     <div align = "center">
     <script src="PageInfomration.js">
     </script>
     </div>
     </div>
    </div>
</body>
</html>
