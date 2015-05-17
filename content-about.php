<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
                <div class="row">
                    <div class="col-md-5">
<?php
    $gallery = get_post_gallery( get_the_ID(), false );
    $idsArr = explode(',', $gallery['ids']);
    $template = '';
    
    if($idsArr) {
        foreach($idsArr as $key => $id) {
            
            $url = wp_get_attachment_url( $id );
            $alt = '#';
            $alt = get_post_meta($id, _wp_attachment_image_alt, true);
            
            $template .=    '<a href="' . $alt . '"><img src="'.$url.'" /></a>';
            $template .=    '<br />';
            
        }
    }
    
    echo $template;
?>
                    </div>
                    <div class="col-md-6 col-md-offset-1 single-content">
                        <?php the_content(); ?>
                    </div>
                </div>
