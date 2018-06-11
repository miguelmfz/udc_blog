<?php require 'banner.php'; ?>
<div class="clearfix"></div><br>
<div class="container">
<?php foreach ($bestBlogs as $value) { ?>
    <div class="col-md-12">
    <div class="card flex-md-row mb-4  box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <h3 class="">
                <a class="text-primary" href="index.php?controller=blog&action=read&blog=<?= $value->id ?>">
                <?= $value->titulo; ?> </a>
            </h3>
           
            <p class="card-text  mb-auto"><?= $value->intro; ?></p>
            <div class="row">   
                <a href="#" class="col-sm d-md-inline-block text-muted"> 
                    <img class="card-img-right flex-auto rounded-circle img-perfil d-none d-md-inline-block" src="./global/img/img_perfil/<?= $value->img_perfil; ?>" >
                    <strong class="d-inline-block mb-2 text-primary"><?= $value->user; ?></strong>                
                </a>
                <div class="col-md-auto flex-auto d-md-inline-block text-muted">
                    <strong class="d-inline-block mt-2 text-center   "><?= $helper->obtenerFechaEnLetra($value->fechaPublicacion); ?></strong>
                </div>
            </div>
          
        </div>
        <div>
        
        </div>
          
    </div>
</div>
<?php } ?>
</div>

