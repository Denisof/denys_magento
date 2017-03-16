<?php

/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 3/15/2017
 * Time: 5:41 PM
 */
class Denys_Mymod_ViewController
    extends Mage_Core_Controller_Front_Action
{
    public function viewCategoryAction()
    {
        $categoryId = $this->getRequest()->getParam('category_id');
        if($categoryId){
            $category = Mage::getModel('catalog/category');
            if($category->load($categoryId))
            {
                Mage::register('loaded_category', $category);
                $this->loadLayout();
                $this->renderLayout();
                return $this;
            } else {
                $this->_forward('noroute');
                return $this;
            }
        }
        return $this;
    }
    public function viewRefubrishedAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }

    public function viewNewarrivalAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }
}