<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_tab( "Réseaux sociaux", array(
            Field::make( 'text', 'crb_theme_options_facebook', 'Facebook' ),
            Field::make( 'text', 'crb_theme_options_instagram', 'Instagram' ),
            Field::make( 'text', 'crb_theme_options_linkedin', 'LinkedIn' ),
        ) )
        ->add_tab( "Informations sur l'entreprise", array(
            Field::make( 'text', 'crb_theme_options_postal_adress', 'Adresse postale' ),
            Field::make( 'text', 'crb_theme_options_city', 'Ville' ),
            Field::make( 'text', 'crb_theme_options_phone_number', 'N° de téléphone' ),
        ) );
}