<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require "includes/head-links.php"; ?>
  <title>Activities</title>
</head>


<body>
  <?php require "includes/header.php"; ?>

  <section class="sections" id="curreculam" class="py-5">
    <div class="container">
      <div class="desc">
        <div class="heading">
          <h1>Activities</h1>
        </div>
        <div class="text">
          <p>WHAT WE OFFER </p>
        </div>
      </div>
      <div class="services d-flex align-items-center justify-content-center ps-lg-5">
        <div class="column" id="column-1">
          <div class="service">
            <div class="service-desc">
              <img src="./includes/assets/img/icons/dance.png" width="55px" alt="">
              <p class="service-txt">
                Dance </p>
            </div>
          </div>
          <div class="service">
            <div class="service-desc">
              <img src="./includes/assets/img/icons/yoga.png" width="55px" alt="">
              <p class="service-txt">
                Yoga </p>
            </div>
          </div>
          <div class="service">
            <div class="service-desc">
              <img src="./includes/assets/img/icons/debate.png" width="55px" alt="">
              <p class="service-txt">
                Debates
              </p>
            </div>
          </div>
        </div>

        <div class="column" id="column-2">
          <div class="service">
            <div class="service-desc">
              <img src="./includes/assets/img/icons/drama.png" width="55px" alt="">
              <p class="service-txt">
                Drama
              </p>
            </div>
          </div>
          <div class="service">
            <div class="service-desc">
              <img src="./includes/assets/img/icons/art1.png" width="55px" alt="">
              <p class="service-txt">
                Art
              </p>
            </div>
          </div>
          <div class="service">
            <div class="service-desc">
              <img src="./includes/assets/img/icons/music1.png" width="55px" alt="">
              <p class="service-txt">
                Music
              </p>
            </div>
          </div>
        </div>

        <div class="column" id="column-2">
          <div class="service">
            <div class="service-desc">
              <img src="./includes/assets/img/icons/story.png" width="55px" alt="">
              <p class="service-txt">
                Story Writing
              </p>
            </div>
          </div>
          <div class="service">
            <div class="service-desc">
              <img src="./includes/assets/img/icons/poetry.png" width="55px" alt="">
              <p class="service-txt">
                Poetry recitation
              </p>
            </div>
          </div>
          <div class="service ">
            <div class="service-desc">
              <img src="./includes/assets/img/icons/book.png" width="55px" alt="">
              <p class="service-txt">
                Book clubs
              </p>
            </div>
          </div>
        </div>


      </div>
      <div class="clear-fix"></div>
    </div>

  </section>



  <section class="sections-dark" class="py-5">
    <div class="container cl-lg-12 my-5 force">
      <p class="h2 fw-bold mb-3" id="main">Latest @AirForce</p>
      <hr>

      <div class="row mb-2">
        <div class="vertical-links col-4">

          <div id="current-news" class="tab h5 fw-light mb-3 "> Current News</div>
          <div id="current-event" class="tab h5 fw-light mb-3">Current Event</div>

        </div>

      </div>


      <!-- <div class="vertical-links col-8 ">
                    <section id="current-news-content" class="section-content">
                        <a href="q.php"> ijsdajijioddjdaso</a>
                    </section>

                    <section id="current-event-content" class="section-content">
                    <a href="q.php"> ijsdajijioddjdaso</a>
                    </section>
                </div> -->
    </div>





  </section>












  <?php require "includes/footer.php"; ?>
  <script
    src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_plugins/fancybox-3.1.25/jquery.fancybox.min.js"></script>

  <script>
    $(document).ready(function () {
      "use strict";
      var heading = $('.serve .desc .heading h1'),
        txt = $('.serve .desc .text'),
        serviceItem = $('.serve .services .column .service'),
        tl = new TimelineLite();

      tl
        .from(heading, 0.3, { opacity: 0, y: -20 }, '+=0.3')
        .from(txt, 0.3, { opacity: 0, y: -20 })
        .staggerFrom(serviceItem, 0.2, { x: -10, autoAlpha: 0 }, 0.1);

    });
  </script>


</body>

</html>