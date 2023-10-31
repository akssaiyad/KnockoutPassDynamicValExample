<?php
namespace Aks\KnockoutPassDynamicVal\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResourceInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
	protected $resultPagefactory;

	public function __construct(PageFactory $resultPagefactory)
	{
		$this->resultPagefactory = $resultPagefactory;
	}
    public function execute()
    {
        $resultPage = $this->resultPagefactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Aks Knockout Example'));
        return $resultPage;
    }
}