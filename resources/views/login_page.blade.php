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
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #4facfe, #00f2fe);
    }

    .login-container {
        background: white;
        padding: 40px;
        width: 100%;
        max-width: 380px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    .input-group {
        margin-bottom: 18px;
    }

    .input-group label {
        display: block;
        margin-bottom: 6px;
        font-size: 14px;
        color: #555;
    }

    .input-group input {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
        transition: 0.3s;
    }

    .input-group input:focus {
        border-color: #4facfe;
        outline: none;
        box-shadow: 0 0 5px rgba(79,172,254,0.4);
    }

    .options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
        margin-bottom: 20px;
    }

    .options a {
        text-decoration: none;
        color: #4facfe;
    }

    .options a:hover {
        text-decoration: underline;
    }

    .login-btn {
        width: 100%;
        padding: 12px;
        background: #4facfe;
        border: none;
        border-radius: 8px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    .login-btn:hover {
        background: #3a8ee6;
    }

    .signup {
        text-align: center;
        margin-top: 18px;
        font-size: 14px;
    }

    .signup a {
        color: #4facfe;
        text-decoration: none;
    }

    .signup a:hover {
        text-decoration: underline;
    }
</style>

</head>

<body>

<div class="login-container">
    <h2>Welcome Back</h2>

    <form>
        <div class="input-group">
            <label>Email</label>
            <input type="email" placeholder="Enter your email" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" placeholder="Enter your password" required>
        </div>

        <div class="options">
            <label><input type="checkbox"> Remember me</label>
            <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="login-btn">Login</button>
    </form>

    <div class="signup">
        Don’t have an account? <a href="{{url('/user/sign-up')}}">Sign up</a>
    </div>

    <div class="signup">
        Don’t have an account? <a href="{{route('basam.his.own.sign-up.route')}}">Sign up</a>
    </div>
</div>

</body>
</html>
