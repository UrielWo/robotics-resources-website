<?php get_header();  ?>
<?php the_post(); ?>
<h2> <?php the_title(); ?></h2> 
<style>
    body {
        background-image: url('<?php echo get_template_directory_uri(); ?>/images/background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
        font-size: 36px;
        color: white;
    }
    
</style>

<?php the_content();
get_footer();
?>
