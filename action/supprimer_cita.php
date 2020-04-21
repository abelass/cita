<?php
/**
 * Utilisation de l'action supprimer pour l'objet cita
 *
 * @plugin     Cita
 * @copyright  2020
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Cita\Action
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}



/**
 * Action pour supprimer un·e cita
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, cita, #ID_CITA}|oui)
 *         [(#BOUTON_ACTION{<:cita:supprimer_cita:>,
 *             #URL_ACTION_AUTEUR{supprimer_cita, #ID_CITA, #URL_ECRIRE{citas}},
 *             danger, <:cita:confirmer_supprimer_cita:>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, cita, #ID_CITA}|oui)
 *         [(#BOUTON_ACTION{
 *             [(#CHEMIN_IMAGE{cita-del-24.png}|balise_img{<:cita:supprimer_cita:>}|concat{' ',#VAL{<:cita:supprimer_cita:>}|wrap{<b>}}|trim)],
 *             #URL_ACTION_AUTEUR{supprimer_cita, #ID_CITA, #URL_ECRIRE{citas}},
 *             icone s24 horizontale danger cita-del-24, <:cita:confirmer_supprimer_cita:>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     if (autoriser('supprimer', 'cita', $id_cita)) {
 *          $supprimer_cita = charger_fonction('supprimer_cita', 'action');
 *          $supprimer_cita($id_cita);
 *     }
 *     ```
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_cita_dist($arg=null) {
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}
	$arg = intval($arg);

	// cas suppression
	if ($arg) {
		sql_delete('spip_citas',  'id_cita=' . sql_quote($arg));
	}
	else {
		spip_log("action_supprimer_cita_dist $arg pas compris");
	}
}
