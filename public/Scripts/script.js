const side = document.querySelector('.side-bar'); 
const menuBtn = document.getElementById('open'); 
const closeBtn = document.getElementById('close'); 
const btnSlide = document.getElementById('btnslide');
const btnLogin1 = document.getElementById('btnlogin1');
const btnLogin2 = document.getElementById('btnlogin2');
const LoginBtnAcc = document.getElementById('loginaccount');
const CreatBtnAcc = document.getElementById('creataccount');
const signUpForm = document.getElementById('signupform');
const loginForm = document.querySelector('.loginform');
const DisplayProf = document.querySelector('.userstab');
const DispalyEmail = document.querySelector('.conatcttab');
const Display2 = document.querySelector('.display2');
const Display3 = document.querySelector('.display3');
const DachBtn = document.getElementById('dash');
const EmailBtn = document.getElementById('email');
const ProfileBtn = document.getElementById('profile');
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
        window.location.href = "/pageaccount";
    });
}

if(btnLogin2)
{
    btnLogin2.addEventListener('click', ()=>{
        window.location.href = "/pageaccount";
    });
}


if (LoginBtnAcc) {
    LoginBtnAcc.addEventListener('click', () => {
        loginForm.classList.add('hidden');
        signUpForm.classList.remove('hidden');
    });
}

if (CreatBtnAcc) {
    CreatBtnAcc.addEventListener('click', () => {
        signUpForm.classList.add('hidden');
        loginForm.classList.remove('hidden');
    });
}

if(DachBtn && DisplayProf)
{
    DachBtn.addEventListener('click', ()=>{
        DisplayProf.classList.remove('hidden');
        DisplayProf.classList.add('block');
        DispalyEmail.classList.remove('block');
        DispalyEmail.classList.add('hidden');
        Display3.classList.add("hidden");
    });
}

if(EmailBtn && DispalyEmail)
{
    EmailBtn.addEventListener('click', ()=>{
        DispalyEmail.classList.remove('hidden');
        DispalyEmail.classList.add('block');
        DisplayProf.classList.remove('block');
        DisplayProf.classList.add('hidden');
        Display3.classList.add("hidden");
    });
}

if(ProfileBtn)
{
    ProfileBtn.addEventListener('click', ()=>{
        Display3.classList.remove("hidden");
        DisplayProf.classList.add("hidden");
        DispalyEmail.classList.add("hidden");

    });
}


