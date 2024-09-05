
<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ecommerce Website</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <section id="header"> 
            <nav>
                <h1><a href="#"><img src="img/logo11.png" class="logo" alt=""></a></h1>
                <ul>
                    <li><a href="">Women</a>
                    <ul>
                        <li><a href="stitch.php">Stitch</a></li>
                        <li><a href="unstitch.php">Unstitch</a></li>
                        <li><a href="western.php">Western</a></li>
                    </ul></li>
                    <li><a href="">Men</a>
                        <ul>
                            <li><a href="stitchmen.php">Stitch</a></li>
                            <li><a href="unstitchmen.php">Unstitch</a></li>
                            <li><a href="westernmen.php">Western</a></li>
                        </ul></li>
                    <li><a href="">Kids</a>
                        <ul>
                            <li><a href="girls.php">Girls</a></li>
                            <li><a href="boys.php">Boys</a></li>
                        </ul></li>
                    <li><a href="">Footwear</a>
                        <ul>
                            <li><a href="womenshoes.php">Women Shoes</a></li>
                            <li><a href="menshoes.php">Men Shoes</a></li>
                            <li><a href="kidsshoes.php">Kids Shoes</a></li>
                        </ul></li>
                    <li><a href="">Accessories</a>
                        <ul>
                            <li><a href="bags.php">Bags</a></li>
                            <li><a href="wallets.php">Wallets</a></li>
                            <li><a href="fragrances.php">Fragrances</a></li>
                            <li><a href="jewellery.php">Jewellery</a></li>
                        </ul></li>
    
                        <li><a href="">Brands</a>
                            <ul>
                                <li><a href="bags.php">Limelight</a></li>
                                <li><a href="wallets.php">Sapphire</a></li>
                                <li><a href="fragrances.php">Beechtree</a></li>
                                <li><a href="jewellery.php">J.</a></li>
                                <li><a href="bonanza.php">Bonanza</a></li>
                                <li><a href="wallets.php">Gulahmad</a></li>
                                <li><a href="fragrances.php">Zellbury</a></li>
                                <li><a href="jewellery.php">Khaadi</a></li>
                            </ul></li>
    
    
                    <li id="lg-home"><a href="index.php"><i class="far fa-home"></i></a></li>
                    &nbsp;
                        <!--<li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>-->
                        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>   
                </ul>
            </nav>
            </section>
              
            <!-- Displaying Products Start -->
  <div class="containers">
    <div id="message"></div>
    
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
            while ($row = $result->fetch_assoc()):
            endwhile; 
            ?>
    
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="img/imges/w2.webp" width="100%" id="MainImg" alt="">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="img/imges/w2.webp"width="100%" class="small-img" alt="">

                    </div>
                    <div class="small-img-col">
                        <img src="img/imges/w2.webp"width="100%" class="small-img" alt="">

                    </div>
                    <div class="small-img-col">
                        <img src="img/imges/w2.webp"width="100%" class="small-img" alt="">

                    </div>
                    <div class="small-img-col">
                        <img src="img/imges/w2.webp"width="100%" class="small-img" alt="">

                    </div>
                </div>
            </div>
            <div class="single-pro-details">
                <h6> Home/Dress</h6>
                <h4>3 PIECE - PRINTED DOBBY SUIT</h4>
                <h2>Rs.3,790.00</h2>
                <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
              <h4>Product Details</h4>
                <span>Unstitched 3-Piece

                    SHIRT
                    Digital Printed Blended Satin Shirt 2.3M<br>
                    
                <b>Fabric:</b> Blended Satin<br>
                    <b>Colour:</b> Teal<br>
                    
                    <b>DUPATTA</b><br>
                    Digital Printed Blended Tissue Dupatta 2.5M<br>
                    
                    <b>Fabric:</b> Blended Tissue<br>
                    <b>Colour:</b> Multi<br>
                    
                    <b>TROUSER</b><br>
                    Dyed Blended Raw Silk Trouser 2.5M<br>
                    
                    <b>Fabric:</b> Blended Raw Silk<br>
                    <b>Colour:</b> Teal</span>

            </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>


            </div>
            </div>
            
                
                <!--<input type="number" value="1">
                <button class="normal">Add To Cart</button>-->
                
             <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
  
</div>
            
           
                
 
            
        </section>
       
        <div class="whatsapp-btn-container">
            <a  class=" whatsapp-btn" href="https://wa.me/91999999999"><i class="fab fa-whatsapp"></i></a>
            <span>Contact Us</span>
    
        </div>

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4> Sign Up For Newsletters</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="Your email address">
                <a href="signup.php"> <button class="normal">Sign Up</button> </a>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="img/logo11.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address</strong> | 7-L Gulberg- II،, Block L Gulberg 2, Lahore</p>
                <p><strong>Phone:</strong> (042) 35757678 / 0800 74007 </p>
                <p><strong>Hours:</strong> 10:00- 18:00, Mon - Sat</p>
                <p><strong>Email:</strong> customercare@fashionlamp.com</p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>About</h4>
                <a href="about.php">About Us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="contact.php">Contact Us</a>
                </div>
                <div class="col">
                    <h4>Account</h4>
                    <a href="signup.php">Sign In</a>
                    <a href="cart.php">View Cart</a>
                    <a href="#">My Wishlist</a>
                    <a href="#">Track My Order</a>
                    <a href="#">Help</a>
                    </div>
   


                
                    

                <div class="col install">
                    <h4>Install App</h4>
                    <p>From App Store or Google Play</p>
                    <div class="row">
                        <img src="img/pay/app.jpg" alt="">
                        <img src="img/pay/play.jpg" alt="">
                    </div>
                    <p>Secured Payment Gateways</p>
                    <img src="img/pay/pay.png" alt="">
                </div>

                <div class="copyright">
                    <p>Copyright © 2023 Fashion Lamp All Rights Reserved.</p>
                </div>
        </footer>

        <script>
            var MainImg = document.getElementById("MainImg");
            var smallimg = document.getElementsByClassName("small-img");
            smallimg[0].onclick = function(){
                MainImg.src = smallimg[0].src;
            }
            smallimg[1].onclick = function(){
                MainImg.src = smallimg[1].src;
            }
            smallimg[2].onclick = function(){
                MainImg.src = smallimg[2].src;
            }
            smallimg[3].onclick = function(){
                MainImg.src = smallimg[3].src;
            }
        </script>

        <script src="script.js"></script>
    </body>

</html>

