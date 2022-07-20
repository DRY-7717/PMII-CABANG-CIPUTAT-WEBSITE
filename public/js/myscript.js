



const hamburger = document.querySelector('#hamburger');
const nav = document.querySelector('#nav-menu');

window.onscroll = function () {
    const header = document.querySelector('.header');
    const fixnav = header.offsetTop;


    if (window.pageYOffset > fixnav) {
        header.classList.add('navbar-fixed')
    } else {
        header.classList.remove('navbar-fixed')
    }
}




hamburger.addEventListener('click', function () {
    nav.classList.toggle('hidden');
})


const li = document.querySelectorAll('.links');
const sec = document.querySelectorAll('section');

function activemenu() {

    let len = sec.length;
    while (--len && window.scrollY + 85 < sec[len].offsetTop) {}
    li.forEach(ltx => ltx.classList.remove('active'))
    li[len].classList.add('active');
}

activemenu();

window.addEventListener('scroll', activemenu);

function previewImage() {
    const imagePreview = document.querySelector('.img-preview');
    const image = document.querySelector('#customFile');
    const ofReader = new FileReader();

    imagePreview.classList.replace('d-none', 'd-block')

    ofReader.readAsDataURL(image.files[0]);
    ofReader.onload = function (ofREvent) {
        imagePreview.src = ofREvent.target.result;
    }
}

