<?php

namespace Cuong\Test\Model;

use Magento\Framework\Model\AbstractModel;

class CustomTable extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Cuong\Test\Model\ResourceModel\CustomTable');
    }
}