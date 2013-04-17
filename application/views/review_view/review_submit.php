<div class="container">
    
    <div class="hero-unit">
        <h2>Hi <?php echo $user?></h2>
        <p>Date:<?php echo $date;?></p>
        <p>You have successfully submitted your review.</p>
        <p>Review Title: <?php echo $reviewName;?><p>
            <p>Product name: <?php echo $prodName;?></p>
        <p>Product type:
            
            <?php   switch($prodType)
                    {
                       case 1:
                            echo "ELECTRONICS";
                            break;
                        case 2:
                            echo "BANK";
                            break;
                        case 3:
                            echo "RESTAURANT";
                            break;
                        case 4:
                            echo "BUS SERVICE";
                            break;
                        case 5:
                            echo "HOTEL";
                            break;
                    }
            ;?>
        </p>
        
        
        <p>
            Review: <?php echo $review;?>
        </p>
        
    </div>

</div>