
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $mail->Host = 'smtp.gmail.com'; 
    // $mail->SMTPAuth = true;
    // $mail->Username = 'silvansowino1@gmail.com';
    // $mail->Password = 'grthmlmwzwnjexfe'; 
    // $mail->SMTPSecure = 'tls'; 

    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $to = "oss@omilstaffingservices.com";
    $headers = "From: $username <$email>";
    $body = "Name: $username\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>

