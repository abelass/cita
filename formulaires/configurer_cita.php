<?php

// Sécurité
if (!defined('_ECRIRE_INC_VERSION'))
	return;

function formulaires_configurer_cita_saisies_dist() {
	include_spip('inc/config');

	$config = lire_config('cita', []);
	$liste_tables_objets = lister_tables_objets_sql();

	$statuts = [];
	//Le statuts du plugin
	foreach ($liste_tables_objets['spip_citas']['statut_textes_instituer'] AS $statut => $label) {
		$statuts[$statut] = _T($label);
	}

	// Un tableau des jours de la semaine
	$jours_semaine = [];
	for ($x = 1; $x <= 7; $x++) {
		$jours_semaine[$x - 1] = _T('date_jour_' . $x);
	} 

	return [
		[
			'saisie' => 'fieldset',
			'options' => [
				'nom' => 'fieldset_parametres',
				'label' => _T('cita:cfg_titre_formulaire')
			],
			'saisies' => [
				[
					'saisie' => 'selection',
					'options' => [
						'nom' => 'statut_defaut',
						'data' => $statuts,
						'cacher_option_intro' => 'on',
						'label' => _T('cita:label_statut_defaut'),
						'defaut' => $config['statut_defaut']
					]
				],
			]
		],
		[
			'saisie' => 'fieldset',
			'options' => [
				'nom' => 'fieldset_parametres',
				'label' => _T('cita:cfg_titre_calendrier')
			],
			'saisies' => [
				[
					'saisie' => 'selection',
					'options' => [
						'nom' => 'jour1',
						'data' => $jours_semaine,
						'cacher_option_intro' => 'on',
						'label' => _T('cita:label_jour1'),
						'defaut' => $config['jour1']
					]
				],
				[
					'saisie' => 'checkbox',
					'options' => [
						'nom' => 'days_week',
						'data' => $jours_semaine,
						'cacher_option_intro' => 'on',
						'label' => _T('cita:label_days_week'),
						'defaut' => $config['days_week']
					]
				],
				[
					'saisie' => 'input',
					'options' => [
						'nom' => 'start_time',
						'type' => 'time',
						'label' => _T('cita:label_start_time'),
						'defaut' => $config['start_time'],
					]
				],
				[
					'saisie' => 'input',
					'options' => [
						'nom' => 'end_time',
						'type' => 'time',
						'label' => _T('cita:label_end_time'),
						'defaut' => $config['end_time'],
					]
				],
			],
		],
	];
}
