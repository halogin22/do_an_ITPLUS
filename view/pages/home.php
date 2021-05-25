    <!-- Banner Section Begin -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img width="1600" height="500" class="d-block w-100" src="assets/img/banner/banner-4.png"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img width="1600" height="500" class="d-block w-100"
                    src="assets/img/banner/Banner-Sofa-gỗ-óc-chó-Nội-thất-phòng-khách-đẹp-Nadu-Funiture.jpg"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img width="1600" height="500" class="d-block w-100" src="assets/img/banner/1503283368_banner6_2.png"
                    alt="Third slide">
            </div>
            <div class="carousel-item">
                <img width="1600" height="500" class="d-block w-100" src="assets/img/banner/banner.jpg"
                    alt="Fourth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Banner Section End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>New product</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <?php 
                        foreach($categori as $key => $value)
                        {
                        ?>
                        <li data-filter=".<?php echo $value['name']?>"><?php echo $value['name']?></li>
                        <?php
                        }?>
                    </ul>
                </div>
            </div>
            <div class="row property__gallery">
                <?php 
                foreach ($produc as $value) {
                
             ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix 
                    <?php 
                        switch ($value['categories_id']) {
                            case '1':
                                echo 'Ghế';
                                break;
                            case '2':
                                echo 'Bàn';
                                break;
                            case '3':
                                echo 'Tủ';
                                break;
                            case '4':
                                echo 'Giường';
                                break;
                            case '5':
                                echo 'Kệ';
                                break;
                        }
                    ?>">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-id="<?php echo $value['id']; ?>" data-setbg="<?php echo $value['avatar']; ?>">
                            <?php
                                switch ($value['status']) {
                                    case '1':
                            ?>
                            <div class="label new">New</div>
                            <?php
                                        break;
                                    case '2':
                            ?>
                            <div class="label sale">Sale</div>
                            <?php            
                                        break;
                                    case '3':
                            ?>
                            <div class="label stockout stockblue">Out Of Stock</div>
                            <?php            
                                        break;
                                }
                            ?>
                            <ul class="product__hover">
                                <li><a href="<?php echo $value['avatar']; ?>" class="image-popup"><span
                                            class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="index.php?page=home&method=order&id=<?php echo $value['id']; ?>"><span
                                            class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"><?php echo $value['name']; ?></a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price"><?php echo $value['price']; ?>VNĐ</div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Banner Section Begin -->
    <section class="banner set-bg" data-setbg="assets/img/banner/banner-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Jacket</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Jacket</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Jacket</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Trend Section Begin -->
    <section class="trend spad">
        <div class="container">
            <div class="row">
                <!-- NEW -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>New</h4>
                        </div>
                        <?php 
                            foreach($new as $key => $value){?>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img width="90" height="90" src="<?php echo $value['avatar'] ?>" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6><?php echo $value['name']?></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price"><?php echo $value['price']?> VNĐ</div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <!-- SALE -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Sale</h4>
                        </div>
                        <?php 
                            foreach($sale as $key => $value){?>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img width="90" height="90" src="<?php echo $value['avatar'] ?>" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6><?php echo $value['name']?></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price"><?php echo $value['price']?> VNĐ</div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <!-- OUT OF STOCK -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Out of stock</h4>
                        </div>
                        <?php 
                            foreach($oos as $key => $value){?>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img width="90" height="90" src="<?php echo $value['avatar'] ?>" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6><?php echo $value['name']?></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price"><?php echo $value['price']?> VNĐ</div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Trend Section End -->

    <!-- Instagram Begin -->
    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="assets/img/instagram/insta-1.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="assets/img/instagram/insta-2.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="assets/img/instagram/insta-3.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="assets/img/instagram/insta-4.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="assets/img/instagram/insta-5.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="assets/img/instagram/insta-6.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram End -->