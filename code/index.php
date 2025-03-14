First Details: FTP DETAILS

FTP Username: strix8ds@beta.strixdevelopment.net
FTP server: ftp.strixdevelopment.net
Password: vZv!5e)^rdo3

Second Details: Wordpress

Custom Post Generator
https://generatewp.com/post-type/

Custom Theme Generator
https://underscores.me/

ACF
https://www.advancedcustomfields.com/

ACF CODE = <?php echo esc_html(get_field('your_field_name'));?>


Contact Form Custom Shortcode
<?php echo  do_shortcode( '[contact-form-7 id="e79e398" title="FInd a Job"]' );
 ?>

 Create Child Theme  Twenty-Twenty-One Theme
 Style.css

 /**
 * Theme Name: amit
 * Template:   twentytwentyone
 */
Function code in wordpress

 <?php
add_action( 'wp_enqueue_scripts', 'grand_sunrise_enqueue_styles' );

function grand_sunrise_enqueue_styles() {
	wp_enqueue_style( 
		'twenty-twenty-one-style-css', 
		get_stylesheet_uri()
	);
}

Create a Custom page 

<?php /* Template Name: home*/ ?>


Call Posts in Code:
<?php
$args = array(
    'post_type' => 'Post Name',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
    
);
$Query = new WP_Query($args);
if($Query -> have_posts()):

    while($Query -> have_posts()):
        $Query -> the_post();
        ?>

Call the Post All Structure :
Call Image
<?php echo get_the_post_thumbnail_url();?>
Call Title
<?php the_title();?>
Call Content
<?php the_content();?>
Get Author Name
<?php
$auth_id = $post->post_author; 
echo get_the_author_meta( 'display_name', $auth_id ); 
?>
Call Date Post 
<h3><?php echo get_the_date('M'); ?> <br><span><?php echo get_the_date('d'); ?></span></h3>


<?php
    endwhile;

else:
    "No post Found. Try again later";
endif;
wp_reset_postdata();
?>

Create form and print all comments in front-end page

<?php
        // Start the Loop.
        while ( have_posts() ) :
            the_post();
            
            // Display the content of the page
            the_content();
            
            // Display comments if applicable
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End the loop.
        ?>

Catagory Slider - ONE CATAGORY

<?php
    $args = array(
        'post_type' => 'slider',
        'posts_per_page' => -1
    );
    $portfolio_query = new WP_Query($args);
    if ($portfolio_query->have_posts()) :
        while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
            <div class="portfolio-item">
                <a href="<?php the_post_thumbnail_url('full'); ?>" data-lightbox="portfolio-gallery" data-title="<?php the_title(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                </a>
                <h3><?php the_title(); ?></h3>
                <?php the_content();?>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p><?php esc_html_e('No portfolios found.', 'textdomain'); ?></p>
    <?php endif; ?>




    Top Button With Javascript

    <button onclick="topFunction()" id="mybtn" title="Go to top"></button>

<script>
let mybutton = document.getElementById("mybtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth' // This makes the scroll smooth
  });
}
</script>

Buy Now Button WHEN THE ADD TO CART BUTTON IS NOT REDIRECT TO CART PAGE

global $product;

if ( isset( $product ) && is_a( $product, 'WC_Product' ) ) {
    $product_id = $product->get_id();
    $checkout_url = wc_get_checkout_url() . '?add-to-cart=' . $product_id;
    echo $checkout_url;
} 


GITHUB DETAILS :

git clone url git download zip

git code . 

Catagory call
[product_categories limit"4" columns="4" orderby= "menu order"]

