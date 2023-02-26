<?php


<!-- <section id="product1" class="section-p1">
<div class="pro-container">
    <div class="pro" onclick="window.location.href='sproduct.html';">
        <img src="img/5.jpg" alt="">
        <div class="des">
            <span>Cannon EOS <?php echo("[]") ?></span>
            <h5>Price: Rs. 36000.00</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/2.jpg" alt="">
        <div class="des">
            <span>Nikon DSLR </span>
            <h5>Price: Rs. 40,000.00 </h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/3.jpg" alt="">
        <div class="des">
            <span>Sony DSLR</span>
            <h5>Price: Rs. 45000.00</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/4.jpg" alt="">
        <div class="des">
            <span>Olympus DSLR</span>
            <h5>Price: Rs. 50000.00</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/18.jpg" alt="">
        <div class="des">
            <span>Titan Model #301</span>
            <h5>Price: Rs. 13000.00 </h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/19.jpg" alt="">
        <div class="des">
            <span>itan Model #201</span>
            <h5>Price: Rs. 3000.00</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/20.jpg" alt="">
        <div class="des">
            <span>HMT Milan</span>
            <h5>Price: Rs. 8000.00 </h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/21.jpg" alt="">
        <div class="des">
            <span>Faber Luba #111</span>
            <h5>Price: Rs. 18000.00</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/22.jpg" alt="">
        <div class="des">
            <span>H&W</span>
            <h5>Price: Rs. 800.00</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/23.jpg" alt="">
        <div class="des">
            <span>Luis Phil</span>
            <h5>Price: Rs. 1000.00</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/24.jpg" alt="">
        <div class="des">
            <span>John Zok</span>
            <h5>Price: Rs. 1500.00</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pro">
        <img src="img/25.jpg" alt="">
        <div class="des">
            <span>Jhalsani</span>
            <h5>Price Rs. 1300.00</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                } else {
                    //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</div>
</section> -->

?>