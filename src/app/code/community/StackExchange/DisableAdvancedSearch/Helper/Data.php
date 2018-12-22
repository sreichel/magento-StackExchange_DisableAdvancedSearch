<?php
/**
 * SR-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    StackExchange
 * @package     StackExchange_DisableAdvancedSearch
 */
 
/**
 * Data helper
 * @SuppressWarnings(PHPMD.CamelCaseClassName)
 * @SuppressWarnings(PHPMD.CamelCasePropertyName)
 */
class StackExchange_DisableAdvancedSearch_Helper_Data extends Mage_Core_Helper_Abstract
{
    /** @var string $_moduleName Module name */
    protected $_moduleName = 'StackExchange_DisableAdvancedSearch'; // phpcs:ignore

    /**
     * @return bool
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function isNotEnabled()
    {
        return !Mage::getStoreConfigFlag('catalog/search/enable_advanced_search');
    }

    /**
     * @return string
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function getNoRoutePath()
    {
        return $this->_getUrl(Mage::getStoreConfig('web/default/cms_no_route'));
    }
}
