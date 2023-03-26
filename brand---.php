<?php include("header.php"); ?>


<?php include("navbar.php"); ?>


<div id="all">
    
                    
                <?php
    
                    $qry = "SELECT * from brand";
        
                    $res = $db_connect->query($qry) or die('Bad Query');
         
                ?>
    <div id="hot">
    
                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Our Brand</h2>
                        </div>
                    </div>
                </div>
                

                <div class="container">

                        <?php 
                        while($row = $res->fetch_assoc()){
                                                                            /////**********   1
                            $name = $row['brand_name'];
                            //echo $name;
                            //$price = $row['price'];
                            $im = $row['logo'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>
                    
                    
                        <div class="row">
                            <div class="column">
                                            <a href="">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                            </div>
                             <?php
                            $row = $res->fetch_assoc();
                            $name = $row['brand_name'];
                            //echo $name;
                            //$price = $row['price'];
                            $im = $row['logo'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>
                            <div class="column">
                                            <a href="">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                            </div>
                             <?php
                            $row = $res->fetch_assoc();
                            $name = $row['brand_name'];
                            //echo $name;
                            //$price = $row['price'];
                            $im = $row['logo'];
                            //echo $im;
                            $image = "admin/".$im;
                            //echo $image;
                        ?>
                            <div class="column">
                                            <a href="">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                            </div>
                        </div>
                        
                    <?php }/// end of while
                    ?>
                    </div>
                </div>












<?php include("footer.php"); ?>