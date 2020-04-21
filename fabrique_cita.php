<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2020-04-21 10:06:39
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'cita',
    'nom' => 'Cita',
    'slogan' => 'Gestionnaire de rendez-vous',
    'description' => 'Gestionnaire de rendez-vous',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '0.0.1',
    'auteur' => 'Rainer Müller',
    'auteur_lien' => 'https://web-simple.eu',
    'licence' => 'GNU/GPL v3',
    'categorie' => 'communication',
    'etat' => 'dev',
    'compatibilite' => '[3.2.7;3.2.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '0.0.1',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => 'Paramètres',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Rendez-vous',
      'nom_singulier' => 'Rendez-vous',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_citas',
      'cle_primaire' => 'id_cita',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'cita',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Date début',
          'champ' => 'date_debut',
          'sql' => 'datetime NOT NULL DEFAULT \'0000-00-00 00:00:00\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Date fin',
          'champ' => 'date_fin',
          'sql' => 'datetime NOT NULL DEFAULT \'0000-00-00 00:00:00\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Auteur',
          'champ' => 'id_auteur',
          'sql' => 'int(11) NOT NULL DEFAULT 0',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'auteurs',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Nom',
          'champ' => 'nom',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '10',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Email',
          'champ' => 'email',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Commetaire',
          'champ' => 'commetaire',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '5',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
        ),
      ),
      'champ_titre' => 'nom',
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Rendez-vous',
        'titre_objet' => 'Rendez-vous',
        'info_aucun_objet' => 'Aucun rendez-vous',
        'info_1_objet' => 'Un rendez-vous',
        'info_nb_objets' => '@nb@ rendez-vous',
        'icone_creer_objet' => 'Créer un rendez-vous',
        'icone_modifier_objet' => 'Modifier ce rendez-vous',
        'titre_logo_objet' => 'Logo de ce rendez-vous',
        'titre_langue_objet' => 'Langue de ce rendez-vous',
        'texte_definir_comme_traduction_objet' => 'Ce rendez-vous est une traduction du rendez-vous numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce rendez-vous',
        'titre_objets_rubrique' => 'Rendez-vous de la rubrique',
        'info_objets_auteur' => 'Les rendez-vous de cet auteur',
        'retirer_lien_objet' => 'Retirer ce rendez-vous',
        'retirer_tous_liens_objets' => 'Retirer tous les rendez-vous',
        'ajouter_lien_objet' => 'Ajouter ce rendez-vous',
        'texte_ajouter_objet' => 'Ajouter un rendez-vous',
        'texte_creer_associer_objet' => 'Créer et associer un rendez-vous',
        'texte_changer_statut_objet' => 'Ce rendez-vous est :',
        'supprimer_objet' => 'Supprimer cet rendez-vous',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet rendez-vous ?',
      ),
      'liaison_directe' => 'spip_auteurs',
      'table_liens' => '',
      'vue_liens' => 
      array (
        0 => 'spip_auteurs',
      ),
      'afficher_liens' => 'on',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => 'auteur_objet',
        'objet_modifier' => 'auteur_objet',
        'objet_supprimer' => 'auteur_objet',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
      ),
    ),
  ),
);
