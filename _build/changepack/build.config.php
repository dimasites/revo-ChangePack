<?php

/* define package */
define('PKG_NAME', 'ChangePack');
define('PKG_NAME_LOWER', strtolower(PKG_NAME));

define('PKG_VERSION', '1.3.0');
define('PKG_RELEASE', 'dev4');
define('PKG_AUTO_INSTALL', true);
define('PKG_NAMESPACE_PATH', '{core_path}components/' . PKG_NAME_LOWER . '/');

/* define paths */
if (isset($_SERVER['MODX_BASE_PATH'])) {
	define('MODX_BASE_PATH', $_SERVER['MODX_BASE_PATH']);
}
elseif (file_exists(dirname(__FILE__, 3) . '/core')) {
	define('MODX_BASE_PATH', dirname(__FILE__, 3) . '/');
}
else {
	define('MODX_BASE_PATH', dirname(__FILE__, 4) . '/');
}
define('MODX_CORE_PATH', MODX_BASE_PATH . 'core/');
define('MODX_MANAGER_PATH', MODX_BASE_PATH . 'manager/');
define('MODX_CONNECTORS_PATH', MODX_BASE_PATH . 'connectors/');
define('MODX_ASSETS_PATH', MODX_BASE_PATH . 'assets/');

/* define urls */
define('MODX_BASE_URL', '/');
define('MODX_CORE_URL', MODX_BASE_URL . 'core/');
define('MODX_MANAGER_URL', MODX_BASE_URL . 'manager/');
define('MODX_CONNECTORS_URL', MODX_BASE_URL . 'connectors/');
define('MODX_ASSETS_URL', MODX_BASE_URL . 'assets/');

/* define build options */
define('BUILD_MENU_UPDATE', false);
define('BUILD_ACTION_UPDATE', false);
define('BUILD_SETTING_UPDATE', false);
define('BUILD_CHUNK_UPDATE', false);

define('BUILD_SNIPPET_UPDATE', true);
define('BUILD_PLUGIN_UPDATE', true);
//define('BUILD_EVENT_UPDATE', true);
//define('BUILD_POLICY_UPDATE', true);
//define('BUILD_POLICY_TEMPLATE_UPDATE', true);
//define('BUILD_PERMISSION_UPDATE', true);

define('BUILD_CHUNK_STATIC', false);
define('BUILD_SNIPPET_STATIC', false);
define('BUILD_PLUGIN_STATIC', false);

$BUILD_RESOLVERS = array(
	'tables',
	'chunks',
	//'modappstat',//TODO разобраться, почему с ним не ставится
	//'setup',
);
