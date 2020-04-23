<?php
/**
 * Déclarations relatives à la base de données
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
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function cita_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['citas'] = 'citas';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function cita_declarer_tables_objets_sql($tables) {

	$tables['spip_citas'] = array(
		'type' => 'cita',
		'principale' => 'oui',
		'field'=> array(
			'id_cita'            => 'bigint(21) NOT NULL',
			'date_debut'         => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'date_fin'           => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'id_donneur'         => 'int(11) NOT NULL DEFAULT 0',
			'id_preneur'         => 'int(11) NOT NULL DEFAULT 0',
			'nom_preneur'        => 'varchar(50) NOT NULL DEFAULT ""',
			'email_preneur'      => 'varchar(255) NOT NULL DEFAULT ""',
			'commetaire'         => 'text NOT NULL DEFAULT ""',
			'date'               => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_cita',
			'KEY statut'         => 'statut,id_donneur,id_preneur',
		),
		'titre' => 'date_debut AS titre, "" AS lang',
		'date' => 'date',
		'champs_editables'  => array('date_debut', 'date_fin', 'id_donneur', 'id_preneur', 'nom_preneur', 'email_preneur', 'commetaire'),
		'champs_versionnes' => array('date_debut', 'date_fin', 'id_donneur', 'id_preneur', 'nom_preneur', 'email_preneur', 'commetaire'),
		'rechercher_champs' => array("nom_preneur" => 10, "email_preneur" => 8, "commetaire" => 5),
		'tables_jointures'  => array('spip_auteurs'),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'cita:texte_changer_statut_cita',


	);

	return $tables;
}
