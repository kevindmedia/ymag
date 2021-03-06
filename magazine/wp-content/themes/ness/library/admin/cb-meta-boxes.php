<?php
function _cb_meta() {
  $cb_ctp = cb_get_custom_post_types();
  $cb_go = array(
    'id'          => 'cb_go',
    'title'       => 'Ness Post Options',
    'desc'        => '',
    'pages'       =>  $cb_ctp,
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
     
      array(
        'id'          => 'cb_featured_image_style_override',
        'label'       => 'Override Global Featured Image Style',
        'desc'        => 'Enable this to override "Theme Options -> Posts -> Global Featured Image Style Override" option.',
        'std'         => '',
        'type'        => 'select',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
          array(
            'value'       => 'off',
            'label'       => '-',
            'src'         => ''
            ),
          array(
            'value'       => 'on',
            'label'       => 'Override',
            'src'         => ''
            )
          ),
        ),
      array(
        'id'          => 'cb_featured_image_style',
        'label'       => 'Featured Image Style',
        'desc'        => '',
        'std'         => 'full-background',
        'type'        => 'radio-image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
           array(
              'value'       => 'full-background',
              'label'       => 'Full-Background',
              'src'         => '/img_fs.png'
              ),
           array(
              'value'       => 'parallax',
              'label'       => 'Parallax',
              'src'         => '/img_pa.png'
              ),
           array(
              'value'       => 'background-slideshow',
              'label'       => 'Background Slideshow',
              'src'         => '/img_bs.png'
              ),
              array(
              'value'       => 'off',
              'label'       => 'Off',
              'src'         => '/img_off.png'
              ),
           ),
     
        ),
        array(
          'id'          => 'cb_post_background_slideshow',
          'label'       => 'Background Slideshow Images',
          'desc'        => 'Upload/set images to show as a Slideshow',
          'std'         => '',
          'type'        => 'gallery',
          'section'     => 'option_types',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => 'cb_featured_image_style:is(background-slideshow)',
          'operator'    => 'and'
          ),
        )
);

ot_register_meta_box( $cb_go );

$cb_go_pages = array(
    'id'          => 'cb_go',
    'title'       => 'Ness Page Options',
    'desc'        => '',
    'pages'       =>  array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'id'          => 'cb_featured_image_style',
        'label'       => 'Featured Image Style',
        'desc'        => '',
        'std'         => 'full-background',
        'type'        => 'radio-image',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array(
           array(
              'value'       => 'full-background',
              'label'       => 'Full-Background',
              'src'         => '/img_fs.png'
              ),
           array(
              'value'       => 'parallax',
              'label'       => 'Parallax',
              'src'         => '/img_pa.png'
              ),
           array(
              'value'       => 'background-slideshow',
              'label'       => 'Background Slideshow',
              'src'         => '/img_bs.png'
              ),
              array(
              'value'       => 'off',
              'label'       => 'Off',
              'src'         => '/img_off.png'
              ),
           ),
     
        ),
        array(
          'id'          => 'cb_post_background_slideshow',
          'label'       => 'Background Slideshow Images',
          'desc'        => 'Upload/set images to show as a Slideshow',
          'std'         => '',
          'type'        => 'gallery',
          'section'     => 'option_types',
          'rows'        => '',
          'post_type'   => '',
          'taxonomy'    => '',
          'min_max_step'=> '',
          'class'       => '',
          'condition'   => 'cb_featured_image_style:is(background-slideshow)',
          'operator'    => 'and'
          ),
        array(
              'id'          => 'cb_page_comments',
              'label'       => 'Page Comments',
              'desc'        => 'If you enable comments, you may also need to click on "screen options" on the top right and check the "discussion" box and make sure "Allow Comments" is also enabled.',
              'std'         => 'off',
              'type'        => 'on-off',
              'section'     => 'option_types',
              'rows'        => '',
              'post_type'   => '',
              'taxonomy'    => '',
              'min_max_step'=> '',
              'class'       => '',
              'condition'   => '',
              'operator'    => 'and'
            ),
        )
);

ot_register_meta_box( $cb_go_pages );

}

add_action( 'admin_init', '_cb_meta' );