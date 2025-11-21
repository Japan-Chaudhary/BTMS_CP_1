<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #2b2b2b;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #f5f5f5;
            border: 3px solid #4a90e2;
            border-radius: 8px;
            width: 100%;
            max-width: 1100px;
            padding: 80px 150px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #4a90e2;
            font-size: 56px;
            text-align: center;
            margin-bottom: 80px;
            font-weight: 500;
        }

        .form-group {
            margin-bottom: 40px;
        }

        label {
            display: block;
            font-size: 24px;
            font-weight: 600;
            color: #000;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 18px 20px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            background-color: #d9d9d9;
            outline: none;
        }

        input:focus {
            background-color: #cecece;
        }

        .forgot-password {
            text-align: right;
            margin-top: 15px;
        }

        .forgot-password a {
            color: #4a90e2;
            text-decoration: none;
            font-size: 16px;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .login-button {
            width: 100%;
            padding: 18px 20px;
            font-size: 20px;
            font-weight: 600;
            color: white;
            background-color: #4a90e2;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 40px;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #357abd;
        }

        .create-account {
            text-align: center;
            margin-top: 60px;
            font-size: 18px;
            color: #333;
        }

        .create-account a {
            color: #4a90e2;
            text-decoration: none;
            margin-left: 5px;
        }

        .create-account a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form id="loginForm">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="xyz@gmail.com" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <div class="forgot-password">
                <a href="#" onclick="return false;">Forget password ?</a>
            </div>
        </div>

        <a href="/workspaces/BTMS_CP_1/dashboardmarvin.php"><button class="login-button">Login</button></a>

        <div class="create-account">
            Don't have account ? <a href="/workspaces/BTMS_CP_1/regestrationmarvin.php">Create Account</a>
        </div>
        </form>
    </div>
</body>
</html>
           
           