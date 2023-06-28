<?php
const ADMIN_LOGIN = 'admin';
const ADMIN_PASSWORD = 'admin';

function login($login, $password)
{
    if ($login === ADMIN_LOGIN && $password === ADMIN_PASSWORD) {
        $_SESSION['authorized'] = true;
        return true;
    }
    return false;
}

function isAuthorized()
{
    return isset($_SESSION['authorized']) && $_SESSION['authorized'] === true;
}

function logout()
{
    unset($_SESSION['authorized']);
}

if (isset($_POST['login']) && isset($_POST['password'])) {
    login($_POST['login'], $_POST['password']);
}

if (isAuthorized()) {
    header("Location: admin.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>

    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Auth</title>
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>WebStudio</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="../script.js"></script>


    
    
    
   
    
    
    
<style>
    
    .sub_block {
  background-color: #fff;
  border: 2px solid orange;
  border-radius: 10px;
  margin: 0 auto;
  max-width: 400px;
  padding: 20px;
  text-align: center;
  margin-top: 100px;
}


body {
      
      background-image: url('../R.jpg');
      background-repeat: repeat;
      background-size: cover;
      
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 2px solid #ff9800;
      border-radius: 10px;
      background-color: rgba(0, 0, 0, 0.7);
      color: #fff;
      text-align: center;
      margin-top: 100px;
      
    }
    
    h1 {
      font-size: 36px;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px #000;
      color: #fff;
      background-color: #000;
    }
    
    
    
    .btn {
      background-color: #ff9800;
      color: #fff;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      
    }
    
    .btn:hover {
      background-color: #ff5722;
      
    }
    .form-check-label {
      color: #000;
    }
  </style>
</head>
<body>
    <header>
        
<div class="mobile">
    <div>
        <span></span>
        <span></span>
        <span></span>
    </div>
    
</div>
    </header>
    <main>



</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./main.js"></script>






<div>
  <a class="btn btn-light" href="../index.html" role="button">Back to Home Page</a>
</div>
    <section class="sub_block new_dex">
       <form method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Login</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
        <small id="emailHelp" class="form-text text-muted">Please sign in</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign In</button>
</form>

    </section>
    </main>
    <?php 
    if (isAuthorized()) {
        header("Location: admin.php");
        exit;
    }
    ?><footer>
    
</footer>

</body>
</html>
