<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
            background-color: #2a2a2a;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #3a3a3a;
            padding: 15px 30px;
            color: #999;
            font-size: 18px;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 60px;
            width: 46px;
            height: calc(100vh - 60px);
            background-color: #1a1a1a;
            border-right: 1px solid #4a4a4a;
        }

        .icon-button {
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #5eb3e4;
            border: none;
            cursor: pointer;
            color: white;
            font-size: 20px;
        }

        .main-content {
            margin-left: 46px;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .registration-container {
            background-color: white;
            padding: 60px 80px;
            border-radius: 8px;
            width: 100%;
            max-width: 800px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 30px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        select {
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            background-color: #b8b8b8;
            color: #333;
            outline: none;
        }

        input::placeholder {
            color: #999;
        }

        .radio-group {
            display: flex;
            gap: 30px;
            margin-top: 8px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        input[type="radio"] {
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 30px 0;
        }

        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .checkbox-label {
            font-size: 14px;
            color: #333;
        }

        .register-button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #4d9fda 0%, #5e7ce8 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 32px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 20px;
            transition: opacity 0.3s;
        }

        .register-button:hover {
            opacity: 0.9;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #333;
        }

        .login-link a {
            color: #333;
            text-decoration: underline;
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23333' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            padding-right: 35px;
        }
    </style>
</head>
<body>
    <header>login page</header>
    
    <div class="sidebar">
        <button class="icon-button">📁</button>
    </div>

    <div class="main-content">
        <div class="registration-container">
            <h1>Create Account</h1>
            <p class="subtitle">Join us today and get started</p>

            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Select Type</label>
                        <div class="radio-group" required>
                            <div class="radio-option">
                                <input type="radio" id="student" name="userType" value="student" checked>
                                <label for="student">Student</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="faculty" name="userType" value="faculty">
                                <label for="faculty">Faculty</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="enrollment">Enrollment Number</label>
                        <input type="text" id="enrollment" name="enrollment" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select id="city" name="city" required>
                            <option value="">City</option>
                            <option value="mumbai">Mumbai</option>
                            <option value="delhi">Delhi</option>
                            <option value="bangalore">Bangalore</option>
                            <option value="kolkata">Kolkata</option>
                            <option value="chennai">Chennai</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" required>
                    </div>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms" class="checkbox-label">I agree to the Terms and Conditions</label>
                </div>

                <button type="submit" class="register-button">Register</button>

                <p class="login-link">Already have an account ? <a href="/workspaces/BTMS_CP_1/loginmarvin.php">Log in</a></p>
            </form>
        </div>
    </div>
</body>
</html>