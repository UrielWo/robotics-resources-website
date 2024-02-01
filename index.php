<?php get_header();  ?>
<style>
    body {
        background-image: url('<?php echo get_template_directory_uri(); ?>/images/background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
        color: white;
    }
</style>
<div style="text-align: center; font-size: 36px;"><h1>Welcome! </h1></div>
<div style="text-align: center; font-size: 24px;"><h1><?php bloginfo('name'); ?> </h1></div>
<div style="text-align: center; font-size: 18px;"><p><?php bloginfo('description'); ?></p></div>
<br>
<br>
<?php
  // Counter to keep track of posts
  $counter = 1;
  // Fetch total number of posts
  $total_posts = $wp_query->post_count;
  
  // get_header(); // Make sure you include this to have your header

  // Start the columns container
  echo '<div id="bottom-content">';

  while (have_posts()) {
    the_post();
    
    // Open a new column after half the posts are displayed or if it's the first post
    if ($counter === 1 || $counter === floor($total_posts / 2) + 1) {
      echo '<div class="column">';
    }
    
    // Display the post title
    echo '<h2><a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a></h2>';
    
    // Optional: Display the content or excerpt
    // the_excerpt();
    
    echo '<hr>'; // Horizontal line between posts
    
    // Close the column div if half the posts are shown or if it's the last post
    if ($counter === floor($total_posts / 2) || $counter === $total_posts) {
      echo '</div>'; // Close the column div
    }
    
    $counter++; // Increment the counter
  }
  
  // Close the columns container
  echo '</div>';

  get_footer(); // Footer is included at the end
?>
