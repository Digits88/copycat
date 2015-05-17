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
//    $gallery = get_post_gallery( get_the_ID(), false );
    
    $gallery = get_post_gallery_images( $post );
    
    $template = '';
    
    if($gallery) {
        foreach ($gallery as $src) {
            $info = new SplFileInfo($src);
            $ext = $info->getExtension();
            $new = preg_replace('#-[0-9]([0-9])?([0-9])?[x][0-9]([0-9])?([0-9])?.#', '.', $src);
            $template .=    '<img src="'.$new.'" />';
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
