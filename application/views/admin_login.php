<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="icon" href="<?= base_url('assets/img/responsabilite-sociale.png')?>">
    <title>Login Admin Takalo Takalo</title>
</head>
<body>
    <nav id="mainNav" class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?= base_url('assets/img/exchange2.png')?>" width="35px" height="35px">
                <span>Takalo</span>
            </a>
        </div>
    </nav>
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-50" src="<?= base_url('assets/img/logimage2jpg.jpg')?>" /></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1"><strong>Admin Login</strong><br /></span></h2>
                    <form method="post" action="<?= base_url('index.php/admin/check')?>"">
                        <div class="mb-3"><input class="shadow form-control" type="email" name="email" placeholder="Email" value="Daniel@gmail.com" /></div>
                        <div class="mb-3"><input class="shadow form-control" type="password" name="password" placeholder="Password" value="Daniel" /></div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Log in</button></div>
                        <p class="text-muted"></p>
                        <button><a href='Login'>log in like user</a></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>