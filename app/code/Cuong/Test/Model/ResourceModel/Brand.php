<?php


namespace Cuong\Test\Model\ResourceModel;


class Brand  extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('table_brand', 'brand_id');
    }
}
