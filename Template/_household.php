





<!-- Top Sale -->

<title>Primespot</title>
<link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
<link rel="stylesheet" type='text/css' href="css/style.css">       

		
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Household Care</h4>
        <hr>
        <!-- owl carousel -->
      
            <?php foreach ($sub_household_shuffle as $household) { ?>
            
            <div class="card mb-3" style="max-width: full">
             <div class="row g-0">
               
                <div class="col-md-4" style="max-width:200px; margin:10px">
                    <a href="<?php printf('%s?sub_id=%s', '',  $household['sub_id']); ?>"><img src="<?php echo $household['sub_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                    </div>
                    <div class="col-md-8">
                       <div class="card-body">
                        <h6><?php echo  $household['sub_name'] ?? "Unknown";  ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $household['sub_price'] ?? '0' ; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="sub_id" value="<?php echo $household['sub_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($household['sub_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>

                        </form>
                    </div>
                </div>
                </div>
            </div>
            <?php } // closing foreach function ?>
        </div>
        
        
        <!-- !owl carousel -->
    </div>
    
</section>
<!-- !Top Sale -->