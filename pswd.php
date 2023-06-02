<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #1b263b;
    }
    
    img {
    width: 20%;
    height: 20%;
    padding-top: 20px;
    padding-bottom: 10px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    }

    .container {
      max-width: 50%;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-top: 100px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    p{
        text-align: center;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 10px;
      padding-left: 10px;
    }

    input[type="email"],
    input[type="password"] {
      width: 95%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
      display: block;
      margin-right: auto;
      margin-left: auto;
    }

    input[type="submit"] {
      width: 95%;
      padding: 10px;
      background-color: #1b263b;
      color: #fff;
      font-size: 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      display: block;
      margin-right: auto;
      margin-left: auto;
    }

    input[type="submit"]:hover {
      background-color: #778da9;
    }

    .message {
      margin-top: 20px;
      text-align: center;
    }

    .success {
      color: #4CAF50;
    }

    .error {
      color: #FF0000;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="images/logo.png" alt="logo" class="img">
    <h2>Forgot Password</h2>
    <p>Please type in your email to reset your password.</p>
    <form id="forgotPasswordForm">
      <label for="email">Email</label>
      <input type="email" id="email" required>
      <input type="submit" value="Reset Password">
    </form>
    <div id="message" class="message"></div>
  </div>

  <script>
    function displayMessage(message, messageType) {
      var messageElement = document.getElementById("message");
      messageElement.textContent = message;

      if (messageType === "success") {
        messageElement.className = "message success";
      } else if (messageType === "error") {
        messageElement.className = "message error";
      }

      setTimeout(function() {
        messageElement.textContent = "";
        messageElement.className = "message";
      }, 5000);
    }
  </script>
</body>
</html>
