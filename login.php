<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

    <div class="header">
        <span>
            <center><h2 class="text-dark">Zalego Training|Admin Login</h2></center>
        </span>
    
    </div>

    <div class="container">
    <form action="login.php" style="width: 450px; padding: auto;">
        <main class=" m-5 bg-light rounded-3">
                    
            <center><img src="images/zalego.jpg" alt="zalego" height="100" width="100" class="rounded-circle"></center>
            <a href="#" class="navbar-trigger">
                <span></span>
            </a>
        </main>  

        <div class="row">
            <div class="mb-3 col-lg-6">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" placeholder="input your username">
            </div>
            <div class="mb-3 col-lg-6">
                <label for="password" class="form-label">password:</label>
                <input type="password" class="form-control" placeholder="input your password">
                <br>
                <br>
                <button class="btn btn-primary">Submit</button>
            </div>
        </div> 
        <br>
        <p>
            Have No account? sign up<a href="register.php">Here</a>
        </p>

        
        
        
    </form>
    
    </div>
    
    



    
    

    <!--srtipt down-->
    
    <script src="https://kit.fontawesome.com/b3c74f86fe.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
    <!-- < script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    
</body>
</html>