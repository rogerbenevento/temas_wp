<?php
/**
 * Template Name: Páginas Internas
 */
?>

<?php get_header() ?>

    <!-- Content -->
    <div class="conteudo-wrapper">
        <main>
            <div class="conteudo container">
                <?php if (have_posts()) : ?>
                        
                    <?php while (have_posts()) : ?>
                        <?php the_post() ?>

                        <h1><?php the_title() ?></h1>
                        <!-- <p>Autor: <?php the_author() ?></p> -->
                        <p><?php the_content() ?></p>
                    <?php endwhile; ?>
                
                <?php else : ?>
                    <p>Não há nada pra mostrarmos ainda :(</p>
                <?php endif; ?>
            </div>
        </main>
    </div>
    <!-- End Content -->

<?php get_footer() ?>