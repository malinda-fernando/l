<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Information</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background: white;
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, textarea, select, button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            resize: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Bill Information</h2>
        <form action="#" method="POST">
            <label for="bill-no">Bill Number</label>
            <input type="text" id="bill-no" name="bill_no" placeholder="Enter Bill Number" required>

            <label for="customer-name">Customer Name</label>
            <input type="text" id="customer-name" name="customer_name" placeholder="Enter Customer Name" required>

            <label for="item-details">Item Details</label>
            <textarea id="item-details" name="item_details" placeholder="Enter Item Details" rows="4" required></textarea>

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