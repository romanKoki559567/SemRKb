<script defer src="public/js/script.js"></script>
<form method="post" action="?c=products&a=newproduct">

    <?php
    /** @var \App\Models\Product $data */
    if ($data->getId()) { ?>
        <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
    <?php } ?>
    <!--
    <div class="mb-3">
        <p id="err" class="form-label">Chyba</p>
    </div>
    -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nazov</label>
        <input id="idName" type="text" name="nazov" value="<?php echo $data->getNazov() ?>" class="form-control" placeholder="Nazov...">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fotka</label>
        <input id="idFoto" type="file" name="fotka" value="<?php echo $data->getFoto() ?>" class="form-control" placeholder="Fotka...">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cena</label>
        <input id="idCena" type="text" name="cena" value="<?php echo $data->getCena() ?>" class="form-control" placeholder="Cena...">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Popis</label>
        <input type="text" name="popis" value="<?php echo $data->getPopis() ?>" class="form-control" placeholder="Popis..."></input>
    </div>
    <input type="submit" id="subm" value="Odoslat">
</form>


