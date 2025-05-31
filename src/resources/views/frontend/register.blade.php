<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Register</title>
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
    margin: 60px auto;
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
  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    outline: none;
    transition: border 0.3s ease;
  }
  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="password"]:focus {
    border-color: #4CAF50;
  }
  button {
    width: 100%;
    padding: 12px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  button:hover {
    background-color: #45a049;
  }
  .login-link {
    margin-top: 15px;
    text-align: center;
    font-size: 0.9rem;
  }
  .login-link a {
    color: #4CAF50;
    text-decoration: none;
  }
  .error-messages {
    color: red;
    margin-bottom: 15px;
  }
</style>
</head>
<body>

<div class="container">
  <h2>Create Account</h2>

  <!-- Error Messages -->
  @if ($errors->any())
    <div class="error-messages">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <!-- Success Message -->
  @if (session('success'))
    <div style="color: green; margin-bottom: 15px;">
      {{ session('success') }}
    </div>
  @endif

  <form method="POST" action="/register">
     @csrf
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" value="{{ old('name') }}" required />
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" value="{{ old('email') }}" required />
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required />
    </div>
    <div class="form-group">
      <label for="password_confirmation">Confirm Password</label>
      <input type="password" id="password_confirmation" name="password_confirmation" required />
    </div>
    <button type="submit">Register</button>
  </form>

  <div class="login-link">
    Already have an account? <a href="/login">Login here</a>
  </div>
</div>

</body>
</html>
