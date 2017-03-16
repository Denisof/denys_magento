<?php

/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 3/15/2017
 * Time: 5:24 PM
 */
class Denys_Mymod_IndexController
    extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}