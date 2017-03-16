<?php

/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 3/15/2017
 * Time: 5:01 PM
 */
class Denys_Mymod_Helper_Data
    extends Mage_Core_Helper_Abstract
{
    public function sortCollection($collection,$grid_mode = 'grid')
    {
        $params = Mage::app()->getRequest()->getParams();
        $collection->addAttributeToSort(isset($params['order']) ? $params['order'] : Mage::getStoreConfig(
            'catalog/frontend/default_sort_by', Mage::app()->getStore()), isset($params['dir']) ? $params['dir'] : 'asc');
        $collection->setPageSize(isset($params['limit']) ? $params['limit'] : Mage::getStoreConfig(
            'catalog/frontend/'.$grid_mode.'_per_page', Mage::app()->getStore()));
        $collection->setPage(isset($params['p'])? $params['p'] : 1 );
        return $collection;

    }
}