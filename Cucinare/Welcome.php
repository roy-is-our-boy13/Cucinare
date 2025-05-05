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
             <img src= "https://i.guim.co.uk/img/media/323787424f69df0165e273dff9226f3145b13607/48_326_2768_1661/master/2768.jpg?width=700&quality=85&auto=format&fit=max&s=db1fca2f9c6ec5304ca66d9be446eb4b"
                 alt ="BBQ Food" class = "center">
         </p>
         <h1 align = "center">
             Hello <?php echo$_POST["username"]; ?> and Welcome to Cucinare
         </h1>
		
	<p class  ="sign">
            Cucinare is a site were you can store your recipes, and save them. We provide our recommend recipes that we think you and everybody else would like.
            You can uses this site to upload your recipes files, or just use this site to manually create a new one.
        </p>
         <div id="footer">
         </div>
         <script src="PageInfomration.js">
         </script>
         
        </div>
</body>
</html>