<div class="clearfix"></div><br>
<?php foreach ($blog as $value) { ?>
<div class="container-fluid blog-header-init" >
    <div class="container">
        <div class="row">
            <div class="col-sm-2 mb-2 mt-3">
                <img  class="card-img-right flex-auto rounded-circle  d-none d-md-inline-block" src="./global/img/img_perfil/<?= $value->img_perfil; ?>" >                
            </div>
            <div class="col-sm mb-6">
                <h1 class='d-none d-md-inline-block text-white' ><?= $value->titulo; ?></h1><br>
                <p class='text-white'><?= $value->intro; ?></p>
                <strong class="d-block  mb-2 text-primary"><hr>@<?= $value->user; ?></strong>                
            </div>    
        </div>
    </div>
</div>
<div class="clearfix"></div><br>
<div class="container">
    <p>Por: <?= $value->name; ?> <?= $value->apellido; ?> | <?= $helper->obtenerFechaEnLetra($value->fechaPublicacion); ?></p>
        <div>
        <?= $value->contenido; ?>
        </div>
</div>
<?php } ?>