<?php get_header() ?>

    <!-- Content -->
    <div class="conteudo">
        <main>
            <section class="slide container">Slide</section>

            <section class="servicos container">Serviços</section>

            <section class="meio container">
                <div class="row">
                    <aside class="barra-lateral col-md-3">Barra Lateral</aside>
                    <div class="noticias col-md-9">

                        <?php if (have_posts()): ?>
                        
                            <?php while (have_posts()): ?>
                                <?php the_post() ?>

                                <h1><?php the_title() ?></h1>
                                <p>
                                    Publicado em <?= get_the_date() ?>
                                    por <?php the_author() ?>
                                </p>
                                <p>Categorias: <?php the_category(' ') ?></p>
                                <p><?php the_tags('Tags: ', ', ') ?></p>
                                <p><?php the_content() ?></p>
                            <?php endwhile; ?>
                        
                        <?php else: ?>
                            <p>Não há nada pra mostrarmos ainda :(</p>
                        <?php endif; ?>

                    </div>
                </div>
            </section>

            <section class="mapa container">Mapa</section>
        </main>
    </div>
    <!-- End Content -->

<?php get_footer() ?>