<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
  integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
   crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="cart.css">
  <title>Cart</title>
</head>
<body>
  <header>
    <div class="nav">
    
        <div class="logo">
            <a href="Home.php"><img src="images/logo.png" alt="error" height="100px"></a>
        </div>
    
        <ul class="icons">
            <li class="ic"><a href="Home.php">Home</a></li>
            <li class="ic"><a href="#">Shop</a></li>
            <li class="ic"><a href="#">About</a></li>
            <li class="ic"><a href="#">Contact</a></li>
        </ul> 
    
         <ul class="divi">
            <li class="fa"><a href="#"><i class="fa-solid fa-user"></i></a></li>
            <li class="fa"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
            <li class="fa"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
         </ul> 
    </div>   
  </header>

  <section class="cart">
     <table width="100%">
           <thead>
            <tr>
              <td>P.no</td>
              <td>Product</td>
              <td>Image</td>
              <td>Price</td>
              <td>Quantity</td>
              <td>Subtotal</td>
              <td>Remove</td>
            </tr>
           </thead>

           <tbody>
            <tr>
              <td>1</td>
              <td>Gorgeous suit for women</td>
              <td><img src="images/w1.jpg" alt=""></td>
              <td>$78</td>
              <td><input type="number" value="1"></td>
              <td>$78</td>
              <td><a href=""><i class="fa-solid fa-circle-xmark"></i></a></td>
            </tr>
           </tbody>

           <tbody>
            <tr>
              <td>2</td>
              <td> Amazing shirt for boys</td>
              <td><img src="images/m1.jpg" alt=""></td>
              <td>$78</td>
              <td><input type="number" value="1"></td>
              <td>$78</td>
              <td><a href=""><i class="fa-solid fa-circle-xmark"></i></a></td>
            </tr>
           </tbody>

           <tbody>
            <tr>
              <td>3</td>
              <td>Gorgeous suit for girls</td>
              <td><img src="images/w2.jpg" alt=""></td>
              <td>$78</td>
              <td><input type="number" value="1"></td>
              <td>$78</td>
              <td><a href=""><i class="fa-solid fa-circle-xmark"></i></a></td>
            </tr>
           </tbody>

     </table>
 </section>


 <section class="cart-total">
    <div class="coupon">
      <h3>Apply Coupon</h3>
      <div class="Apply">
         <input type="text" name="code" class="code" placeholder="Enter Your Coupon">
         <button class="normal">Apply</button>
      </div>
    </div>

    <div class="Subtotal">
      <h3>Cart Totals</h3>
      <table>
        <tr>
          <td>Cart Subtotal</td>
          <td>$234</td>
        </tr>

        <tr>
          <td>Shipping</td>
          <td>Free</td>
        </tr>

        <tr>
          <td><strong>Total</strong></td>
          <td><strong>$234</strong></td>
        </tr>

      </table>
       <button class="normal">Proceed To Checkout</button>
    </div>
  </section>


  <section class="contact">

    <div class="c123">  
        <div class="c1">
            <h2>EXCELLENT SUPPORT</h2>
        </div>
            
        <div  class="c2">
            <p>We love our customers and they can reach us any time
        <br>
                of day we will be at your service 24/7</p>
        </div>
           
        <div  class="c3">
            <button class="btn">Contact</button>
        </div>
    </div>
  
        <div  class="c4">
            <input type="email" placeholder="Email Address">
            <button class="send">Send</button>
        </div>
  
  </section>
  
  <footer class="footer">
  
        <div class="col1">
            <h4 class="f1">INFORMATION</h4>
            <a class="f4" href="">About us</a>
            <a class="f4" href="">Contact Us</a>
            <a class="f4" href="">Term & Conditions</a>
            <a class="f4" href="">Shipping Guide</a>
        </div>
  
          <div class="col2">
            <h4 class="f2">USEFUL LINK</h4>
            <a class="f4" href="">Online Store</a>
            <a class="f4" href="">Customer Services</a>
            <a class="f4" href="">Promotion</a>
            <a class="f4" href="">Top Brands</a>
          </div>
  
          <ul class="col3">
            <li class="f3"><i class="fa-brands fa-square-facebook"></i></li>
            <li class="f3"><i class="fa-brands fa-instagram"></i></li>
            <li class="f3"><i class="fa-brands fa-square-x-twitter"></i></li>
            <li class="f3"><i class="fa-brands fa-telegram"></i></li>
          <ul>
  
  </footer>
</body>
</html>