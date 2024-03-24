<!DOCTYPE html>
<html>
<head>
  <title>Submit Fees and Payment</title>
  <link rel="stylesheet" type="text/css" href="st.css">
</head>
<body>
  <div class="payment-container">
    <h1>Submit Fees and Payment</h1>
    <form id="paymentForm" action="#" method="POST">
      <label for="studentName">Student Name:</label>
      <input type="text" id="studentName" name="studentName" required>

      <label for="feeAmount">Fee Amount:</label>
      <input type="number" id="feeAmount" name="feeAmount" min="0" required>

      <label for="cardNumber">Card Number:</label>
      <input type="text" id="cardNumber" name="cardNumber" required>

      <label for="expiryDate">Expiry Date:</label>
      <input type="text" id="expiryDate" name="expiryDate" required placeholder="MM/YY">

      <label for="cvv">CVV:</label>
      <input type="password" id="cvv" name="cvv" required>

      <input type="submit" value="Make Payment">
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
