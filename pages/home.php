<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean King - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url(''); /* Add the background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 140vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            color: white;
        }

        nav {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        nav .logo {
            font-size: 1.5rem;
            font-weight: 600;
            color: #f7f7f7;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        }

        nav .logout {
            font-size: 1rem;
            color: #f7f7f7;
            text-decoration: none;
            background-color: #ff8c00;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        nav .logout:hover {
            background-color: #e67e00;
            transform: scale(1.05);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #f7f7f7;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ff8c00;
        }

        .header {
            text-align: center;
            margin-top: 120px; /* Adjusted for navigation bar height */
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 600;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.6);
            color: #000000;
        }

        .header p {
            font-size: 1.2rem;
            font-weight: 400;
            margin-top: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            width: 90%;
            max-width: 600px;
            text-align: center;
            text-decoration-color: #000000;
        }

        .grid-container a {
            text-decoration: none;
        }

        .button {
            background-color: #ff8c00;
            color: black;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            margin-top: 140px;
            height: 30%;
        }

        .button:hover {
            background-color: #e67e00;
            transform: scale(1.05);
        }

        .footer {
            margin-top: auto;
            text-align: center;
            font-size: 0.9rem;
            color: #f7f7f7;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            width: 100%;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.2);
        }

        .footer a {
            color: #ff8c00;
            text-decoration: none;
            margin: 0 5px;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">Ocean King</div>
        <ul>
            <li><a href="#">New Bill</a></li>
            <li><a href="#">Old Bill Payments</a></li>
            <li><a href="#">All Cheque</a></li>
        </ul>
        <a href="logout.html" class="logout">Logout</a>
    </nav>

    <div class="header">
        <h1>Ocean King</h1>
        <p>Premium Dried Fish Food Products</p>
    </div>

    <div class="grid-container">
        <a href="page1.html"><button class="button">New Bill</button></a>
        <a href="page2.html"><button class="button">Old bill Payments</button></a>
        <a href="page3.html"><button class="button">All Cheque</button></a>
    </div>

    <div class="footer">
        <p>&copy; 2024 Ocean King. All Rights Reserved.</p>
        <p>Contact us: <a href="mailto:info@oceanking.com">info@oceanking.com</a> | Phone: +123 456 7890</p>
        <p>
            Follow us:
            <a href="https://facebook.com/oceanking" target="_blank">Facebook</a> |
            <a href="https://instagram.com/oceanking" target="_blank">Instagram</a> |
            <a href="https://twitter.com/oceanking" target="_blank">Twitter</a>
        </p>
    </div>
</body>
</html>
