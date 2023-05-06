let navbar = document.querySelector('.header .navbar');
let menuBtn = document.querySelector('#menu-btn');

menuBtn.onclick = () =>{
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menuBtn.classList.remove('fa-times');
    navbar.classList.remove('active');
}

const header = document.querySelector('.header');

window.onscroll = () => {
  if (window.pageYOffset > 0) {
    header.classList.add('small');
  } else {
    header.classList.remove('small');
  }
};

var swiper = new Swiper(".home-slider", {
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    grabCursor: true,
    loop:true,
});

var swiper = new Swiper(".team-slider", {
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    grabCursor: true,
    loop:true,
    spaceBetween: 20,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },

        768: {
            slidesPerView: 2,
        },

        991: {
            slidesPerView: 3,
        },
    },
});


