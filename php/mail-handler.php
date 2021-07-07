<?php 
if(isset($_POST['submit'])){
    $mail = new PHPMailer(true);
    $mail->Host = 'ssl://smtp.office365.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';

    $to = "info@goitunified.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Staying Informed";
    $message = $first_name . " " . $last_name . ". Email address: " . $from ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
