<?php// include("session.php"); ?>
<?php include("header.php"); ?>
<?php include("navbar.php");  ?>



    <div id="all">

        <div id="content">

            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="img/main-slider1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/main-slider2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/main-slider3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/main-slider4.jpg" alt="">
                        </div>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>

            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>RECENT PRODUCT</h2>
                        </div>
                    </div>
                </div>
                
        <!----------------***** Index product sarted from here---------------->
                
                <?php
    
                    $qry = "SELECT * from product order by product_id desc limit 8";
        
                    $res = $db_connect->query($qry) or die('Bad Query');
         
                ?>

                <div class="container">
                    <div class="product-slider">
                        <?php $row = $res->fetch_assoc();/////**********   1
                            
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            //echo $name;
                            $price = $row['price'];
                            $im = $row['img'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php?p_id=<?php echo $product_id; ?>" class="invisible">
                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?p_id=<?php echo $product_id; ?>"><?php echo $name; ?> </a></h3>
                                    <p class="price">TK.<?php echo $price; ?></p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        <?php $row = $res->fetch_assoc();/////**********   2
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            //echo $name;
                            $price = $row['price'];
                            $im = $row['img'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php?p_id=<?php echo $product_id; ?>" class="invisible">
                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?p_id=<?php echo $product_id; ?>"><?php echo $name; ?></a></h3>
                                    <p class="price"><!--del>TK. <?php echo $price-5000; ?></del--> TK.<?php echo $price; ?></p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>
                        
                        <?php $row = $res->fetch_assoc();/////**********   3
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            //echo $name;
                            $price = $row['price'];
                            $im = $row['img'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php?p_id=<?php echo $product_id; ?>" class="invisible">
                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?p_id=<?php echo $product_id; ?>"><?php echo $name; ?></a></h3>
                                    <p class="price">TK.<?php echo $price; ?></p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        
                        <?php $row = $res->fetch_assoc();/////**********   4
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            //echo $name;
                            $price = $row['price'];
                            $im = $row['img'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php?p_id=<?php echo $product_id; ?>" class="invisible">
                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?p_id=<?php echo $product_id; ?>"><?php echo $name; ?></a></h3>
                                    <p class="price">TK.<?php echo $price; ?></p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        
                        <?php $row = $res->fetch_assoc();/////**********   5
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            //echo $name;
                            $price = $row['price'];
                            $im = $row['img'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php?p_id=<?php echo $product_id; ?>" class="invisible">
                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?p_id=<?php echo $product_id; ?>"><?php echo $name; ?></a></h3>
                                    <p class="price">TK.<?php echo $price; ?></p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>
                        
                        <?php $row = $res->fetch_assoc();/////**********   6
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            //echo $name;
                            $price = $row['price'];
                            $im = $row['img'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php?p_id=<?php echo $product_id; ?>" class="invisible">
                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?p_id=<?php echo $product_id; ?>"><?php echo $name; ?></a></h3>
                                    <p class="price">TK.<?php echo $price; ?></p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->
                        
                        <?php $row = $res->fetch_assoc();/////**********   7
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            //echo $name;
                            $price = $row['price'];
                            $im = $row['img'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php?p_id=<?php echo $product_id; ?>" class="invisible">
                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?p_id=<?php echo $product_id; ?>"><?php echo $name; ?></a></h3>
                                    <p class="price">TK.<?php echo $price; ?></p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>
                        
                        <?php $row = $res->fetch_assoc();/////**********   8
                          
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            //echo $name;
                            $price = $row['price'];
                            $im = $row['img'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php?p_id=<?php echo $product_id; ?>" class="invisible">
                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?p_id=<?php echo $product_id; ?>"><?php echo $name; ?></a></h3>
                                    <p class="price">TK.<?php echo $price; ?></p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div-->

                    </div>
                    <!-- /.product-slider -->
                </div>
                <!-- /.container -->

            </div>
            <!-- /#hot -->

            <!-- *** HOT END *** -->

            <!-- *** GET INSPIRED ***
 _________________________________________________________ -->
            <!------------
            <div class="container" data-animate="fadeInUpBig">
                <div class="col-md-12">
                    <div class="box slideshow">
                        <h3>Get Inspired</h3>
                        <p class="lead">Get the inspiration from our world class designers</p>
                        <div id="get-inspired" class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="img/getinspired1.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/getinspired2.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/getinspired3.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** GET INSPIRED END *** -->

            <!-- *** BLOG HOMEPAGE ***
 _________________________________________________________ -->
            <!-----
            <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">From our blog</h3>

                        <p class="lead">What's new in the world of fashion? <a href="blog.html">Check our blog!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="col-md-12" data-animate="fadeInUp">

                    <div id="blog-homepage" class="row">
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Fashion now</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
                                </p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Who is who - example blog post</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                                </p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>

                        </div>

                    </div>
                    <!-- /#blog-homepage -->
                </div>
            </div>
            <!-- /.container -->

            <!-- *** BLOG HOMEPAGE END *** -->
           


        </div>
        <!-- /#content -->

<?php include("footer.php"); ?>