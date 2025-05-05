<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html style = "background-color: yellowgreen;">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        .btn-group button 
        {
          background-color: #04AA6D; 
          border: 1px solid green;
          color: white;
          padding: 10px 24px; 
          cursor: pointer; 
          width: 50%; 
          display: block; 
          margin-left: auto;
          margin-right: auto;
        }

        .btn-group button:not(:last-child) 
        {
          border-bottom: none; 
        }

        
        .btn-group button:hover 
        {
          background-color: #3e8e41;
        }
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
        .buttonCenter
        {
            Text-align: center;
        }
        .buttonRows
        {
            margin: 1em;
            padding: 1em;
            border: solid thin #000000;
            background: black;
            font-size: 20px;
            align-content: center;
        }
        .Backbutton
        {
            background-color: #04AA6D; 
            border: 1px solid green;
            color: white;
            padding: 10px 24px; 
            cursor: pointer; 
            width: 10%; 
            display: block; 
            margin-right: auto;
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
        <p>
                <a href = "YourOwn.php">
                     <button  class = " button Backbutton">
                        Back
                    </button>
                </a>
           </p>
        <h1 align = "center">Go on ahead and Choose Your Columns that you think you possible need.</h>
        <div class = "buttonRows">
           
        <div class = "btn-group">
           
                <button onclick="ColTen()">10 Columns</button>
                <button onclick="ColEl()">11 Columns</button>
                <button onclick="ColTw()">12 Columns</button>
                <button onclick="ColTh()">13 Columns</button>
                <button onclick="ColFou()">14 Columns</button>
                <button onclick="ColFi()">15 Columns</button>
                <button onclick="ColSi()">16 Columns</button>
                <button onclick="ColSe()">17 Columns</button>
                <button onclick="ColEi()">18 Columns</button>
                <button onclick="ColNi()">19 Columns</button>
                <button onclick="ColTwe()">20 Columns</button>
                <button onclick="ColTwO()">21 Columns</button>
                <button onclick="ColTwT()">22 Columns</button>
                <button onclick="ColTwTh()">23 Columns</button>
                <button onclick="ColTwF()">24 Columns</button>
                <button onclick="ColTwFi()">25 Columns</button>
                <button onclick="ColTwSi()">26 Columns</button>
                <button onclick="ColTwSe()">27 Columns</button>
                <button onclick="ColTwEigh()">28 Columns</button>
                <button onclick="ColTwNi()">29 Columns</button>
                <button onclick="ColThir()">30 Columns</button>
        </div>
        </div>
        <script>
            function ColTen() 
            {
                location.replace("10Column.php")
            }

            function ColEl()
            {
                location.replace("11Column.php")
            }

            function ColTw()
            {
                location.replace("12Column.php")
            }

            function ColTh()
            {
                location.replace("13Column.php")
            }

            function ColFou()
            {
                location.replace("14Column.php")
            }

            function ColFi()
            {
                location.replace("15Column.php")
            }

            function ColSi()
            {
                location.replace("16Column.php")
            }

            function ColSe()
            {
                location.replace("17Column.php")
            }

            function ColEi()
            {
                location.replace("18Column.php")
            }

            function ColNi()
            {
                location.replace("19Column.php")
            }

            function ColTwe()
            {
                location.replace("20Column.php")
            }

            function ColTwO()
            {
                location.replace("21Column.php")
            }

            function ColTwT()
            {
                location.replace("22Column.php")
            }

            function ColTwTh()
            {
                location.replace("23Column.php")
            }

            function ColTwF()
            {
                location.replace("24Column.php")
            }

            function ColTwFi()
            {
                location.replace("25Column.php")
            }

            function ColTwSi()
            {
                location.replace("26Column.php")
            }

            function ColTwSe()
            {
                location.replace("27Column.php")
            }

            function ColTwEigh()
            {
                location.replace("28Column.php")
            }

            function ColTwNi()
            {
                location.replace("29Column.php")
            }
            function ColThir()
            {
                location.replace("30Column.php")
            }
        </script>
    </body>
</html>
