window.addEventListener("DOMContentLoaded", ()=> {
  const loader = document.querySelector(".loading-wave")


  //Loader
  setTimeout(() => {
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 500);
}, 2000);

// Get the modal element
var modal = document.getElementById("modal");

// Get the button that opens the modal for signing up
var openModalBtn = document.getElementById("openModalBtn");

// Get the close button element
var closeModalBtn = document.getElementsByClassName("close")[0];

// Get the sign up form and sign in form
var signupForm = document.getElementById("signupForm");
var signinForm = document.getElementById("signinForm");

// Function to open the modal
function openModal() {
  modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// Function to switch to the sign up form
function showSignupForm() {
  signupForm.style.display = "block";
  signinForm.style.display = "none";
}

// Function to switch to the sign in form
function showSigninForm() {
  signupForm.style.display = "none";
  signinForm.style.display = "block";
}

// Event listeners for open and close modal
openModalBtn.addEventListener("click", openModal);
closeModalBtn.addEventListener("click", closeModal);

})