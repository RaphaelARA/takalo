<!-- PAGE D'ACCUEIL -->     <!-- PAGE D'ACCUEIL -->      <!-- PAGE D'ACCUEIL -->

<!-- Header-->
    <header class="bg-dark pt-5 pb-2">
        <div class="container px-1 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Organisez des echanges</h1>
                <p class="lead fw-normal text-white-50 mb-0">Voyez par vous mêmes les objets disponibles</p>                
                <p class="lead fw-normal text-white-50 mt-5">
                    ou 
                    <button class="btn btn-outline-light">
                        <img src="<?php echo base_url('assets/img/plus.png'); ?>" width="35px" height="35px"> Ajoutez un objet
                    </button>
                </p>
            </div>
        </div>
    </header>

<!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($objets as $objet) { ?>
            
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo base_url($objet['photo'][0]); ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $objet['nom']; ?></h5>
                                <!-- Product price-->
                                <?php echo $objet['prixestimatif']; ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo base_url('index.php/echange?id='. $objet['idObjet']); ?>">Proposer d'echanger</a></div>
                        </div>
                    </div>
                </div>

            <?php } ?>

            </div>
        </div>
    </section>