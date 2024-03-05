<?php
    include "service/database.php";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if($db->query($sql)){
            echo "oke data masuk";
        }else {
            echo "data gagal masuk";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Login</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color:lightpink;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: #fff;
    padding: 40px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    color: #262626;
}

.input-container {
    margin-bottom: 20px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #dbdbdb;
    border-radius: 3px;
    outline: none;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #3897f0;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    outline: none;
}

button:hover {
    background-color: #3897f0cc;
}

p {
    margin-top: 15px;
}

a {
    color: #3897f0;
    text-decoration: none;
}

    </style>
</head>
<body>
    <div class="container">
        <form action="login.php" method="POST">
            <h2>Instagram</h2>
            <div class="input-container">
                <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="input-container">
                <input type="password" placeholder="Password" name="password"/>
            </div>
            <button type="submit"name="login">login</button>
            <p>Forgot password?</p>
            <p>Don't have an account? <a href="register.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>
