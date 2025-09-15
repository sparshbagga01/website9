<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && $_POST['email'] != '') {
        // Customer Info
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $number = $_POST['number'];
        $apartment = $_POST['apartment'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];

        $product_name = $_POST['product_name'];
        $product_quantity = $_POST['product_quantity'];
        $product_unit_price = $_POST['product_unit_price'];
        $product_total_price = $_POST['product_total_price'];

        // Example email content or DB insertion:
        $message = "
        Product: $product_name
        Quantity: $product_quantity
        Unit Price: ₹$product_unit_price
        Total Price: ₹$product_total_price
        ";

        // Email Configuration
        $to = "sisodiyadurgapack@gmail.com";
        $bcc = "sbagga.oph@gmail.com";
        $sub = "Inquiry from website (Online Promotion House)";
        $msg = "
        <html>
        <body>
            <h1 style='text-align: center; color: #e5e5e5; background-color: #3f51b5; padding: 1rem; margin: 0;'>Inquirer Details</h1>
            <div style='border: 5px solid #039be5; background:#151515'>
                <table style='margin: 1rem; border-collapse: collapse; color: white; width: 100%;'>
                    <tbody>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>Email:</td><td style='padding: 10px; border: 1px solid #ccc;'>$email</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>First Name:</td><td>$first_name</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>Last Name:</td><td>$last_name</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>Address:</td><td>$address</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>Phone Number:</td><td>$number</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>Apartment:</td><td>$apartment</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>City:</td><td>$city</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>State:</td><td>$state</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>Pincode:</td><td>$pincode</td></tr>

                        <!-- Product Details -->
                        <tr><td colspan='2' style='padding: 10px; font-size: 18px; background: #2196f3; text-align: center;'>Product Details</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>Product Name:</td><td>$product_name</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>Quantity:</td><td>$product_quantity</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>Unit Price:</td><td>₹" . number_format($product_unit_price) . "</td></tr>
                        <tr><td style='padding: 10px; border: 1px solid #ccc;'>Total Price:</td><td><strong>₹" . number_format($product_total_price) . "</strong></td></tr>
                    </tbody>
                </table>
                <p style='text-align:center; color:white;'><b>Thank you!</b></p>
                <p style='text-align:center; color:white;'><b>Team Online Promotion House</b></p>
            </div>
        </body>
        </html>";
                      
        // Send Email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= "From: noreply@durgapackagingmachine.com" . "\r\n";
        $headers .= "Bcc: $bcc" . "\r\n";

        mail($to, $sub, $msg, $headers);
        $send = true;
        ?>
        <script>alert("Your mail has been sent successfully.");</script>
        <?php
        echo "<script type='text/javascript'>window.top.location='https://www.siddhirubber.net/'</script>";
        $price = urlencode($_POST['product_total_price']);
        echo "<script>window.top.location.href='https://www.siddhirubber.net/mumbai/payment.php?price={$price}';</script>";
exit;
    } else {
        header('Location: index.html');
        exit;
    }
}
?>
