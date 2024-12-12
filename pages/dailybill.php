
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cash Expense Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    form {
      max-width: 400px;
      margin: auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #f9f9f9;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input, textarea, button {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Enter Cash Expense</h1>
  <form id="expense-form">
    <label for="amount">Amount</label>
    <input type="number" id="amount" name="amount" placeholder="Enter amount " required>
    <label for="amount">Amount</label>
    <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
    <label for="amount">Amount</label>
    <input type="number" id="amount" name="amount" placeholder="Enter amount " required>
    <label for="description">Description</label>
    <textarea id="description" name="description" placeholder="Enter a brief description" rows="4" required></textarea>

    <button type="submit">Submit Expense</button>
  </form>

  <script>
    document.getElementById('expense-form').addEventListener('submit', function(event) {
      event.preventDefault();
      alert('Expense submitted successfully!');
      // You can add logic here to save or process the expense data
    });
  </script>
</body>
</html>
