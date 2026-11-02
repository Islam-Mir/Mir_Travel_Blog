
/* =========================================
   WANDERMORE - DYNAMIC HERO CAROUSEL
========================================= */

const heroPhotos = [

    {
        image: "images/hero-carousel/bali.jpg",
        thumbnail: "images/hero-carousel/bali.jpg",
        alt: "Bali",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Tim Marshall"
    },

    {
        image: "images/hero-carousel/nara.jpg",
        thumbnail: "images/hero-carousel/nara.jpg",
        alt: "Nara",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Christian Joudrey"
    },

    {
        image: "images/hero-carousel/klc.jpg",
        thumbnail: "images/hero-carousel/klc.jpg",
        alt: "Travel destination 3",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Steve Carter"
    },

    {
        image: "images/hero-carousel/muraglia.jpg",
        thumbnail: "images/hero-carousel/muraglia.jpg",
        alt: "Travel destination 4",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Aleksandra Boguslawska"
    },

    {
        image: "images/hero-carousel/tianmen.jpg",
        thumbnail: "images/hero-carousel/tianmen.jpg",
        alt: "Travel destination 5",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Rosan Harmens"
    },

    {
        image: "images/hero-carousel/st.julians.jpg",
        thumbnail: "images/hero-carousel/st.julians.jpg",
        alt: "Travel destination 5",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Rosan Harmens"
    },

    {
        image: "images/hero-carousel/burj.jpg",
        thumbnail: "images/hero-carousel/burj.jpg",
        alt: "Travel destination 5",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Rosan Harmens"
    },

    {
        image: "images/hero-carousel/alberobello.jpg",
        thumbnail: "images/hero-carousel/alberobello.jpg",
        alt: "Travel destination 5",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Rosan Harmens"
    },

    {
        image: "images/hero-carousel/ella.jpg",
        thumbnail: "images/hero-carousel/ella.jpg",
        alt: "Travel destination 5",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Rosan Harmens"
    },


    {
        image: "images/hero-carousel/bari.jpg",
        thumbnail: "images/hero-carousel/bari.jpg",
        alt: "Travel destination 5",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Rosan Harmens"
    },

    {
        image: "images/hero-carousel/porto.jpg",
        thumbnail: "images/hero-carousel/porto.jpg",
        alt: "Travel destination 5",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Rosan Harmens"
    },

    {
        image: "images/hero-carousel/heroshima.jpg",
        thumbnail: "images/hero-carousel/heroshima.jpg",
        alt: "Travel destination 6",
        caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        credit: "Annie Spratt"
    }

];


/* =========================================
   ELEMENTI HTML
========================================= */

const slidesContainer = document.getElementById("heroSlides");
const thumbnailsContainer = document.getElementById("heroThumbnails");

let currentSlide = 0;


/* =========================================
   GENERAZIONE SLIDE
========================================= */

heroPhotos.forEach((photo, index) => {

    const slide = document.createElement("div");

    slide.className = "hero-carousel-slide";

    const figure = document.createElement("figure");

    const imageBox = document.createElement("div");

    imageBox.className = "hero-image";

    // STESSA FOTO COME SFONDO

    imageBox.style.setProperty(
        "--hero-bg",
        `url("${photo.image}")`
    );

    // FOTOGRAFIA PRINCIPALE

    const mainImage = document.createElement("img");

    mainImage.dataset.src = photo.image;
    mainImage.alt = photo.alt;

    if (index === 0) {
        mainImage.src = photo.image;
        mainImage.fetchPriority = "high";
    } else {
        mainImage.loading = "lazy";
    }

    imageBox.appendChild(mainImage);

    // DIDASCALIA

    const caption = document.createElement("figcaption");

    caption.textContent = photo.caption;

    const credit = document.createElement("span");

    credit.className = "hero-credit";
    credit.textContent = "Photo: " + photo.credit;

    caption.appendChild(credit);

    // COMPOSIZIONE

    figure.appendChild(imageBox);
    figure.appendChild(caption);

    slide.appendChild(figure);

    slidesContainer.appendChild(slide);


    // MINIATURE

    const thumbnail = document.createElement("li");

    const button = document.createElement("button");

    button.type = "button";
    button.setAttribute("aria-label", "Visualizza " + photo.alt);
    button.setAttribute("aria-pressed", "false");

    const thumbnailImage = document.createElement("img");

    thumbnailImage.src = photo.thumbnail;
    thumbnailImage.alt = "";
    thumbnailImage.loading = "lazy";

    button.appendChild(thumbnailImage);

    thumbnail.appendChild(button);

    button.addEventListener("click", () => {
        showHeroSlide(index);
    });

    thumbnailsContainer.appendChild(thumbnail);

});


/* =========================================
   VISUALIZZAZIONE SLIDE
========================================= */

function showHeroSlide(index) {

    if (index < 0 || index >= heroPhotos.length) return;

    currentSlide = index;

    const slides = slidesContainer.querySelectorAll(
        ".hero-carousel-slide"
    );

    const thumbnails = thumbnailsContainer.querySelectorAll("li");

    slides.forEach((slide, i) => {

        slide.classList.toggle("active", i === index);

        if (i === index) {

            const img = slide.querySelector("img");

            if (!img.getAttribute("src")) {
                img.src = img.dataset.src;
            }

        }

    });

    thumbnails.forEach((thumbnail, i) => {

        thumbnail.classList.toggle("active", i === index);

        thumbnail.querySelector("button").setAttribute(
            "aria-pressed",
            i === index ? "true" : "false"
        );

    });

    thumbnails[index].scrollIntoView({
        behavior: "smooth",
        block: "nearest",
        inline: "center"
    });

}


/* =========================================
   NAVIGAZIONE TASTIERA
========================================= */

document.addEventListener("keydown", (event) => {

    if (event.key === "ArrowRight") {
        showHeroSlide(
            Math.min(currentSlide + 1, heroPhotos.length - 1)
        );
    }

    if (event.key === "ArrowLeft") {
        showHeroSlide(
            Math.max(currentSlide - 1, 0)
        );
    }

});


/* =========================================
   AVVIO
========================================= */

if (heroPhotos.length > 0) {
    showHeroSlide(0);
}
