<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Friendly Billing Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url('');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.85); /* Semi-transparent white background */
            width: 100%;
            max-width: 500px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            position: relative;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('');
            background-size: cover;
            background-position: center;
            opacity: 0.2; /* Adjust transparency */
            z-index: 0; /* Place below the content */
            border-radius: 12px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            position: relative;
            z-index: 1; /* Place above the background image */
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            position: relative;
            z-index: 1;
        }

        label {
            font-weight: 600;
            margin-bottom: 5px;
            color: #555;
        }

        input, textarea, select, button {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: 0.3s;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
            outline: none;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 15px;
            }

            input, textarea, select, button {
                font-size: 14px;
            }
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
    <div class="form-container">
        <h2>Billing Form</h2>
        <form action="#" method="POST">
            <label for="bill-no">Bill Number</label>
            <input type="text" id="bill-no" name="bill_no" placeholder="Enter Bill Number" required>

            <label for="customer-name">Customer Name</label>
            <input type="text" id="customer-name" name="customer_name" placeholder="Enter Customer Name" required>

            <label for="item-details">Item Name</label>
            <textarea id="item-details" name="item_details" placeholder="Enter Item Details" rows="3" required></textarea>

            <label for="rate">Rate</label>
            <input type="number" id="rate" name="rate" placeholder="Enter Rate (per item)" required>

            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" placeholder="Enter Quantity" required>

            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" placeholder="Enter Amount" required>

            <label for="payment-method">Payment Method</label>
            <select id="payment-method" name="payment_method" required>
                <option value="" disabled selected>Select Payment Method</option>
                <option value="credit-card">Credit Card</option>
                <option value="cash">Cash</option>
                <option value="bank-transfer">Bank Transfer</option>
                <option value="paypal">PayPal</option>
            </select>

            <button type="submit">Submit</button>
        </form>
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
