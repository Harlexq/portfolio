$(document).ready(function () {
    $(".nav-item, .hireme, .mobile-navbar-item, .icon-scroll").on('click', function (event) {
        $(".nav-item, .hireme, .mobile-navbar-item, .icon-scroll").not(this).removeClass("active");
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

$(window).on('scroll', function () {
    let scrollPos = $(window).scrollTop();

    $('.nav-item').each(function () {
        let currLink = $(this);
        let refElement = $(currLink.attr('href'));

        if (refElement.position().top <= scrollPos + 50 && refElement.position().top + refElement.height() > scrollPos) {
            $('.nav-item').removeClass('active');
            currLink.addClass('active');
        } else {
            currLink.removeClass('active');
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

function NavbarToggle() {
    const nav = document.querySelector(".mobile-navbar-content");

    if (nav.style.display === "none" || nav.style.display === "") {
        nav.style.display = "flex";
    } else {
        nav.style.display = "none";
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');

    nameInput.addEventListener('input', validateName);
    emailInput.addEventListener('input', validateEmail);
    messageInput.addEventListener('input', validateMessage);

    function validateName() {
        const nameValue = nameInput.value.trim();
        const nameError = document.getElementById('ErrName');
        const NumericPattern = /^([^0-9]*)$/;

        if (nameValue === '') {
            nameError.textContent = 'Name Field Cannot Be Empty';
            nameInput.classList.add('invalid');
        } else if (nameValue.length < 3) {
            nameError.textContent = 'Your Name Cannot Be Less Than 3 Characters';
            nameInput.classList.add('invalid');
        } else if (nameValue.length > 30) {
            nameError.textContent = 'Your Name Cannot Be More Than 30 Characters';
            nameInput.classList.add('invalid');
        } else if (!NumericPattern.test(myName.value)) {
            nameError.textContent = 'You Cannot Use Numbers in Your Name';
            nameInput.classList.add('invalid');
        } else {
            nameError.textContent = '';
            nameInput.classList.remove('invalid');
        }
    }

    function validateEmail() {
        const emailValue = emailInput.value.trim();
        const emailError = document.getElementById('ErrEmail');
        const emailPattern = /^([a-zA-Z0-9_\-?\.?]){3,}@([a-zA-Z]){3,}\.([a-zA-Z]){2,5}$/;
        const spacePattern = /^\S*$/;

        if (emailValue === '') {
            emailError.textContent = 'E-Mail Field cannot be left blank';
            emailInput.classList.add('invalid');
        } else if (!emailPattern.test(emailValue)) {
            emailError.textContent = 'Write Your E-Mail Address in Correct Format';
            emailInput.classList.add('invalid');
        } else if (emailValue.length > 30) {
            emailError.textContent = 'E-Mail Cannot Be More Than 30 Characters';
            emailInput.classList.add('invalid');
        } else if (!spacePattern.test(myEmail.value)) {
            emailError.textContent = 'You Cannot Leave a Space in The E-Mail Address';
            emailInput.classList.add('invalid');
        } else {
            emailError.textContent = '';
            emailInput.classList.remove('invalid');
        }
    }

    function validateMessage() {
        const messageValue = messageInput.value.trim();
        const messageError = document.getElementById('ErrMessage');

        if (messageValue === '') {
            messageError.textContent = 'Message Field Cannot Be Empty';
            messageError.style.color = 'red';
            messageInput.classList.add('invalid');
        } else if (messageValue.length < 50) {
            messageError.textContent = 'Your Message Cannot Be Less Than 50 Characters';
            messageError.style.color = 'red';
            messageInput.classList.add('invalid');
        } else {
            messageError.textContent = '';
            messageError.style.color = '';
            messageInput.classList.remove('invalid');
        }
    }
});