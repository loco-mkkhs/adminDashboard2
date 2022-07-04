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
    
    <nav class="navbar navbar-expand-lg bg-light shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" >Zalego Academy</a>
            <buttton class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </buttton>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php"> Home</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="register.html">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="login.html">Login</a>
                    </li>
                </ul>
            </div>
        </nav>

    <div class="header">
		<a href="#" class="navbar-trigger">
            <span>
                <center><h2 class="text-dark">Zalego Training|Admin Login</h2></center>
            </span>
        </a>
	</div>
    
    <br>
    <div class="container-fluid p-5">
        <main class="mb-4 bg-light rounded-3">
            
            <center><img src="/images/zalego.jpg" alt="zalego" height="100" width="100" class="rounded-circle"></center>
            <a href="#" class="navbar-trigger">
                <span></span>
            </a>
        </main>
    </div>
    <form action="">
        <div class="row g-3">
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
            Have No account? sign up<a href="register.html">Here</a>
        </p>
    </form>


    <!--srtipt down-->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b3c74f86fe.js" crossorigin="anonymous"></script>

    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>