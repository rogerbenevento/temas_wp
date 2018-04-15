<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso Wordpress</title>

    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    
    <!-- Header -->
    <header>
        <div class="barra-topo container">
            <div class="row">
                <div class="redes-sociais col-md-4">Redes Sociais</div>
                <div class="pesquisa col-md-8">Pesquisa</div>
            </div>
        </div>

        <div class="area-menu">
            <div class="logo">Logo</div>
            <div class="menu-principal">Menu</div>
        </div>
    </header>
    <!-- End Header -->