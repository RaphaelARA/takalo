<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="icon" href="<?php echo base_url('assets/img/.png'); ?>">
    <title>Login Takalo Takalo</title>
</head>
<body>
    <nav id="mainNav" class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="<?= base_url('assets/img/exchange2.png')?>" width="35px" height="35px">
                <span>Takalo </span>
            </a>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="">Log In</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-50" src="<?php echo base_url('assets/img/logimage.jpg'); ?>" /></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1"><strong>User Login</strong><br /></span></h2>
                    <form method="post" action="<?php echo base_url('index.php/login/check'); ?>">
                        <div class="mb-3"><input class="shadow form-control" type="email" name="email" placeholder="Email" value="Diarisoa@gmail.com" /></div>
                        <div class="mb-3"><input class="shadow form-control" type="password" name="password" placeholder="Password" value="Diari" /></div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Se Connecter</button></div>
                        <p class="text-muted"></p>
                    </form>
                    <button><a href='admin'>log like admin </a></button>

                    <div class="mb-2">
                            <p>Vous n'avez pas de compte? 
                                <a class="btn btn-secondary shadow" role="button" href="<?php echo base_url('index.php/sign_up'); ?>">S'inscrire</a>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>