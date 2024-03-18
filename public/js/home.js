const sponsorsCard = document.getElementById("sponsors-card");
if (sponsorsCard) {
    let sponsorsSplide = new Splide(sponsorsCard, {
        type: "loop",
        arrows: false,
        perPage: 3,
        autoScroll: {
            speed: 3,
            pauseOnHover: false,
        },
        pagination: false,
        omitEnd: true,
        snap: true,
    });
    sponsorsSplide.mount(window.splide.Extensions);
}

const testimonialsCard = document.getElementById("testimonials-card");
if (testimonialsCard) {
    let testimonialsSplide = new Splide(testimonialsCard, {
        type: "loop",
        arrows: false,
        perPage: 2,
        padding: "4rem",
        rewind: true,
        focus: "center",
        omitEnd: true,
        snap: true,
        breakpoints: {
            768: {
                perPage: 1,
                padding: "0rem",
            },
        },
    });
    testimonialsSplide.mount();
}
