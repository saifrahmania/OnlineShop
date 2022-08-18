<?php include("header.php"); ?>
<?php include("navbar.php"); ?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">


                    <div class="box">
                        <h1>Categories</h1>
                    </div>
                    <?php
    
                    $qry = "SELECT * from category";
        
                    $res = $db_connect->query($qry) or die('Bad Query');
         
                    ?>

                

                    <div class="row products">
                        
                        <?php 
                        while($row = $res->fetch_assoc()){
                            
                            $cat_id = $row['ID'];
                                                                            /////**********   1
                            $name = $row['category_name'];
                            //echo $name;
                            //$price = $row['price'];
                            //$im = $row['logo'];
                            //echo $im;
                            //$image = "admin/".$im;
                            //echo $image;
                        ?>

                        <div class="col-md-3 col-sm-4">
                            <div class="product" style = "padding-left: 80px;">
                                    <h3><a href="product.php?c_id=<?php echo $cat_id; ?>"><?php echo $name; ?></a></h3>

                                <!-- /.text -->
                            <!-- /.product -->
                            </div>
                        </div>
                         
                    <?php
                        }/// end of while
                    ?>
                       

                    </div>
                    <!-- /.products -->



                </div>
                <!-- /.col-md-9 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->




<?php include("footer.php"); ?>