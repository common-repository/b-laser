<?php
if( class_exists( 'CSF' ) ) {

    $prefix = '_wpll';

    CSF::createOptions( $prefix, array(
        'menu_title'  => 'B Laser',
        'menu_slug'   => 'blaser',
        'framework_title'  => "B Laser Option Panel",
        'menu_type'   => 'submenu',
        'menu_parent' => 'tools.php',
        'theme' => 'light',
        'show_bar_menu'  => false,
      ) );


      // Create a section
    CSF::createSection( $prefix, array(
        'title'  => '',
        'fields' => array(
        array(
            'id'    => 'blaser_enabled',
            'type'  => 'switcher',
            'title' => 'Enable Laser',
            'default' => '1'  
        ),
        array(
            'id'    => 'blaser_color',
            'type'  => 'color',
            'title' => 'Laser Color',
            'default' => '#dd3333'    
        ),
        array(
            'id' => 'blaser_height',
            'type' => 'spinner',
            'title' => 'Laser Height',
            'unit' => 'px',
            'default' => '2'
        ),
        array(
            'id' => 'blaser_position',
            'type' => 'select',
            'title' => 'Laser Position',
            'options' => array(
                'top' => 'Top',
                'bottom' => 'Bottom',
            ),
            'default' => 'top'
        )

    )
  ) );
}