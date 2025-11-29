if (window.location.pathname.includes("home.html")) {
    alert("Welcome to our Online Shopping Store!");
}
else if (window.location.pathname.includes("about.html")) {
    alert("Learn more about us here!");
}
else if (window.location.pathname.includes("services.html")) {
    alert("Enjoy shopping with our amazing services!");
} 
else if (window.location.pathname.includes("signin.html")) {
    alert("Sign in to start your shopping journey!");
} 
else if (window.location.pathname.includes("signup.html")) {
    alert("Create your account and join us today!");
}
document.getElementById('colorpicker').onchange = function(e) {
  document.querySelector('header').style.backgroundColor = e.target.value;
};
document.getElementById("intro").onclick = function() {
    this.style.color="#E53935";
};
function onMousedown() {
document.getElementById("signin").style.background="#E53935";
};
function onMouseup() {
document.getElementById("signin").style.background= "#f9a4a4ff";
};



