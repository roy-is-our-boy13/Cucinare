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
        background: orange;
        font-size: 20px;
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
	
	<div class = "content">
        <p>
             <img src= "https://cdn.eftm.com/wp-content/uploads/2021/03/TMNT-Ranch-1280x720.jpg"
                 alt ="Teenage Mutant Ninja Turtules and their Pizza" class = "center">
         </p>
         <h1 align = "center">
             Hey there and Welcome Back <?php echo$_POST["username"]; ?> to Cucinare
         </h1>
         <p style = "color: yellowgreen;">-----</p>
         <p style = "color: yellowgreen;">-----</p>
         <div class ="sign" align = "center">
           <p>Ready to make some more delicious food?</p>  
         </div>
         <p>
             <img src= "https://i.pinimg.com/originals/f5/9b/2f/f59b2f4dfabc07127a4c1bfcf45491a5.jpg"
                 alt ="A Teenage Mutant Ninja Turtules and his Pizza" class = "center">
         </p>
         <p style = "color: yellowgreen;">-----</p>
	<p>
	</p>

         <div id="footer">
         </div>
         <script src="PageInfomration.js">
         </script>
         
        </div>
</body>
</html>