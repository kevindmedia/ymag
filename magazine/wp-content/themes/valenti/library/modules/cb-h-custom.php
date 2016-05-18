 <?php /* Custom Code Module 50% width */ 
 
        $cb_global_color = ot_get_option('cb_base_color', '#eb9812'); 
        
        if ($cb_title != NULL) {
             $cb_title_header = '<div class="cb-module-header" style="border-bottom-color:'. $cb_global_color.';"><h2 class="cb-module-title" >' . $cb_title . '</h2>' . $cb_subtitle . '</div>';
        } else {
            $cb_title_header = NULL;
        }
        
        echo '<div class="cb-module-custom-h cb-light cb-module-half cb-module-block clearfix">' . $cb_title_header;
        
        echo  '<div class="cb-custom-content">' . do_shortcode( $cb_custom ) . '</div>'; 
        
        echo '</div>';
?>
