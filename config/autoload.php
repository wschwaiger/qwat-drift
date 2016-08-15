<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   Drift
 * @author    Wolfgang Schwaiger
 * @license   LGPLv3
 * @copyright quality work | clever.simple.effective
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Drift',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Drift\BackendDrift' => 'system/modules/qwat-drift/classes/BackendDrift.php',
	'Drift\FrontendDrift' => 'system/modules/qwat-drift/classes/FrontendDrift.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_drift' => 'system/modules/qwat-drift/templates',
	'drift_default' => 'system/modules/qwat-drift/templates',
));
