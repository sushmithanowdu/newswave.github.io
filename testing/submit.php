<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (strlen($username) < 3) {
        die("Error: Username must be at least 3 characters long.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format.");
    }

    if (strlen($password) < 6) {
        die("Error: Password must be at least 6 characters long.");
    }

    echo "Form submitted successfully!";
}
?>
