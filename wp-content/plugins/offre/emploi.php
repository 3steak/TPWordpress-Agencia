<?php
/*
Plugin Name: Offre emploi
Description: Plugin pour récupérer les offres d'emploi de Werecruit.
Version: 1.0
Author: Cyprien
*/


// url de l'api 
$api_url = 'URL_API';
$args = array(
    'method' => 'get',

);


$response = wp_remote_get($api_url, $args);

// gerer erreur ?
//  wp error ? 


//  recup donnée avec wp remote retrieve body 
$data = wp_remote_retrieve_body($response);

// jsondecode

// enregistrer offre emploi ( reprendre autre fichier)
// register post type ? 
//  inserer dans la BDD
// suppression offre obsolete : comparer offres bdd et nouvelles
// maj auto cron 
