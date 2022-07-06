<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
    <a href="index.php"></a>
    <title>Login</title>
</head>
<body>
   
    <div class="header fixed-top">
        <span>
            <center><h2 class="text-dark">Zalego Training|Admin Login</h2></center>
        </span>
    
    </div>
    <br>
    
    
    
    <form action="register.html" method="post" style="width: 450px; padding: auto;">
        <main class="bg-light rounded-3">
            <center><img src="images/zalego.jpg" alt="zalego" height="100" width="100" class="rounded-circle"></center>
            <a href="#" class="navbar-trigger">
                <span></span>
            </a>          
        </main>
        <div class="row">
            <div class="mb-3 col-lg-6">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" placeholder="input your username">
            </div>
        </div>    
        <div class="row">
            <div class="mb-3 col-lg-6">
                <label for="email" class="form-label">Email:</label>
                <input type="text" name="email" class="form-control" placeholder="input your email">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-6">
                <label for="password" class="form-label">password:</label>
                <input type="password" name="password" class="form-control" placeholder="input your password">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-6">
                <label for="confirmpassword" class="form-label">Confirm password:</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm your password">
                <button class="btn btn-primary">Submit</button>
            </div>                  
        </div>          
        <br>
        <p>
            Have No account? sign up<a href="login.html">Here</a>
        </p>
    </form>

    <!--srtipt down-->
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b3c74f86fe.js" crossorigin="anonymous"></script>

</body>
</html>

<?php



?>