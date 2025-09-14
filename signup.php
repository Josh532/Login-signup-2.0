<!DOCTYPE html>
<html lang="en">
<head>
  <script defer src="./index.js"></script>
  <link rel="stylesheet" href="style.css?v=1">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <style>
    body {
      background-size: cover;
      background-image: url("https://4kwallpapers.com/images/wallpapers/lakeside-evening-deer-minimal-art-landscape-scenic-panorama-3840x2160-4585.png");
    }

    .error {
  color: #c0392b;
  font-size: 13px;
  margin-top: 6px;
  text-align: center;
}

.input-error {
  outline: 2px solid rgba(192,57,43,0.15);
}

.input-success {
  outline: 2px solid rgba(46,204,113,0.12);
}

.form-message {
  font-size: 15px;
}

  </style>
</head>
<body>
  <div class="container">
    <div class="intercontainer">
      <h1>Signup</h1>
 <form id="signup" novalidate>
  <div class="input-container">
    <input type="text" id="name" name="name" placeholder="Username">
    <!-- .error will be created automatically if missing -->
  </div>

  <div class="input-container">
    <input type="email" id="email" name="email" placeholder="Email">
  </div>

  <div class="input-container">
    <input type="password" id="password" name="password" placeholder="Password">
  </div>

  <div class="input-container">
    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
  </div>

  <button type="submit">Sign Up</button>
  
        <div class="alt">
          <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" width="40">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png" width="40">
        </div>
          <div class="links">
          <p>Already have an account?</p>
          <a href="login.php">Login</a>
        </div>

</form>
    </div>
  </div> 
</body>
</html>


