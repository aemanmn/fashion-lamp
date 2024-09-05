
<?php include('layouts/header.php');?>
        <div class="wrapper">
            <div id="search-container">
                
            <form class="form-inline" method="POST" action="index.php">
				<div class="input-group col-md-9">
					<input type="text" class="form-control" placeholder="Search here" name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
					<span class="input-group-btn">
						<button class="fa-solid fa-magnifying-glass" name="search"></button>
					</span>
				</div>
			</form>
			<br />
			<?php include 'search.php'?>
		</div>
	</div>
                
    
        
            <div id="products">
    
            </div>
        </div>
            
               
        
            


        


            

            
            <div id="mobile">
                <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>


        <div class="slider-box">
            <div id="slider">
                <img src="img/h1.webp" alt="">
                <img src="img/h2.webp" alt="">
                <img src="img/h3.webp" alt="">
                <img src="img/h4.webp" alt="">
                <img src="img/h5.webp" alt="">
                <img src="img/h6.webp" alt="">
                <img src="img/h7.webp" alt="">
                <img src="img/h8.webp" alt="">
            </div>
            <div class="indicators">
                <span id="btn1" class="active"></span>
                <span id="btn2"></span>
                <span id="btn3"></span>
                <span id="btn4"></span>
                <span id="btn5"></span>
                <span id="btn6"></span>
                <span id="btn7"></span>
                <span id="btn8"></span>
            </div>
        </div>
           
                
           
        
        
    

  



       

        <section id="product1" class="section-p1">
            <h2>Featured Products</h2>

            
            <p>Summer Collection New Modern Design</p>
            <div class="pro-container">
                
            <div class="pro" onclick="window.location.href='smproduct.php';">
                <img src="img/imges/w1.webp" alt="">
                <div class="des">
                    <span>sapphire</span>
                    <h5>3 PIECE - DYED EMBROIDERED DOBBY SUIT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.7,490.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro"onclick="window.location.href='s1product.php';">
                    <img src="img/imges/w2.webp" alt="">
                    <div class="des">
                        <span>Limelight</span>
                        <h5>3 PIECE - PRINTED DOBBY SUIT</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rs.3,790.00</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro"onclick="window.location.href='s2product.php';">
                        <img src="img/imges/w3.webp" alt="">
                        <div class="des">
                            <span>Beechtree</span>
                            <h5>3 PIECE - EMBROIDERED TEXTURED LAWN SUIT</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>Rs.5,490.00</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                        </div>
                        <div class="pro"onclick="window.location.href='s3product.php';">
                            <img src="img/imges/w4.webp" alt="">
                            <div class="des">
                                <span>j.</span>
                                <h5>3 PIECE - PRINTED LAWN SUIT</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>Rs.3,290.00</h4>
                            </div>
                            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                            </div>
                            <div class="pro"onclick="window.location.href='s4product.php';">
                                <img src="img/imges/m1.webp" alt="">
                                <div class="des">
                                    <span>J.</span>
                                    <h5>WHITE COTTON KURTA PAJAMA</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>Rs. 6,090</h4>
                                </div>
                                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                                </div>
                                <div class="pro"onclick="window.location.href='s5product.php';">
                                    <img src="img/imges/m2.webp" alt="">
                                    <div class="des">
                                        <span>sapphire</span>
                                        <h5>SERBIA - BEIGE COTTON KURTA TROUSER</h5>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h4>Rs. 5,999</h4>
                                    </div>
                                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                                    </div>
                                    <div class="pro"onclick="window.location.href='s6product.php';">
                                        <img src="img/imges/m3.webp" alt="">
                                        <div class="des">
                                            <span>limelight</span>
                                            <h5> COTTON KURTA TROUSER</h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h4>Rs. 6,000</h4>
                                        </div>
                                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                                    </div>
                                    <div class="pro"onclick="window.location.href='s7product.php';">
                                        <img src="img/imges/m4.webp" alt="">
                                        <div class="des">
                                            <span>gulahmad</span>
                                            <h5> COTTON KURTA TROUSER</h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i> 
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h4>Rs. 4,999</h4>
                                        </div>
                                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                                        </div>                           
            </div>
        </section>

        <section id="banner" class="section-m1">
            <h4>Repair Services</h4>
            <h2>Up to <span>70% off</span> - All t-Shirts & Accessories</h2>
            <button class="normal">Explore More</button>
        </section>

        <section id="product1" class="section-p1">
            <h2>New Arrivals</h2>
            <p>Summer Collection New Modern Design</p>
            <div class="pro-container">
            <div class="pro"onclick="window.location.href='s8product.php';">
                <img src="img/imges/w9.webp" alt="">
                <div class="des">
                    <span>Bonanza</span>
                    <h5>3 PIECE - EMBROIDERED TEXTURED LAWN SUIT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs.7,490.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro"onclick="window.location.href='s9product.php';">
                    <img src="img/imges/w10.webp" alt="">
                    <div class="des">
                        <span>Gulahmad</span>
                        <h5>3 PIECE - DYED EMBROIDERED DOBBY SUIT</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rs.6,990.00</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </div>
                    <div class="pro"onclick="window.location.href='s10product.php';">
                        <img src="img/imges/w11.webp" alt="">
                        <div class="des">
                            <span>zellbury</span>
                            <h5>3 PIECE - PRINTED LAWN SUIT</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>Rs.3,790.00</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                        </div>
                        <div class="pro"onclick="window.location.href='s11product.php';">
                            <img src="img/imges/w12.webp" alt="">
                            <div class="des">
                                <span>khaadi</span>
                                <h5>3 PIECE - DYED EMBROIDERED DOBBY SUIT</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>Rs.7,490.00</h4>
                            </div>
                            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                            </div>
                            <div class="pro"onclick="window.location.href='s12product.php';">
                                <img src="img/imges/ww1.webp" alt="">
                                <div class="des">
                                    <span>sapphire</span>
                                    <h5>PULL-ON WIDE-LEG LINEN TROUSERS</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>Rs.3,490.00</h4>
                                </div>
                                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                                </div>
                                <div class="pro"onclick="window.location.href='s13product.php';">
                                    <img src="img/imges/ww2.webp" alt="">
                                    <div class="des">
                                        <span>Limelight</span>
                                        <h5>PULL-ON LINEN TROUSERS</h5>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h4>Rs.2,990.00</h4>
                                    </div>
                                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                                    </div>
                                    <div class="pro"onclick="window.location.href='s14product.php';">
                                        <img src="img/imges/m5.webp" alt="">
                                        <div class="des">
                                            <span>j.</span>
                                            <h5>BLACK BLENDED KAMEEZ SHALWAR</h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h4>PKR 7,700.00</h4>
                                        </div>
                                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                                    </div>
                                    <div class="pro"onclick="window.location.href='s15product.php';">
                                        <img src="img/imges/m6.webp" alt="">
                                        <div class="des">
                                            <span>Limelight</span>
                                            <h5>WHITE BLENDED KURTA PAJAMA</h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i> 
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h4>PKR 7,180.00</h4>
                                        </div>
                                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                                        </div>                           
            </div>

        </section>

        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>Crazy Deals</h4>
                <h2>Buy 1 Get 1 Free</h2>
                <span>The Best Classic Dress is on sale at limelight</span>
                <button class="white">Learn More</button>
            </div>

            <div class="banner-box banner-box2">
                <h4>Spring/Summer</h4>
                <h2>Upcoming Season</h2>
                <span>The Best Classic Dress is on sale at limelight</span>
                <button class="white">Collection</button>
            </div>
        </section>

        <section id="banner3">
            <div class="banner-box">
                <h2>Seasonal Sale</h2>
                <h3>Winter Collection -50% OFF</h3>
            </div>
            <div class="banner-box banner-box2">
                <h2>NEW FOOTWEAR COLLECTION</h2>
                <h3>SPRING / SUMMER 2023</h3>
            </div>
            <div class="banner-box banner-box3">
                <h2>T-SHIRTS</h2>
                <h3>New Trendy Prints</h3>
            </div>      
        </section>

    <?php include('layouts/footer.php');?>