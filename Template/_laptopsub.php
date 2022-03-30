<!-- Top Sale -->
<?php

    shuffle($sub_laptop_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['sub_laptop_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['sub_id']);
        }
    }
?>


<section id="top-sale">
    <div class="container ">
 
        <h4 class="font-rubik font-size-20">Laptop & Computer</h4>
        <hr>
        <!-- owl carousel -->
      
            <?php foreach ($sub_laptop_shuffle as $sub) { ?>
            <div class="card mb-3" style="max-width: full" >
            <div class="row g-0">
                <div class="col-md-4" style="max-width:200px; margin:10px">
                <a href="<?php printf('%s?sub_id=%s', 'laptopsubdiscription.php',  $sub['sub_id']); ?>"><img src="<?php echo $sub['sub_image'] ?? "./assets/apple xs.jpg"; ?>" alt="product1" class="img-fluid"></a>
            </div>
            <div class="col-md-8">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo  $sub['sub_name'] ?? "Unknown";  ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $sub['sub_price'] ?? '0' ; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="sub_id" value="<?php echo $sub['sub_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($sub['sub_id'], $Cart->getCartId($sub_laptop->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="sub_laptop_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>

                        </form>
                    </div>
                        </div>
                </div>
            </div>
            
            <?php } // closing foreach function ?>
        
        <!-- !owl carousel -->
    </div>
    
</section>
