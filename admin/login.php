<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "user";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("connection_error");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the query to prevent SQL injection
    $sql = "SELECT * FROM login WHERE username=? AND password=?";
    $stmt = mysqli_prepare($data, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);


    $result = mysqli_stmt_get_result($stmt);


    if ($result !== false && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($row["usertype"] == "user") {
            header("location: user.php");
            exit();
        } elseif ($row["usertype"] == "admin") {
            header("location: admin.php");
            exit();
        } else {
            echo "User type is not recognized.";
        }
    } else {
        echo "Username or password is incorrect.";
    }



}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        .login-container h2 {
            margin-top: 0;
            text-align: center;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container form div {
            margin-bottom: 15px;
        }

        .login-container form label {
            font-weight: bold;
        }

        .login-container form input[type="text"],
        .login-container form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-container form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        .login-container form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .container {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            color: white;
            width: 300px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <div>
                <label>username</label>
                <input type="text" name="username" required>
            </div>


            <div>
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div>
                <input type="submit" value="login">
            </div>
        </form>
    </div>
</body>

</html>