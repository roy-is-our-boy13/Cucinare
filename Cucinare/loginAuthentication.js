function validateUser()
{
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    
    if( email == "admin" && password == "user")
    {
        alert("login succesfully");
        return false;
    }
    else
    {
        alert("Login Failed");
    }
}