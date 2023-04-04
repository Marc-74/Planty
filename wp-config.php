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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '6Wq48Eq|{bUh>dGa,M>A3:o=S|-D9cW5Nw{E5Rf=Dke}qU28k?|jo@K5!SaMdo%+' );
define( 'SECURE_AUTH_KEY',  '?rpP}d6&R]4g#.R/zC3%49kpv`dN6QG2Zv8#D]$gM]a=Lcrm5Wp!dquh9Z)sVQ(?' );
define( 'LOGGED_IN_KEY',    'v2gs0^0D< l#x>^{2:`:LtMmy0_C!J33,SO9{QF(uOyL9VEf`Es%fQSI^q[B#jV)' );
define( 'NONCE_KEY',        'Vo?^07^?0TwJKtzL6E${OtDBps39g/2y*`HN>Y$uB[?Iec& QSkeacJ$aBM0OEQE' );
define( 'AUTH_SALT',        'q@0h}h<}1Py;#EnP]^*A6o?-Et? JD!u5q(-!&6Q3LU#dFMNqjZHXI,>V+f_Gu-(' );
define( 'SECURE_AUTH_SALT', 'GFsEy+JynV?9Z2g||L=|E2SwFYi-+&3=_bRDta:Cb5$0M/l0 cw<nO6dwWFnA%2n' );
define( 'LOGGED_IN_SALT',   'PR~H ly%rDk8K_3V)I2a+bM;m5P[w>(z`;Yv^nL/_NX+SXpw^;>P@]x=+r:e):2e' );
define( 'NONCE_SALT',       '1Kl!8z2nu^f20<D#WcTXp+W&34_`c,j%gR~rl*P<PWQ^0(xNqhuWmv,2~B}Zg&SD' );
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
