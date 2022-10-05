$(document).ready(function () {
    $('.happy__client').slick({
        dots: false,
        center: true,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        item: 1,
        adaptiveHeight: true,
        margin: 0,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    marginright: 16
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false
                }
            }
        ]
    });
    $('.slider__mockup__design').slick({
        dots: false,
        center: true,
        arrows: false,
        infinite: true,
        centerMode: true,
        slidesToScroll: 1,
        slidesToShow: 2.5,
        items: 3
    });
    $('.slider__ks').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1.5,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        vertical: false,
        margin: 16,
        loop: true,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    margin: 10,
                    anfinite: true
                }
            },
            {
                breakpoint: 415,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    infinite: true,
                    margin: 10,
                    anfinite: true
                }
            }
        ]
    });
    $('.answer__to__ks').click(function () {
        $('#exampleFormControlInput8').click();
    }); const accordianItemHeaders = document.querySelectorAll(
        ".accordian__item__header"
    );

    accordianItemHeaders.forEach(accordianItemHeader => {
        accordianItemHeader.addEventListener("click", () => {
            const current = document.querySelector(".accordian__item__header.active");

            if (current && current !== accordianItemHeader) {
                current.classList.toggle("active");
                current.nextElementSibling.style.maxHeight = 0;
            }
            accordianItemHeader.classList.toggle("active");

            const accordianItemBody = accordianItemHeader.nextElementSibling;

            if (accordianItemHeader.classList.contains("active")) {
                accordianItemBody.style.maxHeight = accordianItemBody.scrollHeight + "px";
            } else {
                accordianItemBody.style.maxHeight = 0;
            }
        });
    });
    $('.attech').click(function () {
        $("input[type='file']").trigger('click');
    })

    $("input[type='file']").change(function () {
        $('.attech__button').text(this.value.replace(/C:\\fakepath\\/i, ''))
    })
});
function myFunction(x) {
    x.classList.toggle("change");
}
const content = document.querySelectorAll('.design');
const tab = document.querySelectorAll('.link');
const slider = document.querySelector('.countries_slider');

function hideTabContent() {
    content.forEach(item => {
        item.style.display = 'none';
    });
    tab.forEach(item => {
        item.classList.remove('active');
    });
}

function showTabContent(i = 0) {
    content[i].style.display = 'grid';
    tab[i].classList.add('active');
}


hideTabContent();
showTabContent();

slider.addEventListener("click", (e) => {
    const target = e.target
    if (target) {
        tab.forEach((item, i) => {
            if (target == item) {
                hideTabContent();
                showTabContent(i);
            }
        })
    }
})