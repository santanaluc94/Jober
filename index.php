<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/ >
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/ >
	
    <link href="_css/login.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="_css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
	    <div class="container">
	        <a class="navbar-brand" href="#">Jober</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            <ul class="navbar-nav ml-auto">
	                <li class="nav-item">
	                    <a class="nav-link" href="index.php">Login</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="form.php">Register</a>
	                </li>

	            </ul>
	        </div>
	    </div>
	</nav>

	<main class="login-form">
	    <div class="cotainer">
	        <div class="row justify-content-center">
	            <div class="col-md-8">
	                <div class="card">
	                    <div class="card-header">Login</div>
	                    <div class="card-body">
	                        <form action="" method="post">
	                            <div class="form-group row">
	                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
	                                <div class="col-md-6">
	                                    <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
	                                </div>
	                            </div>

	                            <div class="form-group row">
	                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
	                                <div class="col-md-6">
	                                    <input type="password" id="password" class="form-control" name="password" required>
	                                </div>
	                            </div>

	                            <div class="form-group row">
	                                <div class="col-md-6 offset-md-4">
	                                    <div class="checkbox">
	                                        <label>
	                                            <input type="checkbox" name="remember"> Remember Me
	                                        </label>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="col-md-6 offset-md-4">
	                                <button type="submit" class="btn btn-primary">
	                                    Register
	                                </button>
	                                <a href="#" class="btn btn-link">
	                                    Forgot Your Password?
	                                </a>
	                            </div>
	                    	</form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</main>

	<?php	

	?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="_js/bootstrap.min.js"></script>
</body>
</html>  