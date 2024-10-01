<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['message'])) {
    echo '<p class="error-message">' . $_SESSION['message'] . '</p>';
    unset($_SESSION['message']);
}
?>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Reset and global styles */
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #435165;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register {
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            box-shadow: 0 0 9px rgba(0, 0, 0, 0.3);
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
        }

        .register h1 {
            text-align: center;
            color: #5b6574;
            font-size: 24px;
            margin-bottom: 20px;
            border-bottom: 1px solid #dee0e4;
            padding-bottom: 10px;
        }

        .register form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .register form label {
            display: none; /* Icons are hidden but kept for accessibility */
        }

        .register form input[type="text"],
        .register form input[type="password"],
        .register form input[type="email"] {
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

        .register form input[type="submit"] {
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

        .register form input[type="submit"]:hover {
            background-color: #2868c7;
        }

        .register .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #333333;
        }

        .register .login-link a {
            color: #3274d6;
            text-decoration: none;
            font-weight: bold;
        }

        .register .login-link a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            text-align: center;
            font-weight: bold;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    
    <div class="register">
        <h1>Register</h1>
        <form action="register.php" method="post" autocomplete="off">
            
            <!-- Username: must contain only letters, numbers, and underscores -->
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" 
                   pattern="[a-zA-Z0-9_]+" 
                   title="Username can only contain letters, numbers, and underscores" 
                   required>
            
            <!-- Password: must be between 8 and 20 characters -->
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" 
                   minlength="8" maxlength="20" 
                   title="Password must be between 8 and 20 characters" 
                   required>
            
            <!-- Email: using built-in HTML5 email validation -->
            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" name="email" placeholder="Email" required>
            
            <input type="submit" value="Register">
        </form>
        <div class="login-link">
            <span>Already have an account? <a href="login_form.php">Login here</a></span>
        </div>
    </div>
</body>
</html>
