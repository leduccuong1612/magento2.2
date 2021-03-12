<?php

namespace Cuong\Test\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CustomTable extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('table_custom', 'custom_id');
    }
}
