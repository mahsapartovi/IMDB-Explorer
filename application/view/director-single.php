<?php include('Layouts/header.php'); ?>
    <body>

<div class="buster-light">
    <div class="hero hero3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>

    <div class="page-single movie-single cebleb-single">
        <div class="container">
            <div class="row ipad-width">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct">
                        <div class=".social-btn  social-btn-actor">
                            <h1 class="bd-hd"><?php echo $director['first_name'] . " " . $director['last_name']; ?></h1>
                        </div>
                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv-actor tabs-mv">
                                    <li class="active"><a href="#overviewceb">معرفی</a></li>

                                </ul>
                                <div class="tab-content">
                                    <div id="overviewceb" class="tab active">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <div class="sb-it">
                                                    <h6> نام و نام خانوادگی </h6>
                                                    <p>
                                                    <p><?php echo $director['first_name'] . " " . $director['last_name']; ?></p></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6> تولد تاریخ </h6>
                                                    <p><?php echo $director['birth_date']; ?></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>زادگاه</h6>
                                                    <p><?php echo $director['birth_place']; ?></p>
                                                </div>

                                            </div>
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <p><?php echo $director['bio']; ?></p>
                                                <div class="title-hd-sm">
                                                    <h4>عکس ها</h4>
                                                </div>
                                                <div class="mvsingle-item ov-item">
                                                    <?php foreach ($directorPictures as $directorPicture) { ?>
                                                        <a class="img-lightbox"
                                                           data-fancybox-group="gallery"
                                                           href="<?php echo $directorPicture['picture']; ?>"><img
                                                                    class="img-actor-size"
                                                                    src="<?php echo $directorPicture['picture']; ?>"
                                                                    alt=""></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="title-hd-sm">
                                                    <h4>فیلم ها</h4>
                                                </div>
                                                <!-- movie cast -->
<!--                                                <div class="mvcast-item">-->
<!---->
<!--                                                    <div class="cast-it">-->
<!--                                                        <div class="cast-left cebleb-film">-->
<!--                                                            --><?php //foreach ($directorMovies
//
//                                                            as $directorMovie) { ?>
<!--                                                            <img class="img-movie-size"-->
<!--                                                                 src="--><?php //echo $directorMovie['picture']; ?><!--"-->
<!--                                                                 alt="">-->
<!--                                                            <div>-->
<!--                                                                <a href="#">--><?php //echo $directorMovie['movie_name']; ?><!--</a>-->
<!--                                                                <a href="#"-->
<!--                                                                   class="time">--><?php //echo $directorMovie['director']; ?><!--</a>-->
<!--                                                            </div>-->
<!---->
<!--                                                        </div>-->
<!--                                                        <p>--><?php //echo $directorMovie['release_date']; ?><!--</p>-->
<!--                                                    </div>-->
<!--                                                    --><?php //} ?>
<!---->
<!--                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="mv-ceb">
                        <img src="<?php echo $director['picture']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- celebrity single section-->

    <!-- celebritysingle_light16:31-->
<?php include('Layouts/footer.php'); ?>