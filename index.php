<?php
include "includes/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "includes/head-links.php"; ?>
    <title>AFS Jodhpur</title>
    <!-- <link rel="stylesheet" href="<?= $css ?>facility.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet"
        href="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_plugins/fancybox-3.1.25/jquery.fancybox.min.css">
</head>

<body>
    <?php require "includes/header.php"; ?>

    <main class="main-content">
        <div class="hero-section">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?= $img ?>b1.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="<?= $img ?>b2.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="<?= $img ?>b3.jpg" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="notification-wrapper px-0 overflow-hidden">
                    <div class="notification-bar w-100">
                        <div
                            class="slider notifications bitter d-flex flex-nowrap align-items-center gap-6 text-nowrap bg-white py-3">
                            <div class="w-auto">
                                <span class="h1 fw-bold mb-0 position-relative">Science Activity
                                    Room</span>
                                <span class="h1 fw-bold mb-0 position-relative">Music Room</span>
                                <span class="h1 fw-bold mb-0 position-relative">Physical Education</span>
                                <span class="h1 fw-bold mb-0 position-relative">School Library</span>
                                <span class="h1 fw-bold mb-0 position-relative">Sick Bay</span>
                                <span class="h1 fw-bold mb-0 position-relative">NCC Air Wing</span>
                                <span class="h1 fw-bold mb-0 position-relative">PTM</span>

                            </div>
                            <div class="w-auto">
                                <span class="h1 fw-bold mb-0 position-relative">Science Labs</span>
                                <span class="h1 fw-bold mb-0 position-relative">Smart Class</span>
                                <span class="h1 fw-bold mb-0 position-relative">Co Curriculam
                                    Activity</span>
                                <span class="h1 fw-bold mb-0 position-relative">Art Room</span>
                                <span class="h1 fw-bold mb-0 position-relative">Primary Activity</span>
                                <span class="h1 fw-bold mb-0 position-relative">Sports Activity</span>
                                <span class="h1 fw-bold mb-0 position-relative">Computer Lab</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about-section overflow-hidden">
            <div class="container position-relative">
                <img src="<?= $img ?>helicopter.png" alt="" class="position-absolute d-none d-lg-block"
                    style="inset:50% -590px 0 auto; transform:rotate(-10deg); z-index:-1; opacity:90%">
                <div class="row about-container gy-4 mb-0 mb-md-4">
                    <div class="col-12 col-lg-6 py-5 py-lg-0 px-5">
                        <div class="about-image-wrapper position-relative mb-5 mb-lg-0">
                            <img src="<?= $img ?>aboutAFSJ.jpg" alt="" class="img-fluid about-img">
                            <div class="elements">
                                <img src="<?= $img ?>elements/elm1.png" alt="" class="position-absolute element-1">
                                <img src="<?= $img ?>elements/el2.png" alt="" class="position-absolute element-2">
                                <img src="<?= $img ?>elements/el3.png" alt="" class="position-absolute element-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="p-2">
                            <p class="mb-1 fw-semibold color-red">Welcome to Air Force School Jodhpur</p>
                            <p class="h1 fw-bold mb-3">Learn to Play, Converse<br>
                                with Confidence.</p>
                            <p>Air Force School, Jodhpur is a Senior Secondary School affiliated to CBSE. The
                                Pre-Primary
                                wing of the school is located adjacent to the Sub Guard Room of the Air Force Domestic
                                Area.
                                The Primary, Secondary and Senior Secondary wings are located in the main building of
                                the
                                school which is adjacent to the SNCO’s Mess. The school has a separated Administration
                                block. There is a separate block called Smart Block, where smart board teaching
                                facilities
                                have been installed.</p>
                            <p>The main building of the school has class rooms for higher classes, Senior and Junior
                                computer lab, Library, Physics, Chemistry and Biology labs. The school has a big
                                playground,
                                well maintained gardens and sufficient play equipment.</p>
                            <a href="" class="btn button-secondary my-3">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=" sections-dark activities-section">
            <div class="container">
                <div class="pb-4 pb-lg-5">
                    <div>
                        <p class="mb-1 fw-semibold text-center text-white">Engage, Thrive, Achieve</p>
                        <p class="h1 fw-bold mb-3 text-center">Our Dynamic Approach to Activity</p>
                    </div>
                </div>
                <div class="pbmit-element-static-box-style-1">
                    <div class="row pbmit-element-inner justify-content-between">
                        <article class="pbmit-ele-static-box pbmit-static-box-style-1 p-0 position-relative z-1">
                            <div class="pbmit-post-inner h-100">
                                <div class="pbmit-bg-imgbox h-100 act-2">
                                </div>
                                <div class="pbmit-contentbox h-100 bg-white z-1 w-auto position-relative">
                                    <div class="pbmit-contentbox-inner">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <img src="<?= $img ?>activities/library.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="pbminfotech-static-box-number">01.</div>
                                        <h4 class="pbminfotech-box-title "><a href="#"
                                                class="text-decoration-none"><span class="pbmit-button-wrapper"><span
                                                        class="pbmit-button-text">Library</span></span></a></h4>
                                        <div class="pbminfotech-static-box-desc">The school library is well stocked
                                            with latest books on all subjects and daily
                                            newspaper.</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele-static-box pbmit-static-box-style-1 p-0 position-relative z-1">
                            <div class="pbmit-post-inner h-100">
                                <div class="pbmit-bg-imgbox h-100 act-1">
                                </div>
                                <div class="pbmit-contentbox h-100 bg-white z-1 w-auto position-relative">
                                    <div class="pbmit-contentbox-inner">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <img src="<?= $img ?>activities/ncc_air_wing.png" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="pbminfotech-static-box-number">02.</div>
                                        <h4 class="pbminfotech-box-title"><a href="#" class="text-decoration-none"><span
                                                    class="pbmit-button-wrapper"><span class="pbmit-button-text">NCC
                                                        Air Wing</span></span></a></h4>
                                        <div class="pbminfotech-static-box-desc">Students are trained for shooting,
                                            flying micro light aircrafts, first aid etc.
                                            in various NCC camps.</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele-static-box pbmit-static-box-style-1 p-0 position-relative z-1">
                            <div class="pbmit-post-inner h-100">
                                <div class="pbmit-bg-imgbox act-3">
                                </div>
                                <div class="pbmit-contentbox h-100 bg-white z-1 w-auto position-relative">
                                    <div class="pbmit-contentbox-inner">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <img src="<?= $img ?>activities/science.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="pbminfotech-static-box-number">03.</div>
                                        <h4 class="pbminfotech-box-title"><a href="#" class="text-decoration-none"><span
                                                    class="pbmit-button-wrapper"><span
                                                        class="pbmit-button-text">Science</span></span></a>
                                        </h4>
                                        <div class="pbminfotech-static-box-desc">The science room is available for
                                            student groups engaged in science education and
                                            activities.</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-ele-static-box pbmit-static-box-style-1 p-0 position-relative z-1">
                            <div class="pbmit-post-inner h-100">
                                <div class="pbmit-bg-imgbox h-100 act-4">
                                </div>
                                <div class="pbmit-contentbox h-100 bg-white z-1 w-auto position-relative">
                                    <div class="pbmit-contentbox-inner">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <img src="<?= $img ?>activities/sports.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="pbminfotech-static-box-number">04.</div>
                                        <h4 class="pbminfotech-box-title"><a href="#" class="text-decoration-none"><span
                                                    class="pbmit-button-wrapper"><span
                                                        class="pbmit-button-text">Sports</span></span></a>
                                        </h4>
                                        <div class="pbminfotech-static-box-desc">Various sports competitions are
                                            conducted in the school to increase students
                                            interest in physical fitness.</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="sections updates">
            <div class="container">
                <div class="pb-4">
                    <p class="mb-1 fw-semibold text-center color-red">Stay in the Loop</p>
                    <p class="h1 fw-bold mb-3 text-center">Updates and Upcoming Events</p>
                </div>
                <div class="row gy-4">
                    <div class="col-md-6">
                        
                        <div
                            class="bg-white h-100 border-0 shadow rounded overflow-hidden updates-wrapper position-relative p-3">
                            <ol>
                            <p class="h4 fw-bold mb-3">Updates</p>
                                <li><a href="" class="text-decoration-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, mollitia.</a><span
                                    class="badge bg-danger text-warning">New</span></li>
                                <li><a href="" class="text-decoration-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, mollitia.</a><span
                                    class="badge bg-danger text-warning">New</span></li>
                                <li><a href="" class="text-decoration-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, mollitia.</a><span
                                    class="badge bg-danger text-warning">New</span></li>
                                <li><a href="" class="text-decoration-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, mollitia.</a><span
                                    class="badge bg-danger text-warning">New</span></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                        class="bg-white h-100 border-0 shadow rounded overflow-hidden updates-wrapper position-relative p-3">
                        <p class="h4 fw-bold mb-3">Events</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Event</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>26/01/2024</td>
                                        <td class="flex-grow-1">Republic Day</td>
                                    </tr>
                                    <tr>
                                        <td>25/03/2024</td>
                                        <td class="flex-grow-1">Holi</td>
                                    </tr>
                                    <tr>
                                        <td>15/08/2024</td>
                                        <td class="flex-grow-1">Independence Day</td>
                                    </tr>
                                    <tr>
                                        <td>08/010/2024</td>
                                        <td class="flex-grow-1">Air Force Day</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sections-dark facilities-section">
            <div class="container">
                <div class="pb-3 d-flex flex-wrap justify-content-between">
                    <div>
                        <p class="mb-1 fw-semibold text-white">Why choose us?</p>
                        <!-- <p class="h1 fw-bold mb-3">Why choose us ?</p> -->
                        <p class="h1 fw-bold mb-3">Our Commitment to Excellence</p>
                    </div>
                    <div class="text-center mx-auto mx-sm-0">
                        <button class="btn button-red fs-5  rounded-pill">
                            All facilities
                        </button>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-12 col-sm-6 col-lg-4 order-1">
                        <div class="facilities-inner-wrapper mx-auto p-3 px-md-2">
                            <img src="<?= $img ?>computer.svg" alt="" width="75px"><br>
                            <h4 class="fw-semibold py-3">Computer Lab</h4>
                            <p>The school features two well-equipped computer labs, offering hardware, software, and
                                dedicated broadband Internet for students.</p>
                        </div>
                        <div class="facilities-inner-wrapper mx-auto p-3 px-md-2">
                            <img src="<?= $img ?>art.svg" alt="" width="75px"><br>
                            <h4 class="fw-semibold py-3">Art Room</h4>
                            <p>Regular art classes in every grade train students in creating paintings, sketches, and
                                sculptures, fostering creative expression.</p>
                        </div>
                    </div>
                    <div class="image-slider col-12 col-lg-4 order-3 order-lg-2">
                        <div class="swiper imageSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?= $img ?>/lib.jpg" alt="" class="img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?= $img ?>activities/scienceRoom.jpg" alt="" class="img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?= $img ?>activities/sports2.jpg" alt="" class="img">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 order-2 order-lg-3">
                        <div class="facilities-inner-wrapper mx-auto p-3 px-md-2">
                            <img src="<?= $img ?>smart-class.svg" alt="" width="75px"><br>
                            <h4 class="fw-semibold py-3">Smart Class</h4>
                            <p>The school now offers seven Smart Classes, fostering an interactive learning environment
                                for students across all grades.</p>
                        </div>
                        <div class="facilities-inner-wrapper mx-auto p-3 px-md-2">
                            <img src="<?= $img ?>sick-bay.svg" alt="" width="75px"><br>
                            <h4 class="fw-semibold py-3">Sick Bay</h4>
                            <p>Utilized for school students' minor injuries/sickness, the sickbay, staffed by a trained
                                teacher, offers prompt First Aid services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="sections gallery overflow-hidden">
            <div class="container">
                <div class="pb-4 pb-lg-5">
                    <div class="pb-4">
                        <p class="mb-1 fw-semibold text-center color-red">Gallery</p>
                        <p class="h1 fw-bold mb-3 text-center">Explore the Moments</p>
                    </div>
                </div>
                <section class="ag-photo-gallery-block">
                    <div class="ag-format-container">
                        <div class="ag-photo-gallery_list">
                            <div class="ag-photo-gallery_item ag-photo-gallery_item__wide">
                                <figure class="ag-photo-gallery_figure">
                                    <a href="<?= $img ?>2.jpg" data-fancybox="gallery">
                                        <img src="<?= $img ?>2.jpg" class="ag-photo-gallery_img" alt="" />
                                    </a>
                                </figure>
                            </div>

                            <div class="ag-photo-gallery_item">
                                <figure class="ag-photo-gallery_figure">
                                    <a href="<?= $img ?>1.jpg" data-fancybox="gallery">
                                        <img src="<?= $img ?>1.jpg" class="ag-photo-gallery_img" alt="" />
                                    </a>
                                </figure>
                            </div>

                            <div class="ag-photo-gallery_item ag-photo-gallery_item__narrow">
                                <figure class="ag-photo-gallery_figure">
                                    <a href="<?= $img ?>3.jpg" data-fancybox="gallery">
                                        <img src="<?= $img ?>3.jpg" class="ag-photo-gallery_img" alt="" />
                                    </a>
                                </figure>
                            </div>

                            <div class="ag-photo-gallery_item ag-photo-gallery_item__middle">
                                <figure class="ag-photo-gallery_figure">
                                    <a href="<?= $img ?>tejas.jpg" data-fancybox="gallery">
                                        <img src="<?= $img ?>tejas.jpg" class="ag-photo-gallery_img" alt="" />
                                    </a>
                                </figure>
                            </div>

                            <div class="ag-photo-gallery_item ag-photo-gallery_item__narrow">
                                <figure class="ag-photo-gallery_figure">
                                    <a href="<?= $img ?>activities/lib.jpg" data-fancybox="gallery">
                                        <img src="<?= $img ?>activities/lib.jpg" class="ag-photo-gallery_img" alt="" />
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <section class="sections-dark testimonials overflow-hidden">
            <div class="container">
                <div class="pb-3">
                    <p class="mb-1 fw-semibold text-center text-white">Testimonials</p>
                    <p class="h1 fw-bold mb-3 text-center">What Our Students' Parents Say ?</p>
                </div>
                <div class="c-testimonials">
                    <div class="c-testimonials__items swiper-wrapper">

                        <div class="c-testimonials__item c-card-testimonial swiper-slide">
                            <div class="c-card-testimonial__profile overflow-hidden">
                                <img src="<?= $img ?>aboutAFSJ.jpg" alt="" class="c-card-testimonial__image">
                            </div>

                            <div class="c-card-testimonial__description ">
                                <div class="d-flex gap-2">
                                    <div>
                                        <img src="<?= $img ?>avatar.png" alt="" class="img-fluid rounded" width="40px"
                                            height="40px">
                                    </div>
                                    <div class="c-card-testimonial__author">
                                        Mukan Singh
                                    </div>
                                </div>

                                <div class="c-card-testimonial__excerpt">
                                    "Enrolling my child in Air Force School Jodhpur has been a transformative
                                    experience. The school's commitment to academic excellence, coupled with its
                                    focus
                                    on discipline and leadership development, has truly shaped my child into a
                                    confident
                                    and responsible individual. I am grateful for the nurturing environment provided
                                    by
                                    the dedicated faculty and staff at Air Force School Jodhpur.
                                </div>
                            </div>
                        </div>

                        <div class="c-testimonials__item c-card-testimonial swiper-slide">
                            <div class="c-card-testimonial__profile">
                                <img src="<?= $img ?>aboutAFSJ.jpg" alt="" class="c-card-testimonial__image ">
                            </div>

                            <div class="c-card-testimonial__description">
                                <div class="d-flex gap-2">
                                    <div>
                                        <img src="<?= $img ?>avatar.png" alt="" class="img-fluid rounded" width="40px"
                                            height="40px">
                                    </div>
                                    <div class="c-card-testimonial__author">
                                        Mukesh
                                    </div>
                                </div>

                                <div class="c-card-testimonial__excerpt">
                                    Air Force School Jodhpur has exceeded my expectations in providing a holistic
                                    education for my daughter. The emphasis on character building, combined with a
                                    rigorous academic curriculum, has not only enhanced her academic performance but has
                                    also instilled a sense of patriotism and discipline. The school's commitment to the
                                    overall development of its students is commendable.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="c-testimonials__pagination"></div>
                </div>
            </div>
        </section>
    </main>

    <?php require "includes/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script
        src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_plugins/fancybox-3.1.25/jquery.fancybox.min.js">
        </script>
    <script>
        // generate events
        var eventDates = {};

        let day3 = formatDate(new Date(new Date().setDate(new Date().getDate() + 2)));
        eventDates[day3] = ["Annual Training Camp-II has been conducted in the campus"];
        let day2 = formatDate(new Date(new Date().setDate(new Date().getDate() + 10)));
        eventDates[day2] = ["End of Annual Training Camp-II"];
        let eventDate1 = "2024-01-13";
        let day1 = formatDate(new Date(eventDate1));
        eventDates[day1] = ["Testing Example"];

        // set maxDates
        var maxDate = {
            1: new Date(new Date().setMonth(new Date().getMonth() + 11))
        };

        var flatpickr = $("#calendar .placeholder").flatpickr({
            inline: true,
            minDate: "today",
            maxDate: maxDate[3],
            showMonths: 1,
            enable: Object.keys(eventDates),
            disableMobile: "true",
            onChange: function (date, str, inst) {
                var contents = "";
                if (date.length) {
                    for (i = 0; i < eventDates[str].length; i++) {
                        contents +=
                            '<div class="event"><div class="date">' +
                            flatpickr.formatDate(date[0], "l J F") +
                            '</div><div class="location">' +
                            eventDates[str][i] +
                            "</div></div>";
                    }
                }
                $("#calendar .calendar-events").html(contents);
            },
            locale: {
                weekdays: {
                    shorthand: ["S", "M", "T", "W", "T", "F", "S"],
                    longhand: [
                        "Sunday",
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ]
                }
            }
        });

        function formatDate(date) {
            let d = date.getDate();
            let m = date.getMonth() + 1; //Month from 0 to 11
            let y = date.getFullYear();
            return "" + y + "-" + (m <= 9 ? "0" + m : m) + "-" + (d <= 9 ? "0" + d : d);
        }
    </script>
    <script>
        var swiper = new Swiper(".imageSwiper", {
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            }
        });
        var swiper = new Swiper('.c-testimonials', {
            effect: 'fade',
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            // autoHeight: true,
            pagination: {
                el: '.c-testimonials__pagination',
                clickable: true
            }
        });
        $(function () {
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 0,
                speed: 20000,
                arrows: false,
                swipe: false,
                slidesToShow: 1,
                cssEase: 'linear',
                pauseOnFocus: false,
                pauseOnHover: false,
            });
        });
    </script>
</body>

</html>