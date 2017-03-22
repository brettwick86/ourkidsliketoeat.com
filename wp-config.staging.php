<?php
/**
 * Development environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment
 * in this file.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'brettw6_wp_staging_ourkidsliketoeat');
/** MySQL database username */
define('DB_USER', 'brettw6_wp');
/** MySQL database password */
define('DB_PASSWORD', '6ABhCvIKp1');
/** MySQL hostname */
define('DB_HOST', '');
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

// Disallow automatic updates
define('AUTOMATIC_UPDATER_DISABLED', true);
// Disallow file editor
// define('DISALLOW_FILE_EDIT', true);
// Disallow plugin/theme additions
// define('DISALLOW_FILE_MODS', true);
