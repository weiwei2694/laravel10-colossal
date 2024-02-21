const sponsorsCard = document.getElementById("sponsors-card");
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

const testimonialsCard = document.getElementById("testimonials-card");
let testimonialsSplide = new Splide(testimonialsCard, {
    arrows: false,
    perPage: 2,
    padding: "4.5rem",
    rewind: true,
    focus: "center",
    omitEnd: true,
});

testimonialsSplide.mount();
