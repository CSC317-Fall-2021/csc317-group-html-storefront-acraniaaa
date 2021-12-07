window.onload = function(){

var isLoggedIn = 1;

if (isLoggedIn === 1){
    document.getElementById("loginStatus").innerHTML = 'LOG OUT';
}else{
    document.getElementById("loginStatus").innerHTML = "LOG IN";
    }
}