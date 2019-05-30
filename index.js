
var mainNav = document.querySelector('.main-nav');
var openIcon = document.querySelector('.bar-icons');
var closeIcon = document.querySelector('.fa-times');
var openMenu = document.querySelector('.open');


openIcon.addEventListener('click',(e)=>{
    openMenu.style.display = 'block';
})

closeIcon.addEventListener('click',(e)=>{
    openMenu.style.display = 'none';
})
