// main slide
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 3000, // time between slides in milliseconds
    disableOnInteraction: false, // keeps autoplay running after interaction
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  on: {
    slideChangeTransitionEnd: function () {
      // Restart autoplay after a slide change
      if (!swiper.autoplay.running) {
        swiper.autoplay.start();
      }
    },
  },
});



// Toggle password visibility for login form
function togglePasswordVisibility() {
  const passwordField = document.getElementById('password');
  passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
}


// Toggle password visibility for register form
function toggleRegisterPasswordVisibility() {
  const passwordField = document.getElementById('reg-password');
  passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
}


// Toggle between Login and Register forms
function toggleForms() {
  $('#login-form').toggle();
  $('#register-form').toggle();
}

// javascript add active to pagebtn of new-arrival (index.html)
const pagebtn = document.querySelectorAll(".page-menu li");
for (let i = 0; i < pagebtn.length; i++) {
  pagebtn[i].addEventListener("click", function () {
    const current = document.querySelector(".active");
    current.className = current.className.replace("active", "");
    pagebtn[i].className = "active";

    //menu name
    let menu_name = pagebtn[i].textContent.toLocaleLowerCase();
    let allpage = document.querySelectorAll(".page");
    // console.log(menu_name);
    //change page
    for (let i = 0; i < allpage.length; i++) {
      let pagename = allpage[i].getAttribute('page');
      if (menu_name === pagename) {
        let pageActive = document.querySelector(".page.active");
        pageActive.classList.remove("active");
        allpage[i].classList.add("active");
      }
    }


  })
}

// Function to toggle the visibility of the search box and overlay
function toggleSearchBox() {
  const searchBox = document.getElementById('searchBox');
  const overlay = document.getElementById('overlay');

  // Toggle visibility
  searchBox.classList.toggle('hidden');
  overlay.classList.toggle('hidden');
}

// Function to close the search box and overlay
function closeSearchBox() {
  const searchBox = document.getElementById('searchBox');
  const overlay = document.getElementById('overlay');

  searchBox.classList.add('hidden');
  overlay.classList.add('hidden');
}

// navbar dropdown action
$(document).ready(function () {
  $('#btnMenu').click(function () {
    $('#menu').slideToggle();
    $('#btnMenu').hide();
    $('#btnclose').show();
  })
  $('#btnclose').click(function () {
    $('#menu').slideToggle();
    $('#btnMenu').show();
    $('#btnclose').hide();
  })
  $('#btnSubMenu1').click(function () {
    $('#sub-menu1').slideToggle().css({
      "display": "grid"
    });
  })
  $('#btnSubMenu2').click(function () {
    $('#sub-menu2').slideToggle().css({
      "display": "grid"
    });
  })
  $('#btnSubMenu3').click(function () {
    $('#sub-menu3').slideToggle().css({
      "display": "grid"
    });
  })
  $('#btnSubMenu4').click(function () {
    $('#sub-menu4').slideToggle().css({
      "display": "grid"
    });
  })
  $('#btnSubMenu5').click(function () {
    $('#sub-menu5').slideToggle().css({
      "display": "grid"
    });
  })
  $('#btnSubMenu6').click(function () {
    $('#sub-menu6').slideToggle().css({
      "display": "grid"
    });
  })

})

// pro-detail-img slider
var swiper = new Swiper(".slide-content", {
  slidesPerView: 4,
  spaceBetween: 10,
  loop: true,
  centerSlide: 'true',
  fade: 'true',
  grabCursor: 'true',
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },


});

// pro-detail-slider img changing
let listimg = document.querySelectorAll('.more-img .child-img');
let mainimg = document.querySelector('.main-img img');

listimg.forEach(img => {
  img.onclick = () => {
    listimg.forEach(img => img.classList.remove('active-box-img'));
    img.classList.add('active-box-img');
    if (img.classList.contains('active-box-img')) {
      let src = img.children[0].getAttribute('src');
      mainimg.src = src;

    }
  };
});

// pro-detail-img slider zoomer
$(function () {
  console.log("hello");
  $("#zoom").imagezoomsl({
    zoomrage: [4, 4],
  });
});

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


  