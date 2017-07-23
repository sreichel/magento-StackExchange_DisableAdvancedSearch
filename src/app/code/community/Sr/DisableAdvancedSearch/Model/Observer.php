<?php
/**
 * SR-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    Mx
 * @package     Sr_DisableAdvancedSearch
 */

/**
 * Observer Model
 */
class Sr_DisableAdvancedSearch_Model_Observer extends Mage_Core_Model_Observer
{
    /**
     * Disable Advanced Search at storeview scope
     *
     * @param Varien_Event_Observer $observer
     * @return void
     */
    public function disableAdvancedSearch(Varien_Event_Observer $observer)
    {
        if (!Mage::getStoreConfigFlag('catalog/search/enable_advanced_search')) {
            $path = Mage::getStoreConfig('web/default/cms_no_route');
            $observer->getControllerAction()->getResponse()->setRedirect(Mage::getUrl($path));
        }
    }
}
