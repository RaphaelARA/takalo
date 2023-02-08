<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="icon" href="<?= base_url('assets/img/responsabilite-sociale.png')?>">
    <title>Gestion de Catégorie</title>
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
                    <li class="nav-item"><a class="nav-link" href="#">connecte en tant que admin</a></li>
                </ul>

                <a class="btn  " role="button" href="#">Log Out</a>
            </div>
        </div>
    </nav>
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="card-body">
                <div class="row">
                    <h2 class="display-6  "><span class=""><strong>Gestion de Catégorie</strong><br /></span></h2>
                    <ul class="nav nav-tabs">
                        <?php foreach ($categories as $categorie) { ?>
                            <li class="nav-item">
                                <a class="nav-link m-2" aria-current="page" href="<?= base_url('index.php/categories?categories='. $categorie['idCategories']) ?>"><?=$categorie['nom'] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                    <table id="dataTable" class="table my-0">
                        <thead>
                            <tr>
                                <th>Nom Produit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($objet as $objets) { ?>
                            <tr>
                                <td><?=$objets['nom'] ?></td>
                                <td><a href="<?= base_url('index.php/categorie/categoriser?id='. $objets['idObjet']) ?>"><button class="btn btn-secondary shadow" type="button">Catégoriser</button></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>