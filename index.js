
var mainNav = document.querySelector('.main-nav');
var openIcon = document.querySelector('.bar-icons');
var closeIcon = document.querySelector('.fa-times');
var openMenu = document.querySelector('.open');
var container = document.querySelector('.container');


openIcon.addEventListener('click',(e)=>{
    openMenu.style.display = 'block';
    openMenu.style.animation = '1s fadeInDown';
    //container.style.maxHeight = '50vh';
})

closeIcon.addEventListener('click',(e)=>{
    openMenu.style.animation = '.5s fadeOutUp';
    setTimeout(()=>{
       openMenu.style.display = 'none';       
    },500);

})
