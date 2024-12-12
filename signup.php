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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $employee_number = $_POST['employee_number'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match. Please try again.');</script>";
    } else {
        // Check if email or employee number already exists
            $check_sql = "SELECT * FROM users WHERE email = ? OR employee_number = ?";
            $stmt = $conn->prepare($check_sql); // Remove named argument 'query'
            $stmt->bind_param("ss", $email, $employee_number); // Remove named arguments 'types' and use correct syntax
            $stmt->execute();
            $result = $stmt->get_result();


        if ($result->num_rows > 0) {
            // If duplicate found, show alert
            echo "<script>alert('Email or Employee Number already exists. Please try again with different credentials.');</script>";
        } else {
            // Hash the password for security
            $hashed_password = password_hash(password: $password, PASSWORD_DEFAULT);

            // Insert data into the database
            $insert_sql = "INSERT INTO users (username, email, employee_number, password) 
                           VALUES (?, ?, ?, ?)";
            $insert_stmt = $conn->prepare($insert_sql);
            $insert_stmt->bind_param("ssss", $username, $email, $employee_number, $hashed_password);

            if ($insert_stmt->execute()) {
                echo "<script>
                        alert('User Registered Successfully.');
                        window.location.href = 'index.php'; // Redirect to login page
                      </script>";
            } else {
                echo "Error: " . $conn->error;
            }
        }
    }
}

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
            height: 520px;
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
</head>
<body>
    <div class="glass-container">
        <div class="login-box">
            <h2>Sign Up</h2>
            <form action="signup.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="employee_number" placeholder="Employee Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a id="register" href="index.php">Log In</a></p>
        </div>
    </div>
</body>
</html>