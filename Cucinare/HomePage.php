<!DOCTYPE html>
<html style = "background-color: yellowgreen;">
    <head>
        <meta charset="UTF-8">
        <title> Cucinare</title>
    </head>
    <style>
        body
            {
                padding: 0;
                background-size: cover;
                background-position: center;
                font-family: sans-serif;
            }
            .button 
            {
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
            .singUpButton
            {
                background-color: brown;
            }
            .loginButton
            {
                background-color: brown;
            }
            .center
            {
                max-width: 400px;
                margin: auto;
            }
            .h1
            {
                text-align: center;
            }
            div
            {
                width: auto;
                text-align: center;
                padding: 15px;
                border: 3px soild green;
            }
            .center
            {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
            .centerSentence
            {
                text-align: center;
            }
            img 
            {
              border: 8px solid black;
            }
            .textBigger
            {
                font-size: 80px;
            }
    </style>
    <body>
        <section class "container">
            <div class = "h1">
                <h1 style="color:blue; >
                    <p class = "textBigger">
                        <i>
                            Welcome to Cucinare
                        </i>
                    </p>    
                </h1>
            </div>
        </section>
        <p class = "centerSentence" style="color:blue;">
            <b>
                A place were you can choose your ingredient's.
            </b>
        </p>
         <p>
             <img src= "https://parade.com/wp-content/uploads/2021/05/Semiya-Upma-Recipe-e1622646713756.jpg"
                 alt ="food" class = "center">
         </p>
        <section class = "container">
            <div class = "center">
               <a href = "SignUpPage.php">
                   <button type="button" class = "button singUpButton">
                       Sign Up
                    </button>
               </a>
               <a href = "LoginPage.php"> 
                    <button type="button" class = "button loginButton">
                        Login
                    </button>
              </a>
            </div>      
        </section>
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
    </body>
</html>
