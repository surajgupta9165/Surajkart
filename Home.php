<?php
// dashboard.php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
}

// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'auth_system';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Get user data
$userid = $_SESSION['userid'];
$stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Close connection
$stmt->close();
$conn->close();
?>

<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css?v=<?=$version?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
   integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<body>
<div class="Home">
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
        <li class="fa"><a href="#"><i class="fa-solid fa-user"> <span class="user"><?php echo htmlspecialchars($user['username']); ?></span></i></a></li>
        <li class="fa"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
        <li class="fa"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
     </ul> 

</div>
      <div class="hero">
        <div class="up">
            <span>New Inspiration 2020</span>
        </div>

        <div class="mid">
            <h1>NEW COLLECTION!</h1>
        </div>

        <div class="down">
            <p>Trending from men's and women's  style collection</p>
        </div>

        <div>
            <button class="btn">SHOP NOW</button>
        </div>
</div>
</header>

   <section class="category">
       
        <div class="cat">
        <a href="women.php"><img class="images" src="images/women.png" alt="" width="285px" height="190px"></a>
        <a class="cate" href="women.php">WOMEN'S WEAR</a>
        </div>

        <div class="cat">
    <a href="accessories.php"><img class="images" src="images/accessories.png" alt="" width="285px" height="190px"></a>
        <a class="cate" href="accessories.php">ACCESSORIES</a>
        </div>

        <div class="cat">
        <a href="men.php"><img class="images" src="images/men.png" alt="" width="285px" height="190px"></a>    
        <a class="cate" href="men.php">MEN'S WEAR</a>
        </div>
  
        <div class="cat">
            <a href="toy.php"><img class="images" src="images/toys.png" alt="" width="285px" height="190px"></a>    
            <a class="cate" href="toy.php">Toys</a>
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
</div>
</body>
</html>

    