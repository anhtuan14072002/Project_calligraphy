window.addEventListener("scroll", function() {
    var headerSecond = document.querySelector('.header_second');
    if (window.scrollY > 0) {
        headerSecond.classList.add('header_second_fixed');
    } else {
        headerSecond.classList.remove('header_second_fixed');
    }
});
