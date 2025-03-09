const signupbutton = document.getElementById('signUpButton');
const loginbutton = document.getElementById('signInButton');
const loginform = document.getElementById('login');
const signupform = document.getElementById('signup');


signupbutton.addEventListener("click", function () {
   loginform.style.display = "none";
   signupform.style.display = "block";
})
loginbutton.addEventListener("click", function () {
   loginform.style.display = "block";
   signupform.style.display = "none";
})