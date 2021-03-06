<?php

/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 3/16/2017
 * Time: 12:59 AM
 */
class Denys_Mymod_Block_Newarrival
    extends Mage_Catalog_Block_Product_List
{
    protected function _getProductCollection()
    {
        $collection = Mage::getModel('catalog/product')->getCollection();
        $collection->addAttributeToFilter('newarrival', 1);
        $_helper = $this->helper('mymod');
        $collection =  $_helper->sortCollection($collection);

        $productCollection = $collection->addAttributeToSelect('*');
        return $productCollection;
    }
}