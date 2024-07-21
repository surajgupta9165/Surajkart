<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" href="login.css?v=<?=$version?>">
</head>
<body>
<div class="page">
  <form action="login.php" method="post">
    <div class="container">
    <h1 class="items">Login</h1>   

    <div class="items">
        <input type="text" class="fill" name="username" placeholder="Username" required>
    </div>

    <div class="items">
        <input type="text" class="fill" name="password" placeholder= "Password" required>
    </div>  

    <div class="items">  
    <input type="checkbox">  
      Remember me
       <a class="link" href="#">Forget Password</a>
    </div>
    <div class="items">
       <input type="submit" name="submit" class="submit">
    </div>
    <div class="items">
        <span>Don't have an account?</span>
        <a class="link" href="signup.php">Register</a>        
    </div>
</div> 
</div>
</form>
</body>
</html>

<?php
session_start();

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

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare query
$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['userid'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redirect to dashboard
        header('Location: Home.php');
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}

$stmt->close();
$conn->close();
?>



