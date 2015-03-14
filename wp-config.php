<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'opayo');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'VhhEZ:o>IX|8[Jg.;KfztR|KnL,1D W9H:W%|`}X5@WX?y0!l{zV-)!h)::v-19i');
define('SECURE_AUTH_KEY', '+4:X -a]jd%{wP+O8#^447V]X` avI]<t_y1]x?TT!ONZk3E$bG/VD;:[ }OY!,L');
define('LOGGED_IN_KEY', 'CRmNtW+Rdx-c]hi70c3v2+}`.OC2*~,L(TbdtAEX 0.BCvI0%C(yoZy1>z~]*>R@');
define('NONCE_KEY', 'u-;R=/@Lt,4%^~=t,N%*akxU;4{wdz|-2]{hV)5Jw2aIw$2/K/kyX9$<+5-V}{ve');
define('AUTH_SALT', '2HhHNF(0Nmprks|2Ow!/&{U.3w$H=jh1}5^xRkS4h(V}._u-44CSc{$+,W-R91Zn');
define('SECURE_AUTH_SALT', '2+mPZ#D4^!>/muUS `O6=L|UB/-LRN(o{IPQ]]$_rfjP~[&e2Lv7S|*#CrlWf86G');
define('LOGGED_IN_SALT', 'O%!X?*i^XPd|Z3ajv;J6MMD4rmu|!EXC]Q`Y?TE6_Fc=e/G}bJw+zZRQ~~~P|w>%');
define('NONCE_SALT', 'ttt81q+@+RTo_07#BCj]1H39ffaOe:53EM8+a910G pm|UdCQh<YvKfzK9N|zLj4');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


