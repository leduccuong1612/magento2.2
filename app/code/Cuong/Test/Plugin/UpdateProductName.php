<?php


namespace Cuong\Test\Plugin;


class UpdateProductName
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $result = "Vi-Magento HelloWorld";
        return $result;
    }

}