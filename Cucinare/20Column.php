<!doctype html>
<html lang="en" 
      style = "background-color: yellowgreen;">
<head>
	<link 
           
            rel = "stylesheet" 
            type = "text/css"> 
	<title>
            10 Columns
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
    table 
    {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 17%;
     }

    td, th 
   {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) 
    {
        background-color: #dddddd;
    }
    .center
    {
        margin-left: auto;
        margin-right: auto;
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
    .backButton
    {
        display: block;
        border: none;
        background-color: #04AA6D;
        color: white;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
    }
</style>
<body>
	<div class = "navigation">
		<ul>
                    <li><a class = "on" href = "UserProfile.php">Home</a></li>
			<li><a href = "YourOwn.php">Your Own Recipes</a></li>
                        <li><a href = "Desert.html"> Recommend Recipes for Deserts</a></li>
			<li><a href = "Chiniese.html">Chinese's Food Recipes</a></li>
			<li><a href = "BBQ.html">BBQ Recipes</a></li>
			 <li><a href = "RessetingPassword.php">Settings</a></li>
                        <li><a href= "HomePage.php">Logout</a></li>
		</ul>
	</div>
    <a href = "choosingAColumn.php"> 
                    <button type="button" class = "backButton">
                        Back
                    </button>
        </a>
	<div class = "content">
            
            <form id ="ingredientsForm" method = "post", action="showRecipe20.php">
            
                <table class="center">
                <tr>
                    <th>Name of Your New Recipe</th>
                </tr>
                <tr>
                    <th><input type="text" placeholder="New Recipe" name="recipe20"></th>
                </tr>
                <tr>
                  <th>Your Ingredients</th>
                </tr>
                <tr>
                  <td>1.) <input type="text" placeholder="Enter Ingredients" name="one"></td>
                </tr>
                <tr>
                  <td>2.) <input type="text" placeholder="Enter Ingredients" name="two"></td>
                </tr>
                <tr>
                  <td>3.) <input type="text" placeholder="Enter Ingredients" name="three"></td>
                </tr>
                <tr>
                  <td>4.) <input type="text" placeholder="Enter Ingredients" name="four"></td>
                </tr>
                <tr>
                  <td>5.) <input type="text" placeholder="Enter Ingredients" name="five"></td>
                </tr>
                <tr>
                  <td>6.) <input type="text" placeholder="Enter Ingredients" name="six"></td>
                </tr>
                 <tr>
                  <td>7.) <input type="text" placeholder="Enter Ingredients" name="seven"></td>
                </tr>
                 <tr>
                  <td>8.) <input type="text" placeholder="Enter Ingredients" name="eight"></td>
                </tr>
                 <tr>
                  <td>9.) <input type="text" placeholder="Enter Ingredients" name="nine"></td>
                </tr>
                 <tr>
                  <td>10.)<input type="text" placeholder="Enter Ingredients" name="ten"></td>
                <tr>
                  <td>11.)<input type="text" placeholder="Enter Ingredients" name="eleven"></td>
                </tr>
                 <tr>
                  <td>12.)<input type="text" placeholder="Enter Ingredients" name="twelve"></td>
                </tr>
                <tr>
                  <td>13.)<input type="text" placeholder="Enter Ingredients" name="thirteen"></td>
                </tr>
                <tr>
                  <td>14.)<input type="text" placeholder="Enter Ingredients" name="fourteen"></td>
                </tr>
                 <tr>
                  <td>15.)<input type="text" placeholder="Enter Ingredients" name="fiftheen"></td>
                </tr>
                <tr>
                  <td>16.)<input type="text" placeholder="Enter Ingredients" name="sixteen"></td>
                </tr>
                 <tr>
                  <td>17.)<input type="text" placeholder="Enter Ingredients" name="seventeen"></td>
                </tr>
                <tr>
                  <td>18.)<input type="text" placeholder="Enter Ingredients" name="eighteen"></td>
                </tr>
                <tr>
                  <td>19.)<input type="text" placeholder="Enter Ingredients" name="nineteen"></td>
                </tr>
                <tr>
                  <td>20.)<input type="text" placeholder="Enter Ingredients" name="twenty"></td>
                </tr>
                </tr>
                <tr>
                  <td><input type="button" onclick="myNewRecipe()" class = "press" value="Submit New Recipe"></td>
                </tr>
              </table>
              </form>
	</div>
    
    <script> 
    function myNewRecipe() 
    {
        document.getElementById("ingredientsForm").submit();
    }
    </script>
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
