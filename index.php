<?php get_header(); ?>

<?php
    $pages = get_pages();
    $i = 0;
    $is_first = true;
    $is_last = false;
    
    foreach($pages as $page) {
        
        // determine last
        if(count($pages) == $i + 1) {
            $is_last = true;
        }
        
        // mix ins
        $row_start = '';
        $row_end = '';
        $row_last = '';
        $p_link = get_page_link( $page->ID );
        $p_title = $page->post_title;
        $p_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), 'full', true);
        
        // TODO: add this once I've styled
//        if(strtolower($p_title)  == 'about') {
//            continue;
//        }
        
        // new row
        if($i % 3 == 0) {
            $row_start .= '<div class="row">';
            
            if(!$is_first) {
                $row_end .= '</div>';
            }
        }
        
        if($is_last) {
            $row_last .= '</div>';
        }    
            
        
        $template = <<<TEMPL
                $row_end
                $row_start
                    <a class="col-md-4" href="$p_link">
                        <div class="project">
                            <div class="project-image">
                                <img src="$p_thumb[0]" />
                            </div>
                            <div class="project-title">$p_title</div>
                        </div>
                    </a>
                $row_last
TEMPL;
            
        echo $template;
        
        // next round
        $i++;
        $is_first = false;
    }
?>

<?php get_footer(); ?>