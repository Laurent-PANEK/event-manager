<?php

/**
 * Classe regroupant les méthodes pour l'affichage de la page de paramètres
 */
class SuperEventManagerSettings {

	/**
	 * Constructeur de la classe SuperEventManagerSettings
	 * Ajout du sous-menu à l'administration wordpress.
	 * Ajout des champs acf liés à cette page.
	 * @method __construct
	 */
	function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_submenu' ), 89 );
	}

	/**
	 * Déclaration du sous-menu 'Paramètres'
	 * @method admin_submenu
	 * @return [type]        [description]
	 */
	function admin_submenu() {
		acf_add_options_sub_page( array(
			'page_title'  => 'Paramètres du Gestionnaire D\'événements',
			'menu_title'  => 'Paramètres',
			'menu_slug'   => 'sem-settings',
			'capability'  => sem_get_setting( 'capability' ),
			'parent_slug' => 'edit.php?post_type=event',
		) );
	}

}


// initialize
new SuperEventManagerSettings();

?>
