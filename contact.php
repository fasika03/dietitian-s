<?php
/**
 * contact.php — self-hosted form handler for Dietcare Hub
 *
 * Alternative to Formspree, for when you have real PHP hosting
 * (this will NOT work on GitHub Pages — GH Pages only serves static
 * files. Use this if you deploy to a host that runs PHP, e.g.
 * Hostinger, Bluehost, DreamHost, or a VPS.)
 *
 * SETUP:
 * 1. Set $recipient_email below to your real inbox.
 * 2. Upload this file to your PHP host alongside index.html.
 * 3. In index.html, change each <form action="..."> to point here:
 *      - Contact form:  action="contact.php"
 *      - Email signup:  action="contact.php"
 *    (Both can share this file — it detects which one was submitted.)
 *
 * LOCAL TESTING (XAMPP/localhost):
 * PHP's mail() function does NOT send real email on localhost unless
 * you've configured an SMTP relay in php.ini. Set $debug_mode to true
 * below and submissions will be saved to submissions_log.txt in this
 * same folder instead of trying to email — so you can confirm the
 * form is reaching the server correctly before setting up real
 * hosting. Set it back to false once you're on a real host.
 */

$recipient_email = "fiyorinaa16@gmail.com"; // real inbox
$debug_mode = true; // <-- set to false once on real hosting with working email

header("Access-Control-Allow-Origin: *");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method not allowed.");
}

function clean($value) {
    return htmlspecialchars(trim($value ?? ""), ENT_QUOTES, "UTF-8");
}

$name    = clean($_POST["name"] ?? "");
$email   = clean($_POST["email"] ?? "");
$message = clean($_POST["message"] ?? "");

// Basic validation
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit("A valid email address is required.");
}

// Detect which form was submitted: full contact form vs. email-only signup
$is_signup_only = empty($name) && empty($message);

if ($is_signup_only) {
    $subject = "New newsletter signup — Dietcare Hub";
    $body    = "New signup for the 7-Day Meal Reset guide:\n\nEmail: $email\n";
} else {
    $subject = "New contact form message — Dietcare Hub";
    $body    = "New message from the website contact form:\n\n"
             . "Name: $name\n"
             . "Email: $email\n\n"
             . "Message:\n$message\n";
}

if ($debug_mode) {
    // Local testing: write to a log file instead of sending email
    $entry = "[" . date("Y-m-d H:i:s") . "] $subject\n$body\n" . str_repeat("-", 40) . "\n";
    $written = file_put_contents(__DIR__ . "/submissions_log.txt", $entry, FILE_APPEND | LOCK_EX);

    if ($written !== false) {
        http_response_code(200);
        echo "Thanks! (Debug mode: saved to submissions_log.txt instead of emailing — real email sends once debug_mode is off on real hosting.)";
    } else {
        http_response_code(500);
        echo "Debug mode: could not write submissions_log.txt — check folder permissions.";
    }
    exit;
}

$headers = "From: no-reply@" . $_SERVER["HTTP_HOST"] . "\r\n"
         . "Reply-To: $email\r\n"
         . "Content-Type: text/plain; charset=UTF-8";

$sent = mail($recipient_email, $subject, $body, $headers);

if ($sent) {
    http_response_code(200);
    echo "Thanks! Your message has been sent.";
} else {
    http_response_code(500);
    echo "Something went wrong — please try again or reach out directly.";
}