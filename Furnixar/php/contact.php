<?php
session_start();

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo '<div class="error_message">Invalid request method.</div>';
    exit;
}

// Check CSRF token
$posted_csrf = $_POST['csrf_token'] ?? '';
if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $posted_csrf)) {
    echo '<div class="error_message">Invalid form submission. Please refresh the page and try again.</div>';
    exit;
}

// Helper: safe output for messages
function escape_out($str) {
    return htmlspecialchars($str, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// Read raw inputs and trim
$name     = trim($_POST['name'] ?? '');
$email    = trim($_POST['email'] ?? '');
$number   = trim($_POST['number'] ?? '');
$subject  = trim($_POST['subject'] ?? '');
$Message = trim($_POST['Message'] ?? '');

// Basic server-side validation
if ($name === '') {
    echo '<div class="error_message">You must enter your name.</div>';
    exit;
}
if ($email === '') {
    echo '<div class="error_message">Please enter your email address.</div>';
    exit;
}
if ($number === '') {
    echo '<div class="error_message">Please enter your number address.</div>';
    exit;
}
if ($subject === '') {
    echo '<div class="error_message">Please enter a subject.</div>';
    exit;
}
if ($Message === '') {
    echo '<div class="error_message">Please enter your message.</div>';
    exit;
}

// Validate email using built-in filter
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<div class="error_message">You have entered an invalid e-mail address. Please try again.</div>';
    exit;
}

// Prevent email header injection (no CR or LF in email/name/subject)
if (preg_match('/[\r\n]/', $email) || preg_match('/[\r\n]/', $name) || preg_match('/[\r\n]/', $subject)) {
    echo '<div class="error_message">Invalid input detected.</div>';
    exit;
}

// Sanitize fields for email body (safe plain text)
$safe_name    = filter_var($name, FILTER_SANITIZE_STRING);
$safe_subject = filter_var($subject, FILTER_SANITIZE_STRING);
$safe_Message = preg_replace("/[\r\n]{2,}/", "\n", $Message); // normalize
$safe_Message = filter_var($safe_Message, FILTER_SANITIZE_STRING);

// Email destination — change to your real address
$to = "example@example.net"; // <-- update this

// Email subject/body
$mail_subject = "You have been contacted by {$safe_name} - " . ($safe_subject ?: 'No subject');
$mail_body    = "Name: {$safe_name}\n";
$mail_body   .= "Email: {$email}\n";
$mail_body   .= "Number: {$number}\n";
$mail_body   .= "Subject: {$safe_subject}\n\n";
$mail_body   .= "Message:\n{$safe_Message}\n";

// Wordwrap
$mail_body = wordwrap($mail_body, 70);

// Headers — sanitized
$sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);
$headers  = "From: " . $sanitized_email . "\r\n";
$headers .= "Reply-To: " . $sanitized_email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Attempt to send mail
$sent = false;
try {
    $sent = mail($to, $mail_subject, $mail_body, $headers);
} catch (Exception $e) {
    $sent = false;
}

if ($sent) {
    // Response HTML (escaped)
    echo "<fieldset>";
    echo "<div class='text-green-600'>";
    echo "<h3>Email Sent Successfully.</h3>";
    echo "<p>Thank you <strong>" . escape_out($name) . "</strong>, your message has been submitted to us.</p>";
    echo "</div>";
    echo "</fieldset>";
} else {
    echo '<div class="text-red-600">ERROR! Unable to send email. Please try again later.</div>';
}