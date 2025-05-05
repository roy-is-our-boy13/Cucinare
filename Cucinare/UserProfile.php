<!doctype html>
<html lang="en" 
      style = "background-color: yellowgreen;">
<head>
	<link 
            href="17v2.css" 
            rel = "stylesheet" 
            type = "text/css"> 
	<title>
            User Profile
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
	font-size: 70px;
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
    .borderPicture
    {
        border: 5px solid black;
    }
    .sentence
    {
        font-size: 30px;
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
                        <li><a href= "HomePage.php">Logout</a></li>
		</ul>
	</div>
	
	<div class = "content" align = "center">
	<h1>Cucinare</h1>
        <p class = "sentence">[Which means "Cooked" for Italian] </p>
		        <p align = "center"><img src= "https://s3.amazonaws.com/prod.tctmd.com/public/styles/header_image/public/2021-03/Eating%20More%20Ultraprocessed%20%E2%80%98Junk%E2%80%99%20Food%20Linked%20to%20Higher%20CVD%20Risk.jpeg?itok=zmNGCySB"
                 alt ="potluck" width = "655" height = "455" class = "borderPicture">
	</p>
        <p class  ="sign">
            A place were you can save and store your recipes.
        </p>
	
	
	</div>
    <div id ="bottom" >
     <p>
         &nbsp;
     </p>
     <p>
         &nbsp;
     </p>
     <div id="footer">
     </div>
     <script src="PageInfomration.js">
     </script>
     </div>
</body>
</html>