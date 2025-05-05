<!doctype html>
<html lang="en" 
      style = "background-color: yellowgreen;">
<head>
	<link 
            href="17v2.css" 
            rel = "stylesheet" 
            type = "text/css"> 
	<title>
            Welcome
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
	color: #BE6E46;
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

    a:hover, a.on 
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
    .center
    {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
   }
   img 
    {
        border: 8px solid black;
    }
    .sign
    {
        margin: 1em;
        padding: 1em;
        border: solid thin #000000;
        background: mediumspringgreen;
        font-size: 20px;
    }
    .press
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
    <div class = "sign">
    <h1 align = "center">New Password Has Been Set</h1>
    <p style = "color: mediumspringgreen;">----</p>
    <img src= "https://bleedingcool.com/wp-content/uploads/2018/08/ezgif-2-840641c54b-1200x900.gif"
                 alt ="Spider-Man's Thumbs Up" class = "center">
    <p style = "color: mediumspringgreen;">----</p>
    <p><a href = "UserProfile.php"><input type="button"  class = "press" value="Continue"></a></p>
    <script src="PageInfomration.js">
         </script>
         <script src= "cookies.js">
        </script>
        </form>
    </div>
</body>
</html>