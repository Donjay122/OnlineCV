
var mainNav = document.querySelector('.main-nav');
var openIcon = document.querySelector('.bar-icons');
var closeIcon = document.querySelector('.fa-times');
var openMenu = document.querySelector('.open');
var container = document.querySelector('.container');


openIcon.addEventListener('click',(e)=>{
    openMenu.style.display = 'block';
    //container.style.maxHeight = '50vh';
})

closeIcon.addEventListener('click',(e)=>{
    openMenu.style.display = 'none';
})
