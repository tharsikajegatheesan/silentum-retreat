<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php'; // Your DB connection if needed

    $name    = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags(trim($_POST["subject"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid input.";
        exit;
    }

    // (Optional) Save to database
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // (Optional) Send email
    $to = "silentumretreat@gmail.com";
    $headers = "From: $name <$email>\r\nReply-To: $email";
    mail($to, "Silentum Contact: $subject", $message, $headers);

    echo "Message sent"; // This triggers the alert in JS
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
