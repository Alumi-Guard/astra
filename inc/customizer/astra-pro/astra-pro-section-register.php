<?php 
/**
 * Register customizer Aspra Pro Section.
 *
 * @package   Astra
 * @author    Astra
 * @copyright Copyright (c) 2017, Astra
 * @link      http://wpastra.com/
 * @since     Astra 1.0.10
 */

// Register custom section types.
$wp_customize->register_section_type('Astra_Pro_Customizer');

// Register sections.
$wp_customize->add_section(
    new Astra_Pro_Customizer(
        $wp_customize,
        'astra-pro',
        array(
            'title'    => esc_html__('Get more with Astra Pro', 'astra'),
            'pro_url'  => esc_url('https://wpastra.com/pro/'),
            'priority' => 1,
        )
    )
);