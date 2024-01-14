<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/log.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    body{
    background-size: cover;
      background-image : url('img/app/img2.jpg');
      background-repeat: no-repeat;
      background-blend-mode:darken ;
      font-family: "Open Sans", sans-serif;
 
    }
</style>
</head>
<body>
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="login-container">
        <label>
           
              <div class="sun-icon-wrapper">
                <div class="iconify sun-icon" data-icon="feather-sun" data-inline="false"></div>
              </div>
              <div class="toggle-button" ></div>
              <div class="moon-icon-wrapper">
                
                <div class="iconify moon-icon" data-icon="feather-moon" data-inline="false"></div>
              </div>
            </div>
          </label>
          
        
        <h2>Login to Your Account</h2>
        <form>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Ex@gmail.com" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="password " required>
            
            <button class="butt" type="submit">Login</button>
            <br>
        </form>
        <br>
        <a href="reset">Forgot password?</a>
        <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
    </div>
  </form>
</body>
</html>