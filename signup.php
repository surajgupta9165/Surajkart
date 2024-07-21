<?php include 'config.php'; ?>
<DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link rel="stylesheet" href="signup.css?v=<?=$version?>">
</head>
<body>
<div class="page">
  <form action="signup.php" method="post">
    <div class="container">
    <h1 class="items">Sign up</h1>   

    <div class="items">
        <input type="text"  class="fill" placeholder = "Enter Full Name" name="username" required>
    </div>
 
    <div class="items">
        <input type="text"  class="fill" placeholder = "Enter Email" name="email" required>
    </div>

<div class="items">

    <div class="radio">
        <input type="radio" name="radio" value = "Male" checked>
         <label for="radio">Male</label>
    </div>
    <div class="radio">
        <input type="radio" name="radio" value = "Female">
        <label for="radio">Female</label>
    </div>
    <div class="radio">
        <input type="radio" name="radio" value = "Prefer not to say">
        <label for="radio">Prefer not to say</label>    
    </div>
</div>

    <div class="items">
        <input type="text" placeholder= "Create password" class="fill" name="password" required>
    </div>   

    <div class="items">
         <input type="text" placeholder="Confirm password" class="fill" name ="confirm_password">
    </div>

    <div class="items">
       <input type="submit" name="submit" class="submit">
    </div>

    <div class="items">
        <span>Already have an account?</span>
        <a class="link" href="login.php">Login</a>        
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
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate passwords
if ($password !== $confirm_password) {
    echo "Passwords do not match";
    exit;
}

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare query
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashed_password);

// Execute query
if ($stmt->execute()) {
  header('Location: login.php');
} else {
    echo "Error: ". $stmt->error;
}

$stmt->close();
$conn->close();
?>

