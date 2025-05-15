<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Welcome! Your email is: $email <br>";
    echo "Your password is: $password <br>";
} else {
    echo "Please submit the form first.";
}
