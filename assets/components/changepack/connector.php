<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(__FILE__, 4) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var ChangePack $ChangePack */
$ChangePack = $modx->getService('changepack', 'ChangePack', $modx->getOption('changepack_core_path', null, $modx->getOption('core_path') . 'components/changepack/') . 'model/changepack/');
$modx->lexicon->load('changepack:default');

// handle request
$corePath = $modx->getOption('changepack_core_path', null, $modx->getOption('core_path') . 'components/changepack/');
$path = $modx->getOption('processorsPath', $ChangePack->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));
