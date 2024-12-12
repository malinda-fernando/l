<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ocdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_type'] = $user['user_type']; // Store user type in session

            // Redirect based on user type
            if ($user['user_type'] === 'admin') {
                echo "<script type='text/javascript'>
                        alert('Welcome Admin!');
                        window.location.href = 'admin_dashboard.php';
                      </script>";
            } else {
                echo "<script type='text/javascript'>
                        alert('Login Successful');
                        window.location.href = 'home.php';
                      </script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Incorrect Password');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Username not registered');</script>";
    }
    $stmt->close();
}

// Close the connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">  
<style>
        * {
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('background-image.jpeg');
    background-size: cover;
}

.glass-container {
    width: 300px;
    height: 350px;
    position: relative;
    z-index: 1;
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    border: 1px solid #fff;
}

.glass-container::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    z-index: -1;
}

.login-box {
    max-width: 250px;
    margin: 0 auto;
    text-align: center;
}

h2 {
    color: #fff;
    margin-top: 30px;
    margin-bottom: -20px;
}

form {
    display: flex;
    flex-direction: column;
    margin-top: 20px;
}

input {
    padding: 10px;
    margin-top: 25px;
    border: none;
    border-radius: 10px;
    background: transparent;
    border: 1px solid #fff;
    color: #fff;
    font-size: 13px;
}

input::placeholder {
    color: #fff;
}

input:focus {
    outline: none;
}

.options {
    display: flex;
    align-items: center;
    margin-top: 15px;
    font-size: 12px;
    color: white;
}

.options input {
    margin-right: 5px;
    margin-top: 0px;
}

.options a {
    text-decoration: none;
    color: white;
    margin-left: auto;
}

button {
    background: #fff;
    color: black;
    padding: 10px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    margin-top: 15px;
}

button:hover {
    background: transparent;
    color: white;
    outline: 1px solid #fff;
}

p {
    font-size: 12px;
    color: #fff;
    margin-top: 15px;
}

#register {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="glass-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="#" method="POST">

                <input type="text" id="username" name="username" required placeholder="Username">
                
                <input type="password" id="password" name="password" required placeholder="Password">
                
                <div class="options">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                
                <button type="submit">Login</button>

                <p>Don't have an account? <a href="signup.php" id="register">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>