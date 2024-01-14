<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/reset.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<style>
    body{
      background-size: cover;
      background-image : url('img/app/img2.jpg');
      background-repeat: no-repeat;
      background-blend-mode:darken ;
      font-family: "Open Sans", sans-serif;
 
      font-weight: 300px;
    }
    .login-container button{
        width: 240px;
    margin-left: 0.1px;
    padding: 10px;
    color: #0b0c0c;
    border:60cm;
    cursor: pointer;
    border-radius: 500px;
    font-size: 20px;
    font-family: "Poppins", sans-serif;
}

    
    .login-container button:hover {
  background-color: #477899;
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);
}
.login-container button:active {
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}

    

</style>
</head>
<body>

    <div class="login-container">
            <h2> Forget  password ? <i class="fa-solid fa-lock fa-beat" style="color: #171717;"></i></h2>
        <p  style="color: #f1f0f0;margin-left:10px">You can reset your passwor here </p>
        <form>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Ex@gmail.com" required>
            <a href="login">Sign  In</a>
            <br> <br>

           
            <button class="butt" type="submit">Send my password </button>
        
            <br>
        </form>
        <br>
    </div>
</body>
</html>