<?php


namespace Cuong\Test\Model;


class Brand  extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Cuong\Test\Model\ResourceModel\Brand');
    }
}