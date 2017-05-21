// Initialize highlighting
hljs.initHighlightingOnLoad();

// Toggle mobile navigation
var trigger = document.querySelector('#toggle');
var nav = document.querySelector('.documentation_nav');

trigger.addEventListener('click', function() {
  nav.classList.toggle('active');
  // console.log('add class to nav');
});
