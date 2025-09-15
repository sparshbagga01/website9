<?php

if (isset($_POST['submit'])){
if (!empty($_POST['email']) && $_POST['email'] !='')
    {  
     
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$quantity = $_POST['quantity'];
$pieces = $_POST['pieces'];
$message = $_POST['message'];


        // $to = "sales@ryanofficesystems.in";
        // $bcc = "enquiry.onlinepromotionhouse@gmail.com ";
        // $sub = "Inquiry from website (Online Promotion House)";
        
        $to = "sisodiyadurgapack@gmail.com";
        $bcc = "sbagga.oph@gmail.com ";
        $sub = "Inquiry from website (Online Promotion House)";
        $msg = "<html>
                  <body>
                      <h1 style=' text-align: center; color: #e5e5e5;background-color: #3f51b5; padding: 1rem; margin: 0;'>Inquirer Details</h1>
                      <div style='border: 5px solid #039be5; background:#151515'>
                      <table style=' display: block; margin: 1rem; padding: 0; border-radius: 3px; border-collapse: collapse;'>
                         <tbody style='color: white; width: 100%;'>
                         
                            <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>Name: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $name . "</td>
                            </tr>
                            <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>Email: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $email . "</td>
                            </tr>
                            <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>Phone: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $phone . "</td>
                            </tr>
                             <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>City: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $city . "</td>
                            </tr>
                             <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>Quantity: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $quantity . "</td>
                            </tr>
                             <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>Pieces: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $pieces . "</td>
                            </tr>
                          
                            <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>Message: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $message . "</td>
                            </tr>
                           
                         </tbody>
                      </table>
                      <p style='text-align:center; color:white;'><b>Thank you !</b></p>
                      <p style='text-align:center; color:white;'><b>Team Online Promotion House.</b></p>
                      </div>
                   </body>
                </html>";

        // echo $msg ; die;
       $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= "From: noreply@avtarmechanicalworks.in" . "\r\n";
        $headers .= "Bcc: $bcc" . "\r\n";
        
        mail($to, $sub, $msg, $headers);
        $send = true;
         ?>
        <script>alert("Your mail has been sent");</script>
        <?php
      echo "<script type='text/javascript'>window.top.location='https://avtarmechanicalworks.in/contact.php'</script>";

       
    }
    else{
         $send = false; 
          header('Location: index.html');
    }
}
?>
