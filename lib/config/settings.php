<?php
return array(
    'enable'        => array(
        'value'         => 1,
        'title'         => _wp('Enable the plugin'),
        'description'   => _wp('Check to enable the plugin.'),
        'control_type'  => waHtmlControl::CHECKBOX,
    ),
    'redirect' => array(
        'title' => _wp('Direction of redirection'),
        'description'   => _wp('Set the direction of redirection.'),
        'value' => 'checkout',
        'control_type' => waHtmlControl::RADIOGROUP,
        'options' => array(
            array('value' => 'checkout', 'title' => _wp('Checkout'), 'description' => ''),
            array('value' => 'cart', 'title' => _wp('Cart'), 'description' => ''),
        )
    ),
);
