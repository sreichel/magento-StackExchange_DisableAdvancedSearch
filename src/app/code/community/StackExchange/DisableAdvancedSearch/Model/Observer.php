<?php
/**
 * SR-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    StackExchange
 * @package     StackExchange_DisableAdvancedSearch
 */

/**
 * Observer Model
 * @SuppressWarnings(PHPMD.CamelCaseClassName)
 */
class StackExchange_DisableAdvancedSearch_Model_Observer
{
    /**
     * Disable Advanced Search at storeview scope
     *
     * @param Varien_Event_Observer $observer
     * @return void
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function disableAdvancedSearch(Varien_Event_Observer $observer)
    {
        /** @var StackExchange_DisableAdvancedSearch_Helper_Data $helper */
        $helper = Mage::helper('stackexchange_disable_advancedsearch');
        if ($helper->isNotEnabled()) {
            $observer->getControllerAction()->getResponse()->setRedirect($helper->getNoRoutePath());
        }
    }
}
