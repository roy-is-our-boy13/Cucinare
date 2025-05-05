const firebaseConfig = 
{
    apiKey: "AIzaSyAF7z-l1tveTZyIECKpL4I3wrX5QwmGnOc",
    authDomain: "cucinare-f74c8.firebaseapp.com",
    projectId: "cucinare-f74c8",
    storageBucket: "cucinare-f74c8.appspot.com",
    messagingSenderId: "942599465303",
    appId: "1:942599465303:web:c86b69790daa2c5ae43612",
    measurementId: "G-D28SVPL3HB"
  };

  const app = initializeApp(firebaseConfig);
  const auth = firebase.auth()
  const database = firebase.database()
  
  function register()
  {
    email = document.getElementById('email').value;   
    password = document.getElementById('password').value;
    userName = document.getElementById('userName').value;
         
    if(validate_email(email) == false || validate_password(password) == false)
    {
        altert('Email or Password is out of line.')
        return;
    }
    if(validate_field(userName) == false)
    {
        alert('Username is not inserted');
        return;
    } 
    
    auth.createWithEmailAndPassword(email, password)
        .then(function()
        {
            var user = auth.currentUser;
            
            var databaseReference = database.ref();
            alert('User has been Created');
            
            var userData = 
                    {
                        email: email,
                        userName : userName,
                        last_login: Date.now()
                    }
            databaseReference.child('user/' + user.uid).set(userData)
        })
        .catch(function(error)
        {
            var error_code = error.code;
            var error_message = error.message;
            
            alert(error_message);
        })
  }
  
  function validate_email()
  {
      expression = /^[^@]+@\w+(\.\w+)+\w$/
      
      if(expression.test(email) == true)
      {
          return true;
      }
      else
      {
          return false;
      }
  }
  
  function validate_password(password)
  {
      if(password < 6)
      {
          return false;
      }
      else
      {
          return true;
      }
  }
  
  function vaoidate_field(field)
  {
      if(field == null)
      {
          return false;
      }
      
      if(field.length <= 0)
      {
          return false;
      }
      else
      {
          return true;
      }
  }