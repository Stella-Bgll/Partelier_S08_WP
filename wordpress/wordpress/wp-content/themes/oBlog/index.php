<?php get_header(); ?>

<!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
<article class="card">
  <div class="card-body">
    <h2 class="card-title"><a href="the_permalink">Ivre, il refait tous les challenges en un week-end sans dormir.</a></h2>
    <?php if ( have_posts() ) : ?>
        <div class="posts">
            <?php while ( have_posts() ) : the_post(); ?>
            <article class="post">
            <h3><?php the_title(); ?></h3>
            <div class="post__meta">
              
             <strong class="post__author"><?php the_author(); ?></strong> 
              <time datetime="<?= get_the_date() ?>">le <?= get_the_date() ?></time>
            </div>
            <?php
            // Ci dessous the_excerpt affiche l'extrait d'un article (on affiche l'extrait d'un article pour ne pas afficher l'article dans son entiereté) 
            ?>
            <p><?php the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>" class="post__link">Continue reading</a>
</article>
<?php endwhile ?>
<?php endif ?>

<!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
<nav aria-label="Page navigation example" class="avec-bonus">
  <ul class="pagination justify-content-between">
    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-left"></i> Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-arrow-right"></i></a></li>
  </ul>
</nav>

<?php get_footer(); ?>