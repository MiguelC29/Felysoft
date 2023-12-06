var toggle = document.getElementById("toggle");
var container = document.getElementById("container");

// let prefers = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
// let html = document.querySelector('html');
 
// html.classList.add(prefers);
// html.setAttribute('data-bs-theme', prefers);


toggle.onclick = function(){
	container.classList.toggle('active');
}