<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lookwoood Hotel-HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="common.css?v=<?php echo time(); ?>">

</head>

<body>
    <div class="background"></div>
    <?php require('inc/header.php') ?>
    <!-- slider section stsrted -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/caruosel/1.png" />
                    <div class="swiper-content">
                        <h2>Slide 1 Title</h2>
                        <p>Slide 1 content goes here</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/caruosel/2.png" />
                    <div class="swiper-content">
                        <h2>Slide 2 Title</h2>
                        <p>Slide 2 content goes here</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/caruosel/1.png" />
                    <div class="swiper-content">
                        <h2>Slide 3 Title</h2>
                        <p>Slide 3 content goes here</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/caruosel/1.png" />
                    <div class="swiper-content">
                        <h2>Slide 4 Title</h2>
                        <p>Slide 4 content goes here</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/caruosel/1.png" />
                    <div class="swiper-content">
                        <h2>Slide 5 Title</h2>
                        <p>Slide 5 content goes here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider section ended -->


    <!-- Booking form -->
    <div class="container availibility-form animate-on-scroll">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded ">
                <h5 class="h-font mb-4">Check Booking Availibility </h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check-in</label>
                            <input type="date" class="form-control shadow-none" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check-out</label>
                            <input type="date" class="form-control shadow-none" />
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight:500;">Adult</label>
                            <select class="form-select shadow-none">

                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight:500;">Children</label>
                            <select class="form-select shadow-none">

                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-lg-3 mt-2">
                            <button type="submit" class="btn shadow-none  custom-bg">book now</button>
                        </div>
                    </div>

            </div>
            </form>

        </div>
    </div>
    </div>

    <!-- Our Rooms -->
    <h5 class="heading h-font mt-5 text-center fw-bold">OUR ROOMS</h5>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3" data-aos="fade-right" data-aos-duration="500" data-aos-delay="100">
                <div class="card shadow animate">
                    <img src="img/caruosel/7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">₨ 1200 per hour</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1 h-font">Features</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                Presidential Suite
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Finest Linen & Towels
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Superchargeed air-conditioning
                            </span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1 h-font">Facilities</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                Presidential Suite
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Finest Linen & Towels
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Superchargeed air-conditioning
                            </span>

                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1 h-font">Guests</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                4 children
                            </span>


                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1 h-font">Ratings</h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm custom-bg shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <div class="card shadow ">
                    <img src="img/caruosel/7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">₨ 1200 per hour</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1 h-font">Features</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                Presidential Suite
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Finest Linen & Towels
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Superchargeed air-conditioning
                            </span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1 h-font">Facilities</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                Presidential Suite
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Finest Linen & Towels
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Superchargeed air-conditioning
                            </span>

                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1 h-font">Guests</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                4 children
                            </span>


                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1 h-font">Ratings</h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm custom-bg shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3 " data-aos="fade-left" data-aos-duration="500" data-aos-delay="100">
                <div class="card shadow  ">
                    <img src="img/caruosel/7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room</h5>
                        <h6 class="mb-4">₨ 1200 per hour</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1 h-font">Features</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                Presidential Suite
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Finest Linen & Towels
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Superchargeed air-conditioning
                            </span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1 h-font">Facilities</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                Presidential Suite
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Finest Linen & Towels
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                Superchargeed air-conditioning
                            </span>

                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1 h-font">Guests</h6>
                            <span class="badge bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge bg-light text-dark text-wrap">
                                4 children
                            </span>


                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1 h-font">Ratings</h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm custom-bg shadow-none">More Details</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12 button ">
                <a href="#" class="btn custom-btn shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>


    <!--Our FAcilities-->
    <h5 class="heading h-font mt-5 text-center fw-bold">OUR FACILITIES</h5>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <img src="" width="80px" />
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="" width="80px" />
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-2" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
                <img src="" width="80px" />
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                <img src="" width="80px" />
                <h5 class="mt-3">WiFi</h5>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn custom-btn shadow-none">More Facilities >>></a>

            </div>
        </div>
    </div>


    <!-- Testimonials -->
    <h5 class="heading h-font mt-5 text-center fw-bold">TESTIMONIALS</h5>
    <div class="container mt-5">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam,

                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam,

                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam,

                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam,

                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam,

                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam,

                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>

                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <!--Reach us  -->
    <h5 class="heading h-font mt-5 text-center fw-bold raech-us">REACH US</h5>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white h-100" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d216173.82435165008!2d74.02452771622181!3d32.15796173478856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f2983d520eb29%3A0x6fb33af85e7a368!2sGujranwala%2C%20Punjab!5e0!3m2!1sen!2s!4v1677573469735!5m2!1sen!2s" height="400" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>CALL US</h5>
                    <a href="tel: +92336-7988387" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill "></i>+92336-7988387</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light fs-6 text-dark p-2">
                            <i class="bi bi-twitter me-1"></i>Twitter
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light fs-6 text-dark p-2">
                            <i class="bi bi-facebook me-1"></i>Facebook
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light fs-6 text-dark p-2">
                            <i class="bi bi-instagram me-1"></i>Instagram
                        </span>
                    </a><br>
                </div>

            </div>
        </div>
    </div>


    <?php require('inc/footer.php') ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // banner swiper
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

        });



        // testimonial swiper
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,


                },
                768: {
                    slidesPerView: 2,

                },
                1024: {
                    slidesPerView: 3,

                },
                1200: {
                    slidesPerView: 3,
                },
            },
        });

        // select the form container element
        const formContainer = document.querySelector('.availibility-form');

        // function to check if an element is in viewport
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // function to add animation class to form container if it's in viewport
        function animateForm() {
            if (isElementInViewport(formContainer)) {
                formContainer.classList.add('show');
                // remove the scroll event listener once animation is applied
                window.removeEventListener('scroll', animateForm);
            }
        }

        // add scroll event listener to trigger animation
        window.addEventListener('scroll', animateForm);



        // script for cards animation
        AOS.init();
    </script>
</body>

</html>