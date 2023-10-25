
const toggleClick = document.querySelector(".toggleBox")
const navBar = document.querySelector(".nav-links")

toggleClick.addEventListener('click', function() {
    toggleClick.classList.toggle('active')
    navBar.classList.toggle('active')
})

//  Video section 1 //

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    // loop: true,
    centerSlide: true,
    fade: true,
    pagination: {
      clickable: true,
    },
    navigation: {
      nextEl: ".next-button",
      prevEl: ".prev-button",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      950: {
        slidesPerView: 3,
      },
    },
  });
  