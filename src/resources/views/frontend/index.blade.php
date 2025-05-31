<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
    }
    .container h1 {
      font-size: 2rem;
      margin-bottom: 20px;
    }
    .container p {
      font-size: 1rem;
      margin-bottom: 30px;
      color: #555;
    }
    .btn {
      display: inline-block;
      padding: 12px 24px;
      margin: 10px;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }
    .btn-register {
      background-color: #4CAF50;
      color: #fff;
    }
    .btn-register:hover {
      background-color: #45a049;
    }
    .btn-login {
      background-color: #008CBA;
      color: #fff;
    }
    .btn-login:hover {
      background-color: #007bb5;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to Our Platform</h1>
    <p>Please choose an option below to continue.</p>
    <a href="/register" class="btn btn-register">Register</a>
    <a href="/login" class="btn btn-login">Login</a>
  </div>
</body>
</html>
