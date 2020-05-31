const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password1 = document.getElementById('password');
const password2 = document.getElementById('confirm_password');

form.addEventListener('submit', (e) => {
   e.preventDefault();

   // call the function
   checkInputs();
});

function makeInput() {

   // get input value
   const usernameValue = username.value.trim();
   const emailValue = email.value.trim();
   const password1Value = password1.value.trim();
   const password2Value = password2.value.trim();

};
