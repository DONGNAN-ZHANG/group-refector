<!-- Config landing, registration&login,  page -->

<?php

/**
 * Used to configue the page to specfied page. include basic Setting up
 *
 * @var string
 */

function config($key = '') {
    
    $config = [
        'webiste_name' => 'Comic Royale',
        'nav_menu' => [
            '' => 'Home',
            'about' => 'About',
            'gallery' => 'Gallery',
            'shop' => 'Shop',
            'sponsors' => 'Sponsors',
            'contact' => 'Contact us',
        ],
        'template_path' => 'tamplates'
    ];

    return isset($config[$key]) ? $config($key) : null;
}