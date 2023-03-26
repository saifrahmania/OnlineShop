<?php include("header.php"); ?>
<?php include("navbar.php"); ?>

    <div id="all">
                <?php
                        $product_id = $_GET['p_id'];
                        $qry = "SELECT * from product where product_id = $product_id ";
        
                        $res = $db_connect->query($qry) or die('Bad Query');
                        $row = $res->fetch_assoc();
                        $product_name = $row['product_name'];
                        $price = $row['price'];
                        $im = $row['img'];
                        $image = "admin/".$im;
                        $details =$row['product_description'];
                        $category_id = $row['category_id'];
        
            ?>

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li><?php echo $product_name; ?></li>
                    </ul>

                </div>
                
                                        
                <div class="col-md-12">

                    <div class="row" id="productMain">
                        <div class="col-sm-5">
                            <div id="mainImage">
                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                            </div>

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

                        </div>
                        <div class="col-sm-7">
                            <div class="box">
                                <h1 class="text-center"><?php echo $product_name; ?></h1>
                                
                                <p class="price">TK.<?php echo $price; ?></p>
                                
                                <form action="customer-orders.html" method="post">
                                    <div class="form-group" style="margin-left:234px;">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" class="form-control" id="quantity" style="width: 121px;">
                                    </div>
                                    <input type="hidden" name="product_name">
                                    <input type="hidden" name="product_id">
                                    <input type="hidden" name="price">
                                    <button type="submit" class="btn btn-primary" style="margin-left:234px;">
                                        <p class="text-center buttons" >
                                            <i class="fa fa-shopping-cart"></i> Add to cart 
                                   
                                        </p>
                                    </button>
                                </form>
                            </div>

                        </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
                        <p><?php echo $details; ?></p>

                    </div>

                
                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box" style="height: 474px;padding-top:200px;">
                                <h3>You may also like</h3>
                            </div>
                        </div>
                        
                        
                            <?php 
                                              
    
                                $qry = "SELECT * from product where category_id = '$category_id' AND product_id <> '$product_id' limit 3 ";
        
                                $res = $db_connect->query($qry) or die('Bad Query');
         
    
                            while($row = $res->fetch_assoc()){

                                $product_id = $row['product_id'];
                                                                                /////**********   1
                                $name = $row['product_name'];
                                //echo $name;
                                $price = $row['price'];
                                $im = $row['img'];
                                //echo $im;
                                $image = "admin/".$im;
                                //echo $image;
                            ?>

                            <div class="col-md-3 col-sm-4">
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

                        <?php
                            }/// end of while
                        ?>



                        </div>

                    </div>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

<?php include("footer.php"); ?>