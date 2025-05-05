Cookies.set("username", "true", {expires: 20 });


var usersCookies = Cookie.get("username");

var theTitle = dodcument.querySlector('h1');

if(usersCookies)
{
    title.classList.add('cookie')
}

if(usersCookies == "false")
{
    title.classList.remove('cookie')
}