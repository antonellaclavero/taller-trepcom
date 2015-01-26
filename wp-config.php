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
define('DB_NAME', 'trepcom-nueva');

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
define('AUTH_KEY', 'ZY;Y^W;f7:0+u<{(ud>-.>I|3clnT>|LI5Nj6fE2mu|c3Ag,zjD9xaYG!Ti6|roK');
define('SECURE_AUTH_KEY', 'mPP%/< ;?Lx0j=;g(+x5EOj=TM{bYw#5~4V3bd@Kj-KPTB:U-C)p_t}F8VyDCC[h');
define('LOGGED_IN_KEY', '?Dn~qJA|dYhMbSlBf#;iP1{V%H9u8q+;o9&Oq?iZZ#$R+g?n@2x-ng#wE]bD1Z77');
define('NONCE_KEY', 'G_0+am6GV&pYV(cjix.-)@o<Y]4VNH0RLM)e+{1 i@`|#*fr,<}=so<8lliWv^jH');
define('AUTH_SALT', 'sjQsqy~U4U1Y?OPIVkPg+i>Y*$73I+#,UbXc]ozI8^mg,+-itMy|D{jFs>:0-`p0');
define('SECURE_AUTH_SALT', 'xoXV,~]3qq8[$1 K{zoCv9@?<6hOs#JDqyx:Lq71|mC]G:caS$ b,g1hVtueyetp');
define('LOGGED_IN_SALT', '$%j$[|y/qkeg&iXkjw_Sr?ELa&@=+`>)~$Hdc#Qat-ZJ 5b|Q_s,^1rUWDkN:=zR');
define('NONCE_SALT', '-] _1!euKMS *eKf~+iP0u8o[F[:ZsPf+v4@sTGekk5_82-^n7V|Ox[3)qVeg.Y3');

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

