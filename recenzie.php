<?php
    include_once('partials/header.php');

    $reviews = new Reviews();
    $reviewsData = $reviews->getReviews();
?> 
<body class="bgindex">
    <!--recenzie1 s pomocou carousel + card-->
    <div class="container">
    <div class="title my-5">
        <h1 class="text-center nadpis1">Recenzie</h1>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
        <?php for ($i = 0; $i < count($reviewsData); $i += 3) { ?>
            <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                <div class="row">
                    <?php for ($j = $i; $j < $i + 3 && $j < count($reviewsData); $j++) { ?>
                        <div class="col-md-4 mb-3">
                            <div class="card text-center">
                                <img src="<?php echo $reviewsData[$j]['image']; ?>" alt="" class="img-fluid rounded">
                                <div class="card-body">
                                    <h4><?php echo $reviewsData[$j]['name']; ?><br> <span><?php echo $reviewsData[$j]['event']; ?></span></h4>
                                    <p class="card-text"><?php echo $reviewsData[$j]['review']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

</div>


    <br><br><br><br><br><br>

    <!--galéria s pomocou lightbox-->
    <section>
        <div class="container gallery-container p-2">

            <h1 class="text-center nadpis1">Galéria</h1>            
            <div class="tz-gallery">
        
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/p10.jpeg">
                            <img src="img/p10.jpeg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/p11.jpeg">
                            <img src="img/p11.jpeg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <a class="lightbox" href="img/p12.jpeg">
                            <img src="img/p12.jpeg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/xmas.jpeg">
                            <img src="img/xmas.jpeg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/p7.jpeg">
                            <img src="img/p7.jpeg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/p6.jpg">
                            <img src="img/p6.jpg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/p3.jpeg">
                            <img src="img/p3.jpeg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/p1.jpeg">
                            <img src="img/p1.jpeg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/p4.jpeg">
                            <img src="img/p4.jpeg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/p8.jpeg">
                            <img src="img/p8.jpeg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/wed.jpeg">
                            <img src="img/wed.jpeg" alt="Event">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/p2.jpeg">
                            <img src="img/p2.jpeg" alt="Event">
                        </a>
                    </div>
                </div>
        
            </div>
        
        </div>
    </section>
    
    

<?php
    include_once('partials/footer.php');
?> 
</html>