const side = document.querySelector('.side-bar'); 
const menuBtn = document.getElementById('open'); 
const closeBtn = document.getElementById('close'); 
const btnSlide = document.getElementById('btnslide');
const btnLogin1 = document.getElementById('btnlogin1');
const btnLogin2 = document.getElementById('btnlogin2');
const CreatBtnAcc = document.getElementById('createaccount');
const loginForm = document.querySelector('#signupform');
const signUpForm = document.querySelector('#loginform');
if (menuBtn && side) {
    menuBtn.addEventListener('click', () => {
        side.classList.toggle('translate-x-full');
    });
}

if (closeBtn && side) {
    closeBtn.addEventListener('click', () => {
        side.classList.add('translate-x-full');
    });
}

if (btnSlide) {
    btnSlide.addEventListener('click', () => {
        window.location.href = "/service";
    });
}

const navMenu = document.querySelector('.nav');
if (menuBtn && navMenu) {
    menuBtn.addEventListener('click', () => {
        navMenu.classList.toggle('hidden'); 
    });
}

if(btnLogin1)
{
    btnLogin1.addEventListener('click', ()=>{
       alert("clicked");
        window.location.href = "/pageaccount";
    });
}

if(btnLogin2)
{
    btnLogin2.addEventListener('click', ()=>{
        window.location.href = "/pageaccount";
    });
}

if