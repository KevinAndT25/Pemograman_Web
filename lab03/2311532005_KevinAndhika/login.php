<?php
session_start();

$emailErr = $passwordErr = "";
$email = $password = "";
$loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email harus diisi";
    } else {
        $email = trim($_POST["email"]);
    }
    
    if (empty($_POST["password"])) {
        $passwordErr = "Password harus diisi";
    } else {
        $password = $_POST["password"];
    }
    
    if (empty($emailErr) && empty($passwordErr)) {
        if (isset($_SESSION["registered_user"])) {
            foreach ($_SESSION["registered_user"] as $user) {
                if ($user["email"] === $email && password_verify($password, $user["password"])) {
                    $_SESSION["loggedin_user"] = $user;
                    header("Location: dashboard.php");
                    exit;
                }
            }
        }
        $loginError = "Email atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .container {
            background: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            width: 350px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .login-error {
            color: red;
            margin-bottom: 10px;
        }
        .login-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .login-btn:hover {
            background: #0056b3;
        }
        .signin-text {
            font-size: 14px;
            color: #007bff;
            cursor: pointer;
            margin-top: 10px;
            display: inline-block;
            text-decoration: none;
        }
        .signin-text:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if ($loginError): ?>
            <p class="login-error"><?php echo $loginError; ?></p>
        <?php endif; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <span class="error"><?php echo $passwordErr; ?></span>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <a href="registration.php" class="signin-text">Sign Up</a>
    </div>
</body>
</html>