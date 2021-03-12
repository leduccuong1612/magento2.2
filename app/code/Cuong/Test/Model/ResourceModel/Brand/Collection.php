<?php


namespace Cuong\Test\Model\ResourceModel\Brand;


class Collection  extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'brand_id';

    protected function _construct()
    {
        $this->_init('Cuong\Test\Model\Brand', 'Cuong\Test\Model\ResourceModel\Brand');
    }
}
