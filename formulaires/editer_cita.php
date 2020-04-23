<?php
/**
 * Gestion du formulaire de d'édition de cita
 *
 * @plugin     Cita
 * @copyright  2020
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Cita\Formulaires
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

include_spip('inc/actions');
include_spip('inc/editer');


/**
 * Identifier le formulaire en faisant abstraction des paramètres qui ne représentent pas l'objet edité
 *
 * @param int|string $id_cita
 *     Identifiant du cita. 'new' pour un nouveau cita.
 * @param int $id_donneur
 *     Identifiant du donneur du rendez-vous.
 * @param int $id_preneur
 *     Identifiant du preneur du rendez-vous.
 * @param string $retour
 *     URL de redirection après le traitement.
 * @param array $options
 *     Des options a passer au formulaire.
 * @param string $associer_objet
 *     Éventuel `objet|x` indiquant de lier le cita créé à cet objet,
 *     tel que `article|3`
 * @param int $lier_trad
 *     Identifiant éventuel d'un cita source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du cita, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return string
 *     Hash du formulaire
 */
function formulaires_editer_cita_identifier_dist(
	$id_cita = 'new',
	$id_donneur = 0,
	$id_preneur = 0,
	$retour = '',
	$options = [],
	$associer_objet = '',
	$lier_trad = 0,
	$config_fonc = '',
	$row = array(),
	$hidden = '') {
	return serialize(array(intval($id_cita), $associer_objet));
}

/**
 * Chargement du formulaire d'édition de cita
 *
 * Déclarer les champs postés et y intégrer les valeurs par défaut
 *
 * @uses formulaires_editer_objet_charger()
 *
 * @param int|string $id_cita
 *     Identifiant du cita. 'new' pour un nouveau cita.
 * @param int $id_donneur
 *     Identifiant du donneur du rendez-vous.
 * @param int $id_preneur
 *     Identifiant du preneur du rendez-vous.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param array $options
 *     Des options a passer au formulaire.
 * @param string $associer_objet
 *     Éventuel `objet|x` indiquant de lier le cita créé à cet objet,
 *     tel que `article|3`
 * @param int $lier_trad
 *     Identifiant éventuel d'un cita source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du cita, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Environnement du formulaire
 */
function formulaires_editer_cita_charger_dist(
	$id_cita = 'new',
	$id_donneur = 0,
	$id_preneur = 0,
	$retour = '',
	$options = [],
	$associer_objet = '',
	$lier_trad = 0,
	$config_fonc = '',
	$row = array(),
	$hidden = '') {
	include_spip('inc/config');
	global $visiteur_session;

	$config = lire_config('cita');

	$valeurs = formulaires_editer_objet_charger('cita', $id_cita, '', $lier_trad, $retour, $config_fonc, $row, $hidden);

	$valeurs['id_auteur'] = isset($visiteur_session['id_auteur']) ? $visiteur_session['id_auteur'] : '';
	$espace_prive = $valeurs['espace_prive'] = test_espace_prive();

	// Ajouter les options aux valeurs.
	foreach ($options AS $cle => $valeur) {
		$valeurs[$cle] = $valeur;
	}

	// Les configs
	foreach ($config AS $cle => $valeur) {
		// Une variable pour chaque config.
		$$cle = $valeur;
			// Ajouter aux valeurs les configs non surchargées via options .
		if ($valeur AND
			(!isset($options[$cle]) OR
				(isset($options[$cle]) AND !$options[$cle]))) {
			$valeurs[$cle] = $valeur;
		}
	}

	if (!intval($id_cita)) {
		$valeurs['statut'] = isset($config['statut_defaut']) ? $config['statut_defaut'] : 'prepa';
		$valeurs['_hidden'] .= '<input type="hidden" name="statut" value="' . $valeurs['statut'] . '" />';
		$valeurs['date_debut'] = _request('date_debut') ? _request('date_debut') : '0000-00-00 00:00:00';
		$valeurs['date_fin'] = _request('date_fin') ? _request('date_fin') : '0000-00-00 00:00:00';
	}

	$valeurs['dates_editables'] = true;
	if (!$espace_prive) {
		if (!$dates_editables) {
			$valeurs['dates_editables'] = false;
			$valeurs['_hidden'] .= '<input type="hidden" name="date_debut" value="' . $valeurs['date_debut'] . '" />';
			$valeurs['_hidden'] .= '<input type="hidden" name="date_fin" value="' . $valeurs['date_fin'] . '" />';
		}
	}

	if (!$valeurs['id_donneur']) {
		$valeurs['id_donneur'] = $id_donneur;
	}

	if (!$valeurs['id_preneur']) {
		$valeurs['id_preneur'] = $id_preneur;
	}


	// Les donneurs de rendez-vous
	$valeurs['donneurs'] = isset(${'donneur_' . $choix_donneur}) ? ${'donneur_' . $choix_donneur} : [];

	// Dans l'espace publique si id_donneur donnée, on affiche pas le formulaire
	if (!$espace_prive AND $id_donneur > 0) {
		$valeurs['donneurs'] = [$id_donneur];
	}

	// La ou les donneurs de rendez-vous potentiels, su plusieurs on génère un tableau, sinon un champ hidden.
	if (count($valeurs['donneurs']) == 1) {
		$valeurs['_hidden'] .= '<input type="hidden" name="id_donneur" value="' . $valeurs['donneurs'][0] . '" />';
	}
	else {
		$sql = sql_select('id_auteur,nom', 'spip_auteurs', 'id_auteur IN (' .implode(',', $valeurs['donneurs']) . ')', '', 'nom ASC');
		unset($valeurs['donneurs']);
		while ($donnees = sql_fetch($sql)) {
			$valeurs['donneurs'][$donnees['id_auteur']] = $donnees['nom'];
		}
	}

	// Les preneurs de rendez-vous
	if (!$espace_prive) {
		$valeurs['_hidden'] .= '<input type="hidden" name="id_preneur" value="' . $id_preneur . '" />';
	}



	return $valeurs;
}

/**
 * Vérifications du formulaire d'édition de cita
 *
 * Vérifier les champs postés et signaler d'éventuelles erreurs
 *
 * @uses formulaires_editer_objet_verifier()
 *
 * @param int|string $id_cita
 *     Identifiant du cita. 'new' pour un nouveau cita.
 * @param int $id_donneur
 *     Identifiant du donneur du rendez-vous.
 * @param int $id_preneur
 *     Identifiant du preneur du rendez-vous.)
 * @param string $retour
 *     URL de redirection après le traitement
 * @param array $options
 *     Des options a passer au formulaire.
 * @param string $associer_objet
 *     Éventuel `objet|x` indiquant de lier le cita créé à cet objet,
 *     tel que `article|3`
 * @param int $lier_trad
 *     Identifiant éventuel d'un cita source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du cita, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Tableau des erreurs
 */
function formulaires_editer_cita_verifier_dist(
	$id_cita = 'new',
	$id_donneur = 0,
	$id_preneur = 0,
	$retour = '',
	$options = [],
	$associer_objet = '',
	$lier_trad = 0,
	$config_fonc = '',
	$row = array(),
	$hidden = '') {
	$erreurs = [];

	$erreurs = formulaires_editer_objet_verifier('cita', $id_cita, array('date_debut', 'date_fin'));

	$verifier = charger_fonction('verifier', 'inc');

	foreach (['date_debut', 'date_fin'] AS $champ) {
		print_r(_request($champ)) ;
		$normaliser = null;
		if ($erreur = $verifier(_request($champ), 'date', ['normaliser'=>'datetime'], $normaliser)) {
			$erreurs[$champ] = $erreur;
		// si une valeur de normalisation a ete transmis, la prendre.
		} elseif (!is_null($normaliser)) {
			set_request($champ, $normaliser);
		// si pas de normalisation ET pas de date soumise, il ne faut pas tenter d'enregistrer ''
		} else {
			set_request($champ, null);
		}
	}


	return $erreurs;
}

/**
 * Traitement du formulaire d'édition de cita
 *
 * Traiter les champs postés
 *
 * @uses formulaires_editer_objet_traiter()
 *
 * @param int|string $id_cita
 *     Identifiant du cita. 'new' pour un nouveau cita.
 * @param int $id_donneur
 *     Identifiant du donneur du rendez-vous.
 * @param int $id_preneur
 *     Identifiant du preneur du rendez-vous.
 * @param string $retour
 *     URL de redirection après le traitement
 * @param array $options
 *     Des options a passer au formulaire.
 * @param string $associer_objet
 *     Éventuel `objet|x` indiquant de lier le cita créé à cet objet,
 *     tel que `article|3`
 * @param int $lier_trad
 *     Identifiant éventuel d'un cita source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du cita, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Retours des traitements
 */
function formulaires_editer_cita_traiter_dist(
	$id_cita = 'new',
	$id_donneur = 0,
	$id_preneur = 0,
	$retour = '',
	$options = [],
	$associer_objet = '',
	$lier_trad = 0,
	$config_fonc = '',
	$row = array(),
	$hidden = '') {
	$retours = formulaires_editer_objet_traiter('cita', $id_cita, $id_auteur, $lier_trad, $retour, $config_fonc, $row, $hidden);

	// Un lien a prendre en compte ?
	if ($associer_objet and $id_cita = $retours['id_cita']) {
		list($objet, $id_objet) = explode('|', $associer_objet);

		if ($objet and $id_objet and autoriser('modifier', $objet, $id_objet)) {
			include_spip('action/editer_liens');

			objet_associer(array('cita' => $id_cita), array($objet => $id_objet));

			if (isset($retours['redirect'])) {
				$retours['redirect'] = parametre_url($retours['redirect'], 'id_lien_ajoute', $id_cita, '&');
			}
		}
	}

	return $retours;
}
