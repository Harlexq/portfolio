$(document).ready(function () {
    $(".nav-item, .hireme, .icon-scroll").on('click', function (event) {
        $(".nav-item, .hireme, .icon-scroll").not(this).removeClass("active");
        $(this).addClass("active");

        if (this.hash !== "") {
            event.preventDefault();
            let hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;

                if ($(hash).attr("id") === "contact") {
                    $(".nav-item").removeClass("active");
                    $(".nav-item[href='#contact']").addClass("active");
                }

                if ($(hash).attr("id") === "about") {
                    $(".nav-item").removeClass("active");
                    $(".nav-item[href='#about']").addClass("active");
                }
            });
        }
    });
});

window.onload = function () {
    if (window.location.hash) {
        history.replaceState(null, null, window.location.pathname);
    }

    var preloader = document.getElementById("preloader");
    setTimeout(function () {
        preloader.style.display = "none";
    }, 2000);
}

const scrollToTopBtn = document.getElementById("scrollToTopBtn");
const rootElement = document.documentElement;

function handleScroll() {
    const scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
    if ((rootElement.scrollTop / scrollTotal) > 0.2) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

function scrollToTop() {
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

scrollToTopBtn.addEventListener("click", scrollToTop);
document.addEventListener("scroll", handleScroll);

