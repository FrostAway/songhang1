<?php

/* 
 * Template Name: Reg Tour
 */
get_header();
?>
<div class="row sh-row">
    <h1><?php the_title; ?></h1>
    <div id="reg-tour">
    <?php echo do_shortcode('[wpuf_form id="395"]'); ?>
    </div>
   
</div>

<?php if(isset($_GET['tour_reg']) && $_GET['tour_reg'] !== ''){
    $tour_id = $_GET['tour_reg'];
    $title = get_the_title($tour_id);
    $time = get_post_meta($tour_id, 'datetime', true);
    $regular_price = get_post_meta($tour_id, 'price', true);
    $sale_price = get_post_meta($tour_id, 'price_sale', true);
    if($sale_price == '' || $sale_price == 0){
        $price = $regular_price;
    }else{
        $price = $sale_price;
    }
    ?>
<?php echo "<input type='hidden' id='".$tour_id."' value ='".$title."'>"; ?>
<script>
    
    (function($){
        $(document).ready(function(){
            var tour_id = "<?php echo $tour_id; ?>";
            var tour_tittle = jQuery("#"+tour_id).val();
            $('#reg-tour #post_title').val(tour_tittle);
            $('#reg-tour #tour-time').val('<?php echo $time; ?>');
            $('#reg-tour #tour-price').val('<?php echo $price ?>');
        });
    })(jQuery);
</script>
<?php } ?>

<?php get_footer(); ?>
