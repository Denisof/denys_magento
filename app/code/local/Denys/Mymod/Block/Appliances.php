<?php

/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 3/14/2017
 * Time: 11:43 PM
 */
class Denys_Mymod_Block_Appliances
    extends Mage_Core_Block_Template
{
    protected function _beforeToHtml()
    {
        $this->setBlockCategoryId($cat_id);
    }
    public function setCategoryId($cat_id)
    {
        $this->setBlockCategoryId($cat_id);
    }
    public function setLimit($limit)
    {
        $limit = 10;
        $this->setBlockLimit($limit);
    }

    protected function _getProductCollection()
    {
        $category = Mage::getModel('catalog/category')->load($this->getBlockCategoryId());
        $productCollection = Mage::getResourceModel('catalog/product_collection')
            ->addCategoryFilter($category);;
        return $productCollection;
    }

    public function getProductCollection()
    {
        return $this->_getProductCollection();
    }
}