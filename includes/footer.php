<footer class="bg-white">
  <div class="container-md">
    <div class="row py-4">
      <div class="col-12 d-flex flex-wrap align-items-center justify-content-center justify-content-sm-between">
            <div class="d-flex">
                <img src="<?= $img ?>text-logo.png" alt="" class="subscribe-button">
            </div>
            <div class=" text-end">
                <img src="<?= $img ?>logos/amrit_mahotsav.png" alt="" class="subscribe-button">
                <img src="<?= $img ?>logos/G20_india.png" alt="" class="subscribe-button">
                <img src="<?= $img ?>logos/swatch_bharat.png" alt="" class="subscribe-button">
                <img src="<?= $img ?>ind-af.png" alt="" class="subscribe-button">
        </div>
      </div>
    </div>
    <div class="row py-4 gy-4">
      <div class="col-12 text-center text-sm-start col-sm-6 col-lg-3 order-1 px-4">
        <img src="<?= $img ?>asj_logo_ftr.svg" alt="" class="img logo"><br>
      </div>
      <div class="col-6 col-sm-6 col-lg-3 order-2 order-sm-3 order-lg-2">
        <p class="h5 mb-3 fw-bold">Links</p>
        <ul class="list-unstyled d-flex flex-column gap-2">
          <li>Fee Structure</li>
          <li>Facilities</li>
          <li>Gallery</li>
          <li>Achievenments</li>
          <li>Staff</li>
          <li>Uniform</li>
        </ul>
      </div>
      <div class="col-6 col-sm-6 col-lg-3 order-3 order-sm-4 order-lg-2">
        <p class="h5 mb-3 fw-bold">Schedules</p>
        <ul class="list-unstyled d-flex flex-column gap-2">
          <li>Examination Schedule</li>
          <li>PTM Schedule</li>
          <li>Holidays</li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 order-4 order-sm-2 order-lg-2">
        <!-- <p class="h5 mb-3 fw-bold">Contact</p> -->
        <p>
          <strong>Address</strong><br>
          <span>Air Force, Ratanada, Jodhpur</span>
        </p>
        <p>
          <strong>Phone</strong><br>
          <span>0291-2670104</span>
        </p>
        <p>
          <strong>Email</strong><br>
          <span>afschooljodhpur@yahoo.com</span>
        </p>
        <div class="mt-3 social-links">
            <strong>Follow us</strong>
            <div class="d-flex gap-2">
                <a href=""><img src="<?=$img?>icons/facebook_afsj.png" alt="" class="img-fluid" width="26"></a>
                <a href=""><img src="<?=$img?>icons/twitter_afsj.png" alt="" class="img-fluid" width="26"></a>
                <a href=""><img src="<?=$img?>icons/instagram_afsj.png" alt="" class="img-fluid" width="26"></a>
                <a href=""><img src="<?=$img?>icons/lin_afsj.png" alt="" class="img-fluid" width="26"></a>
                <a href=""><img src="<?=$img?>icons/yt_afsj.png" alt="" class="img-fluid" width="26"></a>
            </div>
        </div>
      </div>
    </div>
    <hr class="m-0">
    <div class="row">
      <div class="col-12 py-3 d-xl-flex justify-content-between small text-muted">
        <p class="mb-2 mb-xl-0 text-center">Copyright © 2024 <strong>Air Force School, Jodhpur</strong>, All Rights Reserved. Developed by <a href="codake.com">Codake Softwares</a>.</p>
        <p class="mb-0 text-center">
          <span>Terms & Conditions</span> |
          <span>Privacy Policy</span>
        </p>
      </div>
    </div>
  </div>
  
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="<?=$js?>script.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>