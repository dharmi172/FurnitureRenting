<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            display:flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #d6e7db;
            font-family: Arial, sans-serif;
            background-image: url("https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvcm00MjItMDQ3LWtxOTJ3eDl5LmpwZw.jpg");
            background-size: contain;

        }

        .login-container {
            display: flex;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            max-width: 700px;
            background:rgb(255, 255, 240);
        }

        .login-form {
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        
        }

        .login-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            padding: 10px;
            margin-bottom: 5px;
        }

        .login-form label {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            margin-bottom: 25px;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        .login-form a {
            color: #4e4e4e;
            text-decoration: none;
            font-size: 14px;
        }

        .login-form .btn {
            padding: 10px;
            font-size: 16px;
            background: black;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .image-section {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #245954;
            padding: 40px;
            flex: 1;
        }

        .image-section img {
            max-width: 100%;
            border-radius: 8px;
        }

        .image-section p {
            color: #fff;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Log In </h2>

            <form>
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" placeholder="Yourname@gmail.com" required>
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" placeholder="xxxxxx" required>
                <a href="#">Forgot Password</a>
                <button type="submit" class="btn">Log In</button>
                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
        <div class="image-section">
            <img src="CHAIR.JPG.png" alt="Chair">
        </div>
    </div>
</body>
</html>
