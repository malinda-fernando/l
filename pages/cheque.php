
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url('../imgs/background-image.jpeg');
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            color: white;
        }

        .search-container {
            width: 100%;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid white;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1 );
            margin-top:50px;
        }

        .search-container h2 {
            margin-bottom: 10px;
            text-align: center;
            
        }

        .search-form {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
        }

        .search-form input, .search-form select, .search-form button {
            flex: 1;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid black;
            background: transparent;
            color: white;
            font-size: 14px;
        }

        .search-form input::placeholder {
            color:white;
        }

        .search-form button {
            flex-basis: 100%;
            background: purple;
            color: black;
            cursor: pointer;
            font-weight: bold;
        }

        .search-form button:hover {
            background: transparent;
            color: white;
            border: 1px solid white;
        }

        .table-container {
            width: 100%;
            max-width: 1000px;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid white;    
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow-x: auto;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: black;
            color: black;
            text-align: left;
        }

        th, td {
            padding: 10px;
            border: 1px solid black;
        }

        th {
            background: rgb(255, 255, 255, 0.2);
        }

        tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.05);
        }
        .payment-method-header {
            text-align: center;
        }
        .sub-header {
            background-color: #f9f9f9;
        }
        .creative-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0000FF; /* Vibrant red color */
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            border: 2px solid #0000FF; /* Border for definition */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
            transition: all 0.3s ease; /* Smooth transition effects */
            text-align: center;
        }

        .creative-button:hover {
            background-color: #0000FF; /* Darker red on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Stronger shadow on hover */
            transform: scale(1.05); /* Slightly larger for effect */
        }

        .creative-button:active {
            transform: scale(1); /* Reset scale on click */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow on click */
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


    <div class="search-container">
        <h2>Search Items</h2>
        <form class="search-form" action="#" method="GET">
            <input type="text" name="item_name" placeholder="Enter customer Name">
            
            <select name="status">
                <option value="" disabled selected>Status</option>
                <option value="available">Available</option>
                <option value="out_of_stock">Out of Stock</option>
            </select>
            <button type="submit">Search</button>
        </form>
    </div>
    <title>Logout</title>
    
    <li><a href="logout.php" class="creative-button">Logout</a></li>

    <div class="table-container">
        <h2>Table 1: All Chq</h2>
        <table>
            <thead>
                <tr>
                    <th>BillNo</th>
                    <th>Customer Name</th>
                    <th>Chq No</th> 
                    <th> Bank</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                    
                  </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
                    <td>
                    <select name="status">
                        <option value="pending" selected>Pending</option>
                        <option value="received">Received</option>
                    </select>
                </td>             
                </tr>
                <tr> 
                    <td></td>
                    <td><td>
                    <td></td>
                    </td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <select name="status">
                        <option value="pending" selected>Pending</option>
                        <option value="received">Received</option>
                    </select>
                    </td>
                </tr>
            </tbody>
        </table>
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

