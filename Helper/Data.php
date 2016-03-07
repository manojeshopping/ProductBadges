<?php
/**
 * @author  Vladan Kuzmanovic (vladankuzmanovic@gmail.com)
 */
namespace Kuzman\ProductBadges\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\StoreManagerInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var int
     */
    protected $storeId;

    /**
     * General settings
     */
    const XML_PATH_GENERAL_ENABLED = 'productbadges/general/enabled';
    const XML_PATH_GENERAL_ENABLED_ON_LIST = 'productbadges/general/enabled_on_list';
    const XML_PATH_GENERAL_ENABLED_ON_PRODUCT_VIEW = 'productbadges/general/enabled_on_product_view';

    /**
     * Badge New Settings
     */
    const XML_PATH_BADGE_NEW_ENABLED = 'productbadges/badge_new/enabled';
    const XML_PATH_BADGE_NEW_LABEL = 'productbadges/badge_new/label';
    const XML_PATH_BADGE_NEW_POSITION_CORNER = 'productbadges/badge_new/position_corner';
    const XML_PATH_BADGE_NEW_BADGE_IMAGE = 'productbadges/badge_new/badge_image';
    const XML_PATH_BADGE_NEW_WIDTH = 'productbadges/badge_new/width';
    const XML_PATH_BADGE_NEW_HEIGHT = 'productbadges/badge_new/height';

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    /**
     * Set a specified store ID value
     *
     * @param int $store
     * @return $this
     */
    public function setStoreId($store)
    {
        $this->storeId = $store;
        return $this;
    }

    /**
     * General settings
     * @return bool
     */
    public function isEnabled()
    {
        return (bool)$this->scopeConfig->getValue(
            self::XML_PATH_GENERAL_ENABLED,
            ScopeInterface::SCOPE_STORE,
            $this->storeId
        );
    }

    /**
     * General settings
     * @return bool
     */
    public function isEnabledOnList(){
        return (bool)$this->scopeConfig->getValue(
            self::XML_PATH_GENERAL_ENABLED_ON_LIST,
            ScopeInterface::SCOPE_STORE,
            $this->storeId
        );
    }

    /**
     * General settings
     * @return bool
     */
    public function isEnabledOnProductView(){
        return (bool)$this->scopeConfig->getValue(
            self::XML_PATH_GENERAL_ENABLED_ON_PRODUCT_VIEW,
            ScopeInterface::SCOPE_STORE,
            $this->storeId
        );
    }

    /**
     * Badge New Settings
     * @return bool
     */
    public function isBadgeNewEnabled(){
        return (bool)$this->scopeConfig->getValue(
            self::XML_PATH_BADGE_NEW_ENABLED,
            ScopeInterface::SCOPE_STORE,
            $this->storeId
        );
    }

    /**
     * Badge New Settings
     * @return mixed
     */
    public function getBadgeNewLabel(){
        return $this->scopeConfig->getValue(
            self::XML_PATH_BADGE_NEW_LABEL,
            ScopeInterface::SCOPE_STORE,
            $this->storeId
        );
    }

    /**
     * Badge New Settings
     * @return mixed
     */
    public function getBadgeNewPosition(){
        return $this->scopeConfig->getValue(
            self::XML_PATH_BADGE_NEW_POSITION_CORNER,
            ScopeInterface::SCOPE_STORE,
            $this->storeId
        );
    }

    /**
     * Badge New Settings
     * @return mixed
     */
    public function getBadgeNewImagePath(){
        return $this->scopeConfig->getValue(
            self::XML_PATH_BADGE_NEW_BADGE_IMAGE,
            ScopeInterface::SCOPE_STORE,
            $this->storeId
        );
    }

    /**
     * Badge New Settings
     * @return mixed
     */
    public function getBadgeNewWidth(){
        return $this->scopeConfig->getValue(
            self::XML_PATH_BADGE_NEW_WIDTH,
            ScopeInterface::SCOPE_STORE,
            $this->storeId
        );
    }

    /**
     * Badge New Settings
     * @return mixed
     */
    public function getBadgeNewHeight(){
        return $this->scopeConfig->getValue(
            self::XML_PATH_BADGE_NEW_HEIGHT,
            ScopeInterface::SCOPE_STORE,
            $this->storeId
        );
    }
}