<?php

$installer = $this;
$installer->startSetup();

$attribute = array(
	'type'                     => 'text',
	'label'                    => 'Description (bottom)',
	'input'                    => 'textarea',
	'required'                 => false,
	'sort_order'               => 5,
	'global'                   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'wysiwyg_enabled'          => true,
	'is_html_allowed_on_front' => true,
	'group'                    => 'General Information'
);
$installer->addAttribute('catalog_category', 'description_bottom', $attribute);
$installer->endSetup();
