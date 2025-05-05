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
	margin-right: auto;
	margin-left: auto;
    }
    .submitAndSave
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
    <?php
        if(isset($_POST["sumbit"]))
        {
            require "SavingRecipeData.php";
        }
    ?>
    <div class = "center" align = "center">
        <h1>Your New Recipe is <i><?php echo$_POST["recipeEleven"]; ?></i></h1>
        <p style ="color:yellowgreen;" >-</p>
        <table>
            <tr>
              <th>Your Ingredients</th>
            </tr>
            <tr>
              <td>1.) <?php echo$_POST["one"]; ?></td>
            </tr>
            <tr>
              <td>2.) <?php echo$_POST["two"]; ?></td>
            </tr>
            <tr>
              <td>3.) <?php echo$_POST["three"]; ?> </td>
            </tr>
            <tr>
              <td>4.) <?php echo$_POST["four"]; ?></td>
            </tr>
            <tr>
              <td>5.) <?php echo$_POST["five"]; ?></td>
            </tr>
            <tr>
              <td>6.) <?php echo$_POST["six"]; ?></td>
            </tr>
             <tr>
              <td>7.) <?php echo$_POST["seven"]; ?></td>
            </tr>
             <tr>
              <td>8.) <?php echo$_POST["eight"]; ?></td>
            </tr>
             <tr>
              <td>9.) <?php echo$_POST["nine"]; ?> </td>
            </tr>
             <tr>
              <td>10.) <?php echo$_POST["ten"]; ?></td>
            </tr>
            <tr>
              <td>11.) <?php echo$_POST["eleven"]; ?></td>
            </tr>
            <td>12.) <?php echo$_POST["twelve"]; ?></td>
            </tr>
            <td>14.) <?php echo$_POST["fourteen"]; ?></td>
            </tr>
            <td>15.) <?php echo$_POST["fifthteen"]; ?></td>
            </tr>
            <td>16.) <?php echo$_POST["sixteen"]; ?></td>
            </tr>
            <td>17.) <?php echo$_POST["seventeen"]; ?></td>
            </tr>
            <tr>
                  <td><a href="recipeSavedPage.php"><input type="button" onclick = "confirmSubmitted()" class ="submitAndSave" value="Save and Continue"></a></td>
            </tr>
          </table>
        
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
    <script>
    function confirmSubmitted()
    {
        const usersForm = document.getElementByIdd("userForm");

        usersForm.addEventListener("submit",(e) => 
        {
            e.preventDefault();

            alert("Recipe has been saved.");
        });
    }
    </script>
    </div>
    </body>
</html>