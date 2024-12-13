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
    </style>
</head>
<body>
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
</body>
</html>
