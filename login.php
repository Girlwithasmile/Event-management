<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button-group {
            text-align: center;
        }
        .button-group button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        .button-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="button-group">
                <button type="submit" name="role" value="student"><a href="Home2.php">Login as Student</a></button>
                <button type="submit" name="role" value="teacher"><a href="Home3.php">Login as Teacher</a></button>
                <button type="submit" name="role" value="committee"><a href="Home3.php">Login as Committee</a></button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Dummy user data for demonstration
    $users = [
        'student' => ['username' => 'student1', 'password' => 'pass123'],
        'teacher' => ['username' => 'teacher1', 'password' => 'pass123'],
        'committee' => ['username' => 'committee1', 'password' => 'pass123'],
    ];

    // Authenticate user
    if (isset($users[$role]) && $users[$role]['username'] == $username && $users[$role]['password'] == $password) {
        echo "Login successful as $role!";
        // Here you would typically redirect to a dashboard or home page for the specific role
        // header("Location: dashboard_$role.php");
    } else {
        echo "Invalid credentials or role.";
    }
}
?>
