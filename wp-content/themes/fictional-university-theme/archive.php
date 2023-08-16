<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image"
    style="background-image: url(<?php echo get_theme_file_uri("/images/ocean.jpg") ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <!-- This is to make dymanic title for page if category or author using wordpress function -->
    <h1 class="page-banner__title">
      <?php the_archive_title(); ?>
      <!-- This is old way to do it with regular if statements -->
      <!-- <?php 
        if(is_category()) {
          single_cat_title();
        } 
        if (is_author()) {
          echo "Posts By ";the_author();
        }
      ?> -->
    </h1>
    <div class="page-banner__intro">
      <p><?php the_archive_description(); ?></p>
    </div>
  </div>
</div>
<div class="container container--narrow page-section">
  <?php 
    while(have_posts()) {
      the_post(); 
  ?>
  <div class="post-item">
    <h2 class="headline headline--medium headline--post-title"><a
        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="metabox">
      <p>Posted by <?php the_author_posts_link(); ?> <?php the_time('n.j.y'); ?> in
        <?php echo get_the_category_list(', '); ?></p>
    </div>
    <div class="generic-content">
      <?php the_excerpt(); ?>
      <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading</a></p>
    </div>
  </div>
  <?php 
    }
    // This adds paginate using a built in wordpress function
    echo paginate_links();
  ?>
</div>

<?php  get_footer(); ?>