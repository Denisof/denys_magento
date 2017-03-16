<?php
$installer = $this;
$installer->startSetup();

$this->addAttribute(
    'catalog_product',
    'refubrished',
    array(
        'group'             => 'General',
        'type'=>'int',
        'input'=>'boolean',
        'sort_order'=>50,
        'label'=>'Refubrished',
        'global'=>Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'required'=>'0',
        'comparable'=>'0',
        'searchable'=>'0',
        'is_configurable'=>'1',
        'user_defined'=>'1',
        'visible_on_front' => 0,
        'visible_in_advanced_search' => 0,
        'is_html_allowed_on_front' => 0,
        'required'=> 0,
        'apply_to'          => 'simple,configurable,grouped',
        'unique'=>false,
        'is_configurable' => false
    ));
$this->addAttributeToSet(
    'catalog_product', 'Default', 'General', 'refubrished'
);
$installer->endSetup();