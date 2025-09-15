<?php
$product_name = $_GET['name'] ?? 'No Name';
$product_price_raw = $_GET['price'] ?? '0';
$product_img = $_GET['img'] ?? 'default.jpg';

$product_price = (float) str_replace(',', '', $product_price_raw);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Durga Packaging Machine</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body {
      background-color: #f0f2f5;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .checkout-container {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
    }
    .logo-title {
      font-size: 28px;
      font-weight: 700;
      color: #1d3557;
      margin-bottom: 30px;
    }
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }
    h4, h5 {
      color: #1d3557;
    }
    label {
      font-weight: 500;
      margin-bottom: 5px;
    }
    .form-control {
      border-radius: 8px;
      border: 1px solid #ccc;
      padding: 10px 14px;
      transition: border-color 0.3s;
    }
    .form-control:focus {
      border-color: #457b9d;
      box-shadow: none;
    }
    .btn-danger {
      background-color: #e63946;
      border-color: #e63946;
      transition: background-color 0.3s;
    }
    .btn-danger:hover {
      background-color: #d62839;
    }
    .payment-method img {
      background-color: #fff;
      border-radius: 5px;
      padding: 4px;
    }
    .text-muted {
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="checkout-container">
    <div class="logo-title">Durga Packaging Machine - Checkout</div>
    <div class="row gy-5">
<div class="col-lg-7">
<form id="checkoutForm" action="../process" method="post" target="hidden_iframe">

  <div class="row gy-4">
    <!-- Email -->
    <div class="col-md-12">
      <input type="email" class="form-control" name="email" placeholder="Your Email" required>
    </div>

    <!-- First & Last Name -->
    <div class="col-md-6">
      <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
    </div>

    <!-- Address -->
    <div class="col-md-6">
      <input type="text" class="form-control" name="address" placeholder="Address" required>
    </div>
    
    <div class="col-md-6">
        <input type="tel" class="form-control" name="number" placeholder="Phone Number" pattern="[0-9]{10}" maxlength="10" title="Please enter a 10-digit phone number" required>
    </div>


    <!-- Apartment + City -->
    <div class="col-md-6">
      <input type="text" class="form-control" name="apartment" placeholder="Apartment, Suite, etc. (optional)">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="city" placeholder="City" required>
    </div>

    <!-- State + Pincode -->
    <div class="col-md-6">
      <input type="text" class="form-control" name="state" placeholder="State" required>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="pincode" placeholder="Pincode" required>
    </div>

    <!-- Payment Gateway Info -->
    <div class="col-md-12">
      <div class="border rounded shadow-sm p-4 d-flex justify-content-between align-items-center flex-wrap" style="background-color: #f9f9f9; margin-bottom: 0;">

        <div>
          <p class="mb-2 fw-bold" style="font-size: 16px;">
            PhonePe Payment Gateway <br>
            <span style="font-size: 14px;">(UPI, Cards & NetBanking)</span>
          </p>
        </div>
        <div class="d-flex align-items-center gap-2">
          <img src="https://cdn-icons-png.flaticon.com/512/888/888870.png" alt="UPI" height="30">
          <img src="https://cdn-icons-png.flaticon.com/512/349/349221.png" alt="Visa" height="30">
          <img src="https://cdn-icons-png.flaticon.com/512/349/349230.png" alt="Mastercard" height="30">
          <img src="https://upload.wikimedia.org/wikipedia/commons/3/30/RuPay.svg" alt="Rupay" height="30" style="background: #fff; padding: 2px;">
          <span class="fw-bold text-secondary" style="font-size: 16px;">+2</span>
        </div>
      </div>

      <!-- Redirect Notice -->
      <div class="border rounded shadow-sm p-4 mb-3 text-center" style="background-color: #f9f9f9;">
        <img src="https://cdn-icons-png.flaticon.com/512/545/545705.png" height="60" alt="Redirect Icon">
        <p class="mt-3 text-secondary mb-0" style="font-size: 14px; line-height: 1.6;">
          After clicking <strong>"Pay now"</strong>, you will be redirected to<br>
          <strong>PhonePe Payment Gateway</strong> (UPI, Cards & NetBanking)<br>
          to complete your purchase securely.
        </p>
      </div>
 </div>
      <!-- Billing Address Option -->
      <div class="border rounded shadow-sm p-4 mb-4" style="background-color: #f9f9f9;">
        <h5 class="mb-3">Billing Address</h5>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="billing_address" id="sameAsShipping" value="same" checked>
          <label class="form-check-label" for="sameAsShipping">
            shipping address
          </label>
        </div>
      </div>
   
    <!-- ✅ Hidden Fields for Product Info -->
    <input type="hidden" name="product_img" value="<?php echo $product_img; ?>">
    <input type="hidden" name="product_name" id="productNameInput" value="<?php echo htmlspecialchars($product_name); ?>">
   <input type="hidden" name="product_quantity" id="productQtyInput" value="1">
<input type="hidden" name="product_unit_price" id="productUnitPriceInput" value="<?php echo $product_price; ?>">
<input type="hidden" name="product_total_price" id="productTotalPriceInput" value="<?php echo $product_price; ?>">
    
    <!-- Submit Button -->
    <div class="col-md-12 text-center">
      <button type="submit" name="submit" class="btn btn-danger w-100">Pay Now</button>
    </div>
  </div>
</form>

</div>

      <!-- Right Column -->
      <div class="col-lg-5">
        <div class="card p-4">
          <div class="d-flex mb-3">
            <img src="<?php echo $product_img; ?>" alt="<?php echo $product_name; ?>" style="width: 80px; height: 80px; object-fit: cover; border: 1px solid #ccc; margin-right: 15px;">
            <div>
              <strong><?php echo $product_name; ?></strong><br>
              <small class="text-muted"><?php echo $product_name; ?></small>
            </div>
          </div>

          <!-- Quantity Input -->
          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <div class="input-group" style="max-width: 120px;">
            <input type="number" id="quantity" class="form-control" value="1" min="1" 
       name="quantity_visible" oninput="updateTotal()" onchange="updateTotal()" />
            </div>
          </div>

          <!-- Unit Price -->
          <div class="d-flex justify-content-between mb-2">
            <span>Unit Price</span>
            <span class="fw-bold">₹<?php echo number_format($product_price); ?></span>
          </div>

          <!-- Total Price -->
          <div class="d-flex justify-content-between mb-2">
            <span>Total Price</span>
            <span class="fw-bold" id="totalPrice">₹<?php echo number_format($product_price); ?></span>
          </div>

          <!-- Discount Code -->
          <div class="my-3">
            <label>Discount code</label>
            <div class="input-group">
              <input type="text" class="form-control">
              <button class="btn btn-outline-secondary">Apply</button>
            </div>
          </div>

          <!-- Summary -->
          <div class="d-flex justify-content-between mb-2">
            <span>Subtotal</span>
            <span id="subtotal">₹<?php echo number_format($product_price); ?></span>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <span>Shipping</span>
            <span class="text-muted">Enter shipping address</span>
          </div>
          <hr>
          <div class="d-flex justify-content-between">
            <strong>Total</strong>
            <strong id="grandTotal">₹<?php echo number_format($product_price); ?></strong>
          </div>
          <small class="text-muted">Including taxes (calculated at checkout)</small>
        </div>
      </div>
    </div>
  </div>
<style>
    .text-center.mt-4 img {
  margin-bottom: 10px;
}
.text-center.mt-4 p {
  font-size: 14px;
  color: #6c757d;
  line-height: 1.6;
}

</style>
  <!-- JavaScript to update total based on quantity -->
  <script>
    const unitPrice = <?php echo $product_price; ?>;
    function updateTotal() {
      const quantity = document.getElementById("quantity").value;
      const total = unitPrice * quantity;
      const formatted = "₹" + total.toLocaleString("en-IN");

      document.getElementById("totalPrice").textContent = formatted;
      document.getElementById("subtotal").textContent = formatted;
      document.getElementById("grandTotal").textContent = formatted;
    }
  </script>
 <script>
  const unitPrice = <?php echo $product_price; ?>;

  function updateTotal() {
    const quantity = parseInt(document.getElementById("quantity").value) || 1;
    const total = unitPrice * quantity;

    // Show updated totals
    document.getElementById("totalPrice").textContent = "₹" + total.toLocaleString("en-IN");
    document.getElementById("subtotal").textContent = "₹" + total.toLocaleString("en-IN");
    document.getElementById("grandTotal").textContent = "₹" + total.toLocaleString("en-IN");

    // ✅ Update hidden fields
    document.getElementById("productQtyInput").value = quantity;
    document.getElementById("productTotalPriceInput").value = total;
  }

  // Call once on load
  updateTotal();

  // Listen to changes
  document.getElementById("quantity").addEventListener("input", updateTotal);
</script>
<script>
  function handleSubmit(e) {
    e.preventDefault(); // stop default page reload

    const form = document.getElementById('checkoutForm');
    const price = document.getElementById('productTotalPriceInput').value;

    // Submit form silently to hidden iframe
    setTimeout(() => {
      form.submit(); 
      // Then redirect to payment.php
      window.location.href = 'payment.php?price=' + encodeURIComponent(price);
    }, 100); // wait briefly so form can begin submitting
  }
</script>

<iframe name="hidden_iframe" style="display:none;"></iframe>

</body>
</html>