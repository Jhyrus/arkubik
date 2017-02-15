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
define('DB_NAME', 'arkubik');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Mormed2203497');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'RKD!!&il:~NU3;Ug6E3ib_ S=,WTmov&UK},8aF]_+<FY!O(L;6S/&9ff=v/-Un3');
define('SECURE_AUTH_KEY', '%_!!=OW`nqHIc6Q^^xi3cRU_vA<YG}|L4D-+FCT NHry8nWE81wCX`,s&Ju!@0zg');
define('LOGGED_IN_KEY', '>oC4bT8#_b09uvfgoB&F&[r.962dnRV%rL83Q$AMFW:wHbqS,hcJQmsacX;,8c@2');
define('NONCE_KEY', 'P8B@>V}+9c_eZ4cpF8~@;R}<wiWE<H!rKF=ct,IF{<n*_X=h*^lk8-,w9oW2FGPS');
define('AUTH_SALT', 'I5OgV?VY_?0@F0m_W23T?RSUl4<ZK}Np_3y#jYjnw/pT8!Y{%h_pz%$F7qBCnumx');
define('SECURE_AUTH_SALT', 'aTDHk)QZRH0$;zFea^9t[v[>]5y@;qsrz7(3QxB_):BfI#{xZ2:,WLU?U)%9l{x?');
define('LOGGED_IN_SALT', 'Z;xn9K%Z7s^RcVh-2rX&Pp)s(5)yAb_/pT#IsM[dQk7{cMw1@Elvqdr7Elzgkah{');
define('NONCE_SALT', '/ *lcBpjH7=AaRQ5nx35]2dBobSG+f`vHt&X.[k3NoWflP)t0`)=) D`C!J<,W0C');

define('FS_METHOD', 'direct');
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


