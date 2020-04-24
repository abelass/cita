<?php
/**
 * Utilisations de pipelines par Cita
 *
 * @plugin     Cita
 * @copyright  2020
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Cita\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Ajouter les objets sur les vues des parents directs
 *
 * @pipeline affiche_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function cita_affiche_enfants($flux) {
	if ($e = trouver_objet_exec($flux['args']['exec']) and $e['edition'] == false) {
		$id_objet = $flux['args']['id_objet'];

		if ($e['type'] == 'auteur') {
			$flux['data'] .= recuperer_fond(
				'prive/objets/liste/citas',
				array(
					'titre' => _T('cita:titre_citas'),
					'id_auteur' => $id_objet
				)
			);

			if (autoriser('creercitadans', 'auteurs', $id_objet)) {
				include_spip('inc/presentation');
				$flux['data'] .= icone_verticale(
					_T('cita:icone_creer_cita'),
					generer_url_ecrire('cita_edit', "id_auteur=$id_objet"),
					'cita-24.png',
					'new',
					'right'
				) . "<br class='nettoyeur' />";
			}
		}
	}
	return $flux;
}

/**
 * Afficher le nombre d'éléments dans les parents
 *
 * @pipeline boite_infos
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function cita_boite_infos($flux) {
	if (isset($flux['args']['type']) and isset($flux['args']['id']) and $id = intval($flux['args']['id'])) {
		$texte = '';
		if ($flux['args']['type'] == 'auteur' and $nb = sql_countsel('spip_citas', array("statut='publie'", 'id_auteur=' . $id))) {
			$texte .= '<div>' . singulier_ou_pluriel($nb, 'cita:info_1_cita', 'cita:info_nb_citas') . "</div>\n";
		}
		if ($texte and $p = strpos($flux['data'], '<!--nb_elements-->')) {
			$flux['data'] = substr_replace($flux['data'], $texte, $p, 0);
		}
	}
	return $flux;
}


/**
 * Compter les enfants d'un objet
 *
 * @pipeline objets_compte_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function cita_objet_compte_enfants($flux) {
	if ($flux['args']['objet'] == 'auteur' and $id_auteur = intval($flux['args']['id_objet'])) {
		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['citas'] = sql_countsel('spip_citas', 'id_auteur= ' . intval($id_auteur) . " AND (statut = 'publie')");
		} else {
			$flux['data']['citas'] = sql_countsel('spip_citas', 'id_auteur= ' . intval($id_auteur) . " AND (statut <> 'poubelle')");
		}
	}

	return $flux;
}

/**
 * Optimiser la base de données
 *
 * Supprime les objets à la poubelle.
 *
 * @pipeline optimiser_base_disparus
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function cita_optimiser_base_disparus($flux) {

	sql_delete('spip_citas', "statut='poubelle' AND maj < " . $flux['args']['date']);

	return $flux;
}


/**
 * Redirection si authetifié pòureviter un problème de cache.
 *
 * @pipeline formulaire_traiter
 * @param array $flux
 * @return array
 */
function cita_formulaire_traiter($flux){

	if (
		$flux['args']['form'] == 'inscription'
		and $id_auteur = intval($flux['data']['id_auteur'])
		and $statut = sql_getfetsel('statut', 'spip_auteurs', 'id_auteur = '.$id_auteur)
	){

		if (isset($flux['args']['args'][2]) AND  $statut !='nouveau') {
			$timestamp = time();
			$redirect = urldecode($flux['args']['args'][2]);
			spip_log($redirect, 'teste');
			include_spip('inc/headers');
			redirige_par_entete($redirect);
		}
	}

	return $flux;
}
