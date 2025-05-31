<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Login</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
  }
  .container {
    width: 100%;
    max-width: 400px;
    margin: 80px auto;
    padding: 30px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }
  h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
  }
  .form-group {
    margin-bottom: 15px;
  }
  label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
  }
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    outline: none;
    transition: border 0.3s ease;
  }
  input[type="email"]:focus,
  input[type="password"]:focus {
    border-color: #008CBA;
  }
  button {
    width: 100%;
    padding: 12px;
    background-color: #008CBA;
    color: #fff;
    border: none;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  button:hover {
    background-color: #007bb5;
  }
  .register-link {
    margin-top: 15px;
    text-align: center;
    font-size: 0.9rem;
  }
  .register-link a {
    color: #008CBA;
    text-decoration: none;
  }
</style>
</head>
<body>

<div class="container">
  <h2>Login</h2>
    <form method="POST" action="/login">
        @csrf
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required />
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required />
    </div>
    <button type="submit">Login</button>
  </form>
  <div class="register-link">
    Don't have an account? <a href="/register">Register here</a>
  </div>
</div>

</body>
</html>
