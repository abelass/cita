<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2020-04-22 10:10:51
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
      'champ_titre' => 'date_debut',
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
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
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
          'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAArwAAAK8CAYAAAANumxDAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH5AQWCAgsNeHq5AAAIABJREFUeNrt3Xe8LXdd7//XSW+kkELAAKGlQOgoCCId6SIiCApyFSviRb12fqJix4JiuSh2yuUiqMgFBEQEgqJUQw0hhQSSQEJCSCPl7N8fsyLpOWXvtWdmPZ+Px3rwIMk5e83nvdas9541850CAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAYHK2GAEjtEv19dXDqrtVh1e7VV+sPlm9u3pL9WWjmmy+D1jke9er5Xtu9YnqPYt8LzCqSTq0evTiPXzHav/qsuqM6oPVP1fvN6ZJ94a7V/epbl8dvHj/XlydVv2LfAFu3D7VT1SfqdZu4nFx9ZfVMcY2GftWP7MoPjeV7yXVX1XHGttk3Lt6XXX5NuT7yeo51R7GNhl3rH6vOku+ADvuCdtYhK79uLz6nWpvIxy1b6k+twP5XlH9rnxH7YDqz6utO5DvSdVDjXDU9q/+cPFelC/ADtq1evEO7Eiv/fiv6kjjHJ3dqj+Q72zdrTplJ7PdWv28UY4235PlC7Bzdm/4CnRtnR6frY4y1tHYo3r9Oud7J2MdjQdUX1rHfP/QSOULMEd/s44706seJzdcNMPm2lK9eoPyPcR4N91x61yGrno4EihfgFn5nxuwM73q8Ubj3XQ/voH5/j/j3VQ3qz61QdluzTmf8gWYids3XIW/toGP7zDmTXPH6tINzvfpxrxpfn+Ds/10tacxyxdg6l6+wTvUterUhnOEWb5XLSHfUxouiGP5v6xevoR8n2fU8gWYsiPaseVtduTxNONeulsvMd+nGvfS/d6Ssj214QYlyBdgkjby3M5rP95k3Ev3E0vM17nay7VLdfYS83Wup3xhXV/gsEwPX+LPemhuWDD3fPcy8qW5W3XYEn/eY4xcvqDwMlX3WOLP2qPhdqfMM989q3sZ+Syzrbq/kcsXFF6maPfq8CX/zKONfam/YBy25J95jLEvzW1kK1/5ovDCTdtnE37mLY19aTbj9JHDjX22+R60+CUK+YLCy6RsWZGSLd95l2z5yle+8kXhBa9xZv0hjXyRL8oAAAAovAAAoPACAIDCCwAACi8AAAovAAAovAAAoPACAIDCCwAACi8AACi8AACg8AIAoPACAIDCCwAACi8AACi8AACwBLsZwaTtVx1d3ak6ZPH/b3a1x37V7iN6vpvxXJ5UHeOlMtt8v606zuiX4s6b8DNfUV1u9PJdkiuryxaPi6ovVudWZ1enVqdUZ1VrXi7Ts8UIJuOo6iHV3RYF7ujqa4wFAJbmouoj1X9VH6iOX/x/JVjhZQfdunpY9dBF0T3CSABgdM6v3lm9afE4zUgUXm7cYdXTq2dW9zQOAJicD1WvXjxOMQ6Fl8Ee1eOr76oenfOqAWAu3lH9SfXahnODUXhXzv7Vc6vnNVxwBgDM0xeqP1w8zjEOhXcV3HxRcp9bHWgcALAyLq7+tPq1htUfUHhn54DqZ6rnNCwXBgCspouqlyyK7wXGofDOxdOr364ONwoAYOHz1c9Wf1FtNQ6Fd6qOqv6oYXkxAIDr897qe6qPGsXG2NUINsRu1Qsa7iJzJ+MAAG7EEdWzF73s+BztXXeO8K6/Wzesvff1RgEAbKf3NpwKebJRrJ9djGBdPbr6oLILAOyg+zbcvOIpRrF+nNKwfnP81YbzdfcxDgBgJ+xZfVvDqk5vr9aMZOc4pWHn7ddwB5VHGgUAsM7e3HC098tGofBuloOrN1ZfZxQAwAb5UPXY6nNGofAu262rf6qONQoAYIOdVj00F7MpvEt0TPWWRekFAFiGzzas7f9Jo1B4N9rtq/dUtzAKAGDJzqoeWJ1kFArvRjlsUXbvYBQAwCY5rfqG6gyj2DbW4d12+zVcoKbsAgCb6bYNp1YeaBQK73ravXpddW+jAABG4NiGZVF3N4qb5sYT2+ZPqycbAwAwIrerDq/+0SgU3p31zOqXjAEAGKF7V6dXHzSKG+aitRt3dPX+al+jAABG6tLq6xtuUIHCu132qv69urtRAAAj9/GGo72XGMV1OaXhhv1+9ThjAAAm4NCGVRveaBTX5Qjv9Xto9c/GAABMzEOqdxiDwntTdq8+3LDcBwDAlJzYcDrmpUbxVU5puK7/VT3NGACACTq42pqjvNfgCO81HVF9IqsyAADTdUl1TPUZoxi409o1/Y6yCwBM3N7VbxjDVznC+1X3qf7TGACAmbhXbkhROcJ7dT9rBADAjPyiEQwc4R0cW33UPACAmblPw11jV5ojvIOfUXYBgBn6CSNQ8qqOrD5V7WYUAMDMXFndoTptlYeg5NVzZzKHC6v3NSyr9unq/MU/u2JEz/Fm1Z8v+Wdurb7Dy3xp+f6JfOUrX/lOON9dGlY4OLThgNhdGi782mfC2e5aPaf6SS/z1bVrdVa1NtHH6dWvVV8/kdJ+yCbM6Aovc/kiX+S7E3avvqF6UXXGRPvC2YvtYEU9eqIv3PdUj2t652DbofrAlK985SvfKee7a/WtDcuYTq07PGmVX+CrftHaMyb2fD9dPba6f/WGhq+DAIDluLJ6bfW11bc1rfNinyG+1XSz6uKJ/Fa2tfrNak9HEBwhkq985Yt8R2O/6n9PpEtcsug+K2mVj/A+qeHE9LE7v+Go7k9WX7FPBoDRuLD6gerbGw6ijdle1eMV3tXz2Ak8xzMaTpR/k30KAIzWq6uHVl8c+fNUeFfMlurBI3+On60e2HAHOABg3N5bPaQ6b8TP8RGr2v1WtfDepWGNvbE6r3pkdar9BwBMxn81rKI01lMQD2641bDCuyIeOuLntlZ9Z/Ux+w0AmJz3VD804uf3jQrv6njIiJ/bb1VvtL8AgMn68+r/jPS5PUA8q+PcxrlkyEkNV1HOlWVv5k2+8pWvfOV7zZme0zjvurZyVvEI762qm4/0uT2vutR+FwAm75zq50f4vA6rDld45++okT6v/2y4exoAMA9/2jgvQL+rwjt/R4/0ef2q/QIAzMrl1e+M8Hkdp/DO3xiP8J6Vo7sAMEd/3XBb3zG5g8I7f2M8wvvKXJwBAHP0pcZ3UOtIhXf+7jjC52QZMgCYr9eP7PncVuGdv7Gt0HBpdbx9AQDM1ttH9nwOU3jnb7+RPZ+PZCkyAJizzy0eY3HzVQtg1QrvrtXeI3tOn7AfAIDZ+9iInstu1QEK73zdbITP6RT7AACYvdNG9nz2XqXhr1rh3W+Ez+lL9gEAMHtfGNnz2VPhVXiX6UL7AACYvbGtxbuHwjtfu43wOV1pHwAAs7d1ZM9nV4UXNsblK/Iz7cz9wihf+cpXvii8rKgLq7Ul/0znSC/Plzch3/ONXb7IFxRexuTK6jNL/pknG/vSXF59dsk/81Rjly/yBYWXsfnAkn/e+4181vOWr3yRLyi8jM5bZv7zVt0/LfnnvdnI5Yt8gWs6ruEcpTE9nr1iGdy84VbKy5jtOdXuXvZLdWj1lSXmu6eRyxf5TsTzR9Y/jlml4TvCy7J9sfrrJf2sl2SVhmX7QvU3S/pZf7j4cEa+yBe4Gkd4x+GIvnpF8EY9Plft7yW/KW5dXbTB+Z4lX/ki34lxhHcTOcLLZjij+qkN/hk/VF1g1Jvi9Oqn5Stf+cpXvrA5HOEdl5dv0Ex/00t9FF61Qfn+ttHKF/lOkCO8KLwravfq9es8zz+rtnipj8Ie1RvWOd+/kK98ka/Cq/Ci8E7NbtUfrMMcr6x+3kt8lPn+0Trl+wvKkHyRr8Kr8KLwTtnjG+66syMz/Gj1QCMctW+uTtvBfD9WPcgI5Yt8FV6FF4V3DvasfqD68DbO7t+q76x2NbpJ2Kt6TnXCNub73uqZ8pUv8lV4Fd6dtWpfLxy3eLOOyfdWL7MfuI47VQ9eZHbLap+GpXLOqP6r+pfqM8Y0WUdfLd9bLT5ML75Wvqcak3yR78wK7wtH9HyOrT6xKsPfzeuPkfrU4sE8fXLxQL7IFzacdXgBAFB4AQBA4QUAAIUXAAAUXgAAUHgBAEDhBQBA4TUCAAAUXgAAUHgBAEDhBQAAhRcAABReAABQeAEAUHgBAEDhBQAAhRcAABReAABQeAEAQOEFAACFFwAAhRcAABReAABQeAEAQOEFAACFFwAAFF4AAFB4AQBQeAEAQOEFAACFFwAAFF4AAFie3Yxg0z2puqMxAMCs3d8IFN5V9ujFAwCADeCUBgAAFF4AAFB4AQBA4QUAAIUXAAAUXgAAUHgBAFB4jQAAAIUXAAAUXgAAUHgBAEDhBQAAhRcAABReAAAUXgAAUHgBAEDhBQAAhRcAABReAABQeAEAQOEFAEDhBQAAhRcAABReAABQeAEAQOEFAACFFwAAFF4AABReAABQeAEAQOEFAACFFwAAFF4AAFB4AQBA4QUAYKXtZgSb7vurPzcGAJi1c6oDjEHhXVVbqyuMAQBgYzilAQAAhRcAABReAABQeAEAQOEFAACFFwAAFF4AABReIwAAQOEFAACFFwAAFF4AAFB4AQBA4QUAAIUXAACFFwAAFF4AAFB4AQBA4QUAAIUXAAAUXgAAUHgBAFB4AQBA4QUAAIUXAAAUXgAAUHgBAEDhBQAAhRcAAIUXAAAUXgAAUHgBAEDhBQAAhRcAABReAABQeAEAUHgBAEDhBQAAhRcAABReAABQeAEAQOEFAACFFwCAVbabEbBC9qvuW92nukt1ZHXY4p/vWl1enV+dWZ1cnVC9t/pwdYXxbbgjq6+v7lEdVR1RHVztVa1Vl1bnVqdXn6w+WL2n+qzRLcUR1f2rey7yufUin70X//6qfM6oTqw+tMjnNKPbcLsv3jf3re5a3a66ZXXA4t9dUV1Yfb46pfpo9b7qP6qLjA/m57jFB+eYHs8Wy4Y6qPqB6p+ry3Ywo/OqV1ZPWHx4sH7uUb2o+tROvIc+Wv1ydYxxrrs7V79afXwn8jmx+s3qbsa5rvaonlS9uvrSDmbzleot1fcuyjEb6/yR9Q/7TIVX4Z2BY6qXVZesc16fq55fHWjEO2zX6inVv2/A++kd1eOqLca8w7Ysfrl75wbk82/Vk3M63c44uHpBdfY6Z3Nx9dLqjkas8KLwKrzjd6vqL6orNzi386ufrPY08u3yqOojS3hf/Uf1QOPebg9q+Kp7o/P5cPUI494ue1c/V12wwdlcUf1JdQsjV3hReBXecR6V+r4lfBhc+/HxhvNOuXGHVv93E95ff5avarfFgYtfFJedz6uqQ4z/Jj2wnTvtZ0dP5fof+bZE4UXhVXhH46Dq9ZuY4RWLIy++pr1+D6nO2sR8Tqm+Vgw36H4NF5ZtVj6fq75RDNdr1+qXqq2bmM9rqv1FofCi8Cq8m+vo6qSRZPm6ah+RXMNz2vjTS7b14pyni+M6ntmOX8y53r80fr84rmG/6g0j2bd9vGHlBxReFF6FdxPco/rCyPJ8d75Cr+Fr0F8c4fvtR0Tz335shPn8vFiq4Vur944smzMXn6EovCi8Cu8S3bVhzc+1ET6Or/Zd8XxeMNJs1qof9vbpeSPO5+dWPJv9Gy66HGM2Zzd8q4bCi8Kr8C7B1zTcbGBtxI/XN5x/t4q+b+TZbG1Yv3RVPXXk+axVz1rRbHZrWBd3zNmc0nDDHhReFF6FdwPt2fi+6ruhxy+vYD73b7hj3dizubDhbnur5u4N662OPZ+vVF+3gvn89kT2bf+aO7UqvCi8Cu+G+s2JfCBc9XjYCmVzYJt7tf/2Pj7SV2+Luwr2aefumLbsx8mt1uoAj57Yvu0XfBwpvCi8Cu/GuF+buzzPjjxObbjaehX86cSyWat+bYXePy+aYD5/vCLZHND4T9O6vpU17uFjSeFF4VV419eu1Qcn+IG9Vv3KivwyMsVsLm81LsK5y6KgTC2frdV9ViCf353o++f43JhC4UXhVXjX1TMn+oGwVl3acKHdXG2p3jXhfF63Au+ff5xwPm+feTa3axrnvd/QY5UvAFV4UXgV3nW1S3XihD8Q1qoXzzifh0w8m7XqbjPO554zyOeBM87npRPP5kOO8iq8UykSMHaPqe408W14dvO9IcXzbINt22A/OtNsDm749mrK7r74pRcUXthJ3zeDbdi3+vYZZvM11eNmsB3f3jxXBDiwesoMtuMJ1eEzzOc7q71msB3f62MKhRd2zkENy/XMwdNmmM+3zWQ/sveiVM3NE2dSqHatnjzDfOayT3hC7i6Jwgs75dHNZ4HzBy4K/JzMqSQ+fobvH/mM1+HVfWeyLftUD/VxhcILO+5hM3u/PXhG27NX9Q0ze61tmdnrbU4l5BurPWa0PXM77/XhPq5QeGHH3W9m23P/GW3LPavdZ7Q9B1dHzWh7jm5eF0rutXjN2bfZt4HCy6zs1fyWTZnT8ld3n+FrTj7ykc+OOa7hXGtQeGE7HTnD1+gdbYttsi22aYb57FXdyscWCi9svzneneyI5nOe6Fzz8f6RzzI+e28pH1B4oea3okENF93sLR/bZFtWepv2n+nn7xxfcyi8sOH2nOl27SUf2cjHe0c+oPBC1daZbteV8pGNfLx35AMKL1RdPNPtukQ+tsm2rPQ2zXXfNtftQuGFDfWFGW7Tl6rL5GObbMtKb9PFM/rFd+6vORRe2HCfmeE2nSof+chn5fNZkw8ovHCVz1Vfntk2fdy22CbbYptmmM9Z1fk+tlB4YfttrT4ws22a0/a8f4avuQ95rdkm7x+vNxReWLZ3z2x73jWjbfl0dfaMtuej1bkz2p4vVCfOaHs+27y+Mj/evg0UXrjKm2e0LedV75vR9qxV/zSj7fkn75/R57M2o+15T3Wh9w8ovFD1bw3nhs3B31dXzCyf19oW22RbdshXqn+cybac0rxOB0LhhaW7snr5TLblr2eYz5ubx1JEJy1+uZqbdy/KyNSdXb11hvn89Yy2Yy1QeGGnvHQGO9NPVO+cYTaXVX/mNTZaWxfbNnUvqy6fYT5vbTgXfsqumMk+AIUXNt1J1esmvg2/0XxvJ/r7DV/PTtV51Z/M/BfGCyb8/C+pXjLTbK6sfnvi2/CK6nQfUyi8sD5eMOHCeGLzOS3j+pxZ/eGEn/+LJl4Ib8r51W9N+Pm/pHmtBnJtf950V5+4vHqhjycYn+MavrYc0+PZYtlmfzTC/Lbl8dgVyOaghnN5p5bNKdXeK5DPPg139ppaPmdXB6xAPk+e6L7tRT6WtvuXzzHld4xIFF6Fd5wObFiLc0ofCK9ZoXy+Y4If2N+0Qvk8doL5PHVFstlSvX6Cvyzu52NJ4UXhVXg3xiMm9IHw2eqQFcpmS/XqCeXzByv4/nnphPJ5+Yplc3j1+Ylkc2X1QB9HCi8Kr8K7sX5hAh8Il1UPWMFs9m9YkWLs+by32nMF89m74Za2Y8/nIyt69PChDasejD2fn/AxpPCi8Cq8G2+X6lUj/0B45grnc8fGfT7vqYujaavqaxquqh9rPmdVR65wPt838n3bnzV8m4PCi8Kr8C7BHtUbRvqB8KPi6Z4Ny32NLZszqzuJp6MXxXJs+Xyxupt4+qmR7tteW+0mHoUXhVfhXa49q//buM5r+0Gx/Le7LwrmWPI5ueHoM4OjqtMa1znvdxXLf3veyD6r/rraXSwKLwqvwrs5dql+bQQ5fql6vDiu47bVB0eQz7uqw8RxHYdX7xlBPu+rbi2O6/jW6sIR5POCnMag8KLwKryj8ITqnE38sPY1+Q3bp/rjTcpma8Nd7hyZumF7NNyYYjNXy9hLDDfo2OrDm5TN2dWjRKDwovAqvONyi+qVS8zuouqnlalt9siG20QvK58Tqvsb+zZ7YPXRJeZzYvVwY98me1Y/33Cb5WXl85et1rKKCi8Kr8I7OQ+o3rGBmV1e/Wl1hFHv0Af3jy6OHG1UPqc3XOnu4prtt3vDeehnbGA+Z1X/s+HIMtvnyOov2tily95W3deoFV4UXoV3Or6+YfH6S9fxg/rXc67heth7UUrft47vpeOrZyhS62KP6rta3/N7/3Oxv3P6wvoU3xe1fjequLj6q+prjVbhReFVeKdr/+ppDVcZn7od2VzZcMHV7zQsCL+rUW6Io6ufXBxZ2p4LdL5UvanhiPGRxrhhbl/9WPXmxcy3NZ8vV29tuEnBUca4IXZruPvkixvO8926Hfl8uuFo8VNyi2CFdwWs2lWXxzWc1zcm31u9zH5gqQ6p7rIoSbdY7Ox3a7g72nkNS2l9uvr44sgHy7NrdYdFQbp1dXDD0eC1hvMXz6k+03D+5ymLD3iWZ5dFAT6qus3ivbTX4rPkkurchlNKTly8h640sqXat7rz4j10eHVQw9H6y6sLGo4In1J9bJEVyy+8B4zo+RzbcGdMZlp4HeEFADaj8DrCu4m/rQMAgMILAAAKLwAAKLwAAKDwAgCAwgsAAAovAAAKLwAAKLwAAKDwAgCAwgsAAAovAAAovAAAoPACAKDwAgDATO1mBADAEuxdfUN1TLVvdX71keq91eXGg8ILAEzVIdXzq++ubnY9//7c6mXVb1ZfNC7YecdVayN7PFssAMzUQ6vPb+Pn4Reqx894FuePrH8cs0ovROfwAgAb4THVm6pDt/G/P6T6h+q5RofCCwCM3aOq11V7bOef21L9fvU0I0ThBQDGXHb/vtpzJ/6Ol1a3MkoUXgBgjmW3hovbfsY4UXgBgDmW3as8o9rdWFkPliVj1exe3bm6S3VkdVi1X7VrwzqQ51dnVidXJ1SnNFzNynLcvLp7dVR1RHVwtdcig0sbli86vfpk9eHqS0a2VAdeLZ9bL/LZe/HvrsrnjOrERT6WmFJ2d8YB1b0a1ukFhRduwu2qJ1ePru53tQ/obXFO9S/VGxquHlaw1teu1YOrJ1aPqI7ejj+7Vn20ekv1d9V7qq1Guq52abhRwLcs8rnLdv75T1RvXRShf62uNFJldzsdrfDC9rMO72oVqSdX71jHrC6p/qa6j/HutFtUv1B9dh3zObn66YajxOycg6ufrU5dx3xOr17Q8K0K8yq7l27gZ+SPzGhW1uFF4WXdbKme2vCV90bm9ubqHsa9Q0Xqdxa/PGxUNl+uXtj139GJG7d/9SvVhRuYz8XVi6qDjFvZ3YbH9yu8Ci8KL9d0TPXOJWa3tfrDRUngpn8R+e6GczqXlc+Z1bcZ/Xb9onj2EvM5p3rW4mej7N7Q4zEKr8KLwstXP6yf08YeNbyxxynV14vhBh3ScA70Zr3HXumXkht1QPXqTcznHxqO/KPsXt9BhTmdAqPwovCyw/aqXj6CHC9vXl+9rZd7VJ8ZQT6fqO4kjus4umFFhc3O55TqruJQdq/1eOfMZqfwovCyQ/ZvuacwbMvjV/MV7VUe2nA+7ViyOaf6WrH8t/u13FNMbupxQfUgsSi7V3s8VuFVeFF4V93Nqn8bYZ5rDRfkrHrpfVibd4rJTZUqpXcou18eYT6XNCxTh7L7mhnOUOFF4WW77FG9baRl96rHT61wPveuLhpxNuc23DhhVR1bnTfifL7ccHMLVrfsvr95rrKi8KLwsl3+aORl96rHE1Ywm8Nb37V1N+rxyYaLtVbNQdVJE8jnM9WhdnUrWXY/0HzX0lZ4UXjZZt8+kbK7tti53WaFstml8R95v/rj1a3WqSdbqtdNKJ83L15TKLsKr8KLwrtyRw/H/FXs9T3etkKl6rkTy2atetoKvX+eMcF8ftBuT9lVeBVeFN5V86oJfmCvVd+5AtncqnFeBHVTj7NbjVMbDmpYpWJq+Xyp4TbUKLsKr8K7U3bzvmYi7tdwOsMU/Xr12oYr0OfqhdV+E3zeh1U/U/30zN8/z2+aN3fYv/rF6gdG+vxuWT2k4ULA/Rcl8ZTq+OqECZfdv6/2XNLP+2D18IYl8oB14gjvdL2laR7dverxIzPO5g7VFRPO5uLmdTenazu8cS4Rtz03dTlyZDO9b/Wm6sobed4fbTiNZEqnNDmyu7Ec4UXh5UbdbeJld606rfl+o/KSGeTzCzN+/7xwBvm8eCSz3KXhG5ut2/Hc39o0jq4ruwovCq/Cu8mmsgzZTT0eN8Ns9m04z3Lq2Xx2pr+Q7F6dOYN8zqv2HsE8/2IHn/9HGve3CMquwjt7lnxh7PZouufuXtt3zDCfxzecuzh1t2qet7V9WMMpDVN3YPWYTX4OP1Q9awf/7F2qfxlp6XXOLgovjMCDGq4wn4PHLQr8nDzJttimFdiWm1e/tpN/x51HWHqVXRReGIlvmtG27Ffdf2b7j4d7rY3aI2e2LZt1Adj3tD7fZIyp9Cq7KLwwIg+Y2fZ8w4y25djmc/S9htUmDp/R9nxNddsZbc8h1dGb9LOfso5/1xhKr7KLwgsjsmt195lt0z1mtC33nOFrTj7yubZ9qnut8995VendjJtqKLsovDAyRzSOK7PX05yuij16hq85+cjn2m6zQZ+Vd67evuTSq+yi8MII3cY22RbbZFs2eZs2shwus/Qquyi8MFIHz3CbbrbEDxz5bL9DvH/kcy3nbvDfv4zSq+yi8BoBI7a37bIdS7aP15l8ruWzDTe+mGrpVXZB4WXktnjfyUc28tnkfNaqtyzh52zEhWzKLii8TMBXZrpdl8hHNvKZVD5/vqSfc+w6ll5lFxReJmKOO85LZ1Sqvug1Z1tWZJveUr1rQqVX2QWFlwk5Y4bbdLp85COfSebzPdUFEyi9yi4ovEzMadXlM9umE2e0LZ+a4WtOPvK5sXk+vrpoxKVX2QWFlwm6rPrYzLbpwzPalg/N8DUnH/ncmHdWj92E0rstt7xWdkHhZcL+bWbbc/zMysecLvI6szp1Rtvz6eoLM9qeC6sTRvA8/nUTSu/bb6L0Krug8DJxb53RtlzecIRoTtvzjpm91tZmtD1r1dtmtD1vr64YyXMZU+lVdkHhZQbe0nyOIv5zw1GqOfmHGW3L62f4/pEZqjmMAAAX90lEQVTPvEuvsgtcr+MajnqM6fFssdykV40wtx15PGOG2RzcsN7r1LM5v3nemWzfhpUFpp7PpdVBI53xgxa/yC5rFh9blN5HLeayrJ/7germPo52yvkje18ds0rDd4SXKfiTGWzDedXfzjCbc6vXzmA7/qZ5nY98lYuql89gO17Txt/ed0dtxpHe43NkF7gRjvBO05bF0YUpH6F64Yzzuc/Es7myusOM8zmq2jrxjO4xgTl/Y8s90uvI7vQ4wruJHOFlCtaqX5jw87+g+t0Z5/O+6g0Tfv5/3bCiwVydWL1iws//75vGEmvvrB7T8o70LoMjuzBRjvBO15aGFQGmeITkJ1Ygnzs3XEE/tWwuro5YgXxu23DKxtTyubw6emKznsuRXkd2158jvCi8bJO7NNyMYkofGidUe6xIPr/pl5FR+9kJ5vMrE5311EuvsqvwovAqvJvsJyf0oXFZde8Vymbv6iMTyufd1W4rlM/u1b9PKJ8PV3tNeN5TLb3KrsKLwqvwjsAu1Rsn8sHxIyuYz10m8iH/heo2K5jP7RrOxxx7Phc0vVMZ5lB6lV2FF4VX4R2Rg6qPj/yD42UN5x2vom9u3KsCfGVRRFbVwxrOjR3zqhmPndG8p1J6lV2FF4VX4R2h21SnjfSD4/UNXx+vsu8bcZl6srdP3z7iX0q+e4bzfuDIS6+yq/Ci8Cq8I3a7huWkxpTn61reYvBTKL1jKlWXVU8Ry397WuM60ntl9T0znvdYS6+yq/Ci8Cq8E3CLxnMhzu9Xu4rkGp7YsC7pZmdzXvVQcVzHI0byIfzl6vErMO+xlV5lV+FF4VV4J2TP6o82McMLq2eK4Ubfd5t5zvX7qtuL4Qbdsc29k+FHGtZxXhVjKb3KrsKr8Cq8Cu9EPbY6fcn5vaO6k9HfpH2q32742nqZpzD8YquzDvLO/tL4wpZ7isMV1YsalrNbNZtdepVdhVfhVXgV3onbr/qlJXyYnNxwDuQWI98ud6v+qeWcS+0Xke13dPUPS8jnjYv98SrbrNKr7Cq8Cq/Cq/DOyKGLo3tnrXNeH6qelVUYdtb9F6V0PW9H/JXqFdU9jXen3bt6Vet7Z8PLq7+t7me81yi9X1Z2FV6FF4WXnbV7w8Uwf1WdvYMZfazhtrn3yhHd9XbLhht0vH0Hy9WlDUeMv786xDg35BfHH6zespj1jpxW8s/Vc6vDjXNTS6+yq/CudOFdtQ/v46oTRvacvrfhJgUs5/V+dHWfhjuCHdmwysN+DbeYvazhav4zG5Y7+0jDChBnG91S7LPI5h7VUdWtq4MbzvFcqy6pzqk+U51YfbB6f8ORXTbeXg1Hfu+5yOc2i18y9lq8ty6pzm04j/7Ehm9D/nPxz7np0vvGxb5oI3ywenjDXfbY3MJ7wIiez7HVJ8Qy38LrCC8AYyy9G3Gk15HdcRVeR3g3yS5efwCw6d5VPabhQrb14sguKLwAMNvSq+yCwgsAsy29yi4ovAAw+tL76OqCHfiz/6nsgsILAFPw7oZVS965jf/9FdXvVQ9SdkHhBYCp+NSiwD6iek3DKg7XdlrDbbuPrp6XZeDgeu1mBAAwam9bPHZrWDv1Ng3rhp+4KLyAwgsAs3BFw82TTjAK2D5OaQAAQOEFAACFFwAAFF4AAFB4AQBA4QUAAIUXAACF1wgAAFB4AQBA4QUAgPFxa2EYn72rr62OrHavzq7eX51pNACg8MKU3aZ6fvX0at/r+ff/Vv1O9bdGBQDckOOqtZE9ni0WqmdWF23ja+Yd1RFGBjAp54+sfxyzSsN3Di9svudVf1Xts43//YOq/6zuZnQAoPDC2P1w9bs78OcOr97acBoEAKDwwmjL7kt24s8fVv2FMQKAwgtzLLtXeWj1KOMEAIUX5lh2r+LCRwC4EZYlg2mX3aqHVVsarrqdwz7pTtVRDStRHFzttdi2S6tzq9OrT1afrq70klqqXas7LvK59SKfvRf/7qp8zqhOrD5VXWFkS3WzhtWIblfdsjqgYS3vK6oLq89Xp1Qfrb5gXCi8wFTKbtWB1a2qz050Lnepnlg9ovq6qxWom3Jh9e/VW6q/q07yEtsQR1XfssjnvtV+2/jnLq7+o+Hiyr+vPmaU626PxS+8j6seXN15O/7sZ6p3VW+s3lBdYJwwH9bhZTPL7ka+ju46sXnsW/1A9aF1nMG/V8+q9vRy22l7Vd+9KKzrlc8Hqu9v25ff44bdvuEmNOesUzaXVq+o7me0G8o6vCi8KLs7+Th2IrPYu/rJdfygvr7H56rnNHyVy/bZo3puw22sNyqfz1c/vijVbJ87VC9vOJVno/J5R/UAo1Z4UXgVXsZWdteq/Scwi8dUpy7xvfXx6hu9BLfZQxrOjV5WPidX32Ts22Sv6oXVV5aYzysalj5E4UXhVXgZRdn95MjnsG/1sk18j/1Ow5FLbrhM/d4m5vPSnOZwY+5afWSTsvlC9XgRKLwovAovm11216rfGPEcbl+dMIL32b81XLXONd2q9T1Pd0cfH6puK47r+PaGi/82O59fzjKmCi8Kr8LLJpbdSxrv7YXv1XC+5ljea6c1rDjA4NiGJd7Gks9Z1d3F8t9+YmSfVa/KefEKLwqvwssmlN216mdGOod7j3DnflWpOtrLtGOrs0eYz3nVPcXTz44wm7WG5eWUXoUXhVfhVXaX+tr5vw03nBiboxpuQLA20sfp1des8Ov01g1rNo81n883rEawqn5oxNmsVX810v2OwqvwovAyw7L7upEeaTmw4S5bayN/vK/VXBZrn9Z37eONXGHjZiuYzyPa2CXH5v7NksKr8KLwouxuuC3V307gw/qqxx+v4Gv1ZRPK51UrdiTxlg2rIkwhm63Vg+z6FV4UXoVX2V21slv1jAmVqasej16h1+rjJ5jP01Ykmy3V/5tYNqe17beZRuFF4VV4ld1ZlN2DG/d5uzf0OLXh7m9zt191xgTz+XzDaTJz99QJZrNW/baPAYUXhVfh/apDq2+ufrT6uYZblz5i4kcHlN1revFEP7DXFq/JufuFCefzoplns9fiaOkUs7m8upNqofCi8K564X1I9ZZu+CKMSxpuX3mssjvpsvs1LfeWp+v9OL86YMbvw5tXF0w4n0uqw2ecz3MmnM1a9TeqhcKLwruqhXfv6i+2YwaXNaw7qexOr+xW/frEP7DXGhb5n6ufnkE+vzLTbHatTp54Nlc03pvfKLwKr8Kr8G5o2X3HDs7ipY37qmxl97r2rM6ZQaE6uXneOnWXhvOUp57P56s9ZpjPY2aQzVr1QvVC4UXhXbXC+1c7OY8/GWnpVXav3xNn8oG9Vj1ghvu8B88on8fOMJ//M5NsTsnNKBTeCfz2D+vl4dUzd/Lv+N4RHun94eolS/x5f9dw1fblE8j8W2f0+v3WGb4n5TNee1aPm8m2HJlbQqPwskJ+ep3+njGVXmX3hm2pHjmj1+83zfA9+U0z25Y5HUV8QLWv1xoovEzLIdVD1/HvG0PpVXZv3B2rw2b0Gr5zw3rCc3FY81oy6lbV7WZWeOfkgT4GUXhZBV+3AeV0M0uvsnvT7jXD1/E9bYvXnG2xPSi8cENuu0F/72aUXmV32xw7w9fxsbbFNtmWHXKL6iAfhSi8zN1GLhm0zNKr7G67Oa69edsZbYt8xmuLfEDhZZq+vMF//zJKr7K7fQ6d4ev4UNtim5Zgn4Y1y+UDCi8Tc+ISfsZGll5ld8c+tOdmH9tim2yH7ULhhRvyvuqiiZZeZdf+4yq72r/LRzbePyi8cEMurV69pJ+1nqVX2d1xX5np63gu5CMb+YDCywb4lSXu8Naj9Cq7O+e8Gb6Gz7MttmkJLqi2ygcUXqbp5OrHlvjzdqb0Krs777MzfA2fIR/5LMHW6kz5gMLLdP1x9csjL73K7vo4aYav30/JRz7y2SGXVJ/zEYjCyyr5/0ZcepXd9fPhGW7Tf8lHPvLZIR+prvTxB+NwXLU2ssezZzzvFy55ln9yE6X3h5f8fF5X7T7jfPdquPhmbSaPc9qc21hv5AGN82aUzyVt7A1ulu3bZ5TNWvV7KsZNOn9kmR2zSsN3hJeNNKYjvY7srr9Lq3fPaHvetvgQmIut1dtntD3/Wl02o+35l5ntD97qIw+FF6V3c0uvsrtxXj+jbflH+chnic6u/n0m23LxzH65gslzSsPm2azTG5zGsLFuWV3R9L+Ovai62QzzOWBRRqaez+XVLWaYz3Obx+kMr1QvtolTGlB4ld4Nebxb2V2Kv5/BB/afzTifv5xBPq+daTY3n8kvJA9RLxReFF6Fd3NLr7K78b5xBvkdN+N87j6DfB4w43z+aOLZfKB5Xeyp8KLwKrxKr7J7vbZU75hwfq9ZgYymfBR+7hdD3bbhYryp5vPNqoXCi8Kr8M6/9K562b3K1000v8uqO61APsc2zXOtt1b3XIF8fmui7593Orqr8KLwKrzzL73K7jW9dIIZ/vIK5fMbE8znD1Ykm/2r0yeWzeXV3ez2FF4UXoV33qVX2b2uA6pTJpThfzXcPGNV7F19dEL5fLp5rpxxQ75pYvvAn7fLU3hReBXeeZdeZfeG3a9pnI/45Yav+VdxH3jRBPK5tLrPCuYzlaPwb692s7tTeFF4Fd75ll5l96Z9d+M/L3SVL7T51gm8z56xotnsVr2x8R95P9RuTuFF4VV451t6ld1t9/wR5/gD4ln6DVm25/FTK57NzRruwDbGbM5qNS7yVHhReBXelS29yu722dJwW+mx5fgc0fy3HxlhPj8rlqoOrN4zsmw+W91ZNAovCq/CO9/Sq+zuuO9ruJp7szO8pPo2cVzH0xrOlx3DFf/fLY5r2Lf6u5HsA0+obiMShReFV+Gdb+lVdnfeAxdHhzYrw5NajbVcd9R92tzVNU6v7i+G67VLwzclV25iPq+s9hOFwovCq/DOt/Qqu+vn4MUH57Iz/N+t1tJWO2r/6k83IZ+/qW5u/Dfp/tUnlpzNudV35sYSCi8Kr8I769Kr7G6Mh1UfWkJ+72lYIo3tL1bLuGDqA9WDjXu77Fn95BJK0+XVH1aHGLnCi8Kr8M679Cq7G2uX6kltzEU5/1w9ylGpnbKlekz1LxuQz7sbloSTz447sGEVlDPXOZuLFkX3dkas8KLwKrzzL73K7nLdtfrV6mM7kdmHqxdURxnnuju6+sWGu9LtaD4frX6luotxrqvdqydUr2g4/WBHL+Z8Y/U/Gk5rQeGd9W/yq1Z4TxjZc/re6mX2A9tcep+/gX//31VPbfhKj+U7ouEr9XssyuutG8793ftqH87nVJ+pTqw+2HCU+CyjW4rDqwc0XAB4VMNV+4c03J55yyKfcxsuQjux4dSV4xsuWGRj7VrdreE0nuOqOyzyOqjaY7FPu6D6fMMFih+r/qN63yI3lld4DxjR8zm24dxwZlp4HeGdful1ZBeAKRZeR3g3yS5ef0zM/1f98jr/nY7sAoDCC7MtvcouACi8MNvSq+wCgMILoy+9L9zBP/taZRcAFF6Ygp+vntFwdfi2uLT6ueopyi4AKLwwFS+vbl/9VMNyO9fn9OrXG5br+dVqq7EBwGrYzQiYiQuq31w8jqjuXh3WsAzMR6pPGREAKLwwF2csHgAATmkAAEDhBQAAhRcAABReAABQeAEAQOEFAACFFwAAFF4AABReAABQeAEAQOEFAACFFwAAFF4AAFB4AQBQeI0AAACFFwAAFF4AAFB4AQBA4QUAAIV3x1wpAwBgyX6kOmBkz+kKhXe+Lhvhc9rHfgAAZu1mI3xOX1F452uM4R5mPwAAs3aoTqTwLtOFI3xOt7cfAIBZu51OpPAu05ca33m8x9kPAMCsje2z/pLqYoV3vtaqL47sOR1b7W9fAACzdGjj+zb33FULYRVXCDhrhBk8zP4AAGbp4SN8TmcqvPN36gif07fYHwDALD1xhM/pFIV3/sYY8rdU+9knAMCsHFA9foTP61SFd/5OHOFz2q96lv0CAMzK/6j21oXYDN/YcPHa2B6nVLuLBwBmYc/q9JF2jq8Vz/wdONIX31rDrQcBgOn7XyPtGlfmLq8r46SRvgjPqw4XDwBM2hHVBSPtGiesYiC7rOgL8fiRPq8Dqz+1nwCAydpS/Vl1Mx1I4d1s7x7xc3tc9WP2FwAwST9TPVIHYgzu0HjP412rrqgeKyYAmJQnNZwjO9Z+sbW6pZhWy4kjL70XVw8REwBMwjdVl468W3xoVcPZZYVfmG8c+fPbu/p/1TfbhwDAqD2len3DUmRj9iZRrZ4Hjfy3sKsvH/KzDSfBAwDjsWv1Sw2nCkyhU9xHZKtnl+pzE3mBrlVvrW4rNgAYhaOqd02oR5wkstX14gm9UNeqC6vnV/uKDgA2xYHVrzX+83Wv/fgV0a2uu03sxXrV4wvVC6pbiRAAluLIRdE9b4K9YWvDClWssH+faOm9avmyt1XPrY7Leb4AsF52qe5R/Xj1zqZznu71Pd6+6mEqSPVd1V/OZFsurD5RnVad07C02VYRA8BN2rXapzq04WjuMQ0rJs3BU6rXKLyrbY/q1CzEDADMz8kNF9hducpD2MXroMuq3zcGAGCGXrzqZbcc4b3KAdUp1UFGAQDMxJkNF6tdsuqD2NVroaqvLGbxMKMAAGbi56rjjcER3qvbt/p0dQujAAAm7jMN5+5+xSgc4b26y6vzqycYBQAwcd9ffdgYBo7wXtMu1X9W9zIKAGCijq++wRgU3htzv8ULxQoWAMDUXFHdu/ovo/gqpzRc1xnVwdV9jQIAmJjfqF5pDNfkCO/127c6obqdUQAAE/GJ6p7VpUZxTb62v34XVd+ZhZoBgGm4rHq6snv9nNJww05vOAL+YKMAAEbup6vXGcP1c0rDTf9C8Obq4UYBAIzU66snVmtGofDuqIOr91e3NQoAYGROqu5TfckobphzeG/auYvfmi40CgBgRK66YZayq/Cuiw9VT8lFbADAOFxefWv1caO4aS5a23YnVZ/NrYcBgM21Vj2r+gejUHg3wgcbvj54lFEAAJvkOdWfG4PCu5He27DGnZUbAIBl+7HqJcag8C7D8dV5DUd6rXQBAGy0rdUPVn9gFArvMr23Oq16XC7+AwA2zmXVd1V/aRQ7xtHJnffw6m+rA4wCAFhn51XfUv2rUSi8m+0u1d9XdzQKAGCdfKLhXgCfNIqd46v49fHRhrucvN4oAIB18HfV1ym768M5vOvnK9WrqwuqB1e7GQkAsAN94scbVmO4zDjWh1MaNsbdqldUxxkFALCNTqi+Y/G/rCNHeDfG2dWfNdyK+P7mDADciMuqX6yeWZ1pHOvPEd6Nd2z1+7lRBQBwXW+tfqThAjU2iIvWNt7Hq0dU31x9yjgAgEUn+Obqkcquwjsnr6/uXH1PdapxAMBKOm3RBY7N6k5L45SGzbF79fTqf+XCNgBYBR+pfqt6ZXW5cSi8q+aR1fdXT8hSZgAwJ1dU/1i9tPon41B4qVtUz6ie2nATCwBgmt5f/Z/q5dVZxqHwcv1u33Df7EdXD6z2MBIAGK3LqndVb6r+oTrJSBRets++DWv5fkP1gOpe1UHGAgCb5rzqg9Xx1bur91QXGovCy/q6dXXX6o7V7aojG06JOKQ6uNqn2lO+ALBd1hpu7XtxdW51TsPNpE5pWGHppIa7oJ1uVAov47F77vIGANviyqyeAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKyE2xgBAABXt8vMtmcfkQIAMGcKLwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAo/X/A6ZJugUxTmeQAAAAAElFTkSuQmCC',
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
