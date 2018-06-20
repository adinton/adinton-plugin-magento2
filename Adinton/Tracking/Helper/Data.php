<?php
namespace Adinton\Tracking\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /*
     * @return bool
     */
    public function isEnabled($scope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE)
    {
        return $this->scopeConfig->isSetFlag(
            'adinton/settings/enabled',
            $scope
        );
    }

    /*
     * @return string
     */
    public function getNs($scope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE)
    {
        return $this->scopeConfig->getValue(
            'adinton/settings/ns',
            $scope
        );
    }


}