// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$('.slidert').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    arrows: false,
    centerMode: true,
    centerPadding: "320px",
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
        {
            breakpoint: 1600,
            settings: {
                centerPadding: "100px",
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                centerPadding: "20px"
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerPadding: "60px",
            }
        }]
});

if ($(document).width() <= 540) {
    $("#license_slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
    });
}

function setTime() {
    const now = new Date();

    let minutes = now.getMinutes();
    let seconds = now.getSeconds();

    let period = 'am';
    if (now.getHours() >= 12) {
        period = 'pm';
    }
    if (now.getHours() > 12) {
        hours = now.getHours() - 12;
    } else {
        hours = now.getHours();
    }

    $('.time').text(hours + ':' + padZeroes(minutes) + ':' + padZeroes(seconds) + ' ' + period);

    function padZeroes(num) {
        return ('0' + num).slice(-2);
    }
}

setInterval(setTime, 1000);


$('.serviceSelector').on('change', function () {
    const serviceRadio = $('input[name="serviceSelector"]:checked').val()

    switch (serviceRadio) {
        case 'drains':
            $('#service_title').html('Issues with your drains?');
            $('#service_image img').attr('src', './assets/images/lib/service_drains.jpg');
            break;

        case 'hot_water':
            $('#service_title').html('Issues with your hot water?');
            $('#service_image img').attr('src', './assets/images/lib/service_hotwater.jpg');
            break;

        case 'gas':
            $('#service_title').html('Issues with your gas?');
            $('#service_image img').attr('src', './assets/images/lib/service_gas.jpg');
            break;

        case 'general_plumbing':
            $('#service_title').html('Issues with your plumbing?');
            $('#service_image img').attr('src', './assets/images/lib/service_plumbing.jpg');
            break;

        case 'other':
            $('#service_title').html('We’ll asses your problem within an hour');
            $('#service_image img').attr('src', './assets/images/lib/service_others.jpg');
            break;
    }
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});