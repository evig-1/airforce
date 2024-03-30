<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "includes/head-links.php"; ?>
  <link rel="stylesheet"
        href="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_plugins/fancybox-3.1.25/jquery.fancybox.min.css">
  <title>Gallery</title>
</head>

<body>
  <?php require "includes/header.php"; ?>



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

                            


                            <div class="ag-photo-gallery_item ag-photo-gallery_item__wide">
                                <figure class="ag-photo-gallery_figure">
                                    <a href="<?= $img ?>y.jpg" data-fancybox="gallery">
                                        <img src="<?= $img ?>y.jpg" class="ag-photo-gallery_img" alt="" />
                                    </a>
                                </figure>
                            </div>

                            <div class="ag-photo-gallery_item">
                                <figure class="ag-photo-gallery_figure">
                                    <a href="<?= $img ?>force.jpg" data-fancybox="gallery">
                                        <img src="<?= $img ?>force.jpg" class="ag-photo-gallery_img" alt="" />
                                    </a>
                                </figure>
                            </div>

                          
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <?php require "includes/footer.php"; ?>
        <script
        src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_plugins/fancybox-3.1.25/jquery.fancybox.min.js"></script>
    
</body>
</html>