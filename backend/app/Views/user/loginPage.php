<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Cafenod</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      color: #fff;
      background-color: #222; /* Dark theme */
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .form-container {
      background-color: #333; /* Dark card background */
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 2px 8px rgba(0,0,0,0.6);
      width: 350px;
      text-align: center;
    }

    h1 {
      font-size: 2rem;
      color: #D2B48C; /* Coffee gold */
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      text-align: left;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: none;
      border-radius: 5px;
      background-color: #444;
      color: #fff;
    }

    input:focus {
      outline: 2px solid #D2B48C;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 5px;
      background-color: #D2B48C;
      color: #222;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #c2a06f;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Login</h1>
    <form method="post" action="">
      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Password:</label>
      <input type="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
