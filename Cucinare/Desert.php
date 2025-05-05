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
    .signDeserts
    {
        margin: 1em;
        padding: 1em;
        border: solid thin #000000;
        background: wheat;
        font-size: 20px;
        align-content: center;
        
    }
    .borderPicture
    {
        border: 5px solid black;
    }
    .Ingredients
    {
         font-size: 40px;
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
        <div align = "center">
	<h1>Recommend Deserts</h1>
        </div>
		
	<div class = "signDeserts" >
	<h1 style = "text-color: chocolate ;" align = "center">Vanilla Cake</h1>
        <p align = "center"><img src= "https://assets.bonappetit.com/photos/605e3f77bc9004a6f43165aa/5:7/w_1405,h_1967,c_limit/Basically-Vanilla-Cake-01.jpg"
                 alt ="Vanilla Cake" width = "500" height = "500" class = "borderPicture">
        </p>
        <p style = "color: wheat">----</p>
        <p>
            <b class = "Ingredients">Ingredients</b>
            <dl>
             <dd>3 and 2/3 cups (433g) cake flour </dd>
             <dd>1 teaspoon salt</dd>
             <dd>2 teaspoons baking powder</dd>
             <dd>3/4 teaspoon baking soda</dd>
             <dd>1 and 1/2 cups (345g) unsalted butter, softened to room temperature</dd>
             <dd>2 cups (400g) granulated sugar</dd>
             <dd>3 large eggs + 2 additional egg whites, at room temperature*</dd>
             <dd>1 Tablespoon pure vanilla extract (yes, Tbsp!)</dd>
             <dd>1 and 1/2 cups (360ml) buttermilk, at room temperature*</dd>
            </dl> 
            <i><b class = "Ingredients">Vanilla Buttercream</b></i>
            <dl>
                <dd>1 and 1/2 cups (345g) unsalted butter, softened to room temperature</dd>
                <dd>5 and 1/2 cups (650g) confectioners’ sugar</dd>
                <dd>1/3 cup (80ml) whole milk or heavy cream</dd>
                <dd>1 and 1/2 teaspoons pure vanilla extract</dd>
                <dd>1/8 teaspoon salt</dd>
            </dl>
        </p>
        
        <h1 style = "text-color: chocolate ;" align = "center">Apple Pie</h1>
        <p align = "center"><img src= "https://assets.epicurious.com/photos/59bc150e74febd49ca741558/1:1/w_3197,h_3197,c_limit/CINNAMON-CRUMBLE-APPLE-PIE-RECIPE-07092017.jpg"
                 alt ="Apple Pie" width = "500" height = "500" class = "borderPicture">
        </p>
        <p style = "color: wheat">----</p>
        <p>
            <b class = "Ingredients">Ingredients</b>
            <dl>
             <dd> box (14.1 oz) refrigerated Pillsbury™ Pie Crusts (2 Count), softened as directed on box</dd>
             <dd>6 cups thinly sliced, peeled apples (6 medium)</dd>
             <dd>3/4 cup sugar</dd>
             <dd>2 tablespoons all-purpose flour</dd>
             <dd>3/4 ground cinnamon</dd>
             <dd>1/4 teaspoon salt</dd>
             <dd>1/8 teaspoon ground nutmeg</dd>
             <dd>1 tablespoon lemon juice</dd>
            </dl> 
            
        </p>
        </div>
  
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
     <script src= "cookies.js">
        </script>
     </div>
</body>
</html>