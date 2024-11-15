<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'modal.php'; ?>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    
        body {
            background-color: #435165;

            height: 100vh;
            margin: 0;
        }
        
        .login {
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            box-shadow: 0 0 9px rgba(0, 0, 0, 0.3);
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
        }

        .login h1 {
            text-align: center;
            color: #5b6574;
            font-size: 24px;
            margin-bottom: 20px;
            border-bottom: 1px solid #dee0e4;
            padding-bottom: 10px;
        }

        .login form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login form label {
            display: none; /* Icons are hidden but kept for accessibility */
        }

        .login form input[type="text"],
        .login form input[type="password"] {
            width: 100%;
            max-width: 310px;
            height: 50px;
            border: 1px solid #dee0e4;
            margin-bottom: 20px;
            padding: 0 15px;
            border-radius: 4px;
            font-size: 16px;
            color: #333333;
        }

        .login form input[type="submit"] {
            width: 100%;
            max-width: 310px;
            padding: 15px;
            margin-top: 10px;
            background-color: #3274d6;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            color: #ffffff;
            font-size: 16px;
            transition: background-color 0.2s;
        }

        .login form input[type="submit"]:hover {
            background-color: #2868c7;
        }

        .register {
            text-align: center;
            margin-top: 20px;
        }

        .register span {
            font-size: 14px;
            color: #333333;
        }

        .register a {
            color: #3274d6;
            text-decoration: none;
            font-weight: bold;
        }

        .register a:hover {
            text-decoration: underline;
        }
</style>
    
</head>
<body>
    <?php include 'header_admin.php';?>
    <div class="login">
        <h1>Login</h1>
        <form action="authenticate.php" method="post">
            <label for="username"><i class="fas fa-user"></i></label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password"><i class="fas fa-lock"></i></label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" value="Login">
        </form>
        <div class="register">
            <span>Don't have an account? <a href="register_form.php">Register here!</a></span>
        </div>
    </div>
</body>
</html>
