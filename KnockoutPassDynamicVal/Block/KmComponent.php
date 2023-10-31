<?php

namespace Aks\KnockoutPassDynamicVal\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Template;
use Magento\Store\Model\ScopeInterface;

/**
 * FormCreate content block
 */
class KmComponent extends Template
{
    protected $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ){
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getConfigArray(): array
    {
        return [
            'title' => $this->scopeConfig->getValue('aks_kmcomponent/general/title', ScopeInterface::SCOPE_STORE),
            'content' => $this->scopeConfig->getValue('aks_kmcomponent/general/content', ScopeInterface::SCOPE_STORE),
            'btn_txt' => $this->scopeConfig->getValue('aks_kmcomponent/general/btn_txt', ScopeInterface::SCOPE_STORE),
            'is_primary_btn' => $this->scopeConfig->getValue('aks_kmcomponent/general/is_primary_btn', ScopeInterface::SCOPE_STORE)
        ];
    }
}
