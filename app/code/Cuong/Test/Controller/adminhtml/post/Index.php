<?php


namespace Cuong\Test\Controller\adminhtml\post;


class Index extends \Magento\Framework\App\Action\Action
{
    const ADMIN_RESOURCE = "Cuong_Test::post";


    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}