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
				'nom' => 'fieldset_formulaire',
				'label' => _T('cita:fieldset_label_formulaire')
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
					],
				],
				[
					'saisie' => 'fieldset',
					'options' => [
						'nom' => 'fieldset_dates',
						'label' => _T('cita:fieldset_label_dates')
					],
					'saisies' => [
						[
							'saisie' => 'selection',
							'options' => [
								'nom' => 'dates_periode_definition',
								'label' => _T('cita:label_dates_periode_definition'),
								'cacher_option_intro' => 'on',
								'data' => [
									'libre' => _T('cita:titre_dates_periode_definition_libre'),
									'predefinis' => _T('cita:titre_dates_periode_definition_predefinis'),
								],
								'defaut' => $config['dates_periode_definition']
							]
						],
						[
							'saisie' => 'input',
							'options' => [
								'nom' => 'dates_periode',
								'label' => _T('cita:label_dates_periode'),
								'defaut' => $config['dates_periode'],
								'afficher_si' => '@dates_periode_definition@ == "predefinis"',
							]
						],
						[
							'saisie' => 'oui_non',
							'options' => [
								'nom' => 'dates_editables',
								'label' => _T('cita:label_dates_editables'),
								'defaut' => $config['dates_editables'],
								'afficher_si' => '@dates_periode_definition@ == "predefinis"',
							]
						],
					],
				],
			],
		],
		[
			'saisie' => 'fieldset',
			'options' => [
				'nom' => 'fieldset_calendrier',
				'label' => _T('cita:fieldset_label_calendrier')
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
