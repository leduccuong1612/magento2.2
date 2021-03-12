<?php


namespace Cuong\Test\Controller\adminhtml\Brand;


use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class AddNew extends Action
{
    protected $_pageFactory;

    public function __construct(Action\Context $context, PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_pageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Add New Post'));
        return $resultPage;
    }
}