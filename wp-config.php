<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'clean' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[M?P4;Sk] |iaq7U<go^y6o5(BFo5]Q&(b`^f#%|s X=/8wbzBU-)d^@.SE/p4k.' );
define( 'SECURE_AUTH_KEY',  'Zb]N mm38 .0/v8$`CJO8#3hG-gcn*YH|iESCd1]O(.;x3|]gq>ax3bPA nB@jzp' );
define( 'LOGGED_IN_KEY',    'I_u{a(Q>naQk2BCL}G&61&a?Q)LjUHcVko^~].#^f9>Ph|r]8z &=Dxn[8<$At (' );
define( 'NONCE_KEY',        '/FhC&t#Rgd`!R-2F1oG)vBKF{bTw2))1sMJEBH^UJQ~bTgaDlf<[ ndMU0]c}R3S' );
define( 'AUTH_SALT',        '4IArQA*aA.P_r:^ o|4;|@&*4f{3h7;m7O- vS3a0<:IcBf1HfP6n^GADLz8k:Y4' );
define( 'SECURE_AUTH_SALT', 'GQLBw0dc!7a8]TB3TEKM?}6%>8y8U]Nm,b_f|N-=*mrHv6w$;6%,w7pJn.6RIj4w' );
define( 'LOGGED_IN_SALT',   ':%|14s;EPGL=8d%77{pF3E@WiPR~dvC*|h&I-lh3RfC:EJCz2d$K~SVf<y{FH)6e' );
define( 'NONCE_SALT',       'ew=f+ ,x1 T>N,,m7A[$XPf&WP!<}Tpoq)Cr]A%ler>|WF=j~!gn[aZ~SG$Wo`JI' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
