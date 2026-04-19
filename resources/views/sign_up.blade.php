<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      width: 350px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
    }

    .form-group input:focus {
      border-color: #4facfe;
    }

    .btn {
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

    .btn:hover {
      background: #00c6ff;
    }

    .footer {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .footer a {
      color: #4facfe;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }

  </style>
</head>

<body>

  <div class="container">
    <h2>Create Account</h2>

    <form>
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" placeholder="Enter your name" required>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" placeholder="Enter your email" required>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" placeholder="Enter your password" required>
      </div>

      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" placeholder="Confirm your password" required>
      </div>

      <button class="btn">Sign Up</button>
    </form>

    <div class="footer">
      Already have an account? <a href="{{url('/login')}}">Login</a>
    </div>
    <div class="footer">
      Already have an account? <a href="{{route('sign.in.route')}}">Login</a>
    </div>
  </div>

</body>
</html>
