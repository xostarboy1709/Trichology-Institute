<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $number = htmlspecialchars($_POST["number"]);
    $address = htmlspecialchars($_POST["address"]);
    $state = htmlspecialchars($_POST["state"]);
    $pincode = htmlspecialchars($_POST["pincode"]);
    $dateofbirth = htmlspecialchars($_POST["dateofbirth"]);
    $qualification = htmlspecialchars($_POST["qualification"]);
    $guardiansnumber = htmlspecialchars($_POST["guardiansnumber"]);
    $option = $_POST["option"];
    
    $to = "info@intentinstitute.com"; 
    $subject = "New Form Submission";
    $headers ="MIME-Version: 1.0" . "\r\n".
    "Content-Type: text/html; charset=UTF-8". "\r\n".
    "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n";
            
    
    $body = "<html><body>" .
    "<h2 style='color: #2c3e50;'>New Application Details</h2>" .
    "<table style='width: 100%; border-collapse: collapse;'>" .
    "<tr><td style='padding: 8px; border: 1px solid #ddd;'><strong>Name:</strong></td><td style='padding: 8px; border: 1px solid #ddd;'>$name</td></tr>" .
    "<tr><td style='padding: 8px; border: 1px solid #ddd;'><strong>Email:</strong></td><td style='padding: 8px; border: 1px solid #ddd;'>$email</td></tr>" .
    "<tr><td style='padding: 8px; border: 1px solid #ddd;'><strong>Number:</strong></td><td style='padding: 8px; border: 1px solid #ddd;'>$number</td></tr>" .
    "<tr><td style='padding: 8px; border: 1px solid #ddd;'><strong>Address:</strong></td><td style='padding: 8px; border: 1px solid #ddd;'>$address</td></tr>" .
    "<tr><td style='padding: 8px; border: 1px solid #ddd;'><strong>State:</strong></td><td style='padding: 8px; border: 1px solid #ddd;'>$state</td></tr>" .
    "<tr><td style='padding: 8px; border: 1px solid #ddd;'><strong>Pincode:</strong></td><td style='padding: 8px; border: 1px solid #ddd;'>$pincode</td></tr>" .
    "<tr><td style='padding: 8px; border: 1px solid #ddd;'><strong>Date of Birth:</strong></td><td style='padding: 8px; border: 1px solid #ddd;'>$dateofbirth</td></tr>" .
    "<tr><td style='padding: 8px; border: 1px solid #ddd;'><strong>Qualification:</strong></td><td style='padding: 8px; border: 1px solid #ddd;'>$qualification</td></tr>" .
    "<tr><td style='padding: 8px; border: 1px solid #ddd;'><strong>Guardian's Contact:</strong></td><td style='padding: 8px; border: 1px solid #ddd;'>$guardiansnumber</td></tr>" .
    "<tr><td style='padding: 8px; border: 1px solid #ddd;'><strong>Course:</strong></td><td style='padding: 8px; border: 1px solid #ddd;'>$option</td></tr>" .
    "</table>" .
    "</body></html>";
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>