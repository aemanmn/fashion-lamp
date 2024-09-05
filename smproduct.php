<?php
  session_start();
?>

<?php include('layouts/header.php');?>

            <!-- Displaying Products Start -->
  <div class="containers">
    <div id="message"></div>
    
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>



    
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="img/imges/w1.webp" width="100%" id="MainImg" alt="">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="img/imges/w1.webp"width="100%" class="small-img" alt="">


                    </div>
                    <div class="small-img-col">
                        <img src="img/imges/w1.webp"width="100%" class="small-img" alt="">

                    </div>
                    <div class="small-img-col">
                        <img src="img/imges/w1.webp"width="100%" class="small-img" alt="">

                    </div>
                    <div class="small-img-col">
                        <img src="img/imges/w1.webp"width="100%" class="small-img" alt="">

                    </div>
                </div>


                <div class="single-pro-details">
                <h6> Home/Dress</h6>
                <h4>3 PIECE - DYED EMBROIDERED DOBBY SUIT</h4>
                <h2>Rs.4200</h2>
                
                
                <h4>Product Details</h4>
                <span>Unstitched 3-Piece

                    SHIRT
                    Digital Printed Blended Satin Shirt 2.3M<br>


                    
                    <b>Fabric:</b> Blended Satin<br>


                    <b>Colour:</b> Teal<br>


                    
                    <b>DUPATTA</b><br>
                    Digital Printed Blended Tissue Dupatta 2.5M
                    <br>

                    
                    <b>Fabric:</b> Blended Tissue
                    <br>


                    <b>Colour:</b> Multi
                    <br>

                    
                    <b>TROUSER</b><br>
                    Dyed Blended Raw Silk Trouser 2.5M
                    <br>

                    
                    <b>Fabric:</b> Blended Raw Silk<br>
                    <b>Colour:</b> Teal</span>

           

                
              

            </div>
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
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>


            </div>




           

            </div>
           
                
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



<?php include('layouts/footer.php');?>



            
        
       

        <script>
            var MainImg = document.getElementById("MainImg");
            var smallimg = document.getElementsByClassName("small-img");
            smallimg[0].onclick = function(){
                MainImg.src = smallimg[0].src;
            }
            smallimg[1].onclick = function(){
                MainImg.src = smallimg[0].src;
            }
            smallimg[1].onclick = function(){
                MainImg.src = smallimg[0].src;
            }
            smallimg[1].onclick = function(){
                MainImg.src = smallimg[0].src;
            }
        </script>

        <script src="script.js"></script>
    </body>

</html>


<?php
include 'config.php';


?>