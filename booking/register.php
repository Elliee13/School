<?php
session_start();
include 'db.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'] ?? '';
    $lastName = $_POST['lName'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
        $_SESSION['message'] = 'All fields are required!';
        $_SESSION['message_type'] = 'error';
        header("Location: ");
        exit;
    }

    if ($password !== $confirmPassword) {
        $_SESSION['message'] = 'Passwords do not match!';
        $_SESSION['message_type'] = 'error';
        header("Location: login.php");
        exit;
    }

    $hashedPassword = md5($password);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        $_SESSION['message'] = 'Email Address Already Exists!';
        $_SESSION['message_type'] = 'error';
    } else {
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password) 
                        VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";

        if ($conn->query($insertQuery) === TRUE) {
            $_SESSION['message'] = 'Sign-Up Successful!';
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['message'] = 'Error: ' . $conn->error;
            $_SESSION['message_type'] = 'error';
        }
    }

    header("Location:  login.php");
    exit;
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['pass'] ?? '';

    if (empty($email) || empty($password)) {
        $_SESSION['message'] = 'All fields are required!';
        $_SESSION['message_type'] = 'error';
        header("Location: ");
        exit;
    }

    $hashedPassword = md5($password);

    $query = "SELECT * FROM users WHERE email='$email' AND password='$hashedPassword'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: homepage.php");
        exit;
    } else {
        $_SESSION['message'] = 'Invalid email or password!';
        $_SESSION['message_type'] = 'error';
        header("Location: reserve.php");
        exit;
    }
}
?>
