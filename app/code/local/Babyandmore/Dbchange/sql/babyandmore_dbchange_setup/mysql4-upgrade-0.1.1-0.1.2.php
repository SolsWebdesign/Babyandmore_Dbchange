<?php

$installer = $this;
$installer->startSetup();

$attribute = array(
	'type'                     => 'int',
	'label'                    => 'CMS Block (bottom)',
	'input'                    => 'select',
	'source'                   => 'catalog/category_attribute_source_page',
	'required'                 => false,
	'sort_order'               => 21,
	'global'                   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'group'                    => 'Display Settings'
);
$installer->addAttribute('catalog_category', 'landing_page_bottom', $attribute);
$installer->endSetup();
