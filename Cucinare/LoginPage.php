<!DOCTYPE html>
<html style = "background-color: yellowgreen;">
    <head>
        <meta charset="UTF-8">
        <title>
            Login to Cucinare
        </title>
    </head>
    <script scr = "loginAuthentication.js">
    </script>
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
            }
    </style>
    <body>
        <section class "container">
            <div class = "h1">
                <h1 style="color:blue;" class = "textBigger">
                    <i>
                        Login
                    </i>
                </h1>
            </div>
        </section>
         <p>
             <img src= "https://5.imimg.com/data5/YA/NE/MY-46662525/spiderman-cake-1kg-250x250.png"
                 alt ="Spider-Man Birthday Cake" class = "center">
         </p>
         <p class = "wordLeft">
                <a href = "HomePage.php">
                     <button  class = " button backButton">
                        Back
                    </button>
                </a>
           </p>
         <form action="LoginPage.php">
        <div class="container">
          <h1 class = "wordLeft">
              Sign In
          </h1>
          <hr>
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
              value="email"
              required>
          <label for="psw">
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
              id="password" 
              value ="password"
              required>
          <hr>
          <a href = "WelcomeBack.php">
            <button 
                    type="submit" 
                    class = "button singUpButton" 
                    onClick = "validate()"
                    >
                        Login
            </button>
          </a>
          <button  class = "button clearButton">
                   Clear
           </button>
        </div>
    <div class="container signup">
        <p>
            Don't have an account? 
            <a href="SignUpPage.php">
                Sign Up
            </a>
        </p>
  </div>      
</form>
<script>
    const LoginFrom = 
            {
                email: document.getELementByID('email');
                password: document.getELementByID('password');
            };
            
            form.submit.addEventListener('click', () => 
            {
                const request = new XHLMHttpRequest();
                
                request.onload = () => 
                {
                    let objectResponse = null;
                    
                    try
                    {
                        objectResponse = JSON.parse(request.reponseText);
                    }
                    catch (e)
                    {
                        alert("Could not parse.");
                    }
                    
                    if(objectResponse)
                    {
                        handleResponse(objectResponse);
                    }
                };
                
                 const requestingData = `username=${LoginForm.email.value}&password=${LoginForm.password.value}`;

                request.open('post', 'login.php');
                request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                request.send(requestingData);
                
            });
            
    
    function handleResponse (responseObject) 
    {
            if (responseObject.ok) 
            {
                location.href = 'dashboard.html';
            } 
            else 
            {
                while (form.messages.firstChild) 
                {
                    form.messages.removeChild(form.messages.firstChild);
                }

                responseObject.messages.forEach((message) => 
                {
                    const li = document.createElement('li');
                    li.textContent = message;
                    form.messages.appendChild(li);
                });

                form.messages.style.display = "block";
            }
        }
</script>
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

