<!DOCTYPE html>
<html style = "background-color: yellowgreen;">
    <head>
        <meta charset="UTF-8">
        <title> Sign Up for Cucinare</title>
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
            .clearButton
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
                width: 40%;
                align: center;
                text-align: center;
                padding: 15px;
                border: 3px soild green;
                margin-left: auto;
                margin-right: auto;
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
            .container 
            {
                padding: 16px;
                background-color: #ccffcc;
            }
            input[type=text], input[type=password] 
            {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }
            .wordLeft
            {
                text-align: left;
            }
            label
            {
                text-align: left;
            }
            .backButton
            {
                 background-color: brown;
                 margin-left: 30%;
            }
            hr 
            {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }
            * 
            {
                box-sizing: border-box;
            }
            img 
            {
              border: 8px solid black;
            }
            .textBigger
            {
                font-size: 60px;
                align-content: center;
            }
    </style>
    <body>
        <section>
            <div class = "h1">
                <h1 style="color:blue;" class ="textBigger">
                    <i>
                        Sing Up
                    </i>
                </h1>
            </div>
        </section>
         <p>
              <img src= "https://i.ytimg.com/vi/RoHWiA6pogg/maxresdefault.jpg"
                 alt ="Apple Pie" 
                 class = "center">
         </p>
         <p class = "wordLeft">
                <a href = "HomePage.php">
                     <button  class = " button backButton">
                        Back
                    </button>
                </a>
           </p>
         <form action="singUp.php" >
        <div class="container">
            <p>
             <img src= "https://pbs.twimg.com/media/EItDQIqX0AAvIaI.jpg"
                 alt ="Spider-Man in the Kitchen" 
                 class = "center">
            </p>
          <h1 class = "wordLeft">
              Register
          </h1>
          <p class = "wordLeft">
              Please fill in this form to create an account.
          </p>
          <hr>
          <label for="userName">
              <b>
                  <p class = "wordLeft"
                     name = "username">
                    Username
                   </p>
              </b>
          </label>
          <input 
              type="text" 
              placeholder="Enter Email" 
              name="email" 
              id="email" 
              required>
          <label for="email">
              <b>
                  <p class = "wordLeft">
                    Email
                   </p>
              </b>
          </label>
          <input 
              type="text" 
              placeholder="Enter Email" 
              name="email" 
              id="email" 
              required>
          <label for="password">
              <b>
                  <p class = "wordLeft">
                    Password
                  </p>
              </b>
          </label>
          <input 
              type="password" 
              placeholder="Enter Password" 
              name="password" 
              id="psw" 
              required>
          <label 
              for="psw-repeat">
              <b>
                  <p class = "wordLeft">
                    Repeat Password
                   </p>
              </b>
          </label>
          <input 
              type="password" 
              placeholder="Repeat Password" 
              name="psw-repeat" 
              id="psw-repeat" 
              required>
          <hr>
          <a href = "Welcome.php">
            <button type="submit" class = "button singUpButton">Create New Account</button>
          </a>
          <button  class = "button clearButton">
                   Clear
           </button>
        </div>
    <div class="container signin">
        <p>
            Already have an account? 
            <a href="LoginPage.php">
                Sign in
            </a>
            .
        </p>
  </div>
</form>
     <p>
        <img src= "https://hips.hearstapps.com/delish/assets/18/08/1519154699-chicken-pot-pie-horizontal-1.jpeg"
            alt ="Chicken Pop Pie" 
            class = "center">
     </p>
     <script scr = "https://www.gstatic.com/firebasejs/9.6.0/firebase-app.js"> </script>
    <script scr = "https://www.gstatic.com/firebasejs/9.6.0/firebase-auth.js"> </script>
    <script scr = "https://www.gstatic.com/firebasejs/9.6.0/firebase-database.js"> </script>
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

