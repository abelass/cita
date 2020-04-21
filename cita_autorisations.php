<?php
/**
 * Définit les autorisations du plugin Cita
 *
 * @plugin     Cita
 * @copyright  2020
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Cita\Autorisations
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/*
 * Un fichier d'autorisations permet de regrouper
 * les fonctions d'autorisations de votre plugin
 */

/**
 * Fonction d'appel pour le pipeline
 * @pipeline autoriser */
function cita_autoriser() {
}


/* Exemple
function autoriser_cita_configurer_dist($faire, $type, $id, $qui, $opt) {
	// type est un objet (la plupart du temps) ou une chose.
	// autoriser('configurer', '_cita') => $type = 'cita'
	// au choix :
	return autoriser('webmestre', $type, $id, $qui, $opt); // seulement les webmestres
	return autoriser('configurer', '', $id, $qui, $opt); // seulement les administrateurs complets
	return $qui['statut'] == '0minirezo'; // seulement les administrateurs (même les restreints)
	// ...
}
*/

// -----------------
// Objet citas


/**
 * Autorisation de voir un élément de menu (citas)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_citas_menu_dist($faire, $type, $id, $qui, $opt) {
	return true;
}


/**
 * Autorisation de créer (cita)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cita_creer_dist($faire, $type, $id, $qui, $opt) {
	return in_array($qui['statut'], array('0minirezo', '1comite'));
}

/**
 * Autorisation de voir (cita)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cita_voir_dist($faire, $type, $id, $qui, $opt) {
	return ($qui['statut'] == '0minirezo' and !$qui['restreint'])
		or ($auteurs = cita_auteurs_objet('cita', $id) and in_array($qui['id_auteur'], $auteurs));
}

/**
 * Autorisation de modifier (cita)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cita_modifier_dist($faire, $type, $id, $qui, $opt) {
	return ($qui['statut'] == '0minirezo' and !$qui['restreint'])
		or ($auteurs = cita_auteurs_objet('cita', $id) and in_array($qui['id_auteur'], $auteurs));
}

/**
 * Autorisation de supprimer (cita)
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_cita_supprimer_dist($faire, $type, $id, $qui, $opt) {
	return ($qui['statut'] == '0minirezo' and !$qui['restreint'])
		or ($auteurs = cita_auteurs_objet('cita', $id) and in_array($qui['id_auteur'], $auteurs));
}


/**
 * Autorisation de créer l'élément (cita) dans un auteurs
 *
 * @param  string $faire Action demandée
 * @param  string $type  Type d'objet sur lequel appliquer l'action
 * @param  int    $id    Identifiant de l'objet
 * @param  array  $qui   Description de l'auteur demandant l'autorisation
 * @param  array  $opt   Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
**/
function autoriser_auteur_creercitadans_dist($faire, $type, $id, $qui, $opt) {
	return ($id and autoriser('voir', 'auteurs', $id) and autoriser('creer', 'cita'));
}

/**
 * Lister les auteurs liés à un objet
 *
 * @param int $objet Type de l'objet
 * @param int $id_objet Identifiant de l'objet
 * @return array        Liste des id_auteur trouvés
 */
function cita_auteurs_objet($objet, $id_objet) {
	$auteurs = sql_allfetsel('id_auteur', 'spip_auteurs_liens', array('objet = ' . sql_quote($objet), 'id_objet = ' . intval($id_objet)));
	if (is_array($auteurs)) {
		return array_map('reset', $auteurs);
	}
	return array();
}
