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



