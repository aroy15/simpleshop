<?php

use Kirki\Compatibility\Kirki;

define('SIMPLESHOP_CUSTOMIZER_CONFIG_ID', 'simpleshop_customizer_settings');
define('SIMPLESHOP_CUSTOMIZER_PANEL_ID', 'simpleshop_customizer_panel');
if(class_exists('Kirki')){
    Kirki::add_config(SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
        'capability' => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ));

    Kirki::add_panel(SIMPLESHOP_CUSTOMIZER_PANEL_ID, array(
        'priority' => 260,
        'title' => esc_html__('SimpleShop', 'simpleshop'),
        'description' => esc_html__('SimpleShop Settings', 'simpleshop')
    ));

    Kirki::add_section('simpleshop_homepage', array(
        'title' => esc_html__('Home page Settings', 'simpleshop'),
        'panel' => SIMPLESHOP_CUSTOMIZER_PANEL_ID,
        'priority' => 160,
        'active_callback' => function(){
            return is_page_template('page-templates/homepage.php');
        }
    ));

    //Category Section
    Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,[
            'type'    => 'switch',
            'settings' => 'simpleshop_homepage_display_categories',
            'label'       => esc_html__( 'Display Category Section', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => '1',
            'priority' => 10,
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
        ]
    );

    Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
        'type' => 'text',
        'settings' => 'simpleshop_homepage_categories_title',
        'label' => esc_html__('Categories Section title', 'simpleshop'),
        'section' => 'simpleshop_homepage',
        'default' => esc_html__('Shop By Category', 'simpleshop'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'=>'simpleshop_homepage_display_categories',
                'operator'=> '==',
                'value' => '1'
            ]
        ]
    ));

    Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
        'type' => 'text',
        'settings' => 'simpleshop_homepage_categories_col',
        'label' => esc_html__('Number of columns', 'simpleshop'),
        'section' => 'simpleshop_homepage',
        'default' => 3,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'=>'simpleshop_homepage_display_categories',
                'operator'=> '==',
                'value' => '1'
            ]
        ]
    ));

    Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,[
            'type'    => 'switch',
            'settings' => 'simpleshop_homepage_display_categories_number',
            'label'       => esc_html__( 'Display Numbers beside Category', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => '1',
            'priority' => 10,
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
            'active_callback' => [
                [
                    'setting'=>'simpleshop_homepage_display_categories',
                    'operator'=> '==',
                    'value' => '1'
                ]
            ]
        ]
    );

    //Arrival Section
    Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,[
            'type'    => 'switch',
            'settings' => 'simpleshop_homepage_display_arrival',
            'label'       => esc_html__( 'Display Arrival Section', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => '1',
            'priority' => 10,
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
        ]
    );

    Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
        'type' => 'text',
        'settings' => 'simpleshop_homepage_arrival_title',
        'label' => esc_html__('Text Control', 'simpleshop'),
        'section' => 'simpleshop_homepage',
        'default' => esc_html__('New Arrival', 'simpleshop'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'=>'simpleshop_homepage_display_arrival',
                'operator'=> '==',
                'value' => '1'
            ]
        ]
    ));

    //Promo Section
    Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,[
            'type'    => 'switch',
            'settings' => 'simpleshop_homepage_display_promo',
            'label'       => esc_html__( 'Display promo Section', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => '1',
            'priority' => 10,
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
        ]
    );

    Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
        'type' => 'text',
        'settings' => 'simpleshop_homepage_promo_title',
        'label' => esc_html__('Text Control', 'simpleshop'),
        'section' => 'simpleshop_homepage',
        'default' => esc_html__('Sale', 'simpleshop'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'=>'simpleshop_homepage_display_promo',
                'operator'=> '==',
                'value' => '1'
            ]
        ]
    ));

    //Popular Product
    Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,[
            'type'    => 'switch',
            'settings' => 'simpleshop_homepage_display_popular_product',
            'label'       => esc_html__( 'Display Popular Product Section', 'simpleshop' ),
            'section'     => 'simpleshop_homepage',
            'default'     => '1',
            'priority' => 10,
            'choices'     => [
                'on'  => esc_html__( 'Display', 'simpleshop' ),
                'off' => esc_html__( 'Hide', 'simpleshop' ),
            ],
        ]
    );

    Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
        'type' => 'text',
        'settings' => 'simpleshop_homepage_popular_product_title',
        'label' => esc_html__('Text Control', 'simpleshop'),
        'section' => 'simpleshop_homepage',
        'default' => esc_html__('Popular Product', 'simpleshop'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'=>'simpleshop_homepage_display_popular_product',
                'operator'=> '==',
                'value' => '1'
            ]
        ]
    ));
}