<?php


namespace Cuong\Test\Model\ResourceModel\CustomTable;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'custom_id';

    protected function _construct()
    {
        $this->_init('Cuong\Test\Model\CustomTable', 'Cuong\Test\Model\ResourceModel\CustomTable');
    }
}