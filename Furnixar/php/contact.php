<?php
session_start();

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo '<div class="error_message">Método de solicitação inválido.</div>';
    exit;
}

// Check CSRF token
$posted_csrf = $_POST['csrf_token'] ?? '';
if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $posted_csrf)) {
    echo '<div class="error_message">Envio inválido. Atualize a página e tente novamente.</div>';
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
    echo '<div class="error_message">Informe o seu nome.</div>';
    exit;
}
if ($email === '') {
    echo '<div class="error_message">Informe o seu e-mail.</div>';
    exit;
}
if ($number === '') {
    echo '<div class="error_message">Informe o seu telefone.</div>';
    exit;
}
if ($subject === '') {
    echo '<div class="error_message">Informe um assunto.</div>';
    exit;
}
if ($Message === '') {
    echo '<div class="error_message">Digite a sua mensagem.</div>';
    exit;
}

// Validate email using built-in filter
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<div class="error_message">Você informou um e-mail inválido. Tente novamente.</div>';
    exit;
}

// Prevent email header injection (no CR or LF in email/name/subject)
if (preg_match('/[\r\n]/', $email) || preg_match('/[\r\n]/', $name) || preg_match('/[\r\n]/', $subject)) {
    echo '<div class="error_message">Entrada inválida detectada.</div>';
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
$mail_subject = "Você foi contatado por {$safe_name} - " . ($safe_subject ?: 'Sem assunto');
$mail_body    = "Nome: {$safe_name}\n";
$mail_body   .= "E-mail: {$email}\n";
$mail_body   .= "Telefone: {$number}\n";
$mail_body   .= "Assunto: {$safe_subject}\n\n";
$mail_body   .= "Mensagem:\n{$safe_Message}\n";

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
    echo "<h3>E-mail enviado com sucesso.</h3>";
    echo "<p>Obrigado <strong>" . escape_out($name) . "</strong>, sua mensagem foi enviada para nós.</p>";
    echo "</div>";
    echo "</fieldset>";
} else {
    echo '<div class="text-red-600">ERRO! Não foi possível enviar o e-mail. Tente novamente mais tarde.</div>';
}