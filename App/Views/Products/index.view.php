
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Košík</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        ešte neni
    </div>
</div>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="public/images/zena.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="public/images/muz.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="public/images/deti.jpg" class="d-block w-100">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="informacie">
    <div class="card info1" style="max-width: 25rem;">
        <div class="text-center card-body text-dark">
            <h5 class="card-title">Doprava zadarmo od 50€</h5>
            <p class="card-text"> Všetky objednávky v hodnote nad 50€ odosielame zadarmo bez rozdielu na vybraný spôsob platby a doručenia</p>
        </div>
    </div>

    <div class="card info1" style="max-width: 25rem;">
        <div class="text-center card-body text-dark">
            <h5 class="card-title">Záruka našej ceny</h5>
            <p class="card-text">Máme najlepšie ceny, ale keď náhodou najdeš ten istý produkt v inom e-shope a s nižšiou cenou - špeciálne pre teba znížime jeho cenu!</p>
        </div>
    </div>

    <div class="card info1" style="max-width: 25rem;">
        <div class="text-center card-body text-dark">
            <h5 class="card-title">14 dní na vrátenie tovaru</h5>
            <p class="card-text">Na vrátenie produktu máš 14 dní do dňa obdržania zásielky.</p>
        </div>
    </div>
</div>

<?php

use App\Core\IAuthenticator;
use App\Models\Product;
/** @var IAuthenticator $auth */
/** @var Product[] $data */
?>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-4 ms-0 me-0">
        <?php
        foreach ($data as $product) { ?>
                <div class="col">
                    <div class="card h-100 " >
                        <!--
                        <?php if ($product->getFoto()) { ?>
                            <img src="<?php echo $product->getFoto()  ?>" class="card-img-top" alt="...">
                        <?php } ?>
                        -->
                        <h5 class="card-title">
                            <?php echo $product->getNazov()  ?>
                        </h5>
                        <div class="card-body">
                            <p class="card-text">
                                <?php echo $product->getPopis()  ?>
                            </p>
                            <p class="card-text">
                                <?php echo $product->getCena()  ?> €
                            </p>
                            <?php if($auth->isLogged()) { ?>
                                <a href="?c=products&a=delete&id=<?php echo $product->getId() ?>" class="btn btn-danger">Vymaž</a>
                                <a href="?c=products&a=edit&id=<?php echo $product->getId() ?>" class="btn btn-warning">Uprav</a>
                            <?php }?>
                        </div>
                    </div>
                </div>
        <?php } ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Spoločnosť</h4>
                <ul>
                    <li><a href="#">O nás</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Pomoc</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">reklamacia</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Kontakt</h4>
                <ul>
                    <li><a href="#">Telefónne číslo: 0905 987 545</a></li>
                    <li><a href="#">Mail: MrkvaJozo@gmail.com</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Spôsob platby</h4>
                <ul>
                    <li><a href="#">Cash</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
