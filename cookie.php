<?php
session_start();

if (isset($_POST['submit'])) {
    // Save the user's information in a cookie
    setcookie('user_info', serialize($_POST), time() + 3600);

    // Redirect to the welcome page
    header('Location: doc_cookie.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
        }
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        .submit {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            background-color: #4CAF50;
            border: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>
        <label for="email">email:</label>
        <input type="text" name="email" id="email"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <input class="submit" type="submit" name="submit" value="Login">
    </form>
</body>
</html>