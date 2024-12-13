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
            background-image: url('https://i.postimg.cc/X7B7G6KX/DALL-E-2024-12-13-14-38-56-A-visually-appealing-homepage-for-a-seafood-company-named-Ocean-King.webp'); /* Add the background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 140vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 600;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.6);
            color: #f7f7f7;
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
            margin-top: 30px;
            text-align: center;
            font-size: 0.9rem;
            color: #000000;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        }
    </style>
</head>
<body>
    <div class="header">
        
      
    </div>

    <div class="grid-container">
        <a href="page1.html"><button class="button">New Bill</button></a>
        <a href="page2.html"><button class="button">Old bill Payments</button></a>
        <a href="page3.html"><button class="button">All Cheque</button></a>
    </div>

    <div class="footer">
        <p>&copy; 2024 Ocean King. All Rights Reserved.</p>
    </div>
</body>
</html>
