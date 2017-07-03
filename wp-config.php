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
define('DB_NAME', 'codigoteca_vodka');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', 'C~R,z/J2V>0$ov(,Rs`bFDzIB?R;K`+qp@Q#k$ytjINjq@d/8rt%zb~6vU,an|6d');
define('SECURE_AUTH_KEY', '8j6&]`r`,]&#q^^[_phx1L|^qxysv<y*LoUdNw$#|Jru0Xlf=;=?QM?`pCgj48kM');
define('LOGGED_IN_KEY', '50!xeP;S_B?K>nSb,oJTlM]XBl*JC4%=]:h(>DqCX)x|Tsw:&HcyLDhK^|cI9/?6');
define('NONCE_KEY', '|-^xxpU<kz_p0/3UU-*R]j(IK/TD/*1!5x{f:M%GMgXZKXS_LV^MM^s19]@TLW=>');
define('AUTH_SALT', '+~-<I-WPpG4J*NHf|_:k*8l%8V8}7|,TQr]3u@:c L761=*L/14!~WnYR,5QUNcM');
define('SECURE_AUTH_SALT', 'e$Y>Cgu!jiOVF(&fYg^]#LxT&9vRvI}f.84>u2]R*t:|:TuzA#_Ja%!JV|)T|Q}2');
define('LOGGED_IN_SALT', ':zNTG )%(}kJA,i@TEf:<JILvURf:-n!gjU-R>?i3(Ykr?}yi6@9xIyE!4>Jff},');
define('NONCE_SALT', '{lEP~oan,YIqcFh7z#?EI47|fd3hl>pM%GpINs}K0JtaZqk3bG9nw^k-rzb7Q&TM');

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

