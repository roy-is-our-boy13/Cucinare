<!doctype html>
<html lang="en" 
      style = "background-color: yellowgreen;">
<head>
	<link 
            href="17v2.css" 
            rel = "stylesheet" 
            type = "text/css"> 
	<title>
            Your Own Recipe
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
    .center
    {
        display: block;
        margin-left: auto;
        margin-right: auto;
        
   }
   .centerBlock
    {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 40%;
        margin: 1em;
        padding: 1em;
        border: solid thin #000000;
        background: #ffffcc;
        font-size: 15px;   
   }
   .centerTwo
   {
        display: block;
        margin-left: auto;
        margin-right: auto;
   }
   img 
    {
        border: 8px solid black;
    }
    .optionButton 
    {
        border: none;
        color: organge;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        margin-left: auto;
        margin-right: auto;
    }
    .drop-zone 
    {
        max-width: 200px;
        height: 200px;
        padding: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-family: "Quicksand", sans-serif;
        font-weight: 500;
        font-size: 20px;
        cursor: pointer;
        color: #cccccc;
        border: 4px dashed #009578;
        border-radius: 10px;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    .drop-zone--over 
    {
        border-style: solid;
    }

    .drop-zone__input 
    {
      display: none;
    }

    .drop-zone__thumb 
    {
        width: 90%;
        height: 90%;
        border-radius: 10px;
        overflow: hidden;
        background-color: #cccccc;
        background-size: cover;
        position: relative;
    }

    .drop-zone__thumb::after
    {
        content: attr(data-label);
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px 0;
        color: #ffffff;
        background: rgba(0, 0, 0, 0.75);
        font-size: 14px;
        text-align: center;
    }
    .createOwn
    {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 15%;
        height: 15%;
        background-color: skyblue;
        color: white;    
    }
    .textTitle 
    {
      font-size: 200%;
      color: peru;
      margin-left: auto;
      margin-right: auto;
    }
    .orCenter
    {
        text-align: center;
        font-size: 200%;
        color: peru;
        margin-left: auto;
        margin-right: auto;
    }
    .contentButton
    {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 35%;
        height: 15%;
        background-color: skyblue;
        color: white;   
        font-size: 17px;
    }
    .sign
    {
        margin: 1em;
        padding: 1em;
        border: solid thin #000000;
        background: #00cccc;
        font-size: 30px;
        align-content: center;
    }
    .sign2
    {
        margin: 1em;
        padding: 1em;
        border: solid thin #000000;
        background: whitesmoke;
        font-size: 20px;
        align-content: center;
        color: brown;
    }
</style>
<body>
    <section>
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
	<div>
	<div class = "content">
        <p>
             <img src= "https://store-images.s-microsoft.com/image/apps.45547.9007199266535063.a8ea22f2-ae49-4193-8789-7d999a08bcdc.652044bd-1d90-4dca-9cc4-44d320d146bc"
                 alt ="Bowl" class = "center">
         </p>
         <h1 class = "sign" align = "center">
            In This Page, You Will Have a Few Choices of how to insert your new Recipe.
         </h1>
          <p style="color:yellowgreen;"> - </p>
          
         <a href = "choosingAColumn.php">
                     <button  class = "createOwn">
                        Create Your Own
                    </button>
                </a>
          <p style="color:yellowgreen;"> - </p>
          <div class = "orCenter"> <p class = "textTitle">OR</p></div>
         <p style="color:yellowgreen;"> - </p>
         <h1 class = "sign" align = "center">
            Manually Insert Your Recipe .txt File.
         </h1>
        <section>
        <p style="color:yellowgreen;"> --- </p>
        <div align = "center">
        <form 
            enctype = 'multipart/form-data' 
            action = 'uploadingAFile.php' 
            method = 'post' 
            class ="centerBlock"
            align =" center"
            action ="usersContent.php"
            >
                Recipe Name: 
            <input 
                 align =" center"
                type = 'text' 
                name = 'name' 
                placeholder = 'Enter Name of Recipe'
             > 
           
            <br>
            <br>
                Upload Your Text File Here:
            <input 
                class = "file-upload__input"
                type = 'file' 
                name = 'file'
                vale = 'file'
                class = "createOwn"
            > 
             
            <br>
            <br>
            <input 
                align = "center"
                type = 'submit' 
                name = 'submit' 
                vale = 'SUBMUT'
                class ="createOwn"
            >
        </form>
        <br>
        <br>
        </div>
        
        <?php
            include('theDatabase.php');
            $sql = mysqli_query($connecting,"SLECT * FROM Info");
            
            if($sql)
            {
                
                die("The table information cannot be found. It doesn't exist in the database.");
            }
            echo '<div class = "sign2">';
            echo '<h2 align = "center" > Recipe Search </eh2>';
            echo '<form action="dataTable.php" method="post">';
            echo '<input align = "center" type="text" name="RecipeToSearch" placeholder="Search for Recipe"><br><br>';
            echo '<input align = "center" type="submit" name="search" value="Search Recipe"><br><br>';
            echo '<p align = "center">';
            echo '<h2 align = "center" > Recipe Table </h2>';
            echo '<table  align = "center" border ="black">';
            echo '<tr ><th>Recipe Name</th><th>Recipe File Content</th></tr>';
            
            $aRow = mysqli_fetch_assoc($sql);
            
            while($aRow)
            {
               $theNames = $aRow['Name'];
               $theContents = $aRow['Content'];

               echo "<tr>";
               echo "<td>$theNames</td>";
               echo "<td>$theContents</td>";
               echo "/tr>";
            }
            echo "</table>";
            echo "</p>";
            echo "</div>";
        ?>
        
        <div>
        <p style="color:yellowgreen;"> --- </p>
        <p style="color:yellowgreen;"> --- </p>
        <p>           
           <a action="viewYourRecipe.php" href="" class = "center">
               <button  class = "contentButton">
                        Click Here to See Your Content
                    </button>
            </a>
        </p>
        <p style="color:yellowgreen;"> --- </p>
        <p style="color:yellowgreen;"> --- </p>
        <p style="color:yellowgreen;"> --- </p>
        <p style="color:yellowgreen;"> --- </p>
        <div>
        
        <div id ="bottom" >
         <div id="footer">
         </div>
         </div>
         <script src="PageInfomration.js">
         </script>
         <script src= "cookies.js">
        </script>
    
            
         </div>
    </div>
    </section>
	</div>
    </section>
</body>
</html>
