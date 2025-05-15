<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo "Hello, $name! You are $age years old.";
} else {
    echo "Please fill out the form first.";
}
?>