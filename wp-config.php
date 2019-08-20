<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define( 'DB_NAME', 'goscho' );

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define( 'DB_USER', 'goscho' );

/** Ersetze password_here mit deinem MySQL-Passwort */
define( 'DB_PASSWORD', 'hNTm6K?qcMu#_cy4~K' );

/** Ersetze localhost mit der MySQL-Serveradresse */
define( 'DB_HOST', 'localhost' );

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define( 'DB_CHARSET', 'utf8mb4' );

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define( 'AUTH_KEY',         '$D2}?R@jINZf,NrfgzQC=2Goz@>)d|k0M;oMrk#1qS_#1NKxQ .cD=LmU^A(2#-I' );
define( 'SECURE_AUTH_KEY',  'ljwmJ/@D?!l~4F>qL:|`FP<D@!m_ /g#Wq`d>8q_3Mu[2<.5n@GQwtnJ;ZR>a$ue' );
define( 'LOGGED_IN_KEY',    'XTB!s8vDVI;TjqkO;PBmd`t/1@;TUb~`|{UFNeeWr)9,y!NA3uRQ4kK:*A@`G?F[' );
define( 'NONCE_KEY',        'eJ)6{m_/0vjBkI.:Wk~7*SRXTRj!a+`_tT6cD.2oQOoW:xNX#yy/d)-pC|Wt$iyJ' );
define( 'AUTH_SALT',        'M[fq;c}u,!?cCK{!}P.DkSNpI1VJl*hH;vh_][+bKtMB=Sd^^z>m%CLKZ_3m<.Um' );
define( 'SECURE_AUTH_SALT', 'fPy$L{,f77o/fk!OsE^zK[EdZxemjPw<Y@}-N472$=V)X=&8/TErqHAYcV)cP2J%' );
define( 'LOGGED_IN_SALT',   'hr]fanCDPy=qR($H: E@2G2^A8v2/x5]@m@sx*&5Dqk>.6`G=Bl_JbNW|B#rNC`S' );
define( 'NONCE_SALT',       'rsU&Sv7/ZVd&}tmk}.?T1y!v{wsM>|)7c[NZ08xx#E;@mqX{H6^^I$b,kV3:Y>hn' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
