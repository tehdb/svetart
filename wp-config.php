<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'svetart');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', '');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         'm;~dpN{6-G}_Nd#OMDszaixE62[3sQl7b]: }eiAQ0L/{e}8c(UAPi}9=+DyY!%R');
define('SECURE_AUTH_KEY',  'B787Xq,+Dr<a:+p)M>BAHSRtZfi(p!(]Z._MS3Y3u8[|G{ay<]DT2w&vM{NH,gyR');
define('LOGGED_IN_KEY',    '<uzs<=s)r#r~-zD43H3Td6UX_[%>_{ -`JBHdvSIy]_<o-|SGS~z:f!K`Il}*rg}');
define('NONCE_KEY',        ' W*JdhU^YZi/eP**i.@9OC>ROa^gPF.UIvRh@*. 6J2ME j~I}yajsNg3FS{3+s2');
define('AUTH_SALT',        'BkiXxD)%#W>9.-Ry{ff/(BKkb<5BFG.<[=[]0`GO&>5N@D#v3N-8OT|Yy(y2|mm$');
define('SECURE_AUTH_SALT', 'rWoyEi v /.8yOS&kJo5Ot-/Ul9IN$Ye~ny4wBSRsJ/P%]J;qe&c%qRl;%iq4HW1');
define('LOGGED_IN_SALT',   '>/}&D(srJ]tXSjI(R:umBC%G$., J-==-bq,:!~T%z%-IY#v7w{e,#!9Iz2[QuN7');
define('NONCE_SALT',       ' 8mhPY8KfR,QTYpB!F[a}o{{5bI?c}5b>md.f?R,M-V-==.kxiB6iQt}z]Yt9@J%');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts einträgst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

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