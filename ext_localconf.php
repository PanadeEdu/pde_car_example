<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'PanadeEdu.' . $_EXTKEY,
	'Carlist',
	array(
		'Car' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Car' => 'list, show, new, create, edit, update, delete',
		
	)
);

?>