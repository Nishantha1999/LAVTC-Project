/* custom js file made by JeanDoe */
/* Show or Hide navbar when menu button is clicked */


  const menuBtn = document.getElementById('menu-btn');
  const navbar = document.querySelector('.header .navbar');
  const body = document.body;
  const themeBtn = document.getElementById('theme-btn');

if(menuBtn){
	menuBtn.addEventListener('click', ()=>{
		navbar.classList.toggle('active');
	})
}

/* enable and disable dark mode when theme btn is toggle */

if(themeBtn){
	themeBtn.addEventListener('click', () =>{
		body.classList.toggle('dark');
	})
}





/*login page */

// Get form and input fields
const loginForm = document.getElementById('loginForm');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');

// Form submit event
loginForm.addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent default submission

    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();

    // Simple validation
    if(email === "" || password === "") {
        alert("Please fill in both fields!");
        return;
    }

    if(!validateEmail(email)) {
        alert("Please enter a valid email!");
        return;
    }

    // Dummy login success
    alert("Login successful! Welcome, " + email);
});

// Email validation function
function validateEmail(email) {
    const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return re.test(email);
}

// Optional: Handle clicks on forgot/register links
document.getElementById('forgotPassword').addEventListener('click', () => {
    alert("Redirecting to password recovery...");
});

document.getElementById('registerNow').addEventListener('click', () => {
    alert("Redirecting to registration page...");
});











/*Register page*/


document.getElementById("signupForm").addEventListener("submit", function (e) {
    e.preventDefault();
    alert("Signup form submitted successfully!");
});



/*home page image gallary*/



/*location find*/

const slides = document.querySelectorAll(".slide");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

let currentIndex = 0;
let interval;

/* Show Slide */
function showSlide(index) {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[index].classList.add("active");
}

/* Next */
function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

/* Previous */
function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
}

/* Auto Play */
function startAutoSlide() {
    interval = setInterval(nextSlide, 4000);
}

function stopAutoSlide() {
    clearInterval(interval);
}

/* Events */
nextBtn.addEventListener("click", () => {
    nextSlide();
    stopAutoSlide();
    startAutoSlide();
});

prevBtn.addEventListener("click", () => {
    prevSlide();
    stopAutoSlide();
    startAutoSlide();
});

/* Pause on hover */
document.querySelector(".slider").addEventListener("mouseenter", stopAutoSlide);
document.querySelector(".slider").addEventListener("mouseleave", startAutoSlide);

/* Init */
startAutoSlide();